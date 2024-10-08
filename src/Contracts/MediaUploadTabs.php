<?php

namespace WpService\Contracts;

interface MediaUploadTabs
{
    /**
     * Defines the default media upload tabs.
     *
     * @since 2.5.0
     *
     * @return string[] Default tabs.
     */
    public function mediaUploadTabs(): array;
}
