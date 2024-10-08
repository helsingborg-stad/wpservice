<?php

namespace WpService\Contracts;

interface GetSamplePermalinkHtml
{
    /**
 * Returns the HTML of the sample permalink slug editor.
 *
 * @since 2.5.0
 *
 * @param int|\WP_Post $post      Post ID or post object.
 * @param string|null $newTitle Optional. New title. Default null.
 * @param string|null $newSlug  Optional. New slug. Default null.
 * @return string The HTML of the sample permalink slug editor.
 */
    public function getSamplePermalinkHtml(int|\WP_Post $post, string|null $newTitle = null, string|null $newSlug = null): string;
}
