<?php

namespace WpService\Contracts;

interface WpGetDocumentTitle
{
    /**
 * Returns document title for the current page.
 *
 * @since 4.4.0
 *
 * @global int $page  Page number of a single post.
 * @global int $paged Page number of a list of posts.
 *
 * @return string Tag with the document title.
 */
    public function wpGetDocumentTitle(): string;
}
