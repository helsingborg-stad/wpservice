<?php

namespace WpService\Generator\File\FileBuilder;

use WpService\Generator\File\FileInterface;
use WpService\Generator\File\FileType;

/**
 * FileDirector
 */
class FileDirector
{
    private string $basePath = __DIR__ . '/../../../src';

    /**
     * Constructor
     *
     * @param FileBuilderInterface $builder
     */
    public function __construct(private FileBuilderInterface $builder)
    {
    }

    /**
     * Build a service interface file.
     *
     * @param string[] $implements
     * @return FileInterface
     */
    public function makeServiceInterfaceFile(array $extends = []): FileInterface
    {
        return $this->builder
            ->reset()
            ->setNamespace('WpService')
            ->setName('WpService')
            ->setType(FileType::from('interface'))
            ->setExtends($extends)
            ->setFile("{$this->basePath}/WpService.php")
            ->getFile();
    }

    /**
     * Build a native service file.
     *
     * @return FileInterface
     */
    public function makeNativeFile(): FileInterface
    {
        return $this->builder
            ->reset()
            ->setNamespace('WpService\Implementations')
            ->setName('NativeWpService')
            ->setType(FileType::from('class'))
            ->setImplements(['\WpService\WpService'])
            ->setFile("{$this->basePath}/Implementations/NativeWpService.php")
            ->withNativeFunctions()
            ->getFile();
    }

    /**
     * Build a decorator file.
     *
     * @return FileInterface
     */
    public function makeDecoratorFile(): FileInterface
    {
        return $this->builder
            ->reset()
            ->setNamespace('WpService\Implementations')
            ->setName('WpServiceDecorator')
            ->setType(FileType::from('class'))
            ->setImplements(['\WpService\WpService'])
            ->setFile("{$this->basePath}/Implementations/WpServiceDecorator.php")
            ->withDecoratorFunctions()
            ->getFile();
    }

    /**
     * Build a lazy decorator file.
     *
     * @return FileInterface
     */
    public function makeLazyDecoratorFile(): FileInterface
    {
        return $this->builder
            ->reset()
            ->setNamespace('WpService\Implementations')
            ->setName('WpServiceLazyDecorator')
            ->setType(FileType::from('class'))
            ->setImplements(['\WpService\WpService'])
            ->setFile("{$this->basePath}/Implementations/WpServiceLazyDecorator.php")
            ->withLazyDecoratorFunctions()
            ->getFile();
    }

    /**
     * Make a fake service file.
     *
     * @return FileInterface
     */
    public function makeFakeServiceFile(): FileInterface
    {
        return $this->builder
            ->reset()
            ->setNamespace('WpService\Implementations')
            ->setName('FakeWpService')
            ->setType(FileType::from('class'))
            ->setImplements(['\WpService\WpService'])
            ->setFile("{$this->basePath}/Implementations/FakeWpService.php")
            ->withFakeFunctions()
            ->getFile();
    }
}
