<?php

namespace ContainerX0py77g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProdRegistrationTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ProdRegistrationType' shared autowired service.
     *
     * @return \App\Form\ProdRegistrationType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ProdRegistrationType.php';

        return $container->privates['App\\Form\\ProdRegistrationType'] = new \App\Form\ProdRegistrationType();
    }
}