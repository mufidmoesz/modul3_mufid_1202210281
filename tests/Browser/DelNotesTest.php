<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DelNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink(link: 'Log in')
                    ->assertPathIs(path: '/login')
                    ->type(field: 'email', value: 'testuser@example.com')
                    ->type(field: 'password', value: 'password')
                    ->press(button: 'LOG IN')
                    ->assertPathIs(path: '/dashboard')
                    ->clickLink(link: 'Notes')
                    ->assertPathIs(path: '/notes')
                    ->press(button: 'Delete');
        });
    }
}
