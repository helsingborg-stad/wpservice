<?php

namespace WpService\Contracts;

interface WpGetSpeculationRulesConfiguration
{
/**
 * Returns the speculation rules configuration.
 *
 * @since 6.8.0
 *
 * @return array<string, string>|null Associative array with 'mode' and 'eagerness' keys, or null if speculative
 *                                    loading is disabled.
 */
    public function wpGetSpeculationRulesConfiguration(): array|null;
}
