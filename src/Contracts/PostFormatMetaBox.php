<?php

namespace WpService\Contracts;

interface PostFormatMetaBox
{
/**
 * Displays post format form elements.
 *
 * @since 3.1.0
 *
 * @param \WP_Post $post Current post object.
 * @param array $box {
 *     Post formats meta box arguments.
 *
 * @type string   $id       Meta box 'id' attribute.
 * @type string   $title    Meta box title.
 * @type callable $callback Meta box display callback.
 * @type array    $args     Extra meta box arguments.
 * }
 */
    public function postFormatMetaBox(\WP_Post $post, array $box): void;
}
