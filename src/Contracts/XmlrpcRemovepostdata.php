<?php

namespace WpService\Contracts;

interface XmlrpcRemovepostdata
{
/**
 * XML-RPC XML content without title and category elements.
 *
 * @since 0.71
 *
 * @param string $content XML-RPC XML Request content.
 * @return string XML-RPC XML Request content without title and category elements.
 */
    public function xmlrpcRemovepostdata(string $content): string;
}
