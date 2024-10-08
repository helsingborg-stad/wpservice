<?php

namespace WpService\Contracts;

interface WpAddPrivacyPolicyContent
{
    /**
     * Declares a helper function for adding content to the Privacy Policy Guide.
     *
     * Plugins and themes should suggest text for inclusion in the site's privacy policy.
     * The suggested text should contain information about any functionality that affects user privacy,
     * and will be shown on the Privacy Policy Guide screen.
     *
     * A plugin or theme can use this function multiple times as long as it will help to better present
     * the suggested policy content. For example modular plugins such as WooCommerse or Jetpack
     * can add or remove suggested content depending on the modules/extensions that are enabled.
     * For more information see the Plugin Handbook:
     * https://developer.wordpress.org/plugins/privacy/suggesting-text-for-the-site-privacy-policy/.
     *
     * The HTML contents of the `$policy_text` supports use of a specialized `.privacy-policy-tutorial`
     * CSS class which can be used to provide supplemental information. Any content contained within
     * HTML elements that have the `.privacy-policy-tutorial` CSS class applied will be omitted
     * from the clipboard when the section content is copied.
     *
     * Intended for use with the `'admin_init'` action.
     *
     * @since 4.9.6
     *
     * @param string $pluginName The name of the plugin or theme that is suggesting content
     *                            for the site's privacy policy.
     * @param string $policyText The suggested content for inclusion in the policy.
     */
    public function wpAddPrivacyPolicyContent(string $pluginName, string $policyText): void;
}
