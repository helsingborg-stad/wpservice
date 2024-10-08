<?php

namespace WpService\Contracts;

interface CoreUpdateFooter
{
    /**
 * Returns core update footer message.
 *
 * @since 2.3.0
 *
 * @param string $msg
 * @return string
 */
    public function coreUpdateFooter(string $msg = ''): string;
}
