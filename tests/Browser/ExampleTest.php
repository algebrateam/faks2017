<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use App\User;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
       
      $user= User::find(1);
      $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/')
                    ->assertSee('Fakultet');
        });
    }
}
