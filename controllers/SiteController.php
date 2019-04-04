<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $request = Yii::$app->request;
        $from = $request->get('from', 0);
        $to = $request->get('to', 0);
        $url = "https://api.mt5.com/get-news-forex?limit=10&offset=0&_lang=ru&_format=json&cols=*&from=$from&to=$to";
        //var_dump($url);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        $headers = array();
        $headers[] = "Content-Type: application/json";
        $headers[] = "Accept: application/json";
        $headers[] = "Authorization: Bearer M7yhRUMtB7CW8YJ7tygeunr2873";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        $resultArray = json_decode($result, true);
        //var_dump($resultArray);
        return $this->render('index', ['posts' => $resultArray['result'], 'status' => $resultArray['status']]);
    }
}
