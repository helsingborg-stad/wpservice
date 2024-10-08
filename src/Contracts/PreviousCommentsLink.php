<?php

namespace WpService\Contracts;

interface PreviousCommentsLink
{
    /**
 * Displays the link to the previous comments page.
 *
 * @since 2.7.0
 *
 * @param string $label Optional. Label for comments link text. Default empty.
 */
    public function previousCommentsLink(string $label = ''): void;
}
