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

use yii\rbac\Item;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class Role extends AuthItem
{
    /**
     * @inheritdoc
     */
    public function getUnassignedItems()
    {
        $data  = [];
        $items = $this->manager->getItems(null, $this->item !== null ? [$this->item->name] : []);

        if ($this->item === null) {
            foreach ($items as $item) {
                $data[$item->name] = $this->formatName($item);
            }
        } else {
            foreach ($items as $item) {
                if ($this->manager->canAddChild($this->item, $item)) {
                    $data[$item->name] = $this->formatName($item);
                }
            }
        }

        return $data;
    }

    /**
     * Formats name.
     *
     * @param  Item $item
     * @return string
     */
    protected function formatName(Item $item)
    {
        return empty($item->description) ? $item->name : $item->name . ' (' . $item->description . ')';
    }

    /**
     * @inheritdoc
     */
    protected function createItem($name)
    {
        return $this->manager->createRole($name);
    }
}
