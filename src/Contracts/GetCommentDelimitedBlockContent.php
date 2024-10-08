<?php

namespace WpService\Contracts;

interface GetCommentDelimitedBlockContent
{
    /**
 * Returns the content of a block, including comment delimiters.
 *
 * @since 5.3.1
 *
 * @param string|null $blockName       Block name. Null if the block name is unknown,
 *                                      e.g. Classic blocks have their name set to null.
 * @param array $blockAttributes Block attributes.
 * @param string $blockContent    Block save content.
 * @return string Comment-delimited block content.
 */
    public function getCommentDelimitedBlockContent(string|null $blockName, array $blockAttributes, string $blockContent): string;
}
