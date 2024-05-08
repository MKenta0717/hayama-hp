<!DOCTYPE html>
<html lang="ja" xmlns:th="http://www.thymeleaf.org">

<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/price.css">
  <title>Document</title>
</head>

<body>
  <header class="container pt-4 mb-3">
    <?php get_template_part('includes/header'); ?>
  </header>
  
  <main class="container-fluid">
    <div class="row price-title">
      <p class="col-12 fs-3 py-4 text-center">料金表</p>
    </div>

    <div class="container-lg price-parts">
      <div class="row">
        <div class="col-lg-7 title fs-2">
          <div>
            顧問契約<span class="fs-5">（労務相談・手続き代行）</span>
          </div>
        </div>
        <div class="col-lg-7 contents fs-5">
          <ul>
            <li>〇　日常の人事・労務管理及び労働法令に関する相談・助言</li>
            <li>
              〇　各種社会保険・労働保険に関する手続き<br /><span class="fs-6">　　　※労働保険料の年度更新・算定基礎届の申請等は別途お見積もりいたします。</span>
            </li>
          </ul>

          <table class="table text-center border-white table-bordered fs-6 mt-4">
            <thead>
              <tr>
                <th scope="col">従業員数</th>
                <th scope="col"><u>相談　＋　手続き</u></th>
                <th scope="col"><u>相談のみ</u></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1～4人</th>
                <td>16,500円~</td>
                <td rowspan="2">11,000円~</td>
              </tr>
              <tr>
                <th scope="row">5～9人</th>
                <td>22,000円~</td>
              </tr>
              <tr>
                <th scope="row">10～19人</th>
                <td>33,000円~</td>
                <td>16,500円~</td>
              </tr>
              <tr>
                <th scope="row">20～29人</th>
                <td>44,000円~</td>
                <td>22,000円~</td>
              </tr>
              <tr>
                <th scope="row">30～39人</th>
                <td>55,000円~</td>
                <td>27,500円~</td>
              </tr>
              <tr>
                <th scope="row">40～49人</th>
                <td>66,000円~</td>
                <td>33,000円~</td>
              </tr>
              <tr>
                <th scope="row">50人～</th>
                <td colspan="2">別途お見積もり</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="container-lg price-parts">
      <div class="row">
        <div class="col-lg-7 title fs-2">
          <div>労働保険・社会保険手続き</div>
        </div>
        <div class="col-lg-7 contents fs-4">
          <table class="table text-center border-white table-bordered fs-6 mt-4">
            <thead>
              <tr>
                <th scope="col">従業員数</th>
                <th scope="col">顧問契約あり</th>
                <th scope="col">顧問契約なし</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">各種手続き</th>
                <td>一部顧問契約に含む</td>
                <td>11,000円~</td>
              </tr>
              <tr>
                <th scope="row">
                  労働保険料の年度更新<br />（年に1回　7/10締切）
                </th>
                <td>33,000円~</td>
                <td>55,000円~</td>
              </tr>
              <tr>
                <th scope="row">
                  社会保険の算定基礎届<br />（年に1回　7/10締切）
                </th>
                <td>33,000円~</td>
                <td>55,000円~</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="container-lg price-parts">
      <div class="row">
        <div class="col-lg-7 title fs-2">
          <div>給与・賞与計算</div>
        </div>
        <div class="col-lg-7 contents fs-5">
          <ul>
            <li>
              〇　月次給与・賞与計算<br /><span class="fs-6">　　　年次有給休暇の管理、支給控除項目入力、銀行振込データ作成、各種帳票作成など</span>
            </li>
            <li>〇　日常の人事・労務管理及び労働法令に関する相談・助言</li>
          </ul>

          <table class="table text-center border-white table-bordered fs-6 mt-4">
            <thead>
              <tr>
                <th scope="col">従業員数</th>
                <th scope="col">月額基本料</th>
                <th scope="col">人数加算</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1～4人</th>
                <td>5,500円~</td>
                <td>―</td>
              </tr>
              <tr>
                <th scope="row">5～9人</th>
                <td>11,000円~</td>
                <td rowspan="5">550円 / 人</td>
              </tr>
              <tr>
                <th scope="row">10～19人</th>
                <td>16,500円~</td>
              </tr>
              <tr>
                <th scope="row">20～29人</th>
                <td>22,000円~</td>
              </tr>
              <tr>
                <th scope="row">30～39人</th>
                <td>27,500円~</td>
              </tr>
              <tr>
                <th scope="row">40～49人</th>
                <td>33,000円~</td>
              </tr>
              <tr>
                <th scope="row">50人～</th>
                <td colspan="2">別途お見積もり</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="container-lg price-parts">
      <div class="row">
        <div class="col-lg-7 title fs-2">
          <div>就業規則作成</div>
        </div>
        <div class="col-lg-7 contents fs-4">
          <table class="table text-center border-white table-bordered fs-6 mt-4">
            <thead>
              <tr>
                <th scope="col">内容</th>
                <th scope="col">顧問契約あり</th>
                <th scope="col">顧問契約なし</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">就業規則の新規作成</th>
                <td>165,000円~</td>
                <td>220,000円~</td>
              </tr>
              <tr>
                <th scope="row">各種既定の新規作成</th>
                <td>110,000円~</td>
                <td>165,000円~</td>
              </tr>
              <tr>
                <th scope="row">各種既定の改訂・変更</th>
                <td>33,000円~</td>
                <td>55,000円~</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="container-lg price-parts">
      <div class="row">
        <div class="col-lg-7 title fs-2">
          <div>助成金申請</div>
        </div>
        <div class="col-lg-7 contents fs-4">
          <table class="table text-center border-white table-bordered fs-6 mt-4">
            <thead>
              <tr>
                <th scope="col">内容</th>
                <th scope="col">顧問契約あり</th>
                <th scope="col">顧問契約なし</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">着手金</th>
                <td>―</td>
                <td>33,000円~</td>
              </tr>
              <tr>
                <th scope="row">報酬</th>
                <td>15%</td>
                <td>20%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="container-lg">
      <div class="row justify-content-center">
        <div class="col-lg-7 fs-4">
          <p>
            その他お手続きや、<br />
            人事労務に関するお悩みやお困りごと、お気軽にお問い合わせください。
          </p>
        </div>
        <div class="col-lg-7 fs-4 text-center">
          <div class="business my-5">
            <a href="business.html">業務案内</a>
          </div>
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