<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\easyii\assets\FrontendAsset;
use yii\easyii\models\Setting;

$asset = FrontendAsset::register($this);
$position = Setting::get('toolbar_position') === 'bottom' ? 'bottom' : 'top';
$this->registerCss('body {padding-'.$position.': 50px;}');
$this->registerCss('
#easyii-navbar{
    background-color: #303030;
    border: none;
}
#easyii-navbar .navbar-left li:first-child {
    border-right: 1px solid rgba(255, 255, 255, 0.22);
}
#easyii-navbar a, #easyii-navbar .navbar-text {
    color: #ffffff;
}
#easyii-navbar .switcher {
    background: #ebebeb;
}
@media only screen and (max-width: 768px) {
  #easyii-navbar li a, #easyii-navbar .navbar-text {
    width: 16px;
    overflow: hidden;
    white-space: nowrap;
  }
  #easyii-navbar .container{
    display: flex;
    justify-content: space-between;
  }
  #easyii-navbar .container > *{
    float:left;
    margin-right:30px;
  }
  #easyii-navbar .navbar-left li:first-child {
    border: none;
  }
  #easyii-navbar .navbar-text {
    display:none;
  }
  #easyii-navbar .switcher {
    margin-top: 17px;
  }
}
');
?>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<nav id="easyii-navbar" class="navbar navbar-inverse navbar-fixed-<?= $position ?>">
    <div class="container">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="<?= Url::to(['/admin']) ?>"><span class="glyphicon glyphicon-arrow-left"></span> <?= Yii::t('easyii', 'Control Panel') ?></a></li>
        </ul>
        <p class="navbar-text"><i class="glyphicon glyphicon-pencil"></i> <?= Yii::t('easyii', 'Live edit') ?></p>
        <?= Html::checkbox('', LIVE_EDIT, ['data-link' => Url::to(['/admin/system/live-edit'])]) ?>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?= Url::to(['/admin/sign/out']) ?>"><span class="glyphicon glyphicon-log-out"></span> <?= Yii::t('easyii', 'Logout') ?></a></li>
        </ul>
    </div>
</nav>