
<?php
use yii\helpers\Html;
?>
<div class="comment-view well">

<p><?=$model->comment?></p>

<p><small class="pull-left">Posted By: <?= $model->createUser->full_name?></small><small >On <?= $model->create_time?></small></p>
</div>
