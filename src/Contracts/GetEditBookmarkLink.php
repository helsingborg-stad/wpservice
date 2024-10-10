<?php

namespace WpService\Contracts;

interface GetEditBookmarkLink
{
    /**
     * Displays the edit bookmark link.
     *
     * @since 2.7.0
     *
     * @param int|\stdClass $link Optional. Bookmark ID. Default is the ID of the current bookmark.
     * @return string|void The edit bookmark link URL.
     */
    public function getEditBookmarkLink(int|\stdClass $link): mixed;
}
