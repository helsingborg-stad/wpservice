<?php

namespace WpService\Contracts;

interface WpSetCommentCookies
{
    /**
 * Sets the cookies used to store an unauthenticated commentator's identity. Typically used
 * to recall previous comments by this commentator that are still held in moderation.
 *
 * @since 3.4.0
 * @since 4.9.6 The `$cookies_consent` parameter was added.
 *
 * @param \WP_Comment $comment         Comment object.
 * @param \WP_User $user            Comment author's user object. The user may not exist.
 * @param bool $cookiesConsent Optional. Comment author's consent to store cookies. Default true.
 */
    public function wpSetCommentCookies(\WP_Comment $comment, \WP_User $user, bool $cookiesConsent = true): void;
}
