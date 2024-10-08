<?php

namespace WpService\Contracts;

interface WpRestoreGroupInnerContainer
{
    /**
 * For themes without theme.json file, make sure
 * to restore the inner div for the group block
 * to avoid breaking styles relying on that div.
 *
 * @since 5.8.0
 * @access private
 *
 * @param string $blockContent Rendered block content.
 * @param array $block         Block object.
 * @return string Filtered block content.
 */
    public function wpRestoreGroupInnerContainer(string $blockContent, array $block): string;
}
