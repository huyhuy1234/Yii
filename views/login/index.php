<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
</head>

<body>
    <form action="#" method="POST" class="container">

        <div class="form-outline mb-4">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" required />

        </div>


        <div class="form-outline mb-4">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" />

        </div>


        <div class="row mb-4">
            <div class="col d-flex justify-content-center">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" checked />
                    <label class="form-check-label"> Remember me </label>
                </div>
            </div>

            <div class="col">

                <a href="#!">Forgot password?</a>
            </div>
        </div>


        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>


        <div class="text-center">
            <p>Not a member? <a href="#!">Register</a></p>
            <p>or sign up with:</p>
            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
            </button>
        </div>
    </form>
</body>

</html> -->

<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<?php if (Yii::$app->session->hasFlash('LoginFailed')) : ?>
<div class="alert alert-danger">Đăng nhập thất bại</div>
<?php endif ?>

<?php if (Yii::$app->session->hasFlash('LoginOk')) : ?>
<div class="alert alert-success">Đăng nhập thành công</div>
<?php endif ?>

<?php $form = ActiveForm::begin() ?>
<?php echo $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Nhap tai khoan']) ?>
<?php echo $form->field($model, 'password')->passwordInput(['placeholder' => 'Nhap mat khau']) ?>
<?php echo Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end() ?>