<?php

namespace WpService\Contracts;

interface GetAttachmentFieldsToEdit
{
    /**
 * Retrieves the attachment fields to edit form fields.
 *
 * @since 2.5.0
 *
 * @param \WP_Post $post
 * @param array $errors
 * @return array
 */
    public function getAttachmentFieldsToEdit(\WP_Post $post, array $errors = null): array;
}
