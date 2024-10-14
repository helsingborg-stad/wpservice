<?php

namespace WpService\Contracts;

interface WpGetShortlink
{
/**
 * Returns a shortlink for a post, page, attachment, or site.
 *
 * This function exists to provide a shortlink tag that all themes and plugins can target.
 * A plugin must hook in to provide the actual shortlinks. Default shortlink support is
 * limited to providing ?p= style links for posts. Plugins can short-circuit this function
 * via the {@see 'pre_get_shortlink'} filter or filter the output via the {@see 'get_shortlink'}
 * filter.
 *
 * @since 3.0.0
 *
 * @param int $id          Optional. A post or site ID. Default is 0, which means the current post or site.
 * @param string $context     Optional. Whether the ID is a 'site' ID, 'post' ID, or 'media' ID. If 'post',
 *                            the post_type of the post is consulted. If 'query', the current query is consulted
 *                            to determine the ID and context. Default 'post'.
 * @param bool $allowSlugs Optional. Whether to allow post slugs in the shortlink. It is up to the plugin how
 *                            and whether to honor this. Default true.
 * @return string A shortlink or an empty string if no shortlink exists for the requested resource or if shortlinks
 *                are not enabled.
 */
    public function wpGetShortlink(int $id = 0, string $context = 'post', bool $allowSlugs = true): string;
}
