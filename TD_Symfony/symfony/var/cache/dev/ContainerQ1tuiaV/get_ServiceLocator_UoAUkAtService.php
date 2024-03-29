<?php

namespace ContainerQ1tuiaV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UoAUkAtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UoAUkAt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UoAUkAt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'message' => ['privates', '.errored..service_locator.UoAUkAt.App\\Entity\\Message', NULL, 'Cannot autowire service ".service_locator.UoAUkAt": it references class "App\\Entity\\Message" but no such service exists.'],
            'messageRepository' => ['privates', 'App\\Repository\\MessageRepository', 'getMessageRepositoryService', true],
        ], [
            'message' => 'App\\Entity\\Message',
            'messageRepository' => 'App\\Repository\\MessageRepository',
        ]);
    }
}
