<?php

namespace WoolfBundle\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class ExceptionSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::RESPONSE => [
                'wordPressResponse', 0
            ]
        ];
    }

    public function wordPressResponse(FilterResponseEvent $event)
    {
        $response = $event->getResponse();
        $response->headers->set('PoweredBy', 'WordPress');
        $event->setResponse($response);
    }
}