<?php

namespace WpService\Contracts;

interface MediaSingleAttachmentFieldsToEdit
{
    /**
     * Retrieves the single non-image attachment fields to edit form fields.
     *
     * @since 2.5.0
     *
     * @param array $formFields An array of attachment form fields.
     * @param \WP_Post $post        The WP_Post attachment object.
     * @return array Filtered attachment form fields.
     */
    public function mediaSingleAttachmentFieldsToEdit(array $formFields, \WP_Post $post): array;
}
