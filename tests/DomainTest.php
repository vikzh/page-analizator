<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class DomainTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    public function testForm()
    {
        $this->get(route('form'));

        $this->assertResponseOk();
    }

    public function testDomains()
    {
        $this->get(route('domains.index'));

        $this->assertResponseOk();
    }

    public function testUrlAdd()
    {
        $this->post('/domains', ['url' => 'http://github.com/']);

        $this->seeInDatabase('domains', ['name' => 'http://github.com/']);
    }
}
