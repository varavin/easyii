<?php
namespace yii\easyii\modules\blocks\controllers;

use yii\easyii\components\CategoryController;

class AController extends CategoryController
{
    /** @var string  */
    public $categoryClass = 'yii\easyii\modules\blocks\models\Category';

    /** @var string  */
    public $moduleName = 'blocks';
}