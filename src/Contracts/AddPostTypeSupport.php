<?php

namespace WpService\Contracts;

interface AddPostTypeSupport
{
/**
 * Registers support of certain features for a post type.
 *
 * All core features are directly associated with a functional area of the edit
 * screen, such as the editor or a meta box. Features include: 'title', 'editor',
 * 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes',
 * 'thumbnail', 'custom-fields', and 'post-formats'.
 *
 * Additionally, the 'revisions' feature dictates whether the post type will
 * store revisions, the 'autosave' feature dictates whether the post type
 * will be autosaved, and the 'comments' feature dictates whether the comments
 * count will show on the edit screen.
 *
 * A third, optional parameter can also be passed along with a feature to provide
 * additional information about supporting that feature.
 *
 * Example usage:
 *
 *     add_post_type_support( 'my_post_type', 'comments' );
 *     add_post_type_support( 'my_post_type', array(
 *         'author', 'excerpt',
 *     ) );
 *     add_post_type_support( 'my_post_type', 'my_feature', array(
 *         'field' => 'value',
 *     ) );
 *
 * @since 3.0.0
 * @since 5.3.0 Formalized the existing and already documented `...$args` parameter
 *              by adding it to the function signature.
 *
 * @global array $_wp_post_type_features
 *
 * @param string $postType The post type for which to add the feature.
 * @param string|array $feature   The feature being added, accepts an array of
 *                                feature strings or a single string.
 * @param mixed        ...$args   Optional extra arguments to pass along with certain features.
 */
    public function addPostTypeSupport(string $postType, string|array $feature, mixed ...$args): void;
}
