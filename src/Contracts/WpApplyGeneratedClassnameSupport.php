<?php

namespace WpService\Contracts;

interface WpApplyGeneratedClassnameSupport
{
    /**
 * Adds the generated classnames to the output.
 *
 * @since 5.6.0
 *
 * @access private
 *
 * @param \WP_Block_Type $blockType Block Type.
 * @return array Block CSS classes and inline styles.
 */
    public function wpApplyGeneratedClassnameSupport(\WP_Block_Type $blockType): array;
}
