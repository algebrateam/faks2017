<?php

namespace Tests\Browser;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class loginTest extends DuskTestCase
{
    
      /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLoginUserOne()
    {
              $this->browse(function (Browser $browser) {
              $browser->visit('/logout')
                ->loginAs(User::find(1))
                ->pause(5000)
                ->visit('/Mjesto')
                ->assertPathIs('/Mjesto');              
              });
    }
  
  /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/logout')
              ->pause(5000)
              ->visit('/')
              ->assertSee('Fakultet')
              ->clickLink('Mjesta')
              ->pause(2000)
              ->assertPathIs('/login')
              ->type('email','mrvic.predragx@gmail.com')
              ->type('password','123456789')
              ->press('submit')
              ->pause(2000)
              ->assertSee('These credentials do not match our records')
              ->assertPathIs('/login')
              ->type('email','mrvic.predrag@gmail.com')
              ->type('password','123456789')
              ->press('submit')
              ->pause(2000)
              ->assertDontSee('These credentials do not match our records')
              ->visit('/Mjesto')     
              ->assertPathIs('/Mjesto');
        });
    }
     
     
}
