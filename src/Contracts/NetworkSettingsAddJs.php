<?php

namespace WpService\Contracts;

interface NetworkSettingsAddJs
{
/**
 * Prints JavaScript in the header on the Network Settings screen.
 *
 * @since 4.1.0
 */
public function networkSettingsAddJs(): void;
}