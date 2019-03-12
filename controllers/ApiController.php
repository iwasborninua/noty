<?php

namespace app\controllers;

use app\models\Author;
use app\models\Book;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class ApiController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * получение списка книг с именем автора
     */
    public function actionBooksList() {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return Book::find()
            ->with('author')
            ->all();
    }

    /**
     * получение данных книги по id
     */
    public function actionBooksById($id) {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        return Book::find()
            ->where(['id' => $id])
            ->one();
    }

    /**
     * обновление данных книги
     */
    public function actionBooksUpdate($id) {
        $data = Yii::$app->request->post();
        $book = Book::find()->where(['id' => $id])->one();
        $book->author = $data['author'];
        $book->author_id = $data['author_id'];
        $book->save(false);
    }

    /**
     * удаление записи книги из бд
     */
    public function actionBooksId($id) {
        Book::deleteAll(['id' => $id]);
    }
}
