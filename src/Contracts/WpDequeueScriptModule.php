<?php

namespace WpService\Contracts;

interface WpDequeueScriptModule
{
/**
 * Unmarks the script module so it is no longer enqueued in the page.
 *
 * @since 6.5.0
 *
 * @param string $id The identifier of the script module.
 */
    public function wpDequeueScriptModule(string $id): void;
}
