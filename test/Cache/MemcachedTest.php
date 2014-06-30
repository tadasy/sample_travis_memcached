<?php

namespace Project\Cache;

use Project\Cache\Memcached as My_Memcached;

class MemcachedTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function set()
    {
        $m = new My_Memcached();
        $ret = $m->set('key', 'value', 60);
        $this->assertSame(0, $ret);
    }
}
