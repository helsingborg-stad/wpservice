<?php

namespace WpService\Contracts;

interface CommentType
{
    /**
     * Displays the comment type of the current comment.
     *
     * @since 0.71
     *
     * @param string|false $commenttxt   Optional. String to display for comment type. Default false.
     * @param string|false $trackbacktxt Optional. String to display for trackback type. Default false.
     * @param string|false $pingbacktxt  Optional. String to display for pingback type. Default false.
     */
    public function commentType(string|false $commenttxt = false, string|false $trackbacktxt = false, string|false $pingbacktxt = false): void;
}
