<?php

namespace WpService\Implementations;

use PHPUnit\Framework\TestCase;

class NativeWpServiceTest extends TestCase
{
    /**
     * @testdox Can create an instance of the class
     */
    public function testCanCreateInstance()
    {
        $service = new NativeWpService();
        $this->assertInstanceOf(NativeWpService::class, $service);
    }

    /**
     * @testdox getQueriedObject method accepts false return value from WordPress function
     */
    public function testGetQueriedObjectAcceptsFalseReturn()
    {
        // Mock the global get_queried_object function to return false
        if (!function_exists('get_queried_object')) {
            function get_queried_object() {
                return false;
            }
        }

        $service = new NativeWpService();
        
        // This should not throw a TypeError
        $result = $service->getQueriedObject();
        
        // Verify that false is returned correctly
        $this->assertFalse($result);
        $this->assertIsBool($result);
    }
}
