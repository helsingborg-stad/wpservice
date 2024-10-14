<?php

namespace WpService\Contracts;

interface WpObEndFlushAll
{
/**
 * Flushes all output buffers for PHP 5.2.
 *
 * Make sure all output buffers are flushed before our singletons are destroyed.
 *
 * @since 2.2.0
 */
    public function wpObEndFlushAll(): void;
}
