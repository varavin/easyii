<?php
namespace yii\easyii\modules\blocks;

class BlocksModule extends \yii\easyii\components\Module
{
    public $settings = [
        'categoryThumb' => true,
        'blocksThumb' => true,
        'enablePhotos' => true,

        'enableShort' => true,
        'shortMaxLength' => 255,
        'enableTags' => true,

        'itemsInFolder' => false,
    ];

    public static $installConfig = [
        'title' => [
            'en' => 'Blocks',
            'ru' => 'Блоки контента',
        ],
        'icon' => 'pencil',
        'order_num' => 65,
    ];
}