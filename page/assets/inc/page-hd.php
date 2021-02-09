<?php /* ===========================================================
共通ヘッダー
============================================================== */ ?>
<div class="phd">
<div class="phd__in">
<p class="phd__logo"><a href="/">
<?php /* パルコや上野以外 */ ?>
  <svg class="phd__logo__txt">
    <title><?php echo STORE_NAME_JA; ?></title>
    <desc><?php echo STORE_NAME_JA; ?></desc>
    <use xlink:href="#parco-logo-<?php echo STORE_NAME; ?>"/>
  </svg>
  <svg class="phd__logo__img">
    <title>PARCO</title>
    <desc>PARCO</desc>
    <use xlink:href="#parco-logo"/>
  </svg>
<?php /* パルコや上野 */ ?>
  <?php /* ?>
  <svg class="phd__logo__img parcoya-ueno">
    <title>パルコヤ上野</title>
    <desc>パルコヤ上野</desc>
    <use xlink:href="#parco-logo-parcoya-ueno"/>
  </svg>
  <?php */ ?>
</a></p>

<?php /* ==========================================================
SNS公式アカウントリスト
============================================================== */ ?>
  <ul class="phd__sns"><!--
  --><li class="phd__sns__item"><a href="#" class="phd__sns__item__link-facebook" target="_blank">
          <svg class="facebook">
              <title>Facebook</title>
              <desc>Facebook</desc>
              <use xlink:href="#icon-facebook"/>
          </svg>
      </a></li><!--
  --><li class="phd__sns__item"><a href="#" class="phd__sns__item__link-twitter" target="_blank">
          <svg class="twitter">
              <title>Twitter</title>
              <desc>Twitter</desc>
              <use xlink:href="#icon-twitter"/>
          </svg>
      </a></li><!--
  --><li class="phd__sns__item"><a href="#" class="phd__sns__item__link-lineat" target="_blank">
          <svg class="line">
              <title>LINE@</title>
              <desc>LINE@</desc>
              <use xlink:href="#icon-lineat"/>
          </svg>
      </a></li><!--
  --><li class="phd__sns__item"><a href="#" class="phd__sns__item__link-instagram" target="_blank">
          <svg class="instagram">
              <title>Instagram</title>
              <desc>Instagram</desc>
              <use xlink:href="#icon-instagram"/>
          </svg>
      </a></li><!--
  --></ul>
</div>
<!-- /phd --></div>
