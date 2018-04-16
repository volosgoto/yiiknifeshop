<?php

namespace app\modules\admin\controllers;

class CartController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
