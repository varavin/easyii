<?php
namespace yii\easyii\modules\blocks;

class BlocksModule extends \yii\easyii\components\Module
{
    public $settings = [
        'categoryThumb' => true,
        'categorySlugImmutable' => false,
        'categoryDescription' => true,
        
        'itemsInFolder' => false,
        'itemThumb' => true,
        'itemPhotos' => true,
        'itemDescription' => true,
        'itemSlugImmutable' => false
    ];

    public static $installConfig = [
        'title' => [
            'en' => 'Blocks',
            'ru' => 'Блоки контента',
        ],
        'icon' => 'list-alt',
        'order_num' => 100,
    ];
}