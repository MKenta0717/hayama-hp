<!DOCTYPE html>
<html lang="ja" xmlns:th="http://www.thymeleaf.org">

<head>
<?php get_header();?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/business.css" />
  <title>業務案内</title>
</head>

<body>
  <header class="container-lg pt-4 mb-3">
    <?php get_template_part('includes/header'); ?>
  </header>
  <main class="container-fluid">
    <div class="row business-title">
      <p class="col-12 fs-3 py-4 text-center">業務案内</p>
    </div>
    <div class="business-list container business-parts">
      <div class="row">
        <ul class="fs-4 col-7">
          <li>
            <a href="#human-resource"><i class="bi bi-triangle"></i>人事労務に関する相談</a>
          </li>
          <li>
            <a href="#insurance"><i class="bi bi-triangle"></i>労働保険・社会保険手続き</a>
          </li>
          <li>
            <a href="#salary"><i class="bi bi-triangle"></i>給与計算</a>
          </li>
          <li>
            <a href="#labor-regulations"><i class="bi bi-triangle"></i>就業規則作成</a>
          </li>
          <li>
            <a href="#subsidy"><i class="bi bi-triangle"></i>助成金申請</a>
          </li>
          <li>
            <a href="#pension"><i class="bi bi-triangle"></i>年金裁定請求</a>
          </li>
          <li>
            <a href="#government-office"><i class="bi bi-triangle"></i>役所対応</a>
          </li>
        </ul>
      </div>
    </div>
    <div id="human-resource" class="container business-parts">
      <div class="row">
        <div class="col-7 title fs-2">
          <div>人事労務に関するご相談</div>
        </div>
        <div class="col-7 contents fs-4">
          <p>
            会社における「人」に関するお悩みは多岐にわたります。また、労働関連
            法は頻繁に法改正が行われ、最新かつ適切な対応が求められます。<br /><br />
            直面している問題はもちろん、日々のちょっとした疑問も、
            気軽に相談できる人事労務部門のパートナーとしてサポートいたします。
          </p>

          <ul class="list">
            <li>
              <i class="bi bi-dot"></i>労務管理について、専門家に相談したい
            </li>
            <li>
              <i class="bi bi-dot"></i>初めて従業員を採用するが、何をしたら良いかわからない…
            </li>
            <li>
              <i class="bi bi-dot"></i>最新の法改正に合った労務管理ができているか心配…
            </li>
            <li>
              <i class="bi bi-dot"></i>従業員と揉めてしまって、対応に困っている
            </li>
            <li><i class="bi bi-dot"></i>育休の取得について質問された</li>
          </ul>
        </div>
      </div>
    </div>

    <div id="insurance" class="container business-parts">
      <div class="row">
        <div class="col-7 title fs-2">
          <div>労働保険・社会保険手続き</div>
        </div>
        <div class="col-7 contents fs-4">
          <p>
            従業員の入退社や産育休の取得、給与額の変更など、会社では様々なタイミングで、労働保険・社会保険の手続きが必要です。<br />
            これらの手続きは、会社・社員のケースごとに様々で、制度が難解であることも少なくありません。<br /><br />
            専門家に委託することで、迅速かつ正確に処理します。
          </p>

          <ul class="list">
            <li>
              <i class="bi bi-dot"></i>制度が難解なため、専門家にまかせたい
            </li>
            <li>
              <i class="bi bi-dot"></i>従業員の入社～退社まで、どんな手続きがあるかわからない
            </li>
            <li>
              <i class="bi bi-dot"></i>担当者が退職したため、社内でわかる人がいない
            </li>
            <li>
              <i class="bi bi-dot"></i>正しい社会保険の手続きができているか不安
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div id="salary" class="container business-parts">
      <div class="row">
        <div class="col-7 title fs-2">
          <div>給与計算</div>
        </div>
        <div class="col-7 contents fs-4">
          <p>
            毎月必ず発生する給与計算業務は、実は多くの専門知識が必要です。<br /><br />
            様々な給与計算システムが普及し、簡単に自動計算をしてくれるようになりましたが、関連法令や保険料の改定などの最新情報を追いかけながらの設定の変更には、かなりの労力を要します。<br /><br />
            専門知識と実務経験のある専門家が、迅速・性格に計算します
          </p>

          <ul class="list">
            <li>
              <i class="bi bi-dot"></i>毎月の給与計算に時間がかかっていて大変・・・
            </li>
            <li>
              <i class="bi bi-dot"></i>給与計算の間違いを従業員から指摘されてしまった
            </li>
            <li>
              <i class="bi bi-dot"></i>担当者が退職したため、社内でわかる人がいない
            </li>
            <li><i class="bi bi-dot"></i>正しい給与計算ができているか不安</li>
          </ul>
        </div>
      </div>
    </div>

    <div id="labor-regulations" class="container business-parts">
      <div class="row">
        <div class="col-7 title fs-2">
          <div>就業規則作成</div>
        </div>
        <div class="col-7 contents fs-4">
          <p>
            会社で働くうえでのルールを定めることで、働きやすい職場環境が整備され、無用な労務トラブルの予防に繋がります。<br /><br />
            事前のヒアリングで、現在の会社様での制度運用なども確認しながら、それぞれの会社様にぴったりな就業規則を一緒に考えます。
          </p>

          <ul class="list">
            <li>
              <i class="bi bi-dot"></i>従業員数が１０名以上となったため、就業規則が必要になった
            </li>
            <li>
              <i class="bi bi-dot"></i>就業規則はあるが、最新の法改正に対応していない
            </li>
            <li>
              <i class="bi bi-dot"></i>テレワークを導入したが、就業規則に規定をしていなかった
            </li>
            <li>
              <i class="bi bi-dot"></i>育児休業を取得する従業員がいるが、関係ルールが整備されていない
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div id="subsidy" class="container business-parts">
      <div class="row">
        <div class="col-7 title fs-2">
          <div>助成金申請</div>
        </div>
        <div class="col-7 contents fs-4">
          <p>
            助成金は、雇用の安定や職場環境の改善、仕事と家庭の両立支援、従業員の能力向上など、労働環境の改善をした会社を支援するためのものです。<br /><br />
            様々な助成金の中から<br />
            それぞれの会社様のご状況に合わせてご提案をいたします。
          </p>

          <ul class="list">
            <li><i class="bi bi-dot"></i>どんな助成金が使えるか知りたい</li>
            <li><i class="bi bi-dot"></i>契約社員を正社員として雇用する</li>
            <li>
              <i class="bi bi-dot"></i>従業員の円滑な育児休業取得。職場復帰のためのルールを整えた
            </li>
            <li><i class="bi bi-dot"></i>定年年齢を引き上げた</li>
            <li>
              <i class="bi bi-dot"></i>従業員に対して、社内研修を充実させる
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div id="pension" class="container business-parts">
      <div class="row">
        <div class="col-7 title fs-2">
          <div>年金裁定請求</div>
        </div>
        <div class="col-7 contents fs-4">
          <p>
            年金は、自動的には支給が開始されず、申請手続きが必要となります。<br /><br />
            複雑な年金制度について、分かりやすく説明します。<br />
            また、必要に応じて各種お手続きをお手伝いいたします。
          </p>
        </div>
      </div>
    </div>

    <div id="government-office" class="container business-parts">
      <div class="row">
        <div class="col-7 title fs-2">
          <div>役所対応</div>
        </div>
        <div class="col-7 contents fs-4">
          <p>
            税務署と同じように、労働・社会保険関連の役所でも、労働関係法令に基づき、会社の労務管理が適正化を確認するための調査が実施されています。<br /><br />
            調査がいつ来ても良いような対策、実際に調査が入った時の対応、今後の改善方法・対策など、会社側の立場でサポートいたします。
          </p>

          <ul class="list">
            <li><i class="bi bi-dot"></i>役所調査でしてきされる可能性を軽減しておきたい</li>
            <li><i class="bi bi-dot"></i>是正勧告・指導を受けたが、どう対応したらよいかわからない</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-7 fs-4">
          <p>
            その他お手続きや、<br />
            人事労務に関するお悩みやお困りごと、お気軽にお問い合わせください。
          </p>
        </div>
        <div class="col-7 fs-4 text-center">
          <div class="pricelist my-5"><a href="<?php echo home_url('price');?>">料金表</a></div>
        </div>

      </div>
    </div>
  </main>
  <footer class="container-fluid py-5">
    <?php get_template_part('includes/footer'); ?>
  </footer>
  <?php get_footer(); ?>
</body>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</html>