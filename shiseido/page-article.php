<!-- スタイルシート決定 -->
<?php
$post_type = get_post_type();
$url       = "top/article";
if($post_type === "post"){
    post_style();
}
style();
wp_style($url);
get_header();?>
    <main>
        <div class="breadcrumb_list">
            <ul>
                <li>トップ</li>
                <li>NEWS & TOPICS</li>
            </ul>
        </div>
        <div class="page-title">
            <h2>
                NEWS & TOPICS
            </h2>
        </div>
        <p class="massage">
            SHISEIDO THE STOREからのお知らせ、季節の話題やスタッフからのおすすめ情報などをお届けします。
        </p>
        <div class="section-inner">
            <ul class="topics_list">
                <li>
                    <a><img src="../../Desktop/SHISEIDO/NEWS&TOPICS_1.jpg"></a>
                    <div class="list-text">    
                        <h3>2020.10.28</h3>
                        <h4>12月のパーツメイクアップレッスンの日程のご案内｜4F PERSONAL BEAUTY SESSION</h4>
                        <p class="article-massege">4F PERSONAL BEAUTY SESSIONより、
                            12月のパーツメイクアップレッスンの日程のご案内です。■12/...</p>
                        <ul class="tag_list">
                            <li><a href="#">#PERSONAL BEAUTY SESSION</a></li>
                            <li><a href="#">#Service</a></li>
                            <li><a href="#">#Make up</a></li>
                        </ul>
                        <div class="detail-buttom_warp">
                        <a class="detail-buttom"href="#"> 詳しく見る </a>
                        </div>
                    </div>
                </li>
                <li>
                    <a><img src="../../Desktop/SHISEIDO/NEWS&TOPICS_2.jpg"></a>
                    <div class="list-text">    
                        <h3>2020.10.27</h3>
                        <h4>ゆるみ見せない目もと・頬に。「つや玉」さらに輝く。
                            ｜エリクシール アドバンスド エステティックエッセンス</h4>
                        <p class="article-massege">
                            あなたの肌を最高の味方にするエイジングケア（年齢に応じたうるおいケア）
                            ブランド「エリクシール」から、マッサージローラー付...</p>
                        <ul class="tag_list">
                            <li><a href="#">#BEAUTY SQUARE</a></li>
                            <li><a href="#">#Skincare</a></li>
                            <li><a href="#">#Products</a></li>
                        </ul>
                        <div class="detail-buttom_warp">
                        <a class="detail-buttom" href="#"> 詳しく見る </a>
                        </div>
                    </div>
                </li>
                <li>
                    <a><img src="../../Desktop/SHISEIDO/NEWS&TOPICS_3.jpg"></a>
                    <div class="list-text">    
                        <h3>2020.10.27</h3>
                        <h4>フォトギャラリー更新しました｜3F BEAUTY BOOST BAR & PHOTO STUDIO</h4>
                        <p class="article-massege">    
                        当店の人気メニューのひとつ、3F BEAUTY BOOST BAR & PHOTO STUDIOのヘアメイクアッ...</p>
                        <ul class="tag_list">
                            <li><a href="#">#BEAUTY BUOOST BAR & PHOTO STUDIO</a></li>
                            <li><a href="#">#Service</a></li>
                            <li><a href="#">#Information</a></li>
                        </ul>
                        <div class="detail-buttom_warp">
                        <a class="detail-buttom" href="#"> 詳しく見る </a>
                        </div>
                    </div>
                </li>
                <li>
                    <a><img src="../../Desktop/SHISEIDO/NEWS&TOPICS_4.jpg"></a>
                    <div class="list-text">    
                        <h3>2020.10.25</h3>
                        <h4>「SPOLOGUM」の、あなたを彩るアートなマスク｜4F SHISEIDO THE TABLES</h4>
                        <p class="article-massege">    
                            当店4F カフェ&コミュニティースペースSHISEIDO THE TABLESでは、日々の生活を豊かに彩るセレク...</p>
                        <ul class="tag_list">
                            <li><a href="#">#SHISEIDO THE TABLE</a></li>
                        </ul>
                        <div class="detail-buttom_warp">
                        <a class="detail-buttom" href="#"> 詳しく見る </a>
                        </div>
                    </div>
                </li>
                <li>
                    <a><img src="../../Desktop/SHISEIDO/NEWS&TOPICS_5.jpg"></a>
                    <div class="list-text">    
                        <h3>2020.10.24</h3>
                        <h4>美しいフェイスライン。洗練という美の極みはここから。｜クレ・ド・ポー ボーテ シナクティフ クレームクーエデコルテ</h4>
                        <p class="article-massege">    
                            はっとするほど印象の美しいひと。差をつけるのは、首もととデコルテのケア。未だ見ぬ自分自身の頂点美貌を極めるスキンケアブラ...</p>
                        <ul class="tag_list">
                            <li><a href="#">#BEAUTY BOOST BAR & PHOTO STUDIO</a></li>
                            <li><a href="#">#BEAUTY SQUARE</a></li>
                            <li><a href="#">#Body care</a></li>
                            <li><a href="#">#Products</a></li>
                        </ul>
                        <div class="detail-buttom_warp">
                        <a class="detail-buttom" href="#"> 詳しく見る </a>
                        </div>
                    </div>
                </li>
                <li>
                    <a><img src="../../Desktop/SHISEIDO/NEWS&TOPICS_6.jpg"></a>
                    <div class="list-text">    
                        <h3>2020.10.23</h3>
                        <h4>心もカラダもあたたかい毎日をサポートする限定ティーギフトセット｜N.O.U SPECIAL GIFT 3rd Ave.</h4>
                        <p class="article-massege">    
                            あたたかさがめぐる、ヘルシーティータイム。アクティブに生活を楽しむためのサポートをするヘルシーライフサプリメント「N.O...</p>
                        <ul class="tag_list">
                            <li><a href="#">#BEAUTY SQUARE</a></li>
                            <li><a href="#">#Products</a></li>
                        </ul>
                        <div class="detail-buttom_warp">
                        <a class="detail-buttom" href="#"> 詳しく見る </a>
                        </div>
                    </div>
                </li>
                <li>
                    <a><img src="../../Desktop/SHISEIDO/NEWS&TOPICS_7.png"></a>
                    <div class="list-text">    
                        <h3>2020.10.22</h3>
                        <h4>乾燥シーズンに、メイクの上からも「追い保湿」｜プリオール おでかけミストクリーム</h4>
                        <p class="article-massege">    
                            大人ならではの悩みを研究して生まれた「プリオール」から、濃密クリームのミストが数量限定で登場。濃密クリームがそのままミス...</p>
                        <ul class=tag_list>
                            <li><a href="#">#BEAUTY SQUARE</a></li>
                            <li><a href="#">#Skincare</a></li>
                            <li><a href="#">#Products</a></li>
                        </ul>
                        <div class="detail-buttom_warp">
                        <a class="detail-buttom" href="#"> 詳しく見る </a>
                        </div>
                    </div>
                </li>
                <li>
                    <a><img src="../../Desktop/SHISEIDO/NEWS&TOPICS_8.png"></a>
                    <div class="list-text">
                        <h3>2020.10.22</h3>
                        <h4>オリジナルシーズンテーマの甘いもの「恋の季～ 紅玉りんごのきんとん羊羹 日本酒付き～」｜4F SHISEIDO THE TABLES</h4>
                        <p class="article-massege">    
                            当店4F SHISEIDO THE TABLESでは、季節ごとにおもてなしをしています。10月15日（木）からは、「恋の...</p>
                        <ul class="tag_list">
                            <li><a href="#">#SHIESEIDO THE TABLE</a></li>
                        </ul>
                        <div class="detail-buttom_warp">
                        <a class="detail-buttom" href="#"> 詳しく見る </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="section-inner pagination-inner">
            <div class="pagination-position"></div>
            <ul class="pagination-list">
                <li class="current"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
            </ul>
            <div class="next-buttom"><a href="#">NEXT</a></div>
        </div>
        <div class="section_article-categories">
            <div class="section-inner">
                <div class="article-categories_item">
                    <h4>SERVICE</h4>
                    <ul class="article-categories_list">
                        <li><a href="#">#SHISEIDO THE TABLES</a></li>
                        <li><a href="#">#BEAUTY UP CABIN</a></li>
                        <li><a href="#">#PERSONAL BEAUTY SESSION</a></li>
                        <li><a href="#">#ESPACE CLÉ DE PEAU BEAUTÉ</a></li>
                        <li><a href="#">#BEAUTY BOOST BAR & PHOTO STUDIO</a></li>
                        <li><a href="#">#BEAUTY SQUARE</a></li>
                    </ul>
                </div>
                <div class="article-categories_item">
                    <h4>CATEGORY</h4>
                    <ul class="article-categories_list">
                        <li><a href="#">#Body care</a></li>
                        <li><a href="#">#Skincare</a></li>
                        <li><a href="#">#Products</a></li>
                        <li><a href="#">#Fragrance</a></li>
                        <li><a href="#">#Hair</a></li>
                        <li><a href="#">#Service</a></li>
                        <li><a href="#">#Hair</a></li>
                        <li><a href="#">#Make up</a></li>
                        <li><a href="#">#Information</a></li>
                    </ul>
                </div>
                <div class="article-categories_item">
                    <h4>TAG</h4>
                    <ul class="article-categories_list">
                        <li><a href="#">#リバイタル グラナス</a></li>
                        <li><a href="#">#アネッサ</a></li>
                        <li><a href="#">#トリートメント</a></li>
                        <li><a href="#">#リバイタル</a></li>
                        <li><a href="#">#ロングセラー</a></li>
                        <li><a href="#">#オイデルミン</a></li>
                        <li><a href="#">#動画</a></li>
                        <li><a href="#">#サブリミック</a></li>
                        <li><a href="#">#ナビジョン</a></li>
                        <li><a href="#">#スノービューティー</a></li>
                        <li><a href="#">#ギャラリーコンパクト</a></li>
                        <li><a href="#">#Dolce&amp;Gabbana</a></li>
                        <li><a href="#">#マスカラ</a></li>
                        <li><a href="#">#ベビー用</a></li>
                        <li><a href="#">#d プログラム</a></li>
                        <li><a href="#">#HAKU</a></li>
                        <li><a href="#">#ISSEY MIYAKE</a></li>
                        <li><a href="#">#ベネフィアンス</a></li>
                        <li><a href="#">#ホワイトルーセント</a></li>
                        <li><a href="#">#Mommy Me</a></li>
                        <li><a href="#">#ステージワークス</a></li>
                        <li><a href="#">#ヘアスタイリング</a></li>
                        <li><a href="#">#洗顔</a></li>
                        <li><a href="#">#コットン</a></li>
                        <li><a href="#">#眉</a></li>
                        <li><a href="#">#ビューティーフーズ</a></li>
                        <li><a href="#">#Narciso Rodriguez</a></li>
                        <li><a href="#">#ボディクリーム</a></li>
                        <li><a href="#">#リサ・ラーソン</a></li>
                        <li><a href="#">#乳液</a></li>
                        <li><a href="#">#マスク</a></li>
                        <li><a href="#">#N.O.U</a></li>
                        <li><a href="#">#クリーム</a></li>
                        <li><a href="#">#化粧下地</a></li>
                        <li><a href="#">#クレンジング</a></li>
                        <li><a href="#">#SHISEIDO</a></li>
                        <li><a href="#">#夏</a></li>
                        <li><a href="#">#スタッフのおすすめ</a></li>
                        <li><a href="#">#ヘアコンディショナー</a></li>
                        <li><a href="#">#シャンプー</a></li>
                        <li><a href="#">#ディシラ</a></li>
                        <li><a href="#">#クレ・ド・ポー ボーテ　シナクティフ</a></li>
                        <li><a href="#">#ジェントルフォース</a></li>
                        <li><a href="#">#ザ・コラーゲン</a></li>
                        <li><a href="#">#WASO</a></li>
                        <li><a href="#">#UVケア</a></li>
                        <li><a href="#">#エリクシールルフレ</a></li>
                        <li><a href="#">#アイシャドウ</a></li>
                        <li><a href="#">#コンシーラー</a></li>
                        <li><a href="#">#グッズ</a></li>
                        <li><a href="#">#アイライナー</a></li>
                        <li><a href="#">#アルティミューン</a></li>
                        <li><a href="#">#イベント</a></li>
                        <li><a href="#">#レッスン</a></li>
                        <li><a href="#">#椿</a></li>
                        <li><a href="#">#銀座</a></li>
                        <li><a href="#">#インテグレート</a></li>
                        <li><a href="#">#ウィンドウギャラリー</a></li>
                        <li><a href="#">#チーク</a></li>
                        <li><a href="#">#プレイリスト</a></li>
                        <li><a href="#">#プリオール</a></li>
                        <li><a href="#">#マキアージュ</a></li>
                        <li><a href="#">#ファンデーション</a></li>
                        <li><a href="#">#美容液</a></li>
                        <li><a href="#">#書籍</a></li>
                        <li><a href="#">#ベネフィーク</a></li>
                        <li><a href="#">#フューチャーソリューションLX</a></li>
                        <li><a href="#">#エステ</a></li>
                        <li><a href="#">#ザ･ギンザ</a></li>
                        <li><a href="#">#カフェ</a></li>
                        <li><a href="#">#数量限定</a></li>
                        <li><a href="#">#メンバープログラム</a></li>
                        <li><a href="#">#期間限定</a></li>
                        <li><a href="#">#ネイル</a></li>
                        <li><a href="#">#エッセンシャルイネルジャ</a></li>
                        <li><a href="#">#シワ</a></li>
                        <li><a href="#">#美白</a></li>
                        <li><a href="#">#バイタルパーフェクション</a></li>
                        <li><a href="#">#エリクシール</a></li>
                        <li><a href="#">#敏感肌</a></li>
                        <li><a href="#">#化粧直し</a></li>
                        <li><a href="#">#化粧水</a></li>
                        <li><a href="#">#エリクシールホワイト</a></li>
                        <li><a href="#">#セルジュ・ルタンス</a></li>
                        <li><a href="#">#資生堂プロフェッショナル</a></li>
                        <li><a href="#">#花椿</a></li>
                        <li><a href="#">#クレ・ド・ポー ボーテ</a></li>
                        <li><a href="#">#フェースパウダー</a></li>
                        <li><a href="#">#口紅・グロス</a></li>
                        <li><a href="#">#ヘアメイクアップ付きフォトプラン</a></li>
                        <li><a href="#">#就活</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    </body>
    <footer>
        <div class="footer-warp">
          <div class="footer-item">
            <p>Follow us</p>
            <ul>
              <li>F</li>
              <li>T</li>
              <li>I</li>
            </ul>
          </div>
          <div class="footer-item_lang">
            <p>Language</p>
            <ul class="footer-language">
              <li><a href="#">ENGLISH</a></li>
              <li><a href="#">简体中文</a></li>
            </ul>
            <div class="footer-bottom_link">
              <a href="#">利用規約</a>
              <a href="#">個人情報について</a>
            </div>
          </div>
        </div>
        <div class="footer-foot">
          <p class="footer-logo">SHISEIDO</p>
          <p class="footer-group_link">資生堂グループ企業情報</p>
        </div>
      </footer>