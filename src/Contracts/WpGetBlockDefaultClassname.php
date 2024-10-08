<?php

namespace WpService\Contracts;

interface WpGetBlockDefaultClassname
{
    /**
 * Gets the generated classname from a given block name.
 *
 * @since 5.6.0
 *
 * @access private
 *
 * @param string $blockName Block Name.
 * @return string Generated classname.
 */
    public function wpGetBlockDefaultClassname(string $blockName): string;
}
