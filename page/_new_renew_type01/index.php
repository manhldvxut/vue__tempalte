<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/global-config.php';
//下記のパス「demo」を変更
include_once $_SERVER['DOCUMENT_ROOT'].'/page/_new_renew_type01/assets/inc/config.php';

$nowURL = $_SERVER['HTTP_HOST'];
$pageURL = STORE_NAME.'.parco.jp';
$devURL = 'dev-'.STORE_NAME.'-parco.sc-concierge.jp';

//ドメインの判定
if ($nowURL === $pageURL || $devURL === $pageURL) {
  $productionFlag = true; //本番とdev
} else {
  $productionFlag = false; //上記以外
}

if ($productionFlag === true) {
  //basic include
  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/page_include.php';
}

//ページ用の変数
$pege_title = 'NEW&RENEWテンプレート　TYPE01';
$pege_description = 'ディスクリプションが入ります';
$pege_keywords = 'キーワード';
$page_shareurl = 'https://'.STORE_NAME.'.parco.jp/page/_new_renew_type01/'; //必ずディレクトリ名を変更する

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/meta.php';?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/tagmanager1.php';?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/css.php';?>
</head>

<body class="<?php echo STORE_NAME; ?> page-tag" id="top">
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/tagmanager2.php';?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/svgs.php';?>

<div class="wrapper">

<?php
/**
 * Header
 */
?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/header.php'; ?>


<?php
/**
 * Main contents
 */
?>
<main class="main-contents">

<nav class="localnav">
  <ul class="localnav-list">
    <li class="localnav-item"><button class="js-tabbtn" data-target="all">ALL</button></li>
    <li class="localnav-item"><button class="js-tabbtn" data-target="ctg01">カテゴリー1</button></li>
    <li class="localnav-item"><button class="js-tabbtn" data-target="ctg02">カテゴリー2</button></li>
    <li class="localnav-item"><button class="js-tabbtn" data-target="ctg03">カテゴリー3</button></li>
  </ul>
<!-- /.localnav --></nav>

<div class="newrenew-block" id="shoplist" v-cloak>


  <div class="list-block">
  <ul class="item-list js-tabarea" v-cloak>
    <li :class="'item ' + shopList.category" v-for="(shopList, index) in list" v-bind:key="index">

      <?php /* 表で表示 */ ?>
      <div class="front-cont">
        <div class="img-wrap">
          <div class="badge-l">
            <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}</template><br><template v-if="shopList.weeks != ''">{{shopList.weeks}}</template></p>
            <p class="new-renew">{{shopList.new_renew}}</p>
          </div>
          <div class="badge-r" v-if="shopList.badge != ''"><p class="txt">{{shopList.badge}}</p></div>
          <div class="img"><img :src="shopList.image01" :alt="shopList.name"></div>
        <!-- /.img-wrap --></div>
        <div class="detail">
          <div class="logo"><img :src="shopList.logo" :alt="shopList.name"></div>
          <p class="shop">{{shopList.name}}</p>
          <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
          <p class="ctg">{{shopList.category_name}}</p>

            <div class="more"><button class="js-modalopen" :data-modal="'modal-'+index">MORE</button></div>
        <!-- /.detail --></div>
      <!-- /.front-cont --></div>

      <?php /* モーダル  */ ?>
      <div :class="'modal-block js-modal newrenew-modal modal-' + index">
        <div class="modal-bg js-modalclose"></div>
        <div class="modal-wrap">
          <button class="modal-close js-modalclose"></button>

          <div class="modal-cont">
            <div class="img-wrap">
              <div class="img-slider js-imgslider">
                <div class="img"><img :src="shopList.image01" :alt="shopList.name"></div>
                <div class="img" v-if="shopList.image02 != ''"><img :src="shopList.image02" :alt="shopList.name"></div>
                <div class="img" v-if="shopList.image03 != ''"><img :src="shopList.image03" :alt="shopList.name"></div>
                <div class="img" v-if="shopList.image04 != ''"><img :src="shopList.image04" :alt="shopList.name"></div>
                <div class="img" v-if="shopList.image05 != ''"><img :src="shopList.image05" :alt="shopList.name"></div>
              </div>
            <!-- /.img-wrap --></div>
            <div class="detail">
              <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}</template><template v-if="shopList.weeks != ''">{{shopList.weeks}}</template></p>
              <p class="new-renew">{{shopList.new_renew}}</p>
              <p class="first" v-if="shopList.badge != ''">{{shopList.badge}}</p>
              <div class="logo"><img :src="shopList.logo" :alt="shopList.name"></div>
              <p class="shop">{{shopList.name}}</p>
              <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
              <p class="ctg">{{shopList.category_name}}</p>
              <p class="introduction" v-html="brTxt(shopList.text)"></p>
              <div class="open-event" v-if="shopList.opening != ''">
                <p class="ttl">オープニング企画</p>
                <p class="txt" v-html="brTxt(shopList.opening)">企画内容</p>
              </div>
              <ul class="link-list">
                <li v-if="shopList.link_page != ''" class="link-item home"><a :href="shopList.link_page" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_home.png" alt="HOME"></a></li>
                <li v-if="shopList.link_recruit != ''" class="link-item recruit"><a :href="shopList.link_recruit" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_recruit.png" alt="STAFF RECRUIT"></a></li>
                <li v-if="shopList.link_twitter != ''" class="link-item tw"><a :href="shopList.link_twitter" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_tw.png" alt="Twitter"></a></li>
                <li v-if="shopList.link_facebook != ''" class="link-item fb"><a :href="shopList.link_facebook" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_fb.png" alt="Facebook"></a></li>
                <li v-if="shopList.link_instagram != ''" class="link-item ig"><a :href="shopList.link_instagram" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_ig.png" alt="Instagram"></a></li>
              <!-- /.link-list --></ul>
            <!-- /.detail --></div>
          </div>

        <!-- /.modal-wrap --></div>
      <!-- /.modal-block --></div>
    </li>
  </ul>
</div>

</main>





<?php
/**
 * Footer
 */
?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/footer.php'; ?>

</div>

<!-- Javascript -->
<script>
  const list = '/<?php echo DIRNAME; ?>/assets/data/shoplist.json';
</script>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/js.php';?>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script src="https://www.promisejs.org/polyfills/promise-7.0.4.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="/<?php echo DIRNAME; ?>/assets/js/lib/slick.min.js"></script>
<script src="/<?php echo DIRNAME; ?>/assets/js/newrenew.js"></script>
<!-- /Javascript -->
</body>
</html>
