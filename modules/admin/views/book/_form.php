<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Author;

/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form yii\widgets\ActiveForm */

    $authors = \yii\helpers\ArrayHelper::map(Author::find()->all(), 'id', 'author_name');

?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'book_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author_id')->dropDownList($authors) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
