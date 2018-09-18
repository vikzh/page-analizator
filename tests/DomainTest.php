<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class DomainTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    public function testForm()
    {
        $this->get('/');

        $this->assertResponseOk();
    }

    public function testDomains()
    {
        $this->get(route('domains'));

        $this->assertResponseOk();
    }
}
