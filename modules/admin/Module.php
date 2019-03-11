<?php

namespace app\modules\admin;
//use yii\base\Application;
//use yii\base\BootstrapInterface;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module //implements BootstrapInterface
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
//    /**
//     * Bootstrap method to be called during application bootstrap stage.
//     * Change namespace with Bootstrap to use module console app
//      (this class must implement BootstrapInterface, add ModuleName to 'bootstrap' config in console.php)
//     * @param Application $app the application currently running
//     */
//    public function bootstrap($app)
//    {
//        if($app instanceof \yii\console\Application){
//            $this->controllerNamespace='app\modules\ModuleName\commands';
//        }
//    }
}
