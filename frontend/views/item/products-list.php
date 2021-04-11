<?php
    use yii\helpers\Html;
    $items = \common\models\wrappers\ItemWrapper::find()->where(['category_id' =>$modelCategory->id, 'status' => '1'])->all();
 
?>
	<div class="container">
		<div class="row">

<div class="col-md-4 col-sm-6 col-xs-12 clear3BoxItem" data-key="64"><div class="category_cart">
   <div class="img_block_cart_category">
       <div class="row">
           <div class="col-md-8 ovh">
               <a href="http://begleryoly.com/item/1892"><img class="my_img2" src="img/2.jpg" alt=""></a>           </div>
           <div class="col-md-4 hidden-xs hidden-sm" style="border-left: 1px solid #e7eaf3;">
               <div class="col-md-12 small_cart_img ovh" style="border-bottom: 1px solid #e7eaf3;">
                   <a href="http://begleryoly.com/item/1883"><img class="my_img2" src="img/2.jpg" alt=""></a>               </div>
               <div class="col-md-12 small_cart_img ovh">
                   <a href="http://begleryoly.com/item/1886"><img class="my_img2" src="img/2.jpg" alt=""></a>               </div>
           </div>
       </div>
   </div>
    <div class="row" style="box-sizing:border-box;border: 1px solid #e7eaf3;    background: #fff;
">
        <div class="col-md-12">
            <div class="caption_cart">
                <h4 style="margin-bottom: 0;">Göwrümli gaplar</h4>
                <p>Öý himiki serişdeleri, azyk we azyk däl önümler üçin</p>
                <a href="http://begleryoly.com/item/onumler/nebit-we-himiya-onumler-ucin-plastik-celekler" class="btn_in_detail">Giňişleýin</a>
            </div>
        </div>
    </div>
</div>
</div>


<div class="clearfix"></div>
<nav aria-label="Page navigation example">
  <ul class="pagination d-flex justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

</div>
</div>