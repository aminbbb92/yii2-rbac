<?php

/*
 * This file is part of the Amin project.
 *
 * (c) Amin project <http://github.com/aminbbb92>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace aminbbb92\rbac\controllers;

use aminbbb92\rbac\models\Assignment;
use Yii;
use yii\web\Controller;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class AssignmentController extends Controller
{
    /**
     * Show form with auth items for user.
     *
     * @param int $id
     */
    public function actionAssign($id)
    {
        $model = Yii::createObject([
            'class'   => Assignment::className(),
            'user_id' => $id,
        ]);

        if ($model->load(\Yii::$app->request->post()) && $model->updateAssignments()) {
        }

        return \aminbbb92\rbac\widgets\Assignments::widget([
            'model' => $model,
        ]);
        /*$model = Yii::createObject([
            'class'   => Assignment::className(),
            'user_id' => $id,
        ]);

        if ($model->load(Yii::$app->request->post()) && $model->updateAssignments()) {

        }

        return $this->render('assign', [
            'model' => $model,
        ]);*/
    }
}
