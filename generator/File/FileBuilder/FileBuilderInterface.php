<?php

namespace WpService\Generator\File\FileBuilder;

use WpService\Generator\File\FileInterface;
use WpService\Generator\File\FileType;

interface FileBuilderInterface
{
    /**
     * Reset the file.
     *
     * @return FileBuilderInterface
     */
    public function reset(): FileBuilderInterface;

    /**
     * Set the namespace of the file
     *
     * @param string $namespace
     * @return FileBuilderInterface
     */
    public function setNamespace(string $namespace): FileBuilderInterface;

    /**
     * Set the class/interface name of the file
     *
     * @param string $name
     * @return FileBuilderInterface
     */
    public function setName(string $className): FileBuilderInterface;

    /**
     * Set the type of the file
     *
     * @param FileType $type
     * @return FileBuilderInterface
     */
    public function setType(FileType $type): FileBuilderInterface;

    /**
     * Set the implements of the file
     *
     * @param array $implements example: ['\WpService\WpService']
     * @return FileBuilderInterface
     */
    public function setImplements(array $implements): FileBuilderInterface;

    /**
     * Set the extends of the file
     *
     * @param string[] $extends example: ['CreateServiceClassFile']
     * @return FileBuilderInterface
     */
    public function setExtends(array $extends): FileBuilderInterface;

    /**
     * Set the functions as strings
     *
     * @param string[] $functionsAsStrings
     * @return FileBuilderInterface
     */
    public function setFunctionsAsStrings(array $functionsAsStrings): FileBuilderInterface;

    /**
     * Use decorator functions in the file
     *
     * @return FileBuilderInterface
     */
    public function withDecoratorFunctions(): FileBuilderInterface;

    /**
     * Use lazy decorator functions in the file
     *
     * @return FileBuilderInterface
     */
    public function withLazyDecoratorFunctions(): FileBuilderInterface;

    /**
     * Use fake functions in the file
     *
     * @return FileBuilderInterface
     */
    public function withFakeFunctions(): FileBuilderInterface;

    /**
     * Set the file path
     *
     * @param string $file
     * @return FileBuilderInterface
     */
    public function setFile(string $file): FileBuilderInterface;

    /**
     * Write the file
     *
     * @return FileInterface
     */
    public function getFile(): FileInterface;
}
