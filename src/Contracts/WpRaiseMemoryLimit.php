<?php

namespace WpService\Contracts;

interface WpRaiseMemoryLimit
{
    /**
     * Attempts to raise the PHP memory limit for memory intensive processes.
     *
     * Only allows raising the existing limit and prevents lowering it.
     *
     * @since 4.6.0
     *
     * @param string $context Optional. Context in which the function is called. Accepts either 'admin',
     *                        'image', 'cron', or an arbitrary other context. If an arbitrary context is passed,
     *                        the similarly arbitrary {@see '$context_memory_limit'} filter will be
     *                        invoked. Default 'admin'.
     * @return int|string|false The limit that was set or false on failure.
     */
    public function wpRaiseMemoryLimit(string $context = 'admin'): int|string|false;
}
