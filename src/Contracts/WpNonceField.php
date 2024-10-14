<?php

namespace WpService\Contracts;

interface WpNonceField
{
/**
 * Retrieves or display nonce hidden field for forms.
 *
 * The nonce field is used to validate that the contents of the form came from
 * the location on the current site and not somewhere else. The nonce does not
 * offer absolute protection, but should protect against most cases. It is very
 * important to use nonce field in forms.
 *
 * The $action and $name are optional, but if you want to have better security,
 * it is strongly suggested to set those two parameters. It is easier to just
 * call the function without any parameters, because validation of the nonce
 * doesn't require any parameters, but since crackers know what the default is
 * it won't be difficult for them to find a way around your nonce and cause
 * damage.
 *
 * The input name will be whatever $name value you gave. The input value will be
 * the nonce creation value.
 *
 * @since 2.0.4
 *
 * @param int|string $action  Optional. Action name. Default -1.
 * @param string $name    Optional. Nonce name. Default '_wpnonce'.
 * @param bool $referer Optional. Whether to set the referer field for validation. Default true.
 * @param bool $display Optional. Whether to display or return hidden form field. Default true.
 * @return string Nonce field HTML markup.
 */
    public function wpNonceField(int|string $action, string $name = '_wpnonce', bool $referer = true, bool $display = true): string;
}
