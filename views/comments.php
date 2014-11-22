<div class="comment-view">
<?php if ($model &&  !Yii::$app->user->isGuest) {?>
<?=

	$this->render ( '_form', [ 
			'model' => $model 
	] )?>

    <?php }?>
<?php
echo \yii\widgets\ListView::widget([
     'dataProvider' => $comments,
     'itemOptions' => ['class' => 'item'],
     'itemView' => '_view',
]);
?>
</div>

