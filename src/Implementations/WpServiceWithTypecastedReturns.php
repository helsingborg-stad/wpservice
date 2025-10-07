<?php

namespace WpService\Implementations;

use WP_Term;
use WP_Post_Type;
use WP_Post;
use WP_User;
use WpService\WpService;

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
        parent::__construct($inner);
    }

    /**
     * @inheritDoc
     */
    public function getQueryVar(string $var, mixed $default = ''): mixed
    {
        $queryVarValue = $this->inner->{__FUNCTION__}(...func_get_args());

        if ($queryVarValue === $default) {
            return $default;
        }

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

    /**
     * @inheritDoc
     */
    public function getQueriedObject(): WP_Term|WP_Post_Type|WP_Post|WP_User|null
    {
        $queryVarValue = $this->inner->{__FUNCTION__}(...func_get_args());

        if (
            is_a($queryVarValue, WP_Term::class) ||
            is_a($queryVarValue, WP_Post_Type::class) ||
            is_a($queryVarValue, WP_Post::class) ||
            is_a($queryVarValue, WP_User::class) ||
            is_null($queryVarValue)
        ) {
            return $queryVarValue;
        }

        return null;
    }
}
