<?php

namespace WpService\Contracts;

interface GetPostCustomValues
{
/**
 * Retrieves values for a custom post field.
 *
 * The parameters must not be considered optional. All of the post meta fields
 * will be retrieved and only the meta field key values returned.
 *
 * @since 1.2.0
 *
 * @param string $key     Optional. Meta field key. Default empty.
 * @param int $postId Optional. Post ID. Default is the ID of the global `$post`.
 * @return array|null Meta field values.
 */
    public function getPostCustomValues(string $key = '', int $postId = 0): array|null;
}
