<?php

namespace WpService\Contracts;

interface GetAvatar
{
    /**
     * Retrieves the avatar `<img>` tag for a user, email address, MD5 hash, comment, or post.
     *
     * @since 2.5.0
     * @since 4.2.0 Added the optional `$args` parameter.
     * @since 5.5.0 Added the `loading` argument.
     * @since 6.1.0 Added the `decoding` argument.
     * @since 6.3.0 Added the `fetchpriority` argument.
     *
     * @param mixed $idOrEmail   The avatar to retrieve. Accepts a user ID, Gravatar MD5 hash,
     *                              user email, WP_User object, WP_Post object, or WP_Comment object.
     * @param int $size          Optional. Height and width of the avatar in pixels. Default 96.
     * @param string $defaultValue URL for the default image or a default type. Accepts:
     *                              - '404' (return a 404 instead of a default image)
     *                              - 'retro' (a 8-bit arcade-style pixelated face)
     *                              - 'robohash' (a robot)
     *                              - 'monsterid' (a monster)
     *                              - 'wavatar' (a cartoon face)
     *                              - 'identicon' (the "quilt", a geometric pattern)
     *                              - 'mystery', 'mm', or 'mysteryman' (The Oyster Man)
     *                              - 'blank' (transparent GIF)
     *                              - 'gravatar_default' (the Gravatar logo)
     *                              Default is the value of the 'avatar_default' option,
     *                              with a fallback of 'mystery'.
     * @param string $alt           Optional. Alternative text to use in the avatar image tag.
     *                              Default empty.
     * @param array $args {
     *     Optional. Extra arguments to retrieve the avatar.
     *
     *     @type int          $height        Display height of the avatar in pixels. Defaults to $size.
     *     @type int          $width         Display width of the avatar in pixels. Defaults to $size.
     *     @type bool         $force_default Whether to always show the default image, never the Gravatar.
     *                                       Default false.
     *     @type string       $rating        What rating to display avatars up to. Accepts:
     *                                       - 'G' (suitable for all audiences)
     *                                       - 'PG' (possibly offensive, usually for audiences 13 and above)
     *                                       - 'R' (intended for adult audiences above 17)
     *                                       - 'X' (even more mature than above)
     *                                       Default is the value of the 'avatar_rating' option.
     *     @type string       $scheme        URL scheme to use. See set_url_scheme() for accepted values.
     *                                       Default null.
     *     @type array|string $class         Array or string of additional classes to add to the img element.
     *                                       Default null.
     *     @type bool         $force_display Whether to always show the avatar - ignores the show_avatars option.
     *                                       Default false.
     *     @type string       $loading       Value for the `loading` attribute.
     *                                       Default null.
     *     @type string       $fetchpriority Value for the `fetchpriority` attribute.
     *                                       Default null.
     *     @type string       $decoding      Value for the `decoding` attribute.
     *                                       Default null.
     *     @type string       $extra_attr    HTML attributes to insert in the IMG element. Is not sanitized.
     *                                       Default empty.
     * }
     * @return string|false `<img>` tag for the user's avatar. False on failure.
     */
    public function getAvatar(mixed $idOrEmail, int $size = 96, string $defaultValue = '', string $alt = '', array $args = null): string|false;
}
