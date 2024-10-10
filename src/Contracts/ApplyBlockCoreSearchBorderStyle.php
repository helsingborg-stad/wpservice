<?php

namespace WpService\Contracts;

interface ApplyBlockCoreSearchBorderStyle
{
    /**
     * This generates a CSS rule for the given border property and side if provided.
     * Based on whether the Search block is configured to display the button inside
     * or not, the generated rule is injected into the appropriate collection of
     * styles for later application in the block's markup.
     *
     * @since 6.1.0
     *
     * @param array $attributes     The block attributes.
     * @param string $property       Border property to generate rule for e.g. width or color.
     * @param string $side           Optional side border. The dictates the value retrieved and final CSS property.
     * @param array $wrapperStyles Current collection of wrapper styles.
     * @param array $buttonStyles  Current collection of button styles.
     * @param array $inputStyles   Current collection of input styles.
     */
    public function applyBlockCoreSearchBorderStyle(array $attributes, string $property, string $side, array &$wrapperStyles, array &$buttonStyles, array &$inputStyles): void;
}
