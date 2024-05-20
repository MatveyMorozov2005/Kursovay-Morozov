<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\profile $model */


$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];

$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="profile-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'address')->textInput(['rows' => 6]) ?>

        <?= $form->field($model, 'user_id')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>



        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
