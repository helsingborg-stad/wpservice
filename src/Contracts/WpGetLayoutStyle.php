<?php

namespace WpService\Contracts;

interface WpGetLayoutStyle
{
    /**
 * Generates the CSS corresponding to the provided layout.
 *
 * @since 5.9.0
 * @since 6.1.0 Added `$block_spacing` param, use style engine to enqueue styles.
 * @since 6.3.0 Added grid layout type.
 * @since 6.6.0 Removed duplicated selector from layout styles.
 *              Enabled negative margins for alignfull children of blocks with custom padding.
 * @access private
 *
 * @param string $selector                      CSS selector.
 * @param array $layout                        Layout object. The one that is passed has already checked
 *                                                            the existence of default block layout.
 * @param bool $hasBlockGapSupport         Optional. Whether the theme has support for the block gap. Default false.
 * @param string|string[]|null $gapValue                     Optional. The block gap value to apply. Default null.
 * @param bool $shouldSkipGapSerialization Optional. Whether to skip applying the user-defined value set in the editor. Default false.
 * @param string $fallbackGapValue            Optional. The block gap value to apply. Default '0.5em'.
 * @param array|null $blockSpacing                 Optional. Custom spacing set on the block. Default null.
 * @return string CSS styles on success. Else, empty string.
 */
    public function wpGetLayoutStyle(string $selector, array $layout, bool $hasBlockGapSupport = false, string|array|null $gapValue = null, bool $shouldSkipGapSerialization = false, string $fallbackGapValue = '0.5em', array|null $blockSpacing = null): string;
}
