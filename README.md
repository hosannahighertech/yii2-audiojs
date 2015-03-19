yii2-audiojs
============
This is a wrapper widget for AudioJs Javascript player. Currently its very simple, see example

**Installation**
------------

The preferred way to install the Yii framework is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist "hosannahighertech/yii2-audiojs *"
```

or add

```json
"hosannahighertech/yii2-audiojs": "*"
```

to the require section of your composer.json.

**Example**
------------

```php
use hosanna\audiojs\AudioJs;

AudioJs::widget([
    'files'=>$filename, //Full URL to Mp3 file here
]);

```
For suggestion, please open an issue in github tracker
Reference: http://kolber.github.io/audiojs/
