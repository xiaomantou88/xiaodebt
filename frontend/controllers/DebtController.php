<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * Debt controller
 */
class DebtController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAdd()
    {

    }

    public function actionConfirm()
    {
    	
    }
}
