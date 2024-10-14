<?php

namespace WpService\Contracts;

interface ImageAttachmentFieldsToEdit
{
/**
 * Retrieves the image attachment fields to edit form fields.
 *
 * @since 2.5.0
 *
 * @param array $formFields
 * @param object $post
 * @return array
 */
    public function imageAttachmentFieldsToEdit(array $formFields, object $post): array;
}
