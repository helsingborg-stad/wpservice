<?php

namespace WpService\Contracts;

interface WpMediaAttachAction
{
    /**
 * Encapsulates the logic for Attach/Detach actions.
 *
 * @since 4.2.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $parentId Attachment parent ID.
 * @param string $action    Optional. Attach/detach action. Accepts 'attach' or 'detach'.
 *                          Default 'attach'.
 */
    public function wpMediaAttachAction(int $parentId, string $action = 'attach'): void;
}
