<?php

namespace WpService\Generator\File;

use Stringable;

interface FileInterface extends Stringable
{
    public function getFileName(): string;
    public function getNamespace(): string;
}
