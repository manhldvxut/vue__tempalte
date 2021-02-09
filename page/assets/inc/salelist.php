<?php /* 館タブは店舗ごとに変更しておく */ ?>
<ul class="floornav">
  <li class="floornav__item floornav__item01"><a href="/page/sale/?slcd=<?php echo $sale_id; ?>&amp;floor_type=type1">本館</a></li>
  <li class="floornav__item floornav__item02"><a href="/page/sale/?slcd=<?php echo $sale_id; ?>&amp;floor_type=type2">P'PARCO</a></li>
</ul>

<div class="salelists-container">

<div class="salelist-info1"><?php echo (!empty($disp_sale_data["pc_text1"]))? $disp_sale_data["pc_text1"] : ""; ?></div>

<div class="salelists">


<?php if($disp_sale_data[$floor_type]["b2f"]){ ?>
<div class="salelist">
  <h3 class="salelist__title is-open"><span class="salelist__title__floor">B2F</span><i class="ico-arr"></i></h3>
  <div class="salelist__cont">
    <div class="salelist__cont__in">
  <?php $cnt=1; ?>
  <?php foreach($disp_sale_data[$floor_type]["b2f"] as $val){ ?>
    <?php if(empty($val['shop_cd'])) continue; ?>
    <div class="salelist__shop salelist__shop0<?php echo $cnt; ?>"><a href="/shop/detail/?cd=<?php echo $val['shop_cd']; ?>" class="salelist__link">
      <div class="salelist__data">
        <div class="salelist__data__item01"><img src="<?php echo $val['logo_url']; ?>" alt="<?php echo $val['shop_shop_nm']; ?>"></div>
        <div class="salelist__data__item02">
          <div class="salelist__shopname"><?php echo $val['shop_shop_nm']; ?></div>
          <div class="salelist__text"><?php echo $val['textarea_value2']; ?></div>
        </div>
      </div>
    </a></div>
  <?php $cnt++; ?>
  <?php } ?>
  </div>
  <!-- salelist__cont --></div>
</div>
<?php } ?>


<?php if($disp_sale_data[$floor_type]["b1f"]){ ?>
<div class="salelist">
  <h3 class="salelist__title is-open"><span class="salelist__title__floor">B1F</span><i class="ico-arr"></i></h3>
  <div class="salelist__cont">
    <div class="salelist__cont__in">
  <?php $cnt=1; ?>
  <?php foreach($disp_sale_data[$floor_type]["b1f"] as $val){ ?>
    <?php if(empty($val['shop_cd'])) continue; ?>
    <div class="salelist__shop salelist__shop0<?php echo $cnt; ?>"><a href="/shop/detail/?cd=<?php echo $val['shop_cd']; ?>" class="salelist__link">
      <div class="salelist__data">
        <div class="salelist__data__item01"><img src="<?php echo $val['logo_url']; ?>"></div>
        <div class="salelist__data__item02">
          <div class="salelist__shopname"><?php echo $val['shop_shop_nm']; ?></div>
          <div class="salelist__text"><?php echo $val['textarea_value2']; ?></div>
        </div>
      </div>
    </a></div>
  <?php $cnt++; ?>
  <?php } ?>
  </div>
  <!-- salelist__cont --></div>
</div>
<?php } ?>


<?php if($disp_sale_data[$floor_type]["1f"]){ ?>
<div class="salelist">
  <h3 class="salelist__title is-open"><span class="salelist__title__floor">1F</span><i class="ico-arr"></i></h3>
  <div class="salelist__cont">
    <div class="salelist__cont__in">
  <?php $cnt=1; ?>
  <?php foreach($disp_sale_data[$floor_type]["1f"] as $val){ ?>
    <?php if(empty($val['shop_cd'])) continue; ?>
    <div class="salelist__shop salelist__shop0<?php echo $cnt; ?>"><a href="/shop/detail/?cd=<?php echo $val['shop_cd']; ?>" class="salelist__link">
      <div class="salelist__data">
        <div class="salelist__data__item01"><img src="<?php echo $val['logo_url']; ?>"></div>
        <div class="salelist__data__item02">
          <div class="salelist__shopname"><?php echo $val['shop_shop_nm']; ?></div>
          <div class="salelist__text"><?php echo $val['textarea_value2']; ?></div>
        </div>
      </div>
    </a></div>
  <?php $cnt++; ?>
  <?php } ?>
  </div>
  <!-- salelist__cont --></div>
</div>
<?php } ?>


