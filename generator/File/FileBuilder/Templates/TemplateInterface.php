<?php

namespace WpService\Generator\File\FileBuilder\Templates;

interface TemplateInterface
{
    /**
     * Get the template
     *
     * @return string[]
     */
    public function getTemplateFunctions(): array;
}
