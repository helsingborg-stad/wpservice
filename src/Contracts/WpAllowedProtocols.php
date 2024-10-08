<?php

namespace WpService\Contracts;

interface WpAllowedProtocols
{
    /**
     * Retrieves a list of protocols to allow in HTML attributes.
     *
     * @since 3.3.0
     * @since 4.3.0 Added 'webcal' to the protocols array.
     * @since 4.7.0 Added 'urn' to the protocols array.
     * @since 5.3.0 Added 'sms' to the protocols array.
     * @since 5.6.0 Added 'irc6' and 'ircs' to the protocols array.
     *
     * @see wp_kses()
     * @see esc_url()
     *
     * @return string[] Array of allowed protocols. Defaults to an array containing 'http', 'https',
     *                  'ftp', 'ftps', 'mailto', 'news', 'irc', 'irc6', 'ircs', 'gopher', 'nntp', 'feed',
     *                  'telnet', 'mms', 'rtsp', 'sms', 'svn', 'tel', 'fax', 'xmpp', 'webcal', and 'urn'.
     *                  This covers all common link protocols, except for 'javascript' which should not
     *                  be allowed for untrusted users.
     */
    public function wpAllowedProtocols(): array;
}