<?php if($disp_sale_data[$floor_type]["m2f"]){ ?>
<div class="salelist">
  <h3 class="salelist__title is-open"><span class="salelist__title__floor">M2F</span><i class="ico-arr"></i></h3>
  <div class="salelist__cont">
    <div class="salelist__cont__in">
  <?php $cnt=1; ?>
  <?php foreach($disp_sale_data[$floor_type]["m2f"] as $val){ ?>
    <?php if(empty($val['shop_cd'])) continue; ?>
    <div class="salelist__shop salelist__shop0<?php echo $cnt; ?>"><a href="/shop/detail/?cd=<?php echo $val['shop_cd']; ?>" class="salelist__link">
      <div class="salelist__data">
        <div class="salelist__data__item01"><img src="<?php echo $val['logo_url']; ?>"></div>
        <div class="salelist__data__item02">
          <div class="salelist__shopname"><?php echo $val['shop_shop_nm']; ?></div>
          <div class="salelist__text"><?php echo $val['textarea_value2']; ?></div>
        </div>
      </div>
    </a></div>
  <?php $cnt++; ?>
  <?php } ?>
  </div>
  <!-- salelist__cont --></div>
</div>
<?php } ?>


<?php if($disp_sale_data[$floor_type]["2f"]){ ?>
<div class="salelist">
  <h3 class="salelist__title is-open"><span class="salelist__title__floor">2F</span><i class="ico-arr"></i></h3>
  <div class="salelist__cont">
    <div class="salelist__cont__in">
  <?php $cnt=1; ?>
  <?php foreach($disp_sale_data[$floor_type]["2f"] as $val){ ?>
    <?php if(empty($val['shop_cd'])) continue; ?>
    <div class="salelist__shop salelist__shop0<?php echo $cnt; ?>"><a href="/shop/detail/?cd=<?php echo $val['shop_cd']; ?>" class="salelist__link">
      <div class="salelist__data">
        <div class="salelist__data__item01"><img src="<?php echo $val['logo_url']; ?>"></div>
        <div class="salelist__data__item02">
          <div class="salelist__shopname"><?php echo $val['shop_shop_nm']; ?></div>
          <div class="salelist__text"><?php echo $val['textarea_value2']; ?></div>
        </div>
      </div>
    </a></div>
  <?php $cnt++; ?>
  <?php } ?>
  </div>
  <!-- salelist__cont --></div>
</div>
<?php } ?>

<?php if($disp_sale_data[$floor_type]["3f"]){ ?>
<div class="salelist">
  <h3 class="salelist__title is-open"><span class="salelist__title__floor">3F</span><i class="ico-arr"></i></h3>
  <div class="salelist__cont">
    <div class="salelist__cont__in">
  <?php $cnt=1; ?>
  <?php foreach($disp_sale_data[$floor_type]["3f"] as $val){ ?>
    <?php if(empty($val['shop_cd'])) continue; ?>
    <div class="salelist__shop salelist__shop0<?php echo $cnt; ?>"><a href="/shop/detail/?cd=<?php echo $val['shop_cd']; ?>" class="salelist__link">
      <div class="salelist__data">
        <div class="salelist__data__item01"><img src="<?php echo $val['logo_url']; ?>"></div>
        <div class="salelist__data__item02">
          <div class="salelist__shopname"><?php echo $val['shop_shop_nm']; ?></div>
          <div class="salelist__text"><?php echo $val['textarea_value2']; ?></div>
        </div>
      </div>
    </a></div>
  <?php $cnt++; ?>
  <?php } ?>
  </div>
  <!-- salelist__cont --></div>
</div>
<?php } ?>

<?php if($disp_sale_data[$floor_type]["4f"]){ ?>
<div class="salelist">
  <h3 class="salelist__title is-open"><span class="salelist__title__floor">4F</span><i class="ico-arr"></i></h3>
  <div class="salelist__cont">
    <div class="salelist__cont__in">
  <?php $cnt=1; ?>
  <?php foreach($disp_sale_data[$floor_type]["4f"] as $val){ ?>
    <?php if(empty($val['shop_cd'])) continue; ?>
    <div class="salelist__shop salelist__shop0<?php echo $cnt; ?>"><a href="/shop/detail/?cd=<?php echo $val['shop_cd']; ?>" class="salelist__link">
      <div class="salelist__data">
        <div class="salelist__data__item01"><img src="<?php echo $val['logo_url']; ?>"></div>
        <div class="salelist__data__item02">
          <div class="salelist__shopname"><?php echo $val['shop_shop_nm']; ?></div>
          <div class="salelist__text"><?php echo $val['textarea_value2']; ?></div>
        </div>
      </div>
    </a></div>
  <?php $cnt++; ?>
  <?php } ?>
  </div>
  <!-- salelist__cont --></div>
</div>
<?php } ?>

