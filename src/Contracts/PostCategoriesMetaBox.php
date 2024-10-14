<?php

namespace WpService\Contracts;

interface PostCategoriesMetaBox
{
/**
 * Displays post categories form fields.
 *
 * @since 2.6.0
 *
 * @todo Create taxonomy-agnostic wrapper for this.
 *
 * @param \WP_Post $post Current post object.
 * @param array $box {
 *     Categories meta box arguments.
 *
 * @type string   $id       Meta box 'id' attribute.
 * @type string   $title    Meta box title.
 * @type callable $callback Meta box display callback.
 * @type array    $args {
 *         Extra meta box arguments.
 *
 * @type string $taxonomy Taxonomy. Default 'category'.
 *     }
 * }
 */
    public function postCategoriesMetaBox(\WP_Post $post, array $box): void;
}
