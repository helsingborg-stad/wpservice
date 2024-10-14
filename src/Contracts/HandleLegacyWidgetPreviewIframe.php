<?php

namespace WpService\Contracts;

interface HandleLegacyWidgetPreviewIframe
{
/**
 * Intercepts any request with legacy-widget-preview in the query param and, if
 * set, renders a page containing a preview of the requested Legacy Widget
 * block.
 *
 * @since 5.8.0
 */
    public function handleLegacyWidgetPreviewIframe(): void;
}
