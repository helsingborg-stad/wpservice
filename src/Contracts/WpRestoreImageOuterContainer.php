<?php

namespace WpService\Contracts;

interface WpRestoreImageOuterContainer
{
    /**
 * For themes without theme.json file, make sure
 * to restore the outer div for the aligned image block
 * to avoid breaking styles relying on that div.
 *
 * @since 6.0.0
 * @access private
 *
 * @param string $blockContent Rendered block content.
 * @param array $block        Block object.
 * @return string Filtered block content.
 */
    public function wpRestoreImageOuterContainer(string $blockContent, array $block): string;
}
