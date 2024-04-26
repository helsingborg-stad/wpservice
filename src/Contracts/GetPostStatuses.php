<?php

namespace WpService\Contracts;

/**
 * Interface GetPostStatuses
 *
 * This interface defines the contract for classes that provide methods to retrieve post statuses.
 */
interface GetPostStatuses
{
    /**
     * Retrieve the available post statuses.
     *
     * @return array An array of post statuses.
     */
    public function getPostStatuses(): array;
}
