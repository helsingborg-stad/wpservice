<?php

namespace WpService\Contracts;

interface AddThemeSupport
{
/**
 * Registers theme support for a given feature.
 *
 * Must be called in the theme's functions.php file to work.
 * If attached to a hook, it must be {@see 'after_setup_theme'}.
 * The {@see 'init'} hook may be too late for some features.
 *
 * Example usage:
 *
 *     add_theme_support( 'title-tag' );
 *     add_theme_support( 'custom-logo', array(
 *         'height' => 480,
 *         'width'  => 720,
 *     ) );
 *
 * @since 2.9.0
 * @since 3.4.0 The `custom-header-uploads` feature was deprecated.
 * @since 3.6.0 The `html5` feature was added.
 * @since 3.6.1 The `html5` feature requires an array of types to be passed. Defaults to
 *              'comment-list', 'comment-form', 'search-form' for backward compatibility.
 * @since 3.9.0 The `html5` feature now also accepts 'gallery' and 'caption'.
 * @since 4.1.0 The `title-tag` feature was added.
 * @since 4.5.0 The `customize-selective-refresh-widgets` feature was added.
 * @since 4.7.0 The `starter-content` feature was added.
 * @since 5.0.0 The `responsive-embeds`, `align-wide`, `dark-editor-style`, `disable-custom-colors`,
 *              `disable-custom-font-sizes`, `editor-color-palette`, `editor-font-sizes`,
 *              `editor-styles`, and `wp-block-styles` features were added.
 * @since 5.3.0 The `html5` feature now also accepts 'script' and 'style'.
 * @since 5.3.0 Formalized the existing and already documented `...$args` parameter
 *              by adding it to the function signature.
 * @since 5.4.0 The `disable-custom-gradients` feature limits to default gradients or gradients added
 *              through `editor-gradient-presets` theme support.
 * @since 5.5.0 The `core-block-patterns` feature was added and is enabled by default.
 * @since 5.5.0 The `custom-logo` feature now also accepts 'unlink-homepage-logo'.
 * @since 5.6.0 The `post-formats` feature warns if no array is passed as the second parameter.
 * @since 5.8.0 The `widgets-block-editor` feature enables the Widgets block editor.
 * @since 5.8.0 The `block-templates` feature indicates whether a theme uses block-based templates.
 * @since 6.0.0 The `html5` feature warns if no array is passed as the second parameter.
 * @since 6.1.0 The `block-template-parts` feature allows to edit any reusable template part from site editor.
 * @since 6.1.0 The `disable-layout-styles` feature disables the default layout styles.
 * @since 6.3.0 The `link-color` feature allows to enable the link color setting.
 * @since 6.3.0 The `border` feature allows themes without theme.json to add border styles to blocks.
 * @since 6.5.0 The `appearance-tools` feature enables a few design tools for blocks,
 *              see `WP_Theme_JSON::APPEARANCE_TOOLS_OPT_INS` for a complete list.
 * @since 6.6.0 The `editor-spacing-sizes` feature was added.
 *
 * @global array $_wp_theme_features
 *
 * @param string $feature The feature being added. Likely core values include:
 *                          - 'admin-bar'
 *                          - 'align-wide'
 *                          - 'appearance-tools'
 *                          - 'automatic-feed-links'
 *                          - 'block-templates'
 *                          - 'block-template-parts'
 *                          - 'border'
 *                          - 'core-block-patterns'
 *                          - 'custom-background'
 *                          - 'custom-header'
 *                          - 'custom-line-height'
 *                          - 'custom-logo'
 *                          - 'customize-selective-refresh-widgets'
 *                          - 'custom-spacing'
 *                          - 'custom-units'
 *                          - 'dark-editor-style'
 *                          - 'disable-custom-colors'
 *                          - 'disable-custom-font-sizes'
 *                          - 'disable-custom-gradients'
 *                          - 'disable-layout-styles'
 *                          - 'editor-color-palette'
 *                          - 'editor-gradient-presets'
 *                          - 'editor-font-sizes'
 *                          - 'editor-spacing-sizes'
 *                          - 'editor-styles'
 *                          - 'featured-content'
 *                          - 'html5'
 *                          - 'link-color'
 *                          - 'menus'
 *                          - 'post-formats'
 *                          - 'post-thumbnails'
 *                          - 'responsive-embeds'
 *                          - 'starter-content'
 *                          - 'title-tag'
 *                          - 'widgets'
 *                          - 'widgets-block-editor'
 *                          - 'wp-block-styles'
 * @param mixed  ...$args Optional extra arguments to pass along with certain features.
 * @return void|false Void on success, false on failure.
 */
    public function addThemeSupport(string $feature, mixed ...$args): mixed;
}
