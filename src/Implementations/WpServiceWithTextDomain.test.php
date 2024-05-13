<?php

namespace WpService\Implementations;

use PHPUnit\Framework\TestCase;
use WpService\WpService;

/**
 * Class WpServiceDecorator
 *
 * Implements the WPService interface.
 */
class WpServiceWithTextDomainTest extends TestCase
{
    public function testTranslateStringUsesTextDomain()
    {
        $inner      = $this->getInnerWpService();
        $textDomain = 'my-text-domain';
        $service    = new WpServiceWithTextDomain($inner, $textDomain);

        $service->__('foo', $textDomain);

        $this->assertEquals(['method' => '__', 'text' => 'foo', 'domain' => $textDomain], $inner->invocations[0]);
    }

    public function testEchoTranslateStringUsesTextDomain()
    {
        $inner      = $this->getInnerWpService();
        $textDomain = 'my-text-domain';
        $service    = new WpServiceWithTextDomain($inner, $textDomain);

        $service->_e('foo');

        $this->assertEquals(['method' => '_e', 'text' => 'foo', 'domain' => $textDomain], $inner->invocations[0]);
    }

    private function getInnerWpService(): WpService
    {
        return new class extends NativeWpService {
            public array $invocations = [];
            public function __($text, $domain = 'default'): string
            {
                $this->invocations[] = ['method' => __FUNCTION__, 'text' => $text, 'domain' => $domain];
                return $text;
            }

            // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore
            public function _e($text, $domain = 'default'): void
            {
                $this->invocations[] = ['method' => __FUNCTION__, 'text' => $text, 'domain' => $domain];
            }
        };
    }
}
