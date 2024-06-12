<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Friend;

class FriendsController extends Controller
{
    public function actionAddFriend($friendId)
    {
        $friend = new Friend();
        $friend->user_id = Yii::$app->user->id;
        $friend->friend_id = $friendId;

        if ($friend->save()) {
            Yii::$app->session->setFlash('success', 'Friend added successfully');
        } else {
            Yii::$app->session->setFlash('error', 'Error adding friend');
        }

        return $this->redirect(Yii::$app->request->referrer);
    }
}
?>