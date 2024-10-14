<?php

namespace WpService\Contracts;

interface PostPreview
{
/**
 * Saves a draft or manually autosaves for the purpose of showing a post preview.
 *
 * @since 2.7.0
 *
 * @return string URL to redirect to show the preview.
 */
    public function postPreview(): string;
}
