<?php

namespace WpService\Contracts;

interface GetSiteScreenHelpTabArgs
{
    /**
     * Returns the arguments for the help tab on the Edit Site screens.
     *
     * @since 4.9.0
     *
     * @return array Help tab arguments.
     */
    public function getSiteScreenHelpTabArgs(): array;
}
