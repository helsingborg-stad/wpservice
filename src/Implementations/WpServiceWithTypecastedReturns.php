<?php

namespace WpService\Implementations;

use WpService\WpService;
use WP_Error;
use WP_Post;
use WP_REST_Response;
use WP_Role;
use WP_Screen;
use WP_Term;
use WP_User;

/**
 * Class WpServiceDecorator
 *
 * Implements the WPService interface.
 */
class WpServiceWithTypecastedReturns extends WpServiceDecorator
{
    /**
     * Class constructor.
     *
     * @param WPService $inner The inner WPService instance.
     */
    public function __construct(private WPService $inner)
    {
    }

    /**
     * @inheritDoc
     */
    public function getQueryVar(string $var, mixed $default = ''): mixed
    {
        $queryVarValue = $this->inner->{__FUNCTION__}(...func_get_args());

        if (is_numeric($queryVarValue)) {
            return (int) $queryVarValue;
        }
        if (is_string($queryVarValue) && strtolower($queryVarValue) === 'false') {
            return false;
        }
        if (is_string($queryVarValue) && strtolower($queryVarValue) === 'true') {
            return true;
        }
        if (is_string($queryVarValue) && strtolower($queryVarValue) === 'null') {
            return null;
        }
        if (is_string($queryVarValue) && empty($queryVarValue)) {
            return null;
        }

        return $queryVarValue; //Default, should be a string
    }
}
