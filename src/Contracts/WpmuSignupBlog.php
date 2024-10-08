<?php

namespace WpService\Contracts;

interface WpmuSignupBlog
{
    /**
     * Records site signup information for future activation.
     *
     * @since MU (3.0.0)
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $domain     The requested domain.
     * @param string $path       The requested path.
     * @param string $title      The requested site title.
     * @param string $user       The user's requested login name.
     * @param string $userEmail The user's email address.
     * @param array $meta       Optional. Signup meta data. By default, contains the requested privacy setting and lang_id.
     */
    public function wpmuSignupBlog(string $domain, string $path, string $title, string $user, string $userEmail, array $meta = []): void;
}
