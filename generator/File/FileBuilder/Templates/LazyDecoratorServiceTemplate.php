<?php

namespace WpService\Generator\File\FileBuilder\Templates;

/**
 * LazyDecoratorServiceTemplate
 */
class LazyDecoratorServiceTemplate implements TemplateInterface
{
    /**
     * @inheritDoc
     */
    public function getTemplateFunctions(): array
    {
        return [
            "public ?\WpService\WpService \$inner = null;

            /**
             * Sets the inner WpService instance.
             *
             * @param \WpService\WpService \$inner The inner WpService instance.
             * @return void
             */
            public function setInner(\WpService\WpService \$inner): void
            {
                \$this->inner = \$inner;
            }"
        ];
    }
}
