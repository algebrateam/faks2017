<?php

namespace Tests;

use App\User;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Faker\Generator as Faker;
use Laravel\Dusk\TestCase as BaseTestCase;
use function factory;

abstract class DuskTestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Prepare for Dusk test execution.
     *
     * @beforeClass
     * @return void
     */
    public static function prepare()
    {
        static::startChromeDriver();
        //
        /*
        $admin = new \App\User();
        $admin->name=Faker\Generator::firstName();
        $admin->email="mrvic.predrag@gmail.com";
        $admin->password="$2y$10$kp6nQd6hpVIn5jlEsqE3Nu4h/qXcIoMqAVMgRkY8b7vFQrX1W22pS";
        $admin->remember_token="lffKnNxJw7UUk62vhBg5MrV6Bg6lysu2ug2XlqVyDbeQbhvlw8W3UPG6GwWy";
        $admin->save();
      */
        
        if(User::find(1)==null){
        factory(User::class, 1)->create();
        factory(User::class, 1)->create();
        }
        
    }

    /**
     * Create the RemoteWebDriver instance.
     *
     * @return RemoteWebDriver
     */
    protected function driver()
    {
        $options = (new ChromeOptions)->addArguments([
            '--disable-gpu',
            '--headless'
        ]);

        return RemoteWebDriver::create(
            'http://localhost:9515', DesiredCapabilities::chrome()->setCapability(
                ChromeOptions::CAPABILITY, $options
            )
        );
    }
}
