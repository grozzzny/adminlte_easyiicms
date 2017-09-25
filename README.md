Admin panel "AdminLTE" (Adaptive layout) form for EasyiiCMS 
==============================

This module allows to [Easy yii2 cms](http://github.com/noumo/easyii) 

Built on top of Bootstrap 3, AdminLTE provides a range of responsive, reusable, and commonly used components. [More..](https://adminlte.io/themes/AdminLTE/index2.html) 

## Installation guide

```bash
$ php composer.phar require grozzzny/adminlte_easyiicms "dev-master"
```
or
```bash
$ composer require grozzzny/adminlte_easyiicms "dev-master"
```
or composer.json:
```json
"require": {
  "grozzzny/adminlte_easyiicms": "dev-master"
}
```

## File config
```php
$config = [
   ...
   'components' => [
       'view' => [
            'theme' => [
                'pathMap' => [
                    '@vendor/noumo/easyii/views' => '@grozzzny/adminlte_easyiicms/views',
                ],
            ],
        ]
   ]
   ...
];
$config['modules']['admin']['layout'] = '@grozzzny/adminlte_easyiicms/views/layouts/main';
return $config;
```

### Skins

By default the extension uses blue skin for AdminLTE. You can change it in config file.

```php
'components' => [
    'assetManager' => [
        'bundles' => [
            'grozzzny\adminlte_easyiicms\assets\AdminLteAsset' => [
                'skin' => 'skin-black',
            ],
        ],
    ],
],
```
Here is the list of available skins:

```
"skin-blue",
"skin-black",
"skin-red",
"skin-yellow",
"skin-purple",
"skin-green",
"skin-blue-light",
"skin-black-light",
"skin-red-light",
"skin-yellow-light",
"skin-purple-light",
"skin-green-light"
```

## Screenshots
![alt text](https://raw.githubusercontent.com/grozzzny/adminlte_easyiicms/master/media/images/2017-09-13_11-20-02.png)
![alt text](https://raw.githubusercontent.com/grozzzny/adminlte_easyiicms/master/media/images/2017-09-13_11-21-02.png)
![alt text](https://raw.githubusercontent.com/grozzzny/adminlte_easyiicms/master/media/images/2017-09-13_11-21-18.png)
![alt text](https://raw.githubusercontent.com/grozzzny/adminlte_easyiicms/master/media/images/2017-09-13_11-21-38.png)
