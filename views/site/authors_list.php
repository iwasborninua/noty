<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AuthorSerch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $authors \app\models\Author */

$this->title = 'Authors List';
?>
<div class="author-index">

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Автор</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($authors as $author):?>
            <tr>
                <th scope="row"><?=$author['id']?></th>
                <td><?=$author['author_name']?></td>
            </tr>
        <?php endforeach;?>
    </table>

</div>
