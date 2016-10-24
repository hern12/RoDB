<?php

namespace app\models;

use yii\db\ActiveRecord;

class MonsterSearch extends ActiveRecord
{

    public static function tableName (){

        return 'monsters';
        
    }

}