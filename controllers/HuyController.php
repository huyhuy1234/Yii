<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\HuyModels;

//tên phải trùng với tên file 
// http://localhost/huy/web/index.php?r=huy/index
class HuyController extends Controller
{
    //tạo action
    public function actionIndex()
    {
        //do something in here!
        // echo "Test Alo";
        $this->layout = 'mylayout';
        // muốn nó sử dụng layout nào thì dùng câu lệnh trên 
        return $this->render('index.php');
    }

    public function actionUser()
    {
        $model = new HuyModels();
        $model->setUser('$Huy', '$youtube.com', '$huynguyen@gmail.com');
        echo 'Thông tin user <br/>' . $model->getUser();
    }
}