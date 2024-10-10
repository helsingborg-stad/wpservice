<?php

namespace WpService\Contracts;

interface WpGetAssociatedNavMenuItems
{
    /**
     * Returns the menu items associated with a particular object.
     *
     * @since 3.0.0
     *
     * @param int $objectId   Optional. The ID of the original object. Default 0.
     * @param string $objectType Optional. The type of object, such as 'post_type' or 'taxonomy'.
     *                            Default 'post_type'.
     * @param string $taxonomy    Optional. If $object_type is 'taxonomy', $taxonomy is the name
     *                            of the tax that $object_id belongs to. Default empty.
     * @return int[] The array of menu item IDs; empty array if none.
     */
    public function wpGetAssociatedNavMenuItems(int $objectId, string $objectType = 'post_type', string $taxonomy = ''): array;
}
