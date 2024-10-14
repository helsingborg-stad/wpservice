<?php

namespace WpService\Contracts;

interface IsPrivacyPolicy
{
/**
 * Determines whether the query is for the Privacy Policy page.
 *
 * The Privacy Policy page is the page that shows the Privacy Policy content of the site.
 *
 * is_privacy_policy() is dependent on the site's "Change your Privacy Policy page" Privacy Settings 'wp_page_for_privacy_policy'.
 *
 * This function will return true only on the page you set as the "Privacy Policy page".
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 5.2.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @return bool Whether the query is for the Privacy Policy page.
 */
    public function isPrivacyPolicy(): bool;
}
