<?php

namespace WpService\Contracts;

interface FormOption
{
    /**
     * Prints option value after sanitizing for forms.
     *
     * @since 1.5.0
     *
     * @param string $option Option name.
     */
    public function formOption(string $option): void;
}
