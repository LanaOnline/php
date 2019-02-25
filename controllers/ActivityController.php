<?php
/**
 * Created by PhpStorm.
 * User: Lana
 * Date: 2/20/2019
 * Time: 8:48 PM
 */

namespace app\controllers;

use app\base\BaseController;
use app\controllers\actions\ActivityCalendarAction;
use app\controllers\actions\ActivityCreateAction;
use app\controllers\actions\ActivityEditAction;
use app\controllers\actions\ActivityViewAction;

class ActivityController extends BaseController
{
//    public function actionIndex()
//    {
//        return "Контроллер активностей";
//    }

    public function actions()
    {
        return [
            'create'=>['class'=>ActivityCreateAction::class],
            'view-activity'=>['class'=>ActivityViewAction::class],
            'edit'=>['class'=>ActivityEditAction::class],
            'calendar'=>['class'=>ActivityCalendarAction::class]
        ];
    }
}