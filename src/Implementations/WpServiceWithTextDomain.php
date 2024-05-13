<?php

namespace WpService\Implementations;

use WpService\WpService;

/**
 * Represents a WordPress service with text domain functionality.
 * This class extends the WpServiceDecorator class.
 */
class WpServiceWithTextDomain extends WpServiceDecorator
{
    /**
     * Class constructor.
     *
     * @param WPService $inner The inner WPService instance.
     * @param string $textDomain The text domain to use.
     */
    public function __construct(private WPService $inner, private string $textDomain)
    {
        parent::__construct($inner);
    }

    /**
     * @inheritDoc
     */
    public function __($text, $domain = 'default'): string // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore
    {
        if ($domain === 'default') {
            $domain = $this->textDomain;
        }

        return $this->inner->{__FUNCTION__}($text, $domain);
    }

    /**
     * @inheritDoc
     */
    public function _e($text, $domain = 'default'): void // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore
    {
        if ($domain === 'default') {
            $domain = $this->textDomain;
        }

        $this->inner->{__FUNCTION__}($text, $domain);
    }
}
