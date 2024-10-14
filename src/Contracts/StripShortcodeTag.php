<?php

namespace WpService\Contracts;

interface StripShortcodeTag
{
/**
 * Strips a shortcode tag based on RegEx matches against post content.
 *
 * @since 3.3.0
 *
 * @param array $m RegEx matches against post content.
 * @return string|false The content stripped of the tag, otherwise false.
 */
    public function stripShortcodeTag(array $m): string|false;
}
