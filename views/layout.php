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
 * @var $this     yii\web\View
 * @var $content string
 */

use aminbbb92\rbac\widgets\Menu;

?>

<?= Menu::widget() ?>

<div style="padding: 10px 0">
    <?= $content ?>
</div>
