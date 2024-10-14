<?php

namespace WpService\Contracts;

interface WpGenerateBlockTemplatesExportFile
{
/**
 * Creates an export of the current templates and
 * template parts from the site editor at the
 * specified path in a ZIP file.
 *
 * @since 5.9.0
 * @since 6.0.0 Adds the whole theme to the export archive.
 *
 * @global string $wp_version The WordPress version string.
 *
 * @return \WP_Error|string Path of the ZIP file or error on failure.
 */
    public function wpGenerateBlockTemplatesExportFile(): \WP_Error|string;
}
