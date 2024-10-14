<?php

namespace WpService\Contracts;

interface PostboxClasses
{
/**
 * Returns the list of classes to be used by a meta box.
 *
 * @since 2.5.0
 *
 * @param string $boxId    Meta box ID (used in the 'id' attribute for the meta box).
 * @param string $screenId The screen on which the meta box is shown.
 * @return string Space-separated string of class names.
 */
    public function postboxClasses(string $boxId, string $screenId): string;
}
