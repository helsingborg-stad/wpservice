<?php

namespace WpService\Contracts;

interface WpFindHierarchyLoop
{
    /**
 * Finds hierarchy loops using a callback function that maps object IDs to parent IDs.
 *
 * @since 3.1.0
 * @access private
 *
 * @param callable $callback      Function that accepts ( ID, $callback_args ) and outputs parent_ID.
 * @param int $start         The ID to start the loop check at.
 * @param int $startParent  The parent_ID of $start to use instead of calling $callback( $start ).
 *                                Use null to always use $callback.
 * @param array $callbackArgs Optional. Additional arguments to send to $callback. Default empty array.
 * @return array IDs of all members of loop.
 */
    public function wpFindHierarchyLoop(callable $callback, int $start, int $startParent, array $callbackArgs = []): array;
}
