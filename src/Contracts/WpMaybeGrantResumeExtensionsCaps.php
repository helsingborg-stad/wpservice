<?php

namespace WpService\Contracts;

interface WpMaybeGrantResumeExtensionsCaps
{
/**
 * Filters the user capabilities to grant the 'resume_plugins' and 'resume_themes' capabilities as necessary.
 *
 * @since 5.2.0
 *
 * @param bool[] $allcaps An array of all the user's capabilities.
 * @return bool[] Filtered array of the user's capabilities.
 */
    public function wpMaybeGrantResumeExtensionsCaps(array $allcaps): array;
}
