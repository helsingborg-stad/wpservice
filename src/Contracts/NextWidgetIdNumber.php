<?php

namespace WpService\Contracts;

interface NextWidgetIdNumber
{
/**
 * @global array $wp_registered_widgets
 *
 * @param string $idBase
 * @return int
 */
    public function nextWidgetIdNumber(string $idBase): int;
}
