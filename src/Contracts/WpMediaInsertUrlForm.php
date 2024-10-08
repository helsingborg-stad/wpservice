<?php

namespace WpService\Contracts;

interface WpMediaInsertUrlForm
{
    /**
     * Creates the form for external url.
     *
     * @since 2.7.0
     *
     * @param string $defaultView
     * @return string HTML content of the form.
     */
    public function wpMediaInsertUrlForm(string $defaultView = 'image'): string;
}
