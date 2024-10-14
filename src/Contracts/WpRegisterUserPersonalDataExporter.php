<?php

namespace WpService\Contracts;

interface WpRegisterUserPersonalDataExporter
{
/**
 * Registers the personal data exporter for users.
 *
 * @since 4.9.6
 *
 * @param array[] $exporters An array of personal data exporters.
 * @return array[] An array of personal data exporters.
 */
    public function wpRegisterUserPersonalDataExporter(array $exporters): array;
}
