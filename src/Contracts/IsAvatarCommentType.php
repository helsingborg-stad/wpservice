<?php

namespace WpService\Contracts;

interface IsAvatarCommentType
{
    /**
     * Check if this comment type allows avatars to be retrieved.
     *
     * @since 5.1.0
     *
     * @param string $commentType Comment type to check.
     * @return bool Whether the comment type is allowed for retrieving avatars.
     */
    public function isAvatarCommentType(string $commentType): bool;
}
