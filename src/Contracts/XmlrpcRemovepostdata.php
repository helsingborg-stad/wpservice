<?php

namespace WpService\Contracts;

interface XmlrpcRemovepostdata
{
/**
 * XMLRPC XML content without title and category elements.
 *
 * @since 0.71
 *
 * @param string $content XML-RPC XML Request content.
 * @return string XMLRPC XML Request content without title and category elements.
 */
    public function xmlrpcRemovepostdata(string $content): string;
}
