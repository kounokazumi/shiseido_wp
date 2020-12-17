<!-- スタイル　決定 -->
<?php
$post_type = get_post_type();
$url       = "top/floar";
if($post_type === "post"){
    post_style();
}
style();
wp_style($url);
get_header();?>
    <body>
        <main>
            <header>
                <div class="breadcrumb_list">
                    <ul>
                        <li>トップ</li>
                        <li>FLOOR GUIDE</li>
                    </ul>
                </div>
                <div class="page-title">
                    <h2>
                        FLOOR GUIDE
                    </h2>
                </div>
            </header>
            <div class="section">
                <div class="section-inner">
                    <section class="floor">
                        <header class="floor-map">
                            <h3>4F</h3>
                            <img src="<?php bloginfo('template_url');?>/images/map_4F.png">
                            <p class="section-text">
                                素材にこだわったカフェ、個室での美容レッスン、
                                スペシャリストによるさまざまなイベントなど。<br>              
                                あらゆる角度から学ぶことができ、
                                外側からも内側からも美を探求できるコミュニティスペースです。
                            </p>
                        </header>
                        <div class="floor-square">
                            <div class="floorguide-square">
                                <h4>PERSONAL BEAUTY SESSION</h4>
                                <p>個室での美容レッスン</p>
                                <div class="section-item">
                                    <img src="<?php bloginfo('template_url');?>/images/service-item_1.jpg" />
                                    <div class="section-category">  
                                        <ul>
                                            <li class="bgc_green">LESSON</li>
                                            <li class="bgc_pink">COUNSELING</li>
                                        </ul>
                                        <a href="#"> 詳しく見る </a>
                                    </div>
                                </div>
                            </div>
                            <div class="floorguide-square">
                                <h4>SHISEIDO THE TABLES</h4>
                                <p>カフェ・イベントスペース/グッズ</p>
                                <div class="section-item">
                                    <img src="<?php bloginfo('template_url');?>/images/SHISEIDO 4F-2.jpg" />
                                    <div class="section-category">  
                                        <ul>
                                            <li class="bgc_gray">LESSON</li>
                                            <li class="bgc_blue">SHOPPING</li>
                                            <li class="bgc_yellow">COUNSELING</li>
                                        </ul>
                                        <a href="#"> 詳しく見る </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="floor">
                        <header class="floor-map">
                            <h3>3F</h3>
                            <img src="<?php bloginfo('template_url');?>/images/map_3F.png">
                            <p class="section-text">
                                ファッションショーでも活躍するアーティストが、
                                お客さまの魅力を引き出すスタイルをご提案。
                                ヘアメイクと合わせて、プロのフォトグラファーによる撮影も可能。<br>
                                クレ・ド・ポー ボーテのサロンでは、ラグジュアリーなオールハンドのトリートメントをご堪能ください。
                                <br>              
                                クレ・ド・ポー ボーテのサロンでは、
                                ラグジュアリーなオールハンドのトリートメントをご堪能ください。
                            </p>
                        </header>
                        <div class="floor-square">
                            <div class="floorguide-square">
                                <h4>BEAUTY BOOST BAR&PHOTO STUDIO</h4>
                                <p>ヘアメイクアップサロン＆フォトスタジオ</p>
                                <div class="section-item">
                                    <img src="<?php bloginfo('template_url');?>/images/SHISEIDO 3F-1.jpg" />
                                    <div class="section-category">  
                                        <ul>
                                            <li class="bgc_papple">HAIR&MAKEUP</li>
                                            <li class="bgc_lavender">PHOTO STUDIO</li>
                                        </ul>
                                        <a href="#"> 詳しく見る </a>
                                    </div>
                                </div>
                            </div>
                            <div class="floorguide-square">
                                <h4>ESPACE CLÉ DE PEAU BEAUTÉ</h4>
                                <p>エステティックサロン</p>
                                <div class="section-item">
                                    <img src="<?php bloginfo('template_url');?>/images/SHISEIDO 3F-2.jpg" />
                                    <div class="section-category">  
                                        <ul>
                                            <li class="bgc_blown">ESTHETIC</li>
                                            <li class="bgc_pink">COUNSELING</li>
                                        </ul>
                                        <a href="#"> 詳しく見る </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="floor">
                        <header class="floor-map">
                            <h3>2F</h3>
                            <img src="<?php bloginfo('template_url');?>/images/map_2F.png">
                            <p class="section-text">
                                伝統と創造の融合する世界観の中、スクエアテーブルでゆっくりとカウンセリングを受けながら、
                                資生堂の化粧品をお試し・ご購入いただけるフロア。
                                <br>              
                                奥には、メンバー限定のプライベートサロンも。
                            </p>
                        </header>
                        <div class="floor-square">
                            <div class="floorguide-square">
                                <h4>BEAUTY SQUARE2</h4>
                                <p>化粧品・カウンセリング</p>
                                <div class="section-item">
                                    <img src="<?php bloginfo('template_url');?>/images/SHISEIDO 2F-1.jpg" />
                                    <div class="section-category">  
                                        <ul>
                                            <li class="bgc_blue">SHOPPING</li>
                                            <li class="bgc_pink">COUNSELING</li>
                                        </ul>
                                        <a href="#"> 詳しく見る </a>
                                    </div>
                                </div>
                            </div>
                            <div class="floorguide-square">
                                <h4>BEAUTY UP CABIN</h4>
                                <p>メンバーズスキンケアサロン</p>
                                <div class="section-item">
                                    <img src="<?php bloginfo('template_url');?>/images/SHISEIDO 2F-2.jpg" />
                                    <div class="section-category">  
                                        <ul>
                                            <li class="bgc_blown">ESTHETIC</li>
                                            <li class="bgc_pink">COUNSELING</li>
                                        </ul>
                                        <a href="#"> 詳しく見る </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="floor">
                        <header class="floor-map">
                            <h3>1F</h3>
                            <img src="<?php bloginfo('template_url');?>/images/map_1F.png">
                            <p class="section-text">
                                壁や天井いっぱいに広がる花椿のアートを楽しみながら、
                                ブランド「SHISEIDO」「クレ・ド・ポー ボーテ」をご体感いただけるフロア。
                                <br>              
                                スタイリング・バーでは、BEAUTY BOOST BAR &amp; PHOTO STUDIOのサービスを一部体験できます。
                            </p>
                        </header>
                        <div class="floor-square">
                            <div class="floorguide-square">
                                <h4>BEAUTY SQUARE1</h4>
                                <p>化粧品</p>
                                <div class="section-item">
                                    <img src="<?php bloginfo('template_url');?>/images/SHISEIDO 1F-1.jpg" />
                                    <div class="section-category">  
                                        <ul>
                                            <li class="bgc_blue">SHOPPING</li>
                                            <li class="bgc_pink">COUNSELING</li>
                                        </ul>
                                        <a href="#"> 詳しく見る </a>
                                    </div>
                                </div>
                            </div>
                            <div class="floorguide-square">
                                <h4>STYLING BAR</h4>
                                <p>ヘアメイクアップカウンター</p>
                                <div class="section-item">
                                    <img src="<?php bloginfo('template_url');?>/images/SHISEIDO 1F-2.jpg" />
                                    <div class="section-category">  
                                        <ul>
                                            <li class="bgc_papple">HERE&MAKEUP</li>
                                            <li class="bgc_pink">COUNSELING</li>
                                        </ul>
                                        <a href="#"> 詳しく見る </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </body>
<?php get_footer();?>