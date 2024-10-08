<?php

namespace WpService\Contracts;

interface UseSslPreference
{
    /**
     * Optional SSL preference that can be turned on by hooking to the 'personal_options' action.
     *
     * See the {@see 'personal_options'} action.
     *
     * @since 2.7.0
     *
     * @param \WP_User $user User data object.
     */
    public function useSslPreference(\WP_User $user): void;
}
