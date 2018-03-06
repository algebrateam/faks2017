<?php

namespace Tests\Feature;

use App\Zupanija;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\View;
use Tests\TestCase;
use function view;

class ZupanijaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    
//  >>> $z= Zupanija::find(3);
//  => App\Zupanija {#788
//  id: 3,
//  naziv: "Krapinsko-zagorska",
//  created_at: "2018-02-06 18:37:05",
//  updated_at: null,
//  }
//  >>> $z->naziv
//  => "Krapinsko-zagorska"
     
    public function testDohavatiTrecuZupaniju() {
      $z= Zupanija::find(3);
      $this->assertEquals($z->naziv,"Krapinsko-zagorska" , "Naziv trece zupanije mora biti Krapinsko-zagorska");
       $this->assertNotEquals($z->created_at,"2018-02-06 18:37:04" , "Datum nije kao u testu");     
    }
    public function testProvjeriDaPostojeViewCRUDZupanija() {
      $this->assertTrue(view()->exists('zupanija.create'), 'Ne postoji pogled zupanija CREATE');
      $this->assertTrue(View::exists('zupanija.create'), 'Ne postoji pogled zupanija CREATE');  
      $this->assertFileExists(dirname(__DIR__).'/../resources/views/zupanija/create.blade.php', 'Ne postoji pogled zupanija CREATE');
    }
    
    /**
     * @dataProvider zupanijaids
     */
    public function testZupanijaIDSvi($z) {
      foreach(Zupanija::all() as $zz){
        $zup[]=$zz->naziv;
      }
      $this->assertContains($z, $zup);
      //TODO provjeri da ova tri člana polja postoje u bazi Zupanija
    }
    public function zupanijaids() {
      return ['Varaždinska','Ličko-senjska','Bjelovarsko-bilogorska'];
      
    }
    
    public function testDohvatiMjestoUZupaniji() {
      $z=new Zupanija;
       $zz=$z->find(2)->mjesta()->find(7)->naziv;
       $this->assertEquals($zz,"Gornji Stupnik");
    }
    // Ovo je radilo do nismo uključili
    // php artisan make:auth
    // sada ne možemo ditektno na stranicu 
    // već moramo proći proces autentikacije
    
    
    public function testStranicaZupanija() {
      $response = $this->get('/Zupanija/22');
        $response->assertStatus(200);
       //$response->assertViewHas('cities');
        $response->assertSee('Grad Zagreb');
      
    }
     
     
}
