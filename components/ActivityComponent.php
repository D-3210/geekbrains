<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ActivityComponent
 *
 * @author Дмитрий
 */

namespace app\components;

use yii\base\Component;

class ActivityComponent extends Component {

    public $activity_class;
    
    
    public function init() {
        parent::init();
        
        if(empty($this->activity_class)){
            throw new \Exception('Need activity_class param');
        }
    }




    /*
     * @return Activity
     */

    public function getModel() {

        return new $this->activity_class;
    }

    /*
     * @param $model Activity
     * @return bool
     */
    public function createActivity(&$model):bool {

        if (!$model->validate()) {
            print_r($model->getErrors());
            return false;
        }
        
        return true;
    }

}
