<?php
use yii\helpers\Html;
use yii\easyii\assets\AdminAsset;

/* @var $this \yii\web\View */
/* @var $content string */


$asset = AdminAsset::register($this);
$moduleName = $this->context->module->id;

dmstr\web\AdminLteAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">

    <?= $this->render('header') ?>

    <?= $this->render('left') ?>

    <?= $this->render('content', ['content' => $content]) ?>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
