<?php

namespace WpService\Contracts;

interface NonceUrl
{
    /**
     * Retrieves URL with nonce added to URL query.
     *
     * @param string     $actionUrl URL to add nonce action.
     * @param int|string $action    Optional. Nonce action name. Default -1.
     * @param string     $name      Optional. Nonce name. Default '_wpnonce'.
     * @return string Escaped URL with nonce action added.
     */
    public function nonceUrl(string $actionUrl, int|string $action = -1, string $name = '_wpnonce'): string;
}
