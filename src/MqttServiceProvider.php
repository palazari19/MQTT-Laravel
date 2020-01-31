<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 2/22/19
 * Time: 1:34 PM
 */

namespace Salman\Mqtt;

use Illuminate\Support\ServiceProvider;
use Salman\Mqtt\MqttClass\Mqtt;

class MqttServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton('Mqtt',function (){

            return new Mqtt();
        });
    }

    /**
     * @return array
     */
    public function provides()
    {
        return array('Mqtt');
    }
}
