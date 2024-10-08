<?php

namespace WpService\Contracts;

interface BlockCoreHeadingRender
{
    /**
 * Adds a wp-block-heading class to the heading block content.
 *
 * For example, the following block content:
 *  <h2 class="align-left">Hello World</h2>
 *
 * Would be transformed to:
 *  <h2 class="align-left wp-block-heading">Hello World</h2>
 *
 * @since 6.2.0
 *
 * @param array $attributes Attributes of the block being rendered.
 * @param string $content Content of the block being rendered.
 *
 * @return string The content of the block being rendered.
 */
    public function blockCoreHeadingRender(array $attributes, string $content): string;
}
