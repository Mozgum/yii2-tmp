<?php

use yii\helpers\Html;
use yii\widgets\Pjax;


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


 //$this->renderPartial('value');

foreach ($model as $value):?>


    <?php echo $value->name_category; ?> 

<h4> <a href="/frontend/web/site/product?id=<?=$value->id?>">Подробнее</a></h4>
   
    <br/>
<?php endforeach; ?>

   




  
   

