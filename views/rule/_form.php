<?php

/*
 * This file is part of the Amin project.
 *
 * (c) Amin project <http://github.com/aminbbb92>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

/**
 * @var $this  \yii\web\View
 * @var $model \aminbbb92\rbac\models\Rule
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<?php $form = ActiveForm::begin([
    'enableClientValidation' => false,
    'enableAjaxValidation'   => true,
]) ?>

<?= $form->field($model, 'name') ?>

<?= $form->field($model, 'class') ?>

<?= Html::submitButton(Yii::t('rbac', 'Save'), ['class' => 'btn btn-success btn-block']) ?>

<?php ActiveForm::end() ?>
