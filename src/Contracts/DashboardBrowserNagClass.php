<?php

namespace WpService\Contracts;

interface DashboardBrowserNagClass
{
    /**
 * Adds an additional class to the browser nag if the current version is insecure.
 *
 * @since 3.2.0
 *
 * @param string[] $classes Array of meta box classes.
 * @return string[] Modified array of meta box classes.
 */
    public function dashboardBrowserNagClass(array $classes): array;
}
