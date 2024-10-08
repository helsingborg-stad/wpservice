<?php

namespace WpService\Contracts;

interface SetUrlScheme
{
    /**
 * Sets the scheme for a URL.
 *
 * @since 3.4.0
 * @since 4.4.0 The 'rest' scheme was added.
 *
 * @param string $url    Absolute URL that includes a scheme
 * @param string|null $scheme Optional. Scheme to give $url. Currently 'http', 'https', 'login',
 *                            'login_post', 'admin', 'relative', 'rest', 'rpc', or null. Default null.
 * @return string URL with chosen scheme.
 */
    public function setUrlScheme(string $url, string|null $scheme): string;
}
