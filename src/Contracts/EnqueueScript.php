<?php

namespace WpService\Contracts;

interface EnqueueScript
{
    /**
     * Enqueue a script.
     *
     * @param string $handle The script handle.
     * @return void
     */
    public function enqueueScript(string $handle): void;
}
