<?php

namespace WpService\Contracts;

interface WpSetUniqueSlugOnCreateTemplatePart
{
/**
 * Sets a custom slug when creating auto-draft template parts.
 *
 * This is only needed for auto-drafts created by the regular WP editor.
 * If this page is to be removed, this will not be necessary.
 *
 * @since 5.9.0
 *
 * @param int $postId Post ID.
 */
    public function wpSetUniqueSlugOnCreateTemplatePart(int $postId): void;
}
