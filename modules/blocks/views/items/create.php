<?php
$this->title = Yii::t('easyii/blocks', 'Create blocks');
?>
<?= $this->render('_menu', ['category' => $category]) ?>
<?= $this->render('_form', ['model' => $model]) ?>