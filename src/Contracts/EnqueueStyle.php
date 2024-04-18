<?php

namespace WpService\Contracts;

interface EnqueueStyle
{
    /**
     * Enqueue a style.
     *
     * @param string $handle The handle of the style.
     * @return void
     */
    public function enqueueStyle(string $handle): void;
}
