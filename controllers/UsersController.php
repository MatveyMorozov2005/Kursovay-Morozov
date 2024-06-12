<?php

namespace app\controllers;

use app\models\User;
use yii\web\Controller;
use Yii;

class UsersController extends Controller
{
    public function actionList()
    {
        $users = User::find()
            ->orderBy('status')
            ->all();
        return $this->render('List', ['users' => $users]);
    }

    public function actionDeactivate($id)
    {
        $modal = User::findOne($id);
        $modal->status = User::STATUS_DELETED;
        $modal->save();
        return $this->redirect(['/users/list']);
    }

    /**public function behaviors()
     * {
     * return [
     * 'access' => [
     * 'class' => \yii\filters\AccessControl::class,
     *
     * 'rules' => [
     * [
     * 'allow' => true,
     * 'actions' => ['list'],
     * 'roles' => ['@']
     * ],
     * ],
     * ],
     * ];
     * } */

    public function actionView($id)
    {
        $user = User::findOne($id);
        return $this->render('view', ['user' => $user]);
    }

    public function actionUpdate($id)
    {
        $user = User::findOne($id);

        if ($user->load(Yii::$app->request->post()) && $user->save()) {
            return $this->redirect(['view', 'id' => $user->id]);
        } else {
            return $this->render('update', ['user' => $user]);
        }
    }
    public function actionActivate($id)
    {
        $user = User::findOne($id);
        if ($user) {
            if ($user->status == User::STATUS_DELETED) {
                $user->status = User::STATUS_ACTIVE;
            } else {
                $user->status = User::STATUS_DELETED;
            }
            $user->save();
        }
        return $this->redirect(['users/list']);


    }
}