<?php

namespace WpService\Contracts;

interface GetHeaderImage
{
/**
 * Retrieves header image for custom header.
 *
 * @since 2.1.0
 *
 * @return string|false
 */
    public function getHeaderImage(): string|false;
}
