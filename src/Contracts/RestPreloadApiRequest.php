<?php

namespace WpService\Contracts;

interface RestPreloadApiRequest
{
/**
 * Append result of internal request to REST API for purpose of preloading data to be attached to a page.
 * Expected to be called in the context of `array_reduce`.
 *
 * @since 5.0.0
 *
 * @param array $memo Reduce accumulator.
 * @param string $path REST API path to preload.
 * @return array Modified reduce accumulator.
 */
    public function restPreloadApiRequest(array $memo, string $path): array;
}
