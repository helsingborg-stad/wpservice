<?php

namespace WpService\Contracts;

interface WpEditAttachmentsQueryVars
{
/**
 * Returns the query variables for the current attachments request.
 *
 * @since 4.2.0
 *
 * @param array|false $q Optional. Array of query variables to use to build the query.
 *                       Defaults to the `$_GET` superglobal.
 * @return array The parsed query vars.
 */
    public function wpEditAttachmentsQueryVars(array|false $q = false): array;
}
