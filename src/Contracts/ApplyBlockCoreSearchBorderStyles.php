<?php

namespace WpService\Contracts;

interface ApplyBlockCoreSearchBorderStyles
{
/**
 * This adds CSS rules for a given border property e.g. width or color. It
 * injects rules into the provided wrapper, button and input style arrays for
 * uniform "flat" borders or those with individual sides configured.
 *
 * @since 6.1.0
 *
 * @param array $attributes     The block attributes.
 * @param string $property       Border property to generate rule for e.g. width or color.
 * @param array $wrapperStyles Current collection of wrapper styles.
 * @param array $buttonStyles  Current collection of button styles.
 * @param array $inputStyles   Current collection of input styles.
 */
    public function applyBlockCoreSearchBorderStyles(array $attributes, string $property, array &$wrapperStyles, array &$buttonStyles, array &$inputStyles): void;
}
