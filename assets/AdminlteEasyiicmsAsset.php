<?php
namespace grozzzny\adminlte_easyiicms\assets;

class AdminlteEasyiicmsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/adminlte_easyiicms/media';

    public $css = [
        'adminlte_easyiicms.css',
    ];
    public $js = [
        'app.min.js',
    ];
    public $depends = [
        'grozzzny\depends\jquery_migrate\JqueryMigrateAsset',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}
