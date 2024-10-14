<?php

namespace WpService\Contracts;

interface KsesInitFilters
{
/**
 * Adds all KSES input form content filters.
 *
 * All hooks have default priority. The `wp_filter_kses()` function is added to
 * the 'pre_comment_content' and 'title_save_pre' hooks.
 *
 * The `wp_filter_post_kses()` function is added to the 'content_save_pre',
 * 'excerpt_save_pre', and 'content_filtered_save_pre' hooks.
 *
 * @since 2.0.0
 */
    public function ksesInitFilters(): void;
}
