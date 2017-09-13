Adminlte form for EasyiiCMS 
==============================

This module allows to [Easy yii2 cms](http://github.com/noumo/easyii) 

Built on top of Bootstrap 3, AdminLTE provides a range of responsive, reusable, and commonly used components. [more..](https://adminlte.io/themes/AdminLTE/index2.html) 

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

## Screenshots
![alt text](https://raw.githubusercontent.com/grozzzny/adminlte_easyiicms/master/media/images/2017-09-13_11-20-02.png)
![alt text](https://raw.githubusercontent.com/grozzzny/adminlte_easyiicms/master/media/images/2017-09-13_11-21-02.png)
![alt text](https://raw.githubusercontent.com/grozzzny/adminlte_easyiicms/master/media/images/2017-09-13_11-21-18.png)
![alt text](https://raw.githubusercontent.com/grozzzny/adminlte_easyiicms/master/media/images/2017-09-13_11-21-38.png)
