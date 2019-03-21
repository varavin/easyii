<?php
namespace yii\easyii\modules\blocks\controllers;

use yii\easyii\components\CategoryController;

class AController extends CategoryController
{
    public $categoryClass = 'yii\easyii\modules\blocks\models\Category';
    public $modelClass = 'yii\easyii\modules\blocks\models\Item';
    public $moduleName = 'blocks';
}