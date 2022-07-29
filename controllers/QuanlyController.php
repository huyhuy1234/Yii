<?php

namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\Account;

class QuanlyController extends Controller
{
    public function actionAccount()
    {
        $account = new Account();
        $table_account = $account->GetAllAccount();
        // var_dump($table_account);
        // exit;
        //return $this->render('index', ['account' => $table_account]);
        $one_account = $account->Get_Account(3);
        // var_dump($one_account);
        // exit;
        return $this->render('index', ['account' => $table_account, 'one' => $one_account]);
    }
}