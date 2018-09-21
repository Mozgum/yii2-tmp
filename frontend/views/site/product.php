<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ListView;

?>





<?php Pjax::begin(['id' => 'some_pjax_id']) ?>

<?php foreach ($model as $val):?>

<?php
 echo Html::a('', ['site/value' , 'group_id' => $val->id ], ['class' => 'btn btn-lg btn-primary glyphicon glyphicon-arrow-down',
           'data-pjax' => 1]);
?>
<?php endforeach; ?>
     
 <?php Pjax::end() ?>





<?php

