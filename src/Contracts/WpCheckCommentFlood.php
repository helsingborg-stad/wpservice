<?php

namespace WpService\Contracts;

interface WpCheckCommentFlood
{
/**
 * Checks whether comment flooding is occurring.
 *
 * Won't run, if current user can manage options, so to not block
 * administrators.
 *
 * @since 4.7.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param bool $isFlood  Is a comment flooding occurring?
 * @param string $ip        Comment author's IP address.
 * @param string $email     Comment author's email address.
 * @param string $date      MySQL time string.
 * @param bool $avoidDie When true, a disallowed comment will result in the function
 *                          returning without executing wp_die() or die(). Default false.
 * @return bool Whether comment flooding is occurring.
 */
    public function wpCheckCommentFlood(bool $isFlood, string $ip, string $email, string $date, bool $avoidDie = false): bool;
}
