<?php

namespace WpService\Contracts;

interface EditCommentLink
{
    /**
     * Displays the edit comment link with formatting.
     *
     * @since 1.0.0
     *
     * @param string $text   Optional. Anchor text. If null, default is 'Edit This'. Default null.
     * @param string $before Optional. Display before edit link. Default empty.
     * @param string $after  Optional. Display after edit link. Default empty.
     */
    public function editCommentLink(string $text = null, string $before = '', string $after = ''): void;
}
