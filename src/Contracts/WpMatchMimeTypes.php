<?php

namespace WpService\Contracts;

interface WpMatchMimeTypes
{
/**
 * Checks a MIME-Type against a list.
 *
 * If the `$wildcard_mime_types` parameter is a string, it must be comma separated
 * list. If the `$real_mime_types` is a string, it is also comma separated to
 * create the list.
 *
 * @since 2.5.0
 *
 * @param string|string[] $wildcardMimeTypes Mime types, e.g. `audio/mpeg`, `image` (same as `image/*`),
 *                                             or `flash` (same as `*flash*`).
 * @param string|string[] $realMimeTypes     Real post mime type values.
 * @return array array(wildcard=>array(real types)).
 */
    public function wpMatchMimeTypes(string|array $wildcardMimeTypes, string|array $realMimeTypes): array;
}
