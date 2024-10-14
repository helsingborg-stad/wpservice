<?php

namespace WpService\Contracts;

interface WpProtectSpecialOption
{
/**
 * Protects WordPress special option from being modified.
 *
 * Will die if $option is in protected list. Protected options are 'alloptions'
 * and 'notoptions' options.
 *
 * @since 2.2.0
 *
 * @param string $option Option name.
 */
    public function wpProtectSpecialOption(string $option): void;
}
