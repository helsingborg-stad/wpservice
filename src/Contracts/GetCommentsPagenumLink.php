<?php

namespace WpService\Contracts;

interface GetCommentsPagenumLink
{
    /**
     * Retrieves the comments page number link.
     *
     * @since 2.7.0
     *
     * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
     *
     * @param int $pagenum  Optional. Page number. Default 1.
     * @param int $maxPage Optional. The maximum number of comment pages. Default 0.
     * @return string The comments page number link URL.
     */
    public function getCommentsPagenumLink(int $pagenum = 1, int $maxPage = 0): string;
}
