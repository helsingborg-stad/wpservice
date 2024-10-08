<?php

namespace WpService\Contracts;

interface WpImportUploadForm
{
    /**
 * Outputs the form used by the importers to accept the data to be imported.
 *
 * @since 2.0.0
 *
 * @param string $action The action attribute for the form.
 */
    public function wpImportUploadForm(string $action): void;
}
