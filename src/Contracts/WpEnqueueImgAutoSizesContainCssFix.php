<?php

namespace WpService\Contracts;

interface WpEnqueueImgAutoSizesContainCssFix
{
/**
 * Enqueues a CSS rule to fix potential visual issues with images using `sizes=auto`.
 *
 * This rule overrides the similar rule in the default user agent stylesheet, to avoid images that use e.g.
 * `width: auto` or `width: fit-content` to appear smaller.
 *
 * @since 6.9.0
 *
 * @see https://html.spec.whatwg.org/multipage/rendering.html#img-contain-size
 * @see https://core.trac.wordpress.org/ticket/62413
 * @see https://core.trac.wordpress.org/ticket/62731
 */
public function wpEnqueueImgAutoSizesContainCssFix(): void;
}