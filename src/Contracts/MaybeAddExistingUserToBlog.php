<?php

namespace WpService\Contracts;

interface MaybeAddExistingUserToBlog
{
/**
 * Adds a new user to a blog by visiting /newbloguser/{key}/.
 *
 * This will only work when the user's details are saved as an option
 * keyed as 'new_user_{key}', where '{key}' is a hash generated for the user to be
 * added, as when a user is invited through the regular WP Add User interface.
 *
 * @since MU (3.0.0)
 */
    public function maybeAddExistingUserToBlog(): void;
}
