<?php

namespace WpService\Contracts;

interface WpPrivacyDeleteOldExportFiles
{
    /**
 * Cleans up export files older than three days old.
 *
 * The export files are stored in `wp-content/uploads`, and are therefore publicly
 * accessible. A CSPRN is appended to the filename to mitigate the risk of an
 * unauthorized person downloading the file, but it is still possible. Deleting
 * the file after the data subject has had a chance to delete it adds an additional
 * layer of protection.
 *
 * @since 4.9.6
 */
    public function wpPrivacyDeleteOldExportFiles(): void;
}
