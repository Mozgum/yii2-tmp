<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ListView;

?>





<?php Pjax::begin(['id' => 'some_pjax_id']) ?>



<?php
 echo $this->render('value', [
          'model'=>$model,
      ]);
?>


     
 <?php Pjax::end() ?>





<?php

