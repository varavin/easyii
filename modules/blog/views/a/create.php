<?php
$this->title = Yii::t('easyii/blog', 'Create news');
?>
<?= $this->render('_menu') ?>
<?= $this->render('_form', ['model' => $model]) ?>