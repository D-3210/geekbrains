<?php

namespace app\models;

use yii\base\Model;


class Day extends Model{
    
    public $description;
    
    public $type;
    
    public function rules() {
        return [
            ['type', 'required'],
            ['description', 'string'],
        ];
    }
    
    public function attributeLabels() {
        return [
            'type' => 'Тип: рабочий/выходной',
            'description' => 'Описание',
        ];
    }
    
}