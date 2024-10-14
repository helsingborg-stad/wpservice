<?php

namespace WpService\Generator\File\FileBuilder;

use WpService\Generator\File\FileBuilder\Templates\TemplateInterface;
use WpService\Generator\File\FileInterface;
use WpService\Generator\File\FileType;
use WpService\Generator\Function\CreateFunction;
use WpService\Generator\Function\FunctionToString\FunctionToString;
use WpService\Generator\Function\FunctionWithFakeFunctionBody;

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
    public function makeServiceInterfaceFile(array $extends = []): void
    {
        $file = $this->builder
            ->reset()
            ->setNamespace('WpService')
            ->setName('WpService')
            ->setType(FileType::from('interface'))
            ->setExtends($extends)
            ->setFile("{$this->basePath}/WpService.php")
            ->getFile();

        $this->writeFile($file);
    }

    /**
     * Build a native service file.
     *
     * @return FileInterface
     */
    public function makeNativeFile()
    {
        $file = $this->builder
            ->reset()
            ->setNamespace('WpService\Implementations')
            ->setName('NativeWpService')
            ->setType(FileType::from('class'))
            ->setImplements(['\WpService\WpService'])
            ->setFile("{$this->basePath}/Implementations/NativeWpService.php")
            ->withNativeFunctions()
            ->getFile();

        $this->writeFile($file);
    }

    /**
     * Build a decorator file.
     *
     * @return FileInterface
     */
    public function makeDecoratorFile()
    {
        $file = $this->builder
            ->reset()
            ->setNamespace('WpService\Implementations')
            ->setName('WpServiceDecorator')
            ->setType(FileType::from('class'))
            ->setImplements(['\WpService\WpService'])
            ->setFile("{$this->basePath}/Implementations/WpServiceDecorator.php")
            ->withDecoratorFunctions()
            ->getFile();

        $this->writeFile($file);
    }

    /**
     * Build a lazy decorator file.
     *
     * @return FileInterface
     */
    public function makeLazyDecoratorFile()
    {
        $file = $this->builder
            ->reset()
            ->setNamespace('WpService\Implementations')
            ->setName('WpServiceLazyDecorator')
            ->setType(FileType::from('class'))
            ->setImplements(['\WpService\WpService'])
            ->setFile("{$this->basePath}/Implementations/WpServiceLazyDecorator.php")
            ->withLazyDecoratorFunctions()
            ->getFile();

        $this->writeFile($file);
    }

    /**
     * Make a fake service file.
     *
     * @return FileInterface
     */
    public function makeFakeServiceFile(): void
    {
        $file = $this->builder
            ->reset()
            ->setNamespace('WpService\Implementations')
            ->setName('FakeWpService')
            ->setType(FileType::from('class'))
            ->setImplements(['\WpService\WpService'])
            ->setFile("{$this->basePath}/Implementations/FakeWpService.php")
            ->withFakeFunctions()
            ->getFile();

        $this->writeFile($file);
    }

    /**
     * Write the file
     */
    private function writeFile(FileInterface $file): void
    {
        file_put_contents($file->getFilePath(), (string) $file);
    }
}
