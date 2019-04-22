<?php

namespace app\models;

use yii\base\Model;


class Activity extends Model{
    
    public $title;
    
    public $description;
    
    public $date_start;
    
    public $is_blocked;
    
    public $author;

    public $date_finish;



    public function rules() {
        return [
            ['title', 'required'],
            ['description', 'string', 'max'=>10],
            ['author', 'string'],
            ['date_start', 'string'],
            ['date_finish', 'string'],
            ['is_blocked', 'boolean']
        ];
    }
    
    public function attributeLabels() {
        return [
            'title' => 'Заголовок',
            'description' => 'Описание',
            'date_start' => 'Дата начала',
            'is_blocked' => 'Заблокировано',
            'date_finish' => 'Дата конца',
            'author' => 'Автор'
        ];
    }
    
}