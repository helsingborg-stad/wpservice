<?php

namespace WpService\Contracts;

interface PostSubmitMetaBox
{
/**
 * Displays post submit form fields.
 *
 * @since 2.7.0
 *
 * @global string $action
 *
 * @param \WP_Post $post Current post object.
 * @param array $args {
 *     Array of arguments for building the post submit meta box.
 *
 * @type string   $id       Meta box 'id' attribute.
 * @type string   $title    Meta box title.
 * @type callable $callback Meta box display callback.
 * @type array    $args     Extra meta box arguments.
 * }
 */
    public function postSubmitMetaBox(\WP_Post $post, array $args = []): void;
}
