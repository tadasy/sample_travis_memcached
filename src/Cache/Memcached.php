<?php

namespace Project\Cache;

class Memcached
{
    private $m;
    public function __construct()
    {
        $this->m = new \Memcached();
        $this->m->addServer('localhost', 11211);
    }
    public function set($key, $value, $expire)
    {
        $this->m->set($key, $value, $expire);
        return $this->m->getResultCode();
    }
    public function get($key)
    {
        return $this->m->get($key);
    }
}
