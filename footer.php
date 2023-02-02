<footer>
  <div class="inner">
    <div class="footer">
      <div class="footer__item">
        <h4>メニュー</h4>
        <ul class="footer_list">
          <li class="footer_list__item"><a href="<?php echo home_url(); ?>/shopguide/">> ショップガイド</a></li>  
          <li class="footer_list__item"><a href="<?php echo home_url(); ?>/floorguide/">> フロアガイド</a></li>
          <li class="footer_list__item"><a href="<?php echo home_url(); ?>/access/">> アクセス</a></li>
          <li class="footer_list__item"><a href="<?php echo home_url(); ?>/eventnews/">> イベント & ニュース</a></li>
          <li class="footer_list__item"><a href="<?php echo home_url(); ?>/line/">> LINE 公式アカウント</a></li>
          <li class="footer_list__item"><a target="_blank" href="https://mydomo.domonet.jp/apita.walk-senmontengai/">> 求人</a></li>
          <li class="footer_list__item"><a href="<?php echo home_url(); ?>/facility/">> 施設案内</a></li>
        </ul>
      </div>
      <div class="footer__item">
        <h4>アピタ戸塚店 専門店街</h4>
        <ul>
          <li>■アピタ 9:00～22:00 </li>
          <li class="mb"><span class="mini-font">（※専門店により営業時間が異なります）</span></li>
          <li>TEL: <a href="tel:0570009571">0570-009571（ナビダイヤル）</a></li>
          <li class="mb">〒244-0816 神奈川県横浜市戸塚区上倉田町769番1</li>
          <li>&copy;APITA TOTSUKA.All Rights Reserved.</li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/hamburger.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.main-slider').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      centerMode: true,
      autoplay: true,
      autoplaySpeed: 5000,
      variableWidth: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            centerMode: false,
            variableWidth: false,
            // arrows: false,
          },
        },
      ],
    });
  });
	$(function(){
		$("a[rel='gallery']").colorbox({
      maxWidth:"90%",
      maxHeight:"90%",
      close: '× 閉じる'
    });
	});
</script>
</body>
</html>
