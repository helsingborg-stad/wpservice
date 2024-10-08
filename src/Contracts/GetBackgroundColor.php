<?php

namespace WpService\Contracts;

interface GetBackgroundColor
{
    /**
     * Retrieves value for custom background color.
     *
     * @since 3.0.0
     *
     * @return string
     */
    public function getBackgroundColor(): string;
}
