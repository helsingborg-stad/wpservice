<?php

namespace WpService\Contracts;

interface SanitizeCommentCookies
{
    /**
     * Sanitizes the cookies sent to the user already.
     *
     * Will only do anything if the cookies have already been created for the user.
     * Mostly used after cookies had been sent to use elsewhere.
     *
     * @since 2.0.4
     */
    public function sanitizeCommentCookies(): void;
}
