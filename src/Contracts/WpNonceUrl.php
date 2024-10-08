<?php

namespace WpService\Contracts;

interface WpNonceUrl
{
    /**
     * Retrieves URL with nonce added to URL query.
     *
     * @since 2.0.4
     *
     * @param string $actionurl URL to add nonce action.
     * @param int|string $action    Optional. Nonce action name. Default -1.
     * @param string $name      Optional. Nonce name. Default '_wpnonce'.
     * @return string Escaped URL with nonce action added.
     */
    public function wpNonceUrl(string $actionurl, int|string $action, string $name = '_wpnonce'): string;
}
