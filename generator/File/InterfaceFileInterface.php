<?php

namespace WpService\Generator\File;

interface InterfaceFileInterface extends FileInterface
{
    /**
     * Get the name of the interface
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get the extends of the interface
     *
     * @return InterfaceFileInterface[]
     */
    public function getExtends(): array;
}
