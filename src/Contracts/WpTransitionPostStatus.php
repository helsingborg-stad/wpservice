<?php

namespace WpService\Contracts;

interface WpTransitionPostStatus
{
    /**
     * Fires actions related to the transitioning of a post's status.
     *
     * When a post is saved, the post status is "transitioned" from one status to another,
     * though this does not always mean the status has actually changed before and after
     * the save. This function fires a number of action hooks related to that transition:
     * the generic {@see 'transition_post_status'} action, as well as the dynamic hooks
     * {@see '$old_status_to_$new_status'} and {@see '$new_status_$post->post_type'}. Note
     * that the function does not transition the post object in the database.
     *
     * For instance: When publishing a post for the first time, the post status may transition
     * from 'draft' – or some other status – to 'publish'. However, if a post is already
     * published and is simply being updated, the "old" and "new" statuses may both be 'publish'
     * before and after the transition.
     *
     * @since 2.3.0
     *
     * @param string $newStatus Transition to this post status.
     * @param string $oldStatus Previous post status.
     * @param \WP_Post $post Post data.
     */
    public function wpTransitionPostStatus(string $newStatus, string $oldStatus, \WP_Post $post): void;
}
