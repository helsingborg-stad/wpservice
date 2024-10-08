<?php

namespace WpService\Contracts;

interface GetMetadataByMid
{
    /**
     * Retrieves metadata by meta ID.
     *
     * @since 3.3.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $metaType Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
     *                          or any other object type with an associated meta table.
     * @param int $metaId   ID for a specific meta row.
     * @return \stdClass|false {
     *     Metadata object, or boolean `false` if the metadata doesn't exist.
     *
     * @type string $meta_key   The meta key.
     * @type mixed  $meta_value The unserialized meta value.
     * @type string $meta_id    Optional. The meta ID when the meta type is any value except 'user'.
     * @type string $umeta_id   Optional. The meta ID when the meta type is 'user'.
     * @type string $post_id    Optional. The object ID when the meta type is 'post'.
     * @type string $comment_id Optional. The object ID when the meta type is 'comment'.
     * @type string $term_id    Optional. The object ID when the meta type is 'term'.
     * @type string $user_id    Optional. The object ID when the meta type is 'user'.
     * }
     */
    public function getMetadataByMid(string $metaType, int $metaId): \stdClass|false;
}
