<?php
namespace EventBus\PortAdapter\ZF2\EventManager;


use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class EventBusFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new EventBus(
            $serviceLocator->get('eventBus.portAdapter.rabbitMQ.adapter'),
            new EventFactory()
        );
    }

}