<?php

namespace WpService\Contracts;

interface RestGetAvatarUrls
{
/**
 * Retrieves the avatar URLs in various sizes.
 *
 * @since 4.7.0
 *
 * @see get_avatar_url()
 *
 * @param mixed $idOrEmail The avatar to retrieve a URL for. Accepts a user ID, Gravatar MD5 hash,
 *                           user email, WP_User object, WP_Post object, or WP_Comment object.
 * @return (string|false)[] Avatar URLs keyed by size. Each value can be a URL string or boolean false.
 */
    public function restGetAvatarUrls(mixed $idOrEmail): string|array;
}
