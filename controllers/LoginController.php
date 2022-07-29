<?php

namespace app\controllers;

use app\models\Account;
use Yii;

class LoginController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $model = new Account();
        if ($model->load(Yii::$app->request->post())) {
            $request = Yii::$app->request->post('Account');
            $username = $request['username'];
            $password = $request['password'];
            if ($model->CheckLogin($username, $password) == true) {
                echo 'Đăng nhập thành công';
                Yii::$app->session->setFlash('LoginOk');
            } else {
                Yii::$app->session->setFlash('LoginFailed');
            }
        }


        return $this->render('index', ['model' => $model]);
    }
}