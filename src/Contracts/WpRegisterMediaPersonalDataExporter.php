<?php

namespace WpService\Contracts;

interface WpRegisterMediaPersonalDataExporter
{
/**
 * Registers the personal data exporter for media.
 *
 * @param array[] $exporters An array of personal data exporters, keyed by their ID.
 * @return array[] Updated array of personal data exporters.
 */
    public function wpRegisterMediaPersonalDataExporter(array $exporters): array;
}
