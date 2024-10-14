<?php

namespace WpService\Contracts;

interface GetThemeFeatureList
{
/**
 * Retrieves list of WordPress theme features (aka theme tags).
 *
 * @since 3.1.0
 * @since 3.2.0 Added 'Gray' color and 'Featured Image Header', 'Featured Images',
 *              'Full Width Template', and 'Post Formats' features.
 * @since 3.5.0 Added 'Flexible Header' feature.
 * @since 3.8.0 Renamed 'Width' filter to 'Layout'.
 * @since 3.8.0 Renamed 'Fixed Width' and 'Flexible Width' options
 *              to 'Fixed Layout' and 'Fluid Layout'.
 * @since 3.8.0 Added 'Accessibility Ready' feature and 'Responsive Layout' option.
 * @since 3.9.0 Combined 'Layout' and 'Columns' filters.
 * @since 4.6.0 Removed 'Colors' filter.
 * @since 4.6.0 Added 'Grid Layout' option.
 *              Removed 'Fixed Layout', 'Fluid Layout', and 'Responsive Layout' options.
 * @since 4.6.0 Added 'Custom Logo' and 'Footer Widgets' features.
 *              Removed 'Blavatar' feature.
 * @since 4.6.0 Added 'Blog', 'E-Commerce', 'Education', 'Entertainment', 'Food & Drink',
 *              'Holiday', 'News', 'Photography', and 'Portfolio' subjects.
 *              Removed 'Photoblogging' and 'Seasonal' subjects.
 * @since 4.9.0 Reordered the filters from 'Layout', 'Features', 'Subject'
 *              to 'Subject', 'Features', 'Layout'.
 * @since 4.9.0 Removed 'BuddyPress', 'Custom Menu', 'Flexible Header',
 *              'Front Page Posting', 'Microformats', 'RTL Language Support',
 *              'Threaded Comments', and 'Translation Ready' features.
 * @since 5.5.0 Added 'Block Editor Patterns', 'Block Editor Styles',
 *              and 'Full Site Editing' features.
 * @since 5.5.0 Added 'Wide Blocks' layout option.
 * @since 5.8.1 Added 'Template Editing' feature.
 * @since 6.1.1 Replaced 'Full Site Editing' feature name with 'Site Editor'.
 * @since 6.2.0 Added 'Style Variations' feature.
 *
 * @param bool $api Optional. Whether try to fetch tags from the WordPress.org API. Defaults to true.
 * @return array Array of features keyed by category with translations keyed by slug.
 */
    public function getThemeFeatureList(bool $api = true): array;
}
