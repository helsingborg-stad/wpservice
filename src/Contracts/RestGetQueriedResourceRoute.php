<?php

namespace WpService\Contracts;

interface RestGetQueriedResourceRoute
{
/**
 * Gets the REST route for the currently queried object.
 *
 * @since 5.5.0
 *
 * @return string The REST route of the resource, or an empty string if no resource identified.
 */
    public function restGetQueriedResourceRoute(): string;
}
