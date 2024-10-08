<?php

namespace WpService\Contracts;

interface CommentsBlockFormDefaults
{
    /**
     * Use the button block classes for the form-submit button.
     *
     * @since 6.1.0
     *
     * @param array $fields The default comment form arguments.
     *
     * @return array Returns the modified fields.
     */
    public function commentsBlockFormDefaults(array $fields): array;
}
