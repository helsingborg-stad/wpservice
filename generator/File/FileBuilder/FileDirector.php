<?php

namespace WpService\Generator\File\FileBuilder;

use WpService\Generator\File\FileInterface;
use WpService\Generator\File\FileType;
use WpService\Generator\Function\FunctionInterface;

/**
 * FileDirector
 */
class FileDirector
{
    private string $basePath     = __DIR__ . '/../../../src';
    private string $contractPath = __DIR__ . '/../../../src/Contracts';

    /**
     * Constructor
     *
     * @param FileBuilderInterface $builder
     */
    public function __construct(private FileBuilderInterface $builder)
    {
    }

    /**
     * Build a contract file from a function.
     *
     * @param FunctionInterface $function
     * @return FileInterface
     */
    public function buildContractFile(FunctionInterface $function): FileInterface
    {
        $uppercaseFunctionName = ucfirst($function->getName());

        return $this->builder
            ->reset()
            ->setNamespace('WpService\Contracts')
            ->setName($uppercaseFunctionName)
            ->setType(FileType::INTERFACE_TYPE)
            ->withContractFunctions([$function])
            ->setFile("{$this->basePath}/Contracts/{$uppercaseFunctionName}.php")
            ->getFile();
    }

    /**
     * Build a service interface file.
     *
     * @param string[] $implements
     * @return FileInterface
     */
    public function buildServiceInterfaceFile(array $extends = []): FileInterface
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
    public function buildNativeFile(): FileInterface
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
    public function buildDecoratorFile(): FileInterface
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
    public function buildLazyDecoratorFile(): FileInterface
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
    public function buildFakeServiceFile(): FileInterface
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
