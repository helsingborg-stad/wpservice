<?php

namespace WpService\Contracts;

interface PostCommentsFormBlockFormDefaults
{
/**
 * Use the button block classes for the form-submit button.
 *
 * @since 6.0.0
 *
 * @param array $fields The default comment form arguments.
 *
 * @return array Returns the modified fields.
 */
    public function postCommentsFormBlockFormDefaults(array $fields): array;
}
