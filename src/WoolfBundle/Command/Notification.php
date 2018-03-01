<?php

namespace WoolfBundle\Command;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Notification extends Command
{
    public function __construct(EntityManagerInterface $em)
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
        $output->writeln($this->count);
        $output->writeln([
            '+------------------------------+',
            '|Users are notified about posts|',
            '+------------------------------+',
            '',
        ]);
    }
}