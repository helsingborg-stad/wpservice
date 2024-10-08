<?php

namespace WpService\Contracts;

interface WpCountAttachments
{
    /**
     * Counts number of attachments for the mime type(s).
     *
     * If you set the optional mime_type parameter, then an array will still be
     * returned, but will only have the item you are looking for. It does not give
     * you the number of attachments that are children of a post. You can get that
     * by counting the number of children that post has.
     *
     * @since 2.5.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string|string[] $mimeType Optional. Array or comma-separated list of
     *                                   MIME patterns. Default empty.
     * @return \stdClass An object containing the attachment counts by mime type.
     */
    public function wpCountAttachments(string|array $mimeType = ''): \stdClass;
}
