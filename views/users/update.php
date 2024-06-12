<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Update User: ' . $user -> name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $user->name, 'url' => ['view', 'id' => $user->id]];
$this->params['breadcrumbs'][] = 'Update';

?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="user-update">

    <?= $this->render('_form', [
        'user' => $user,
    ]) ?>

</div>
