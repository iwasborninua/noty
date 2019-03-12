<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AuthorSerch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $books \app\models\Book */

$this->title = 'Authors List';
?>
<div class="author-index">

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название книги</th>
            <th scope="col">Автор</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($books as $book):?>
            <tr>
                <th scope="row"><?=$book['id']?></th>
                <td><?=$book['book_name']?></td>
                <td><?=$book['author_name']?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>

</div>
