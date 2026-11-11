<?php

namespace WpService\Contracts;

interface WpShouldOutputBufferTemplateForEnhancement
{
/**
 * Checks whether the template should be output buffered for enhancement.
 *
 * By default, an output buffer is only started if a {@see 'wp_template_enhancement_output_buffer'} filter has been
 * added by the time a template is included at the {@see 'wp_before_include_template'} action. This allows template
 * responses to be streamed as much as possible when no template enhancements are registered to apply.
 *
 * @since 6.9.0
 *
 * @return bool Whether the template should be output-buffered for enhancement.
 */
    public function wpShouldOutputBufferTemplateForEnhancement(): bool;
}
