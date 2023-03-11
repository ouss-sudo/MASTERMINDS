<?php

namespace ContainerAeuE1Sx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_Storage_FileSystemService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'vich_uploader.storage.file_system' shared service.
     *
     * @return \Vich\UploaderBundle\Storage\FileSystemStorage
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['vich_uploader.storage.file_system'] = new \Vich\UploaderBundle\Storage\FileSystemStorage(($container->privates['vich_uploader.property_mapping_factory'] ?? $container->load('getVichUploader_PropertyMappingFactoryService')));
    }
}
