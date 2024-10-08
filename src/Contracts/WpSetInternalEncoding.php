<?php

namespace WpService\Contracts;

interface WpSetInternalEncoding
{
    /**
 * Sets internal encoding.
 *
 * In most cases the default internal encoding is latin1, which is
 * of no use, since we want to use the `mb_` functions for `utf-8` strings.
 *
 * @since 3.0.0
 * @access private
 */
    public function wpSetInternalEncoding(): void;
}
