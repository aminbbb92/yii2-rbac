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
 * @var $model \aminbbb92\rbac\models\Rule
 * @var $this  \yii\web\View
 */

$this->title = Yii::t('rbac', 'Update rule');
$this->params['breadcrumbs'][] = ['label' => Yii::t('rbac', 'Rules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<?php $this->beginContent('@aminbbb92/rbac/views/layout.php') ?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>

<?php $this->endContent() ?>
