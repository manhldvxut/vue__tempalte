<div class="item-list">
  <div class="taglist">
  <?php foreach($disp_data as $val){ ?>
    <div class="taglist__item">
      <div class="taglist__item__in">
          <a href="<?php echo $val["linkurl"]; ?>" class="taglist__link">
            <div class="taglist__photo">
              <img src="https://placehold.jp/ffffff/ffffff/580x580.png" class="lazy" data-original="<?php echo $val["image_path"]; ?>" alt="<?php echo $val["title"]; ?>">
              <?php if (!empty($disp_data["kaeru_cd"])) { ?>
              <div class="taglist__kaeru">
                <div class="taglist__kaeru__num">WEB注文OK</div>
              </div>
              <?php } ?>
            </div>
            <div class="taglist__txt">
              <div class="taglist__name"><?php echo $val["shop_nm"]; ?></div>
              <div class="taglist__title"><?php echo $val["title"]; ?></div>
            </div>
          </a>
      </div>
    </div>
  <?php } ?>
  </div>
  <button class="btn-taglist-more js-tag-more">MORE</button>
</div>
