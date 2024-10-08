<?php

namespace WpService\Contracts;

interface WpGetTypographyValueAndUnit
{
    /**
     * Checks a string for a unit and value and returns an array
     * consisting of `'value'` and `'unit'`, e.g. array( '42', 'rem' ).
     *
     * @since 6.1.0
     *
     * @param string|int|float $rawValue Raw size value from theme.json.
     * @param array $options   {
     *     Optional. An associative array of options. Default is empty array.
     *
     * @type string   $coerce_to        Coerce the value to rem or px. Default `'rem'`.
     * @type int      $root_size_value  Value of root font size for rem|em <-> px conversion. Default `16`.
     * @type string[] $acceptable_units An array of font size units. Default `array( 'rem', 'px', 'em' )`;
     * }
     * @return array|null An array consisting of `'value'` and `'unit'` properties on success.
     *                    `null` on failure.
     */
    public function wpGetTypographyValueAndUnit(string|int|float $rawValue, array $options = []): array|null;
}
