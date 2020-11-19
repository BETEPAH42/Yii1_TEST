<?php
namespace frontend\controllers;

use yii\web\Controller;

class ResumeController extends Controller
{
    public function actionViewResume () {
        return $this->render('viewresume');
    }
}
?>