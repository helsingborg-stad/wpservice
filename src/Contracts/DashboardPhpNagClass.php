<?php

namespace WpService\Contracts;

interface DashboardPhpNagClass
{
/**
 * Adds an additional class to the PHP nag if the current version is insecure.
 *
 * @since 5.1.0
 *
 * @param string[] $classes Array of meta box classes.
 * @return string[] Modified array of meta box classes.
 */
    public function dashboardPhpNagClass(array $classes): array;
}
