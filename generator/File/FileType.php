<?php

namespace WpService\Generator\File;

enum FileType: string
{
    case CLASS_TYPE     = 'class';
    case INTERFACE_TYPE = 'interface';
}
