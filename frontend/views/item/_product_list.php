<?php
use yii\helpers\Html;
    $href = $model->url;

    if (isset($model->documents) && count($model->documents) > 0){
        foreach ($model->documents as $doc){
            $image[] = $doc->getThumb();
        }
    }
    ?>
    <div class="category_cart">
        <div class="img_block_cart_category">
            <div class="row">
                 <div class="col-md-8 ovh">
            <a href="<?= $model->url; ?>">
             
                    
                     <?php if (isset($image[0]) && strlen($image[0])>0){
                                echo html::img($image[0],['class' => 'my_img2']);
                            } else{
                                echo html::img($image[0],['class' => 'my_img2']);
                            } ?>
                
            </a>
        </div>
        <div class="col-md-4 hidden-xs hidden-sm" style="border-left: 1px solid #e7eaf3;">
            <div class="col-md-12 small_cart_img ovh" style="border-bottom: 1px solid #e7eaf3;">
                <a href="<?= $model->url; ?>">
             
                     <?php if (isset($image[1]) && strlen($image[1])>0){
                                echo html::img($image[1],['class' => 'my_img2']);
                            } else{
                                echo html::img($image[0],['class' => 'my_img2']);
                            } ?>
                
            </a>
            </div>
            <div class="col-md-12 small_cart_img ovh" style="border-bottom: 1px solid #e7eaf3;">
                <a href="<?= $model->url; ?>">
             <?php if (isset($image[2]) && strlen($image[2])>0){
                                echo html::img($image[2],['class' => 'my_img2']);
                            } else{
                                echo html::img($image[0],['class' => 'my_img2']);
                            } ?>
                    
                
            </a>
            </div>
            
        </div>
        </div>





        </div>

<div class="row" style="box-sizing:border-box;border: 1px solid #e7eaf3;    background: #fff;">
    <div class="col-md-12">
            <div class="caption_cart" style="box-sizing:border-box">
                
                    <h4><?=$model->title?></h4>
            
                <p>                             <?php
                  $length = strlen($model->description);
                  if($length > 100){
                    $text = mb_substr($model->description, 0, 100);
                    $firsPos = strripos($text, ' ');
                    $text = mb_substr($text, 0, $firsPos); 
                    echo ($text.'...');
                    } else{
                        echo ($model->description);
                    } 
                   ?></p>
                <a href="<?= $model->url; ?>" class="btn_in_detail">Giňişleýin</a>
            </div>
        </div>
        </div>

        </div>
  


<?php if($index % 4 == 0): ?>
                            <div class="clearfix"></div>
                        <?php endif; ?>


                   

