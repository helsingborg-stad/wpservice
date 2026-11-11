<?php

namespace WpService\Contracts;

interface WpInteractivityGetElement
{
/**
 * Returns an array representation of the current element being processed.
 *
 * The function should be used only during directive processing.
 *
 * @since 6.7.0
 *
 * @return array{attributes: array<string, string|bool>}|null Current element.
 */
    public function wpInteractivityGetElement(): array|null;
}
