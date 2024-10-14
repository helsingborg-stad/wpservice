<?php

namespace WpService\Generator\File;

use Stringable;

interface FileInterface extends Stringable
{
    /**
     * Get the name of the class/interface
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get the namespace of the class/interface
     *
     * @return string
     */
    public function getNamespace(): string;

    /**
     * Get the type of the file
     *
     * @return FileType
     */
    public function getType(): FileType;

    /**
     * Get the implements of the file
     *
     * @return string[]
     */
    public function getImplements(): array;

    /**
     * Get the extends of the file
     *
     * @return string[]
     */
    public function getExtends(): array;

    /**
     * Get the file path
     *
     * @return string Path to the file
     */
    public function getFilePath(): string;

    /**
     * Get the functions of the file
     *
     * @return string[]
     */
    public function getFunctions(): array;
}
