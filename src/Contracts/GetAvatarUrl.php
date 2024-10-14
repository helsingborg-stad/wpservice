<?php

namespace WpService\Contracts;

interface GetAvatarUrl
{
/**
 * Retrieves the avatar URL.
 *
 * @since 4.2.0
 *
 * @param mixed $idOrEmail The avatar to retrieve a URL for. Accepts a user ID, Gravatar MD5 hash,
 *                           user email, WP_User object, WP_Post object, or WP_Comment object.
 * @param array $args {
 *     Optional. Arguments to use instead of the default arguments.
 *
 * @type int    $size           Height and width of the avatar in pixels. Default 96.
 * @type string $default        URL for the default image or a default type. Accepts:
 *                                  - '404' (return a 404 instead of a default image)
 *                                  - 'retro' (a 8-bit arcade-style pixelated face)
 *                                  - 'robohash' (a robot)
 *                                  - 'monsterid' (a monster)
 *                                  - 'wavatar' (a cartoon face)
 *                                  - 'identicon' (the "quilt", a geometric pattern)
 *                                  - 'mystery', 'mm', or 'mysteryman' (The Oyster Man)
 *                                  - 'blank' (transparent GIF)
 *                                  - 'gravatar_default' (the Gravatar logo)
 *                                  Default is the value of the 'avatar_default' option,
 *                                  with a fallback of 'mystery'.
 * @type bool   $force_default  Whether to always show the default image, never the Gravatar.
 *                                  Default false.
 * @type string $rating         What rating to display avatars up to. Accepts:
 *                                  - 'G' (suitable for all audiences)
 *                                  - 'PG' (possibly offensive, usually for audiences 13 and above)
 *                                  - 'R' (intended for adult audiences above 17)
 *                                  - 'X' (even more mature than above)
 *                                  Default is the value of the 'avatar_rating' option.
 * @type string $scheme         URL scheme to use. See set_url_scheme() for accepted values.
 *                                  Default null.
 * @type array  $processed_args When the function returns, the value will be the processed/sanitized $args
 *                                  plus a "found_avatar" guess. Pass as a reference. Default null.
 * }
 * @return string|false The URL of the avatar on success, false on failure.
 */
    public function getAvatarUrl(mixed $idOrEmail, array $args = null): string|false;
}
