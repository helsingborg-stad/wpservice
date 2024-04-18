<?php

namespace WpService\Contracts;

interface AddFilter
{
    /**
     * Add a filter.
     *
     * @param string   $tag           The filter tag.
     * @param callable $functionToAdd The function to add as a filter.
     * @param int      $priority      The priority of the filter. Default is 10.
     * @param int      $acceptedArgs  The number of arguments the filter accepts. Default is 1.
     * @return bool                   True if the filter was added successfully, false otherwise.
     */
    public function addFilter(string $tag, callable $functionToAdd, int $priority = 10, int $acceptedArgs = 1): bool;
}
