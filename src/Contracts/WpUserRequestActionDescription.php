<?php

namespace WpService\Contracts;

interface WpUserRequestActionDescription
{
/**
 * Gets action description from the name and return a string.
 *
 * @since 4.9.6
 *
 * @param string $actionName Action name of the request.
 * @return string Human readable action name.
 */
    public function wpUserRequestActionDescription(string $actionName): string;
}
