<?php

namespace WpService\Contracts;

interface WpResolvePostDate
{
/**
 * Uses wp_checkdate to return a valid Gregorian-calendar value for post_date.
 * If post_date is not provided, this first checks post_date_gmt if provided,
 * then falls back to use the current time.
 *
 * For back-compat purposes in wp_insert_post, an empty post_date and an invalid
 * post_date_gmt will continue to return '1970-01-01 00:00:00' rather than false.
 *
 * @since 5.7.0
 *
 * @param string $postDate     The date in mysql format (`Y-m-d H:i:s`).
 * @param string $postDateGmt The GMT date in mysql format (`Y-m-d H:i:s`).
 * @return string|false A valid Gregorian-calendar date string, or false on failure.
 */
    public function wpResolvePostDate(string $postDate = '', string $postDateGmt = ''): string|false;
}
