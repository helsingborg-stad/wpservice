<?php

namespace WpService\Contracts;

use WP_Post;

interface GetThemeMod
{
    /**
     * Retrieves theme modification value for the active theme.
     *
     * If the modification name does not exist and `$default_value` is a string, then the
     * default will be passed through the {@link https://www.php.net/sprintf sprintf()}
     * PHP function with the template directory URI as the first value and the
     * stylesheet directory URI as the second value.
     *
     * @param string $name          Theme modification name.
     * @param mixed  $defaultValue  Optional. Theme modification default value. Default false.
     * @return mixed Theme modification value.
     */
    public function getThemeMod(string $name, mixed $defaultValue = false): mixed;
}
