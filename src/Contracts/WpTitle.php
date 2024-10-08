<?php

namespace WpService\Contracts;

interface WpTitle
{
    /**
 * Displays or retrieves page title for all areas of blog.
 *
 * By default, the page title will display the separator before the page title,
 * so that the blog title will be before the page title. This is not good for
 * title display, since the blog title shows up on most tabs and not what is
 * important, which is the page that the user is looking at.
 *
 * There are also SEO benefits to having the blog title after or to the 'right'
 * of the page title. However, it is mostly common sense to have the blog title
 * to the right with most browsers supporting tabs. You can achieve this by
 * using the seplocation parameter and setting the value to 'right'. This change
 * was introduced around 2.5.0, in case backward compatibility of themes is
 * important.
 *
 * @since 1.0.0
 *
 * @global WP_Locale $wp_locale WordPress date and time locale object.
 *
 * @param string $sep         Optional. How to separate the various items within the page title.
 *                            Default '&raquo;'.
 * @param bool $display     Optional. Whether to display or retrieve title. Default true.
 * @param string $seplocation Optional. Location of the separator (either 'left' or 'right').
 * @return string|void String when `$display` is false, nothing otherwise.
 */
    public function wpTitle(string $sep, bool $display, string $seplocation): string;
}
