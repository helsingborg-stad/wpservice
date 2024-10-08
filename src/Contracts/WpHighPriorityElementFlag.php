<?php

namespace WpService\Contracts;

interface WpHighPriorityElementFlag
{
    /**
 * Accesses a flag that indicates if an element is a possible candidate for `fetchpriority='high'`.
 *
 * @since 6.3.0
 * @access private
 *
 * @param bool $value Optional. Used to change the static variable. Default null.
 * @return bool Returns true if high-priority element was marked already, otherwise false.
 */
    public function wpHighPriorityElementFlag(bool $value): bool;
}
