<?php
namespace yii\easyii\modules\blog;

class BlogModule extends \yii\easyii\components\Module
{
    public $settings = [
        'enableThumb' => true,
        'enablePhotos' => true,
        'enableShort' => true,
        'shortMaxLength' => 256,
        'enableTags' => true
    ];

    public static $installConfig = [
        'title' => [
            'en' => 'Blog',
            'ru' => 'Блог',
        ],
        'icon' => 'bullhorn',
        'order_num' => 70,
    ];
}