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

use yii\rbac\Permission;
use yii\web\NotFoundHttpException;
use yii\rbac\Item;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class PermissionController extends ItemControllerAbstract
{
    /** @var string */
    protected $modelClass = 'aminbbb92\rbac\models\Permission';

    /** @var int */
    protected $type = Item::TYPE_PERMISSION;

    /** @inheritdoc */
    protected function getItem($name)
    {
        $role = \Yii::$app->authManager->getPermission($name);

        if ($role instanceof Permission) {
            return $role;
        }

        throw new NotFoundHttpException;
    }
}
