<?php

namespace WpService\Contracts;

interface GetUserSetting
{
    /**
 * Retrieves user interface setting value based on setting name.
 *
 * @since 2.7.0
 *
 * @param string $name          The name of the setting.
 * @param string|false $defaultValue Optional. Default value to return when $name is not set. Default false.
 * @return mixed The last saved user setting or the default value/false if it doesn't exist.
 */
    public function getUserSetting(string $name, string|false $defaultValue): mixed;
}
