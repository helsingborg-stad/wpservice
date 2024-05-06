<?php

namespace WpService\Implementations;

use PHPUnit\Framework\TestCase;
use WpService\WpService;

class NativeWpServiceTest extends TestCase
{
    /**
     * @testdox doAction calls global WordPress function do_action with the given hook name and arguments
     */
    public function testDoActionCallsGlobalWordPressFunctionDoActionWithTheGivenHookNameAndArguments()
    {
        function do_action($hookName, ...$args)
        {
            echo "do_action('$hookName', '" . implode("', '", $args) . "');";
        }

        $wpService = new NativeWpService();

        ob_start();
        $wpService->doAction('foo', 'bar', 'baz');

        $this->assertEquals("do_action('foo', 'bar', 'baz');", ob_get_clean());
    }
}
