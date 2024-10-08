<?php

namespace WpService\Contracts;

interface WpIsXmlRequest
{
    /**
     * Checks whether current request is an XML request, or is expecting an XML response.
     *
     * @since 5.2.0
     *
     * @return bool True if `Accepts` or `Content-Type` headers contain `text/xml`
     *              or one of the related MIME types. False otherwise.
     */
    public function wpIsXmlRequest(): bool;
}
