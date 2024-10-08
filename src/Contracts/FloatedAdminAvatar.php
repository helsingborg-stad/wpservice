<?php

namespace WpService\Contracts;

interface FloatedAdminAvatar
{
    /**
     * Adds avatars to relevant places in admin.
     *
     * @since 2.5.0
     *
     * @param string $name User name.
     * @return string Avatar with the user name.
     */
    public function floatedAdminAvatar(string $name): string;
}
