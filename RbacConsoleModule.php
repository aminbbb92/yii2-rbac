<?php

namespace aminbbb92\rbac;

use yii\base\Module;

/**
 * Rbac console module.
 *
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class RbacConsoleModule extends Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'aminbbb92\rbac\commands';
}
