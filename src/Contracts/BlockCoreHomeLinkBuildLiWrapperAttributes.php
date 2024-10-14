<?php

namespace WpService\Contracts;

interface BlockCoreHomeLinkBuildLiWrapperAttributes
{
/**
 * Builds an array with classes and style for the li wrapper
 *
 * @since 6.0.0
 *
 * @param array $context    Home link block context.
 * @return string The li wrapper attributes.
 */
    public function blockCoreHomeLinkBuildLiWrapperAttributes(array $context): string;
}
