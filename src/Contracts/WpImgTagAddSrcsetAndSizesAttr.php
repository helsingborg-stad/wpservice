<?php

namespace WpService\Contracts;

interface WpImgTagAddSrcsetAndSizesAttr
{
    /**
     * Adds `srcset` and `sizes` attributes to an existing `img` HTML tag.
     *
     * @since 5.5.0
     *
     * @param string $image         The HTML `img` tag where the attribute should be added.
     * @param string $context       Additional context to pass to the filters.
     * @param int $attachmentId Image attachment ID.
     * @return string Converted 'img' element with 'loading' attribute added.
     */
    public function wpImgTagAddSrcsetAndSizesAttr(string $image, string $context, int $attachmentId): string;
}
