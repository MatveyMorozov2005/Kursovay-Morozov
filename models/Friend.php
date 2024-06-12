<?php
namespace app\models;

use yii\db\ActiveRecord;

class Friend extends ActiveRecord
{
    public static function tableName()
    {
        return 'friends';
    }

    public function rules()
    {
        return [
            [['user_id', 'friend_id'], 'required'],
        ];
    }
}
?>