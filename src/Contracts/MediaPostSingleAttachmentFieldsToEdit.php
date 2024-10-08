<?php

namespace WpService\Contracts;

interface MediaPostSingleAttachmentFieldsToEdit
{
    /**
 * Retrieves the post non-image attachment fields to edit form fields.
 *
 * @since 2.8.0
 *
 * @param array $formFields An array of attachment form fields.
 * @param \WP_Post $post        The WP_Post attachment object.
 * @return array Filtered attachment form fields.
 */
    public function mediaPostSingleAttachmentFieldsToEdit(array $formFields, \WP_Post $post): array;
}