<?php if($disp_sale_data[$floor_type]["5f"]){ ?>
<div class="salelist">
  <h3 class="salelist__title is-open"><span class="salelist__title__floor">5F</span><i class="ico-arr"></i></h3>
  <div class="salelist__cont">
    <div class="salelist__cont__in">
  <?php $cnt=1; ?>
  <?php foreach($disp_sale_data[$floor_type]["5f"] as $val){ ?>
    <?php if(empty($val['shop_cd'])) continue; ?>
    <div class="salelist__shop salelist__shop0<?php echo $cnt; ?>"><a href="/shop/detail/?cd=<?php echo $val['shop_cd']; ?>" class="salelist__link">
      <div class="salelist__data">
        <div class="salelist__data__item01"><img src="<?php echo $val['logo_url']; ?>"></div>
        <div class="salelist__data__item02">
          <div class="salelist__shopname"><?php echo $val['shop_shop_nm']; ?></div>
          <div class="salelist__text"><?php echo $val['textarea_value2']; ?></div>
        </div>
      </div>
    </a></div>
  <?php $cnt++; ?>
  <?php } ?>
  </div>
  <!-- salelist__cont --></div>
</div>
<?php } ?>

<?php if($disp_sale_data[$floor_type]["6f"]){ ?>
<div class="salelist">
  <h3 class="salelist__title is-open"><span class="salelist__title__floor">6F</span><i class="ico-arr"></i></h3>
  <div class="salelist__cont">
    <div class="salelist__cont__in">
  <?php $cnt=1; ?>
  <?php foreach($disp_sale_data[$floor_type]["6f"] as $val){ ?>
    <?php if(empty($val['shop_cd'])) continue; ?>
    <div class="salelist__shop salelist__shop0<?php echo $cnt; ?>"><a href="/shop/detail/?cd=<?php echo $val['shop_cd']; ?>" class="salelist__link">
      <div class="salelist__data">
        <div class="salelist__data__item01"><img src="<?php echo $val['logo_url']; ?>"></div>
        <div class="salelist__data__item02">
          <div class="salelist__shopname"><?php echo $val['shop_shop_nm']; ?></div>
          <div class="salelist__text"><?php echo $val['textarea_value2']; ?></div>
        </div>
      </div>
    </a></div>
  <?php $cnt++; ?>
  <?php } ?>
  </div>
  <!-- salelist__cont --></div>
</div>
<?php } ?>

<?php if($disp_sale_data[$floor_type]["7f"]){ ?>
<div class="salelist">
  <h3 class="salelist__title is-open"><span class="salelist__title__floor">7F</span><i class="ico-arr"></i></h3>
  <div class="salelist__cont">
    <div class="salelist__cont__in">
  <?php $cnt=1; ?>
  <?php foreach($disp_sale_data[$floor_type]["7f"] as $val){ ?>
    <?php if(empty($val['shop_cd'])) continue; ?>
    <div class="salelist__shop salelist__shop0<?php echo $cnt; ?>"><a href="/shop/detail/?cd=<?php echo $val['shop_cd']; ?>" class="salelist__link">
      <div class="salelist__data">
        <div class="salelist__data__item01"><img src="<?php echo $val['logo_url']; ?>"></div>
        <div class="salelist__data__item02">
          <div class="salelist__shopname"><?php echo $val['shop_shop_nm']; ?></div>
          <div class="salelist__text"><?php echo $val['textarea_value2']; ?></div>
        </div>
      </div>
    </a></div>
  <?php $cnt++; ?>
  <?php } ?>
  </div>
  <!-- salelist__cont --></div>
</div>
<?php } ?>

<?php if($disp_sale_data[$floor_type]["8f"]){ ?>
<div class="salelist">
  <h3 class="salelist__title is-open"><span class="salelist__title__floor">8F</span><i class="ico-arr"></i></h3>
  <div class="salelist__cont">
    <div class="salelist__cont__in">
  <?php $cnt=1; ?>
  <?php foreach($disp_sale_data[$floor_type]["8f"] as $val){ ?>
    <?php if(empty($val['shop_cd'])) continue; ?>
    <div class="salelist__shop salelist__shop0<?php echo $cnt; ?>"><a href="/shop/detail/?cd=<?php echo $val['shop_cd']; ?>" class="salelist__link">
      <div class="salelist__data">
        <div class="salelist__data__item01"><img src="<?php echo $val['logo_url']; ?>"></div>
        <div class="salelist__data__item02">
          <div class="salelist__shopname"><?php echo $val['shop_shop_nm']; ?></div>
          <div class="salelist__text"><?php echo $val['textarea_value2']; ?></div>
        </div>
      </div>
    </a></div>
  <?php $cnt++; ?>
  <?php } ?>
  </div>
  <!-- salelist__cont --></div>
</div>
<?php } ?>

