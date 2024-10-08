<?php

namespace WpService\Contracts;

interface WpPreloadResources
{
    /**
     * Prints resource preloads directives to browsers.
     *
     * Gives directive to browsers to preload specific resources that website will
     * need very soon, this ensures that they are available earlier and are less
     * likely to block the page's render. Preload directives should not be used for
     * non-render-blocking elements, as then they would compete with the
     * render-blocking ones, slowing down the render.
     *
     * These performance improving indicators work by using `<link rel="preload">`.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Link_types/preload
     * @link https://web.dev/preload-responsive-images/
     *
     * @since 6.1.0
     */
    public function wpPreloadResources(): void;
}
