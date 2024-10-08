<?php

namespace WpService\Contracts;

interface WpFinalizeScrapingEditedFileErrors
{
    /**
     * Finalizes scraping for edited file errors.
     *
     * @since 4.9.0
     *
     * @param string $scrapeKey Scrape key.
     */
    public function wpFinalizeScrapingEditedFileErrors(string $scrapeKey): void;
}
