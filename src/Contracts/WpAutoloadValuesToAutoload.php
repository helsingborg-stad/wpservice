<?php

namespace WpService\Contracts;

interface WpAutoloadValuesToAutoload
{
    /**
     * Returns the values that trigger autoloading from the options table.
     *
     * @since 6.6.0
     *
     * @return string[] The values that trigger autoloading.
     */
    public function wpAutoloadValuesToAutoload(): array;
}
