<?php

namespace WpService\Contracts;

interface RegisterScript
{
    /**
     * Register a script.
     *
     * @param string $handle The script handle.
     * @param string $src The source URL of the script.
     * @param array $deps An array of script dependencies.
     * @param string|bool|null $ver The script version.
     * @param bool $in_footer Whether to enqueue the script in the footer.
     * @return void
     */
    public function registerScript(
        string $handle,
        string $src = '',
        array $deps = array(),
        string|bool|null $ver = false,
        bool $in_footer = true
    ): void;
}
