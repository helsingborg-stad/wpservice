<?php

namespace WpService\Contracts;

interface CommentType
{
/**
 * Displays the comment type of the current comment.
 *
 * @since 0.71
 *
 * @param string|false $commentText   Optional. String to display for comment type. Default false.
 * @param string|false $trackbackText Optional. String to display for trackback type. Default false.
 * @param string|false $pingbackText  Optional. String to display for pingback type. Default false.
 */
    public function commentType(string|false $commentText = false, string|false $trackbackText = false, string|false $pingbackText = false): void;
}
