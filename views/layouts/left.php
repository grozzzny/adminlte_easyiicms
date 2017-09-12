<?
use yii\helpers\Url;
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <ul class="sidebar-menu">
            <?php foreach(Yii::$app->getModule('admin')->activeModules as $module) : ?>
            <li>
                <a href="<?= Url::to(["/admin/$module->name"]) ?>" class="menu-item <?= ($moduleName == $module->name ? 'active' : '') ?>">
                    <?php if($module->icon != '') : ?>
                        <i class="glyphicon glyphicon-<?= $module->icon ?>"></i>
                    <?php endif; ?>
                    <?= $module->title ?>
                    <?php if($module->notice > 0) : ?>
                        <span class="badge"><?= $module->notice ?></span>
                    <?php endif; ?>
                </a>
            </li>
            <?php endforeach; ?>
            <li>
                <a href="<?= Url::to(['/admin/settings']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'settings') ? 'active' :'' ?>">
                    <i class="glyphicon glyphicon-cog"></i>
                    <?= Yii::t('easyii', 'Settings') ?>
                </a>
            </li>
        <?php if(IS_ROOT) : ?>
            <li>
                <a href="<?= Url::to(['/admin/modules']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'modules') ? 'active' :'' ?>">
                    <i class="glyphicon glyphicon-folder-close"></i>
                    <?= Yii::t('easyii', 'Modules') ?>
                </a>
            </li>
            <li>
                <a href="<?= Url::to(['/admin/admins']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'admins') ? 'active' :'' ?>">
                    <i class="glyphicon glyphicon-user"></i>
                    <?= Yii::t('easyii', 'Admins') ?>
                </a>
            </li>
            <li>
                <a href="<?= Url::to(['/admin/system']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'system') ? 'active' :'' ?>">
                    <i class="glyphicon glyphicon-hdd"></i>
                    <?= Yii::t('easyii', 'System') ?>
                </a>
            </li>
            <li>
                <a href="<?= Url::to(['/admin/logs']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'logs') ? 'active' :'' ?>">
                    <i class="glyphicon glyphicon-align-justify"></i>
                    <?= Yii::t('easyii', 'Logs') ?>
                </a>
            </li>
        <?php endif; ?>
        </ul>

<!--        --><?//= dmstr\widgets\Menu::widget(
//            [
//                'options' => ['class' => 'sidebar-menu'],
//                'items' => [
//                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
//                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
//                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
//                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
//                    [
//                        'label' => 'Same tools',
//                        'icon' => 'share',
//                        'url' => '#',
//                        'items' => [
//                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
//                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
//                            [
//                                'label' => 'Level One',
//                                'icon' => 'circle-o',
//                                'url' => '#',
//                                'items' => [
//                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
//                                    [
//                                        'label' => 'Level Two',
//                                        'icon' => 'circle-o',
//                                        'url' => '#',
//                                        'items' => [
//                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
//                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
//                                        ],
//                                    ],
//                                ],
//                            ],
//                        ],
//                    ],
//                ],
//            ]
//        ) ?>

    </section>

</aside>
