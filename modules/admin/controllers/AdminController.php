<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 16.04.18
 * Time: 10:11
 */

namespace app\modules\admin\controllers;


class AdminController extends DefaultController {

    public function actionIndex()
    {
        return $this->render('index');
    }

}