<?php

namespace WpService\Contracts;

interface EditBookmarkLink
{
    /**
 * Displays the edit bookmark link anchor content.
 *
 * @since 2.7.0
 *
 * @param string $link     Optional. Anchor text. If empty, default is 'Edit This'. Default empty.
 * @param string $before   Optional. Display before edit link. Default empty.
 * @param string $after    Optional. Display after edit link. Default empty.
 * @param int $bookmark Optional. Bookmark ID. Default is the current bookmark.
 */
    public function editBookmarkLink(string $link, string $before, string $after, int $bookmark): void;
}
