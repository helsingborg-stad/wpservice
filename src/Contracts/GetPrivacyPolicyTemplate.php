<?php

namespace WpService\Contracts;

interface GetPrivacyPolicyTemplate
{
    /**
     * Retrieves path of Privacy Policy page template in current or parent template.
     *
     * The template hierarchy and template path are filterable via the {@see '$type_template_hierarchy'}
     * and {@see '$type_template'} dynamic hooks, where `$type` is 'privacypolicy'.
     *
     * @since 5.2.0
     *
     * @see get_query_template()
     *
     * @return string Full path to privacy policy template file.
     */
    public function getPrivacyPolicyTemplate(): string;
}
