<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $user->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<h1><?= Html::encode($this->title) ?></h1>

<?= DetailView::widget([
    'model' => $user,
    'attributes' => [
        'name',
        'date_of_birth',
        'photo',
    ],
]) ?>
