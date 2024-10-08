<?php

namespace WpService\Contracts;

interface CheckComment
{
    /**
 * Checks whether a comment passes internal checks to be allowed to add.
 *
 * If manual comment moderation is set in the administration, then all checks,
 * regardless of their type and substance, will fail and the function will
 * return false.
 *
 * If the number of links exceeds the amount in the administration, then the
 * check fails. If any of the parameter contents contain any disallowed words,
 * then the check fails.
 *
 * If the comment author was approved before, then the comment is automatically
 * approved.
 *
 * If all checks pass, the function will return true.
 *
 * @since 1.2.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $author       Comment author name.
 * @param string $email        Comment author email.
 * @param string $url          Comment author URL.
 * @param string $comment      Content of the comment.
 * @param string $userIp      Comment author IP address.
 * @param string $userAgent   Comment author User-Agent.
 * @param string $commentType Comment type, either user-submitted comment,
 *                             trackback, or pingback.
 * @return bool If all checks pass, true, otherwise false.
 */
    public function checkComment(string $author, string $email, string $url, string $comment, string $userIp, string $userAgent, string $commentType): bool;
}
