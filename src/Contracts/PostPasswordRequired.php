<?php

namespace WpService\Contracts;

interface PostPasswordRequired
{
    /**
     * Determines whether the post requires password and whether a correct password has been provided.
     *
     * @since 2.7.0
     *
     * @param int|\WP_Post|null $post An optional post. Global $post used if not provided.
     * @return bool false if a password is not required or the correct password cookie is present, true otherwise.
     */
    public function postPasswordRequired(int|\WP_Post|null $post = null): bool;
}
