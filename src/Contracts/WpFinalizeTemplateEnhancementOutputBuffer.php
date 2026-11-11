<?php

namespace WpService\Contracts;

interface WpFinalizeTemplateEnhancementOutputBuffer
{
/**
 * Finalizes the template enhancement output buffer.
 *
 * Checks to see if the output buffer is complete and contains HTML. If so, runs the content through
 * the `wp_template_enhancement_output_buffer` filter.  If not, the original content is returned.
 *
 * @since 6.9.0
 *
 * @see wp_start_template_enhancement_output_buffer()
 *
 * @param string $output Output buffer.
 * @param int $phase  Phase.
 * @return string Finalized output buffer.
 */
    public function wpFinalizeTemplateEnhancementOutputBuffer(string $output, int $phase): string;
}
