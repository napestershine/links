<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LinkTest extends TestCase
{
    public function testWeSeeAListOfLinks()
    {
        factory(App\Link::class)->create([
            'title' => 'dotdev.co'
        ]);
        $this->visit('/')->see('dotdev.co');
    }

    public function testWeSeeLinksForm()
    {
        $this->visit('/submit')->see('Submit a link');
    }
}
