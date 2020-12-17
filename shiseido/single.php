<?php
$post_type    = get_post_type();
$url          = "top";

style();
post_style($post_type);
wp_style($url);
get_header();?>
    <body>
        <main>
            <div class="breadcrumb_list">
                <div class="breadcrumb_list_inner">
                    <?php 
                    if(function_exists('bcn_display')){
                        bcn_display();
                    }
                    ?>
                </div>
            </div>
            <div class="page-title">
                <h2>
                    NEWS & TOPICS
                </h2>
            </div>
            
            <?php if (have_posts()):?>
                <?php while(have_posts()):the_post();?>
                    <article class=section>
                        <p class="detaile-title"><time><?php the_time('Y.m.d');?></time></p>
                        <h3 class="entry-title"><?php the_title();?></h3>
                            <?php the_category();?>
                        <div class="entry-body">
                            <?php the_content();?>
                        </div>
                        <div class="share-items">
                            <p class="share-items_title">SHARE</p>
                            <ul class="share-items_list">
                                <li><p><a href="#">F</a></p></li>
                                <li><p><a href="#">T</a></p></li>
                                <li><p><a href="#">L</a></p></li>
                            </ul>
                        </div>
                        <ul class="entry-foot_categories">
                            <?php the_category();?>
                        </ul>
                        <div class="entry-foot_buttom">
                            <a class="arrow-buttom">
                                <span class="arrow"><-</span>
                                <span class="arrow-buttom_text">NEWS&TOPICSトップへ戻る</span>
                            </a>
                        </div>
                    </article>
                <?php endwhile;?>
            <?php endif;?>
            <div class="section lerated">
                <p class="lerated-title">関連記事</p>
                <ul class="lerated_list">            
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
                <li class="card_small">
                  <?php 
                  If(has_post_thumbnail()){
                    the_post_thumbnail();
                  }else{
                    echo '<img src="' . get_bloginfo( 'template_url' ) . '/images/tp_def.jpg" />';
                  }
                  ?>
                  <div class="text">   
                    <h3>
                      <time><?php the_time("Y.m.d");?></time>
                    </h3>
                    <p><?php the_excerpt(); ?></p>
                  </div>
                </li>
              </a>
              <?php endwhile;
              endif; ?>
                </ul>
            </div>
                <div class="recommend">
                    <div class="section -rec">
                        <p class="recommend-title">RECOMMEND</p>
                        <ul class="recommend-entries">
                            <li class="card_small">
                                <a href="#">
                                <img src="images/pick-up_1.jpg" />
                                <div class="text">
                                    <h3>PICK UP</h3>
                                    <p>
                                    10/13（火）00:00～10/14（水）6:00｜WEB予約システム及びお問合せフォームサーバメンテナンスのお知らせ
                                    </p>
                                </div>
                                </a>
                            </li>
                            <li class="card_small">
                                <a href="#">
                                    <img src="images/pick-up_2.jpg" />
                                    <div class="text">
                                        <h3><time>2020.10.09</time></h3>
                                        <p>
                                            マキアージュの新色でアーティストが提案｜Vol.3
                                            肌なじみの良いイエロー×血色感でつくる、ヘルシーメイク
                                        </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    <ul class="recommend_categories">
                        <li><a href="#">#Body care</a></li>
                        <li><a href="#">#Skincare</a></li>
                        <li><a href="#">#Products</a></li>
                        <li><a href="#">#Fragrance</a></li>
                        <li><a href="#">#Hair</a></li>
                        <li><a href="#">#Service</a></li>
                        <li><a href="#">#Make up</a></li>
                        <li><a href="#">#Information</a></li>
                    </ul>
                </div>
            </div>
        </main>
    </body>
<?php get_footer();?>