<?php

/*
 * This file is part of the Amin project.
 *
 * (c) Amin project <http://github.com/aminbbb92>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace aminbbb92\rbac\widgets;

use yii\bootstrap5\Nav;

/**
 * Menu widget.
 *
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class Menu extends Nav
{
    /**
     * @inheritdoc
     */
    public $options = [
        'class' => 'nav-tabs'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $userModuleClass       = 'aminbbb92\user\Module';
        $isUserModuleInstalled = \Yii::$app->getModule('user') instanceof $userModuleClass;

        $this->items = [
            [
                'label'   => \Yii::t('rbac', 'Users'),
                'url'     => ['/user/admin/index'],
                'visible' => $isUserModuleInstalled,
            ],
            [
                'label' => \Yii::t('rbac', 'Roles'),
                'url'   => ['/rbac/role/index'],
            ],
            [
                'label' => \Yii::t('rbac', 'Permissions'),
                'url'   => ['/rbac/permission/index'],
            ],
            [
                'label' => \Yii::t('rbac', 'Rules'),
                'url'   => ['/rbac/rule/index'],
            ],
            [
                'label' => \Yii::t('rbac', 'Create'),
                'items' => [
                    [
                        'label'   => \Yii::t('rbac', 'New user'),
                        'url'     => ['/user/admin/create'],
                        'visible' => $isUserModuleInstalled,
                    ],
                    [
                        'label' => \Yii::t('rbac', 'New role'),
                        'url'   => ['/rbac/role/create']
                    ],
                    [
                        'label' => \Yii::t('rbac', 'New permission'),
                        'url'   => ['/rbac/permission/create']
                    ],
                    [
                        'label' => \Yii::t('rbac', 'New rule'),
                        'url'   => ['/rbac/rule/create']
                    ]
                ]
            ],
        ];
    }
}
