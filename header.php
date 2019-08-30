<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<!-- bloginfo('charset') ページの文字コードを出力する。 -->
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<!-- get_stylesheet_uri() テーマ用 CSS（style.css）の URL を絶対パスとして取得する。 -->
<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
<!-- bloginfo('name') 管理画面の「設定」→「一般」で設定された「サイトのタイトル」を出力する。
wp_title() ページのタイトルを出力する。最初の引数で区切り文字を指定できる。 -->
<?php wp_head(); ?>
 </head>
<body>
<div id="container">
 <header>
 <h1>
 <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
 <span>- <?php bloginfo('description'); ?> -</span>
 </h1>
 </header>
<!-- home_url() サイトのホーム URL を取得する。 -->
<!-- bloginfo('description') 管理画面の「設定」→「一般」で設定された「キャッチフレーズ」を出力する。 -->

<nav id="global">
 <?php wp_nav_menu(array("container"=>false)); ?>
</nav>

<!--   <nav id="global"> -->
<!--     <ul> -->
      <li class="current_page_item"><a href="<?php echo home_url(); ?>">Top</a></li>
<!--       <li><a href="about.html">About</a></li> -->
<!--     </ul> -->
<!--   </nav> -->
  <main>
    <div id="contents">