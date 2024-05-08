<!DOCTYPE html>
<html lang="ja" xmlns:th="http://www.thymeleaf.org">
  <head>
   <?php get_header();?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/about.css" />
    <title>事務所について</title>
  </head>
  <body>
    <header class="container pt-4 mb-3">
      <?php get_template_part('includes/header');?>
    </header>
    <main class="container-fluid">
      <div class="row about-title">
        <p class="col-12 fs-3 py-4 text-center">事務所について</p>
      </div>
      <div class="features container mt-4">
        <div class="row features-title">
          <div
            class="col-4 text-center border-frame py-3"
            style="margin: 0 auto"
          >
            <p class="fs-4">当事務所の特徴</p>
          </div>
        </div>
        <div class="row features_1 justify-content-center">
          <div class="col-3 features-icon">
            <img src="<?php echo get_template_directory_uri();?>/image/特徴1.png" alt="" class="w-75" />
          </div>
          <div class="col-5 features-text align-self-center fs-3">
            <p>女性ならではの<br />きめ細やかなサポート</p>
          </div>
        </div>
        <div class="row features_2 justify-content-center">
          <div class="col-3 features-icon">
            <img src="<?php echo get_template_directory_uri();?>/image/特徴2.png" alt="" class="w-75" />
          </div>
          <div class="col-5 features-text align-self-center fs-3">
            <p>オンライン対応で、<br />全国どこからでも◎ !</p>
          </div>
        </div>
        <div class="row features_3 justify-content-center">
          <div class="col-3 features-icon">
            <img src="<?php echo get_template_directory_uri();?>/image/特徴3.png" alt="" class="w-75" />
          </div>
          <div class="col-5 features-text align-self-center fs-3">
            <p>
              ちょっとしたことも相談しやすい<br />個別契約（スポット契約）にも対応
            </p>
          </div>
        </div>
      </div>

      <div class="merit container">
        <div class="row merit-title">
          <div
            class="col-4 text-center border-frame py-3"
            style="margin: 0 auto"
          >
            <p class="fs-4">社会保険労務士への委託のメリット</p>
          </div>
        </div>
        <div class="row justify-content-center gap-5 mt-5">
          <div class="col-3 merit-1">
            <p class="merit-item-title fs-4">業務効率化</p>
            <p>
              複雑かつ煩雑業務の負担を軽減。<br />業務の効率化を図れるため、会社の本来の業務に集中して頂けます。
            </p>
          </div>
          <div class="col-3 merit-2">
            <p class="merit-item-title fs-4">迅速・性格</p>
            <p>
              労働・社会保険の手続きや各種申請、帳簿書類の作成などの事務手続きを迅速・性格に処理。<br />
              担当者様の負担軽減を実現します。
            </p>
          </div>
        </div>
        <div class="row justify-content-center gap-5 mt-5">
          <div class="col-3 merit-3">
            <p class="merit-item-title fs-4">トラブル防止・早期解決</p>
            <p>
              会社のルールを整備し、職場環境を整えることで、労使間トラブルも事前に予防し、問題が生じた際も的確なアドバイスで、早期解決に導きます。
            </p>
          </div>
          <div class="col-3 merit-4">
            <p class="merit-item-title fs-4">最新情報</p>
            <p>
              法改正情報をはじめ、業界知識や社会的動向に
              常に気を配り、最新の法令に基づいて業務を処理します。<br />知識や情報をぜひご活用ください！
            </p>
          </div>
        </div>
      </div>

      <div class="greeting container">
        <div class="row greeting-title">
          <div
            class="col-4 text-center border-frame py-3"
            style="margin: 0 auto"
          >
            <p class="fs-4">ごあいさつ</p>
          </div>
        </div>
        <div class="row mt-5 justify-content-center">
          <div class="col-auto greeting-text fs-5">
            <p>
              はじめまして、社会保険労務士の羽山ひとみと申します。
            </p><br>
            <p> 
              煩雑で複雑な人事労務管理について、<br>
              お悩み・お困りごとをお持ちの会社様は多いのではないでしょうか。
            </p><br>
            <p>
              今ある問題やお悩みにも、日々のちょっとした疑問にも、<br>
              丁寧にヒアリングをしながら、<br>
              会社様に合った対応・解決方法を一緒に考えます。
            </p><br>
            <p>
              貴社の人事労務管理のビジネスパートナーとして、<br>
              サポートをしてまいります。
            </p><br>
            <p>
              ぜひ一度、今あるお悩みをご相談ください。
            </p>
            <div>
              <br><br>
              <p class="name">社会保険労務士　<span class="fs-4" style="font-weight: bold;"><ruby>羽山<rt>はやま</rt></ruby>ひとみ</span></p>
            </div>
          </div>
        </div>
        <div class="row">
          
        </div>
      </div>
    </main>
    <footer class="container-fluid py-5">
      <?php get_template_part('includes/footer');?>
    </footer>
    <?php get_footer();?>
  </body>

  
</html>
