<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SeederTest extends TestCase
{
    public function testLinksTable()
    {
        $this->seeInDatabase('links', ['title' => 'dotdev.co']);
    }
}
