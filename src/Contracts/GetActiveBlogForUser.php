<?php

namespace WpService\Contracts;

interface GetActiveBlogForUser
{
    /**
 * Gets one of a user's active blogs.
 *
 * Returns the user's primary blog, if they have one and
 * it is active. If it's inactive, function returns another
 * active blog of the user. If none are found, the user
 * is added as a Subscriber to the Dashboard Blog and that blog
 * is returned.
 *
 * @since MU (3.0.0)
 *
 * @param int $userId The unique ID of the user
 * @return \WP_Site|void The blog object
 */
    public function getActiveBlogForUser(int $userId): mixed;
}
