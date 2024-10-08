<?php

namespace WpService\Contracts;

interface WpCommentReply
{
    /**
 * Outputs the in-line comment reply-to form in the Comments list table.
 *
 * @since 2.7.0
 *
 * @global WP_List_Table $wp_list_table
 *
 * @param int $position  Optional. The value of the 'position' input field. Default 1.
 * @param bool $checkbox  Optional. The value of the 'checkbox' input field. Default false.
 * @param string $mode      Optional. If set to 'single', will use WP_Post_Comments_List_Table,
 *                          otherwise WP_Comments_List_Table. Default 'single'.
 * @param bool $tableRow Optional. Whether to use a table instead of a div element. Default true.
 */
    public function wpCommentReply(int $position = 1, bool $checkbox = false, string $mode = 'single', bool $tableRow = true): void;
}
