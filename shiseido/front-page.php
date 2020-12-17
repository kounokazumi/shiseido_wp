<!-- スタイルシート　決め -->
<?php
$post_type    = get_post_type();
$url          = "top";
if($post_type === "post"){
  post_style();
}
style();
wp_style($url);
get_header();?>
  <body>
    <div class="wapper top">
      <div class="top_back-ground">

        <header class="header">
            <h1>資生堂<span>TheStore</span></h1>
            <nav>
              <ul class="header_menu">
                <li class="header_menu-item"><a href="#">ACSESS</a></li>
                <li class="header_menu-item"><a href="#">MENU</a></li>
              </ul>
            </nav>
        </header>

        <div class="top_icon">
           <image src="<?php bloginfo('template_url');?>/images/main-Visual_symbol.svg">
        </div>

        <div class="Play_button">
          <button class="play_button" type="button" value="aaa">PLAY</button>
        </div>

        <div class="top-title">
          <p>
            SHIESIDO<br />
            THESTORE
          </p>
        </div>
        <div class="top-menu">
          <ul>
            <li><a href="top/floar">FLOOR GUIDE</a></li>
            <li><a href="top/article">NEWS&TOPICS</a></li>
            <li><a href="top/member-program">MEMBER PROGRAM</a></li>
            <li><a href="top/test">ABOUT AS</a></li>
            <li><a href="#">ACCESS</a></li>
          </ul>
        </div>
      </div>

      <main>
        <div class="pick-up_back">
            <!-- 投稿記事一覧表示 -->
            <div class="pick-up">
            <ul class="pick-up_list">            
              <?php
              $paged = (int) get_query_var('paged');
              $args = array(
                'posts_per_page' => 3,
                'paged'          => $paged,
                'orderby'        => 'post_date',
                'order'          => 'DESC',
                'post_type'      => 'post',
                'post_status'    => 'publish'
              );
            
              
              $the_query = new WP_Query($args);
              if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
              ?>
              <a href="<?php the_permalink();?>">
                <li class="card">
                  <?php 
                  if(has_post_thumbnail()){
                    the_post_thumbnail();
                  }else{
                    echo '<img src="' . get_bloginfo( 'template_url' ) . '/images/tp_def.jpg" />';
                  }
                  ?>
                  <div class="text">   
                    <h2>
                      <time><?php the_time("Y.m.d");?></time>
                    </h2>
                    <p><?php the_excerpt(); ?></p>
                  </div>
                </li>
              </a>
              <?php endwhile;
              endif; ?>
                </ul>
            <div class="pick-up_more">
              <a href="#">
                <p><span>MORE</span><span>-></span></p>
              </a>
            </div>

          </div>
          
          <div class="button_wrap">
            <a href="#" class="arrow-button">
              <p>
                ＊新型肺炎に関する店頭対応、<br />
                予約受付休止及び営業時間短縮について
              </p>
            </a>
          </div>

          <div class="column-banner">
            <p class="column-banner_item">
              <a href="#">
                <img src="<?php bloginfo('template_url');?>/images/column-item_1.png" />
              </a>
            </p>

            <p class="column-banner_item">
              <a href="#">
                <img src="<?php bloginfo('template_url');?>/images/column-item_2.png" />
              </a>
            </p>

            <p class="column-banner_item">
              <a>
                <img src="<?php bloginfo('template_url');?>/images/column-item_3.png" />
              </a>
            </p>

            <p class="column-banner_item">
              <a>
                <img src="<?php bloginfo('template_url');?>/images/column-item_4.png" />
              </a>
            </p>
          </div>
        </div>

        <section class="section_wrap">
          <div class="section_inner">
            <header>
              <h2>SERVICE</h2>
            </header>

            <div>
              <h3 class="line_title">F4</h3>
              <div class="section-item">
                <img src="<?php bloginfo('template_url');?>/images/service-item_1.jpg" />
                <div class="section-item_text">
                  <h4>PERSONAL BEAUTY SESSION</h4>
                  <ul>
                    <li class="bgc_green">LESSON</li>
                    <li class="bgc_pink">COUNSELING</li>
                  </ul>
                  <p class="message">
                    ビューティカウンセラーによる、個室での美容レッスン。<br>
                    機器を使った分析をもとに、美しくなるためのテクニックを学びながら、身につけることができます。
                  </p>
                  <a href="#"> 詳しく見る </a>
                </div>
              </div>
  
              <div class="section-item">
                <img src="<?php bloginfo('template_url');?>/images/SHISEIDO 4F-2.jpg" />
                <div class="section-item_text">
                  <h4>SHISEIDO THE TABLES</h4>
                  <ul>
                    <li class="bgc_gray">LESSON</li>
                    <li class="bgc_blue">SHOPPING</li>
                    <li class="bgc_yellow">COUNSELING</li>
                  </ul>
                  <p class="message">
                    食や知を通し、内側からの美を探求するカフェ＆イベントスペース。
                    資生堂の精神を結集し、お客様と一緒につくるコミュニティエリアです。
                  </p>
                  <a href="#"> 詳しく見る </a>
                </div>
              </div>

              <h3 class="line_title">F3</h3>
              <div class="section-item">
                <img src="<?php bloginfo('template_url');?>/images/SHISEIDO 3F-1.jpg" />
                <div class="section-item_text">
                  <h4>BEAUTY BOOST BAR& PHOTO SUTADIO</h4>
                  <ul>
                    <li class="bgc_papple">HAIR&MAKEUP</li>
                    <li class="bgc_lavender">PHOTO STUDIO</li>
                  </ul>
                  <p class="message">
                    ファッションショーでも活躍するアーティストが、お客さまの魅力を引き出すスタイルをご提案。
                    ヘアメイクに合わせてプロのフォトグラファーによる撮影も可能です。
                  </p>
                  <a href="#"> 詳しく見る </a>
                </div>
              </div>
  
              <div class="section-item">
                <img src="<?php bloginfo('template_url');?>/images/SHISEIDO 3F-2.jpg" />
                <div class="section-item_text">
                  <h4>ESPASE CLÉ DE PEAU BEAUTÉ</h4>
                  <ul>
                    <li class="bgc_blown">ESTHETIC</li>
                    <li class="bgc_pink">COUNSELING</li>
                  </ul>
                  <p class="message">
                    クレ・ド・ポーボーテを使ったオールハンドのプレミアムエスティックサロン。
                    心と体を解放する至福の時間をお過ごしください。
                  </p>
                  <a href="#"> 詳しく見る </a>
                </div>
              </div>

              <h3 class="line_title">F2</h3>
              <div class="section-item">
                <img src="<?php bloginfo('template_url');?>/images/SHISEIDO 2F-1.jpg" />
                <div class="section-item_text">
                  <h4>BEAUTY SQUARE2</h4>
                  <ul>
                    <li class="bgc_blue">SHOPPING</li>
                    <li class="bgc_pink">COUNSELING</li>
                  </ul>
                  <p class="message">
                    資生堂の化粧品ラインナップをお試し・ご購入いただけるフロア。
                    肌チェックやタッチアップなど、経験豊富なスタッフがご対応します。
                  </p>
                  <a href="#"> 詳しく見る </a>
                </div>
              </div>
  
              <div class="section-item">
                <img src="<?php bloginfo('template_url');?>/images/SHISEIDO 2F-2.jpg" />
                <div class="section-item_text">
                  <h4>BEAUTY UP CABIN</h4>
                  <ul>
                    <li class="bgc_blown">ESTHETIC</li>
                    <li class="bgc_pink">COUNSELING</li>
                  </ul>
                  <p class="message">
                    メンバープログラム会員さま限定。
                    肌分析とカウンセリングで、より本質的な施術を受けられるプライベートサロン。
                  </p>
                  <a href="#"> 詳しく見る </a>
                </div>
              </div>

              <h3 class="line_title">F1</h3>
              <div class="section-item">
                <img src="<?php bloginfo('template_url');?>/images/SHISEIDO 1F-1.jpg" />
                <div class="section-item_text">
                  <h4>BEAUTY SQUARE1</h4>
                  <ul>
                    <li class="bgc_blue">SHOPPING</li>
                    <li class="bgc_pink">COUNSELING</li>
                  </ul>
                  <p class="message">
                    資生堂を代表するブランド「SHESEIDO」「クレ・ド・ポー　ボーテ」。
                    ２つのプレミアムラインをお試し、ご購入いただけます。
                  </p>
                  <a href="#"> 詳しく見る </a>
                </div>
              </div>
  
              <div class="section-item">
                <img src="<?php bloginfo('template_url');?>/images/SHISEIDO 1F-2.jpg" />
                <div class="section-item_text">
                  <h4>STYLING BAR</h4>
                  <ul>
                    <li class="bgc_papple">HERE&MAKEUP</li>
                    <li class="bgc_pink">COUNSELING</li>
                  </ul>
                  <p class="message">
                    ３階BEAUTY BOOST BAR & PHOTO
                    STUDIOのメニューを一部体験できるカウンター。
                    サロン専用の用品「」
                  </p>
                  <a href="#"> 詳しく見る </a>
                </div>
              </div>

          </div>
        </section>
      </main>
    </div>
  <?php get_footer(); ?>