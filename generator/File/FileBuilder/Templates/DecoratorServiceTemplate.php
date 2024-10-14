<?php

namespace WpService\Generator\File\FileBuilder\Templates;

/**
 * DecoratorServiceTemplate
 */
class DecoratorServiceTemplate implements TemplateInterface
{
    /**
     * @inheritDoc
     */
    public function getTemplateFunctions(): array
    {
        return [
            "
            /**
             * Class constructor.
             *
             * @param \\WpService\\WpService \$inner The inner WPService instance.
             */
            public function __construct(private \\WpService\\WpService \$inner)
            {
            }
            "
        ];
    }
}
