<?php

namespace WpService\Contracts;

/**
 * The AddAction interface defines the contract for adding an action in WordPress.
 */
interface AddAction
{
    /**
     * Adds an action to the WordPress action queue.
     *
     * @param string   $tag           The name of the action to add.
     * @param callable $functionToAdd The callback function to be executed when the action is triggered.
     * @param int      $priority      The priority at which the action should be executed. Default is 10.
     * @param int      $acceptedArgs  The number of arguments the callback function accepts. Default is 1.
     *
     * @return bool True if the action was successfully added, false otherwise.
     */
    public function addAction(string $tag, callable $functionToAdd, int $priority = 10, int $acceptedArgs = 1): bool;
}
