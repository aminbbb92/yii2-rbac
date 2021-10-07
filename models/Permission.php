<?php

/*
 * This file is part of the Amin project.
 *
 * (c) Amin project <http://github.com/aminbbb92>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace aminbbb92\rbac\models;
use yii\helpers\ArrayHelper;
use yii\rbac\Item;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class Permission extends AuthItem
{
    /**
     * @inheritdoc
     */
    public function getUnassignedItems()
    {
        return ArrayHelper::map($this->manager->getItems(Item::TYPE_PERMISSION, $this->item !== null ? [$this->item->name] : []), 'name', function ($item) {
            return empty($item->description) ? $item->name : $item->name . ' (' . $item->description . ')';
        });
    }

    /**
     * @inheritdoc
     */
    protected function createItem($name)
    {
        return $this->manager->createPermission($name);
    }
}
