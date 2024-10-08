<?php

namespace WpService\Contracts;

interface WpIncreaseContentMediaCount
{
    /**
 * Increases an internal content media count variable.
 *
 * @since 5.9.0
 * @access private
 *
 * @param int $amount Optional. Amount to increase by. Default 1.
 * @return int The latest content media count, after the increase.
 */
    public function wpIncreaseContentMediaCount(int $amount = 1): int;
}
