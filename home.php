<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">
  <title>HOME</title>
</head>

<body>
  <header class="container pt-4">
    <?php get_template_part('includes/header'); ?>
  </header>
  <div class="hero container-fluid mt-3">
    <div class="row">
      <div class="col-12 p-0">
        <img src="<?php echo get_template_directory_uri(); ?>/image/TOP人事労務管理.png" alt="" class="hero-image" />
      </div>
    </div>
    <div class="row hero-msg mt-5">
      <div class="col-12 bg fs-4 text-center">中小企業経営のみなさま</div>
      <div class="col-12 fs-3 mt-4 text-center">
        人事労務管理のお悩み・お困りごとはありませんか？
      </div>
    </div>
  </div>
  <main class="container-fluid">
    <div class="row top-message justify-content-center">
      <div class="col-2 image">
        <img src="<?php echo get_template_directory_uri(); ?>/image/社労士にお任せ指.png" alt="" class="light" />
      </div>
      <div class="col-auto message">
        <p class="text-center fs-4">人事労務の専門家へお任せください！</p>
        <div style="display: inline-block">
          <p class="mt-4">
            社会保険労務士は、会社における「人」についての専門家です。
          </p>
          <p class="mt-3">
            人事労務のご相談はもちろん、煩雑な各種保険手続きの代行、<br />
            毎月の給与計算、助成金申請のお手伝いなどもご相談いただけます。
          </p>
          <p class="mt-3">
            お悩み・お困りごとを抱えた会社様のお話を丁寧にうかがいながら、<br />
            ご状況に合わせた課題解決の方法を一緒に考えます。
          </p>
          <p class="mt-3">今あるお悩み、ぜひ一度教えてください。</p>
        </div>
      </div>
    </div>
    <div class="container my-5">
      <div class="row main-menu justify-content-center">
        <div class="col-12  mb-5">
          <div class="menu-border"></div>
        </div>
        <div class="col-3"><a href="">事務所について<img src="<?php echo get_template_directory_uri(); ?>/image/事務所について.png" alt="事務所について"></a></div>
        <div class="col-3"><a href="">業務案内<img src="<?php echo get_template_directory_uri(); ?>/image/業務案内.png" alt="業務案内"></a></div>
        <div class="col-3"><a href="">お知らせ<img src="<?php echo get_template_directory_uri(); ?>/image/お知らせ.png" alt="お知らせ"></a></div>
        <div class="col-12  mt-3">
          <div class="menu-border"></div>
        </div>
      </div>
    </div>
  </main>
  <footer class="container-fluid py-5">
    <?php get_template_part('includes/footer'); ?>
  </footer>
  <?php get_footer(); ?>
</body>


</html>