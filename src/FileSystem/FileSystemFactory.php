<?php

namespace WpService\FileSystem;

use WP_Filesystem_Direct;

/**
 * Class FileSystemFactory
 */
class FileSystemFactory
{
    /**
     * Create a new instance of FileSystem.
     *
     * @return FileSystem
     */
    public static function create(): FileSystem
    {
        return new class () implements FileSystem {
            private WP_Filesystem_Direct $fileSystem;

            /**
             * Class constructor.
             */
            public function __construct()
            {
                global $wp_filesystem;
                if (empty($wp_filesystem)) {
                    require_once ABSPATH . '/wp-admin/includes/file.php';
                    WP_Filesystem();
                }

                if ($wp_filesystem instanceof WP_Filesystem_Direct) {
                    $this->fileSystem = $wp_filesystem;
                } else {
                    throw new \Exception('Filesystem is not direct');
                }
            }

            /**
             * @inheritDoc
             */
            public function fileExists(string $path): bool
            {
                return $this->fileSystem->exists($path);
            }

            /**
             * @inheritDoc
             */
            public function getFileContent(string $file): string
            {
                return $this->fileSystem->get_contents($file);
            }
        };
    }
}
