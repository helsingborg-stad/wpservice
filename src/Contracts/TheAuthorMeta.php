<?php

namespace WpService\Contracts;

interface TheAuthorMeta
{
    /**
 * Outputs the field from the user's DB object. Defaults to current post's author.
 *
 * @since 2.8.0
 *
 * @param string $field   Selects the field of the users record. See get_the_author_meta()
 *                           for the list of possible fields.
 * @param int|false $userId Optional. User ID. Defaults to the current post author.
 *
 * @see get_the_author_meta()
 */
    public function theAuthorMeta(string $field = '', int|false $userId = false): void;
}
