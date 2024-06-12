<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($user, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($user, 'date_of_birth')->textInput() ?>

    <?= $form->field($user, 'photo')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
