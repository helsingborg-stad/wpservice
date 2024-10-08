<?php

namespace WpService\Contracts;

interface WpRegisterCommentPersonalDataExporter
{
    /**
     * Registers the personal data exporter for comments.
     *
     * @since 4.9.6
     *
     * @param array[] $exporters An array of personal data exporters.
     * @return array[] An array of personal data exporters.
     */
    public function wpRegisterCommentPersonalDataExporter(array $exporters): array;
}
