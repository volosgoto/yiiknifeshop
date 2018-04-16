<?php

namespace app\components;


use yii\base\Widget;

class BannerWidget extends Widget {
    public function init() {
        parent::init();
    }

    public function run() {
        return $this->render('banner');
    }
}