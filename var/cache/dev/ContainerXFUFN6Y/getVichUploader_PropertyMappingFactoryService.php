<?php

namespace ContainerXFUFN6Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_PropertyMappingFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'vich_uploader.property_mapping_factory' shared service.
     *
     * @return \Vich\UploaderBundle\Mapping\PropertyMappingFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['vich_uploader.property_mapping_factory'] = new \Vich\UploaderBundle\Mapping\PropertyMappingFactory(($container->privates['vich_uploader.metadata_reader'] ?? $container->getVichUploader_MetadataReaderService()), new \Vich\UploaderBundle\Mapping\PropertyMappingResolver($container, $container->parameters['vich_uploader.mappings'], '_name'));
    }
}
