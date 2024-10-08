<?php

namespace WpService\Contracts;

interface MaybeRedirect404
{
    /**
 * Corrects 404 redirects when NOBLOGREDIRECT is defined.
 *
 * @since MU (3.0.0)
 */
    public function maybeRedirect404(): void;
}
