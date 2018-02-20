<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * @abstract Ovim testom ćemo pokušati pokriti cijelu konfiguraciju postavki za naš projekt Fakultet
 * 
 * @author pmrvic
 * @copyright (c) 2018, Predrag Mrvic
 */
class ConfigFakultetTest extends TestCase{
    public function testNajmanjaVerzijaLaravela($najmanjaverzija="5.3.0"){
        
        $najmanjaverzija=str_replace(".","",$najmanjaverzija);
        $ver=str_replace(".","",app()::VERSION);

        $this->assertGreaterThanOrEqual((int)$najmanjaverzija, (int)$ver);
    }
    public function testAppKeyPostavljen()
    {
        $this->assertNotEmpty($_ENV['APP_KEY']
                ,'Ključ nije generiran. Pokreni "php artisan key:generate"');
        
        $this->assertEquals ("base64"
                ,substr($_ENV['APP_KEY'], 0, 6)
                ,'Ključ nije ispravan, mora počinjati sa "base64"');
       
        $this->assertEquals (51,strlen($_ENV['APP_KEY'])
                ,'Ključ nije dovoljne duljine, mora imati 70 znakova');
                
    }
    
      /**
       * @abstract Provjerava jesmo li dodali vlastite direktorije u autoload listu
       * @author pmrvic
       */
    public function testComposerJsonAutoload() {
        // Učitaj cijeli file u string
        //$string = file_get_contents("/home/pmrvic/Code/<project-name>/composer.json");
        $string = file_get_contents(dirname(__DIR__)
          .DIRECTORY_SEPARATOR
          .".."
          .DIRECTORY_SEPARATOR
          ."composer.json");
        
        // Pretvori ucitani JSON u PHP Array
        $json_a = json_decode($string, true);

        // Pripremi Array za usporedbu
        $autoloadArray = Array(
                    'classmap' => Array
                        (
                        '0' => 'database/seeds',
                        '1' => 'database',
                        '2' => 'database/factories'
                    ),
                    'psr-4' => Array
                        (
                        'App\\' => 'app/'
                    )
        );

        // Usporedi dva arraya
        $this->assertArraySubset($autoloadArray, $json_a['autoload']);
    }

    public function testPostavkeServiceProvider()
    {
       
         $this->assertTrue(in_array('Collective\Html\HtmlServiceProvider'
                 , config('app.providers'))
                 ,'"Collective\Html\HtmlServiceProvider" postavi u "/config/app.php"');
    
      // TODO napravi testove za:
      //    Way\Generators\GeneratorsServiceProvider::class,
      //  Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider::class,
         
    }  
        
        
    public function testPostavkeCustomAliases()
    {
       
         $this->assertTrue(in_array('Collective\Html\FormFacade'
                 , config('app.aliases'))
                 ,'"Alias Collective\Html\FormFacade" postavi u "/config/app.php"');
         
         $this->assertTrue(in_array('Collective\Html\HtmlFacade'
                 , config('app.aliases'))
                 ,'"alias Collective\Html\HtmlFacade" postavi u "/config/app.php"');  
         
         $this->assertTrue(in_array('Illuminate\Support\Facades\Input'
                 , config('app.aliases'))
                 ,'"alias Illuminate\Support\Facades\Input" postavi u "/config/app.php"');  
                  
         $this->assertTrue(in_array('Illuminate\Support\Facades\App'
                 , config('app.aliases'))
                 ,'"alias Illuminate\Support\Facades\App" postavi u "/config/app.php"');  
    } 
       
    
     /**
     * @abstract Testiranje svih aliasa u "/config/app.php"
     * @param string $alias 
     *
     * @dataProvider sviAliasi
     */
    public function testSviAliasi($alias){
         $this->assertTrue(in_array($alias
                 , config('app.aliases'))
                 ,'"alias '.$alias.'" postavi u "/config/app.php"');  
    }
        public function sviAliasi()
    {
        return [
            ['Illuminate\Support\Facades\App'],
            ['Illuminate\Support\Facades\Artisan'],
            ['Illuminate\Support\Facades\Auth'],
            ['Illuminate\Support\Facades\Blade'],
            ['Illuminate\Support\Facades\Bus'],
            ['Illuminate\Support\Facades\Cache'],
            ['Illuminate\Support\Facades\Config'],
            ['Illuminate\Support\Facades\Cookie'],
            ['Illuminate\Support\Facades\Crypt'],
            ['Illuminate\Support\Facades\DB'],
            ['Illuminate\Database\Eloquent\Model'],
            ['Illuminate\Support\Facades\Event'],
            ['Illuminate\Support\Facades\File'],
            ['Illuminate\Support\Facades\Gate'],
            ['Illuminate\Support\Facades\Hash'],
            ['Illuminate\Support\Facades\Lang'],
            ['Illuminate\Support\Facades\Log'],
            ['Illuminate\Support\Facades\Mail'],
            ['Illuminate\Support\Facades\Notification'],
            ['Illuminate\Support\Facades\Password'],
            ['Illuminate\Support\Facades\Queue'],
            ['Illuminate\Support\Facades\Redirect'],
            ['Illuminate\Support\Facades\Redis'],
            ['Illuminate\Support\Facades\Request'],
            ['Illuminate\Support\Facades\Response'],
            ['Illuminate\Support\Facades\Route'],
            ['Illuminate\Support\Facades\Schema'],
            ['Illuminate\Support\Facades\Session'],
            ['Illuminate\Support\Facades\Storage'],
            ['Illuminate\Support\Facades\URL'],
            ['Illuminate\Support\Facades\Validator'],
            ['Illuminate\Support\Facades\View'],
            
        ];
    }

}