<?php if($disp_sale_data[$floor_type]["9f"]){ ?>
<div class="salelist">
  <h3 class="salelist__title is-open"><span class="salelist__title__floor">9F</span><i class="ico-arr"></i></h3>
  <div class="salelist__cont">
    <div class="salelist__cont__in">
  <?php $cnt=1; ?>
  <?php foreach($disp_sale_data[$floor_type]["9f"] as $val){ ?>
    <?php if(empty($val['shop_cd'])) continue; ?>
    <div class="salelist__shop salelist__shop0<?php echo $cnt; ?>"><a href="/shop/detail/?cd=<?php echo $val['shop_cd']; ?>" class="salelist__link">
      <div class="salelist__data">
        <div class="salelist__data__item01"><img src="<?php echo $val['logo_url']; ?>"></div>
        <div class="salelist__data__item02">
          <div class="salelist__shopname"><?php echo $val['shop_shop_nm']; ?></div>
          <div class="salelist__text"><?php echo $val['textarea_value2']; ?></div>
        </div>
      </div>
    </a></div>
  <?php $cnt++; ?>
  <?php } ?>
  </div>
  <!-- salelist__cont --></div>
</div>
<?php } ?>

<?php if($disp_sale_data[$floor_type]["10f"]){ ?>
<div class="salelist">
  <h3 class="salelist__title is-open"><span class="salelist__title__floor">10</span>F<i class="ico-arr"></i></h3>
  <div class="salelist__cont">
    <div class="salelist__cont__in">
  <?php $cnt=1; ?>
  <?php foreach($disp_sale_data[$floor_type]["10f"] as $val){ ?>
    <?php if(empty($val['shop_cd'])) continue; ?>
    <div class="salelist__shop salelist__shop0<?php echo $cnt; ?>"><a href="/shop/detail/?cd=<?php echo $val['shop_cd']; ?>" class="salelist__link">
      <div class="salelist__data">
        <div class="salelist__data__item01"><img src="<?php echo $val['logo_url']; ?>"></div>
        <div class="salelist__data__item02">
          <div class="salelist__shopname"><?php echo $val['shop_shop_nm']; ?></div>
          <div class="salelist__text"><?php echo $val['textarea_value2']; ?></div>
        </div>
      </div>
    </a></div>
  <?php $cnt++; ?>
  <?php } ?>
  </div>
  <!-- salelist__cont --></div>
</div>
<?php } ?>

<?php if($disp_sale_data[$floor_type]["11f"]){ ?>
<div class="salelist">
  <h3 class="salelist__title is-open"><span class="salelist__title__floor">11</span>F<i class="ico-arr"></i></h3>
  <div class="salelist__cont">
    <div class="salelist__cont__in">
  <?php $cnt=1; ?>
  <?php foreach($disp_sale_data[$floor_type]["11f"] as $val){ ?>
    <?php if(empty($val['shop_cd'])) continue; ?>
    <div class="salelist__shop salelist__shop0<?php echo $cnt; ?>"><a href="/shop/detail/?cd=<?php echo $val['shop_cd']; ?>" class="salelist__link">
      <div class="salelist__data">
        <div class="salelist__data__item01"><img src="<?php echo $val['logo_url']; ?>"></div>
        <div class="salelist__data__item02">
          <div class="salelist__shopname"><?php echo $val['shop_shop_nm']; ?></div>
          <div class="salelist__text"><?php echo $val['textarea_value2']; ?></div>
        </div>
      </div>
    </a></div>
  <?php $cnt++; ?>
  <?php } ?>
  </div>
  <!-- salelist__cont --></div>
</div>
<?php } ?>

<?php if($disp_sale_data[$floor_type]["rf"]){ ?>
<div class="salelist">
  <h3 class="salelist__title is-open"><span class="salelist__title__floor">RF</span><i class="ico-arr"></i></h3>
  <div class="salelist__cont">
    <div class="salelist__cont__in">
  <?php $cnt=1; ?>
  <?php foreach($disp_sale_data[$floor_type]["rf"] as $val){ ?>
    <?php if(empty($val['shop_cd'])) continue; ?>
    <div class="salelist__shop salelist__shop0<?php echo $cnt; ?>"><a href="/shop/detail/?cd=<?php echo $val['shop_cd']; ?>" class="salelist__link">
      <div class="salelist__data">
        <div class="salelist__data__item01"><img src="<?php echo $val['logo_url']; ?>"></div>
        <div class="salelist__data__item02">
          <div class="salelist__shopname"><?php echo $val['shop_shop_nm']; ?></div>
          <div class="salelist__text"><?php echo $val['textarea_value2']; ?></div>
        </div>
      </div>
    </a></div>
  <?php $cnt++; ?>
  <?php } ?>
  </div>
  <!-- salelist__cont --></div>
</div>
<?php } ?>



</div>



<div class="salelist-info2">
  <?php echo (!empty($disp_sale_data["pc_text2"]))? $disp_sale_data["pc_text2"] : ""; ?>
</div>

</div>
