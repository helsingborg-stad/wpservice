<?php

namespace WpService\Contracts;

interface WpFindHierarchyLoopTortoiseHare
{
    /**
 * Uses the "The Tortoise and the Hare" algorithm to detect loops.
 *
 * For every step of the algorithm, the hare takes two steps and the tortoise one.
 * If the hare ever laps the tortoise, there must be a loop.
 *
 * @since 3.1.0
 * @access private
 *
 * @param callable $callback      Function that accepts ( ID, callback_arg, ... ) and outputs parent_ID.
 * @param int $start         The ID to start the loop check at.
 * @param array $override      Optional. An array of ( ID => parent_ID, ... ) to use instead of $callback.
 *                                Default empty array.
 * @param array $callbackArgs Optional. Additional arguments to send to $callback. Default empty array.
 * @param bool $returnLoop  Optional. Return loop members or just detect presence of loop? Only set
 *                                to true if you already know the given $start is part of a loop (otherwise
 *                                the returned array might include branches). Default false.
 * @return mixed Scalar ID of some arbitrary member of the loop, or array of IDs of all members of loop if
 *               $_return_loop
 */
    public function wpFindHierarchyLoopTortoiseHare(callable $callback, int $start, array $override = [], array $callbackArgs = [], bool $returnLoop = false): mixed;
}
