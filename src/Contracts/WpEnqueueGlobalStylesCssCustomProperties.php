<?php

namespace WpService\Contracts;

interface WpEnqueueGlobalStylesCssCustomProperties
{
/**
 * Function that enqueues the CSS Custom Properties coming from theme.json.
 *
 * @since 5.9.0
 */
public function wpEnqueueGlobalStylesCssCustomProperties(): void;
}