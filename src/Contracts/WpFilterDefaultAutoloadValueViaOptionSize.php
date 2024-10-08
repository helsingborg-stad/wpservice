<?php

namespace WpService\Contracts;

interface WpFilterDefaultAutoloadValueViaOptionSize
{
    /**
 * Filters the default autoload value to disable autoloading if the option value is too large.
 *
 * @since 6.6.0
 * @access private
 *
 * @param bool|null $autoload         The default autoload value to set.
 * @param string $option           The passed option name.
 * @param mixed $value            The passed option value to be saved.
 * @param mixed $serializedValue The passed option value to be saved, in serialized form.
 * @return bool|null Potentially modified $default.
 */
    public function wpFilterDefaultAutoloadValueViaOptionSize(bool|null $autoload, string $option, mixed $value, mixed $serializedValue): bool|null;
}
