<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ListView;

?>





<?php Pjax::begin(['id' => 'some_pjax_id']) ?>

<?php foreach ($model as $val):?>

<?php
    print_r($val);

 ?>
<?php endforeach; ?>
     
 <?php Pjax::end() ?>





<?php

