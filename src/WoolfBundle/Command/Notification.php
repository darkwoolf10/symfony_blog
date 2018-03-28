<?php

namespace WoolfBundle\Command;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Notification extends Command
{
    private $mailer;

    public function __construct(EntityManagerInterface $em, \Swift_Mailer $mailer)
    {
        parent::__construct();

        $today = date('Y-m-d H:i:s');
        $yesterday = date('Y-m-d H:i:s',strtotime('-1 day'));

        $query = $em->createQuery(
            'SELECT COUNT(post)
             FROM WoolfBundle:Post post
             WHERE post.updated
             BETWEEN :yesterday AND :today'
        )->setParameter('today', $today)->setParameter('yesterday', $yesterday);
        $count = $query->getResult();

        $this->count = $count[0];

        $queryForEmail = $em->createQuery('SELECT email.email FROM WoolfBundle:Subscribe email');
        $emails = $queryForEmail->getResult();
        $this->emails = $emails;

        $this->mailer = $mailer;
    }

    protected function configure()
    {
        $this
            ->setName('app:notification')
            ->setDescription('Sending notifications to subscribers about posts per day')
            ->setHelp('This command sending notifications to subscribers about posts per day')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->write($this->count);
        $output->writeln( " posts today.");
        $output->writeln([
            '+------------------------------+',
            '|Users are notified about posts|',
            '+------------------------------+',
            '',
        ]);

        $count = $this->count;
        $count = implode(', ', $count);

        if($count == 0) {
            $output->writeln("Today there are no posts");
        } else {
            $output->writeln([
                '+------------------+',
                '|Notified such as: |',
                '+------------------+',
            '',]);
            foreach ($this->emails as $email) {
                $output->writeln($email);
            }

            foreach ($this->emails as $email) {
                $count = $this->count;
                $email = implode(', ', $email);
                $count = implode(', ', $count);

                $message = \Swift_Message::newInstance()
                    ->setSubject('Read new posts on our blog')
                    // can not access the parameters
                    ->setFrom('woolftreuser@gmail.com')
                    ->setTo($email)
                    ->setBody(
                        "Today published ".$count." posts"
                    );
                $this->mailer->send($message);
            }
        }
    }
}