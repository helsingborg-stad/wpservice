<?php

namespace WpService\Generator\File;

interface ClassFileInterface extends FileInterface
{
    /**
     * Get the name of the class
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get the implements of the file
     *
     * @return string[]
     */
    public function getImplements(): array;
}
