<?php

namespace Container9edtVb6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypeChantier1TypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\TypeChantier1Type' shared autowired service.
     *
     * @return \App\Form\TypeChantier1Type
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/TypeChantier1Type.php';

        return $container->privates['App\\Form\\TypeChantier1Type'] = new \App\Form\TypeChantier1Type();
    }
}
