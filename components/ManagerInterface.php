<?php

/*
 * This file is part of the Amin project.
 *
 * (c) Amin project <http://github.com/aminbbb92>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace aminbbb92\rbac\components;

use yii\rbac\ManagerInterface as BaseManagerInterface;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
interface ManagerInterface extends BaseManagerInterface
{
    /**
     * @param  integer|null $type
     * @param  array        $excludeItems
     * @return mixed
     */
    public function getItems($type = null, $excludeItems = []);

    /**
     * @param  integer $userId
     * @return mixed
     */
    public function getItemsByUser($userId);

    /**
     * @param  string $name
     * @return mixed
     */
    public function getItem($name);
}
