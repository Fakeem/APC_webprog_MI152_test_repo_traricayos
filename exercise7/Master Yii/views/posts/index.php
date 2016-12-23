<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Yii';
$this->params['breadcrumbs'][] = 'Home';
?>





<div class="post-index">

    <h1><?= Html::encode('Forms') ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'firstname',
            'lastname',
            'midname',
            // 'nickname',
            // 'email:email',
            // 'homeadd',
            // 'gender',
            // 'comment:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
    $("#show").click(function(){
        $("answers").toggle(500);
    });
});
</script>

<h1>Trivias</h1>
<br>
<ul>
<?php foreach ($trivias as $trivia): ?>

    <li>
        <strong><?= Html::encode("{$trivia->question}") ?>:</strong>
		<br></br>	
		<answers style=display:none><?= $trivia->answer ?></answers>
		<br></br>	
    </li>	
<?php endforeach; ?>
<button id="show">Show all answer</button>
</ul>
</div>
