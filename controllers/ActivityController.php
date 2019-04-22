<?php

namespace app\controllers;

use yii\web\Controller;
use app\base\BaseController;
use app\models\Activity;


class ActivityController extends Controller{
    
    public function actions() {
        
        return [
            'create' => ['class' => actions\ActivityCreateAction::class, 'name' => 'create'],
            'new' => ['class' => actions\ActivityCreateAction::class, 'name' => 'new'],
            'day-create' => ['class' => actions\DayCreateAction::class],
        ];
        
    }
    
    
    

}
