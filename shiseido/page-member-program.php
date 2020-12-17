<?php
$url = "top/member-program";
wp_style($url);
get_header();?>
  </head>
  <body>
    <header>
        <div class="header_menu-wrap">
            <h1 class="title">SHISEIDO <br><span>the STORE</span> </h1>
            <ul class="header_menu">
                <li><a href="#">ACSESS</a></li>
                <li><a href="#">MENU</a></li>
            </ul>
        </div>
    </header>  
    <main>
        <div class="breadcrumb_list">
            <ul>
                <li>トップ</li>
                <li>MEMBER PROGRAM</li>
            </ul>
        </div>
        <div class="page-title">
            <h2>
                MEMBER PROGRAM
            </h2>
        </div>
        <div class="section.member-head">
            <div class="section-inner">
                <h3>メンバープログラムの案内</h3>
                <div class="member-head">
                    <img src="<?php bloginfo('template_url');?>/images/MEMBER-PROGRAM_1.png">
                    <p>SHISEIDO THE STORE メンバープログラムとは、<br>
                        お客さまの年間のお買い上げ金額やご来店回数に応じて、<br>
                        オリジナルのメンバー特典をご提供するプログラムです。<br>
                        SHISEIDO THE STOREでのお買い物やサービスを<br>
                        これまで以上にお楽しみいただくために、<br>
                        このプログラムにしかないメンバー特典もご用意しております。</p>
                </div>
                <ul class="button-list">
                    <li><a href="#">ステータス</a></li>
                    <li><a href="#">メンバー特典</a></li>
                </ul>
            </div>
        </div>
        <div id="member-1" class="section-member-content">
            <div class="section-inner">
                <h4>ステータス</h4>
                <p>SHISEIDO THE STORE メンバープログラムには6段階のステータスがございます。<br>
                    お客さまの年間のお買い上げ金額やご来店回数に応じてステータスが変化し<br>
                    ステータスがアップするごとに、ご利用いただける特典の幅が広がります。</p>
                <ul class="member-content-list">
                    <li>
                        <h5>ステータスの決定</h5>
                        <p>お客さまのお買い上げ金額を、オリジナルの単位「S（エス）」に換算します。<br>
                            1年間に貯まった Sの数に応じて、ステータスが決まります。</p>
                        <div class="status-table_block">
                            <p>お買い上げ金（税抜）＝<span>1S（エス）</span></p>
                            <div class="status-table-inner">
                                <p class="annotation">ご来店(※１)に応じたボーナスでもSが加算されます。</p>
                                <table class="status-table">
                                    <tr class="status-table_row">
                                        <th>
                                            <div class="status-table_head">
                                                1回目
                                            </div>
                                        </th>
                                    <td>100 S</td>
                                    </tr>
                                    <tr class="status-table_row">
                                        <th>
                                            <div class="status-table_head">
                                                2回目
                                            </div>
                                        </th>
                                        <td>200 S</td>
                                    </tr>
                                    <tr class="status-table_row">
                                        <th>
                                            <div class="status-table_head">
                                                3回目
                                            </div>
                                        </th>
                                        <td>300 S</td>
                                    </tr>
                                    <tr class="status-table_row">
                                        <th>
                                            <div class="status-table_head">
                                                お誕生月
                                            </div>
                                        </th>
                                        <td>200 S</td>
                                        <td class="status-table_number">年1回</td>
                                    </tr>
                                    <tr class="status-table_row">
                                        <th>
                                            <div class="status-table_head">
                                                ボーナス月間
                                            </div>
                                        </th>
                                        <td>200 S</td>
                                        <td class="status-table_number">年2回</td>
                                    </tr>
                                    <tr class="status-table_row">
                                        <th>
                                            <div class="status-table_head">
                                                アニバーサリー期間
                                            </div>
                                        </th>
                                        <td colspan="2" style="text-align: left;">Wポイント</td>
                                    </tr>
                                </table>
                            </div>
                            <p class="status-table_notes">
                                <small>
                                ※1 ご来店のみでは、S は加算されません。<br>
                                ご来店かつお買い物・サービスのご利用がある場合に加算されます。
                                </small>
                            </p>
                        </div>
                    </li>
                    <li>
                        <h5>６段階のステータス</h5>
                        <div class="status-class-table">
                            <div class="status-class-table_inner">
                                <table>
                                    <tr class="status-class-table_row">
                                        <th>
                                            <div class="status-class-table_color -black">
                                                <img src="<?php bloginfo('template_url');?>/images/MEMBER black.svg">
                                                BLACK
                                                <span>
                                                    ブラック
                                                </span>
                                            </div>
                                        </th>
                                        <td>10000s
                                            <span class="status-class-table_sub">以上</span>
                                        </td>
                                    </tr>
                                    <tr class="status-class-table_row">
                                        <th>
                                            <div class="status-class-table_color -platinum">
                                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-platinum.svg" alt="BLACK">
                                                PLATINUM
                                                <span>
                                                    プラチナ
                                                </span>
                                                <td>
                                                    10000s
                                                    <span class="status-class-table_sub">未満</span>
                                                    <br>
                                                    7000s
                                                    <span class="status-class-table_sub">以上</span>
                                                </td>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr class="status-class-table_row">
                                        <th>
                                            <div class="status-class-table_color -gold">
                                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-gold.svg" alt="BLACK">
                                                GOLD
                                                <span>
                                                    ゴールド
                                                </span>
                                                <td>
                                                    7000s
                                                    <span class="status-class-table_sub">未満</span>
                                                    <br>
                                                    5000s
                                                    <span class="status-class-table_sub">以上</span>
                                                </td>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr class="status-class-table_row">
                                        <th>
                                            <div class="status-class-table_color -silver">
                                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-silver.svg" alt="BLACK">
                                                SILVER
                                                <span>
                                                    シルバー
                                                </span>
                                                <td>
                                                    5000s
                                                    <span class="status-class-table_sub">未満</span>
                                                    <br>
                                                    3000s
                                                    <span class="status-class-table_sub">以上</span>
                                                </td>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr class="status-class-table_row">
                                        <th>
                                            <div class="status-class-table_color -bronze">
                                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-bronze.svg" alt="BLACK">
                                                BRONZE
                                                <span>
                                                    ブロンズ
                                                </span>
                                                <td>
                                                    3000s
                                                    <span class="status-class-table_sub">未満</span>
                                                    <br>
                                                    2000s
                                                    <span class="status-class-table_sub">以上</span>
                                                </td>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr class="status-class-table_row">
                                        <th>
                                            <div class="status-class-table_color -white">
                                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-white.svg" alt="BLACK">
                                                WHITE
                                                <span>
                                                    ホワイト
                                                </span>
                                                <td>
                                                    2000s
                                                    <span class="status-class-table_sub">未満</span>
                                                </td>
                                            </div>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </li>
                    <li>
                        <h5>ステータスの有効期限</h5>
                        <p>毎年1月1日から12月31日の間に貯まった S を、<br>
                            12月31日に集計。翌年1月より新しいステータスを適用します。<br>
                            新しいステータスは、店頭にてご案内しております。</p>
                    </li>
                </ul>
            </div>
       </div>
       <div id="member-2" class="section-member-content">
           <div class="section-inner">
                <h4>メンバー特典</h4>
                <ol type="1" class="member-content-list">
                    <li>
                        <h5>1.ビューティーアップキャビンの利用</h5>
                        <p>メンバーさま限定のプライベートな有料スキンケアサロンです。<br>
                            肌分析とカウンセリングで、一人ひとりに最適なお手入れをご用意しています。
                        </p>
                        <ul class="member-class-list">
                            <li class="-black">
                                <img src="<?php bloginfo('template_url');?>/images/MEMBER black.svg" alt="black">
                                BLACK
                            </li>
                            <li class="-platinum">
                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-platinum.svg" alt="platinum">
                                PLATINUM
                            </li>
                            <li class="-gold">
                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-gold.svg" alt="gold">
                                GOLD
                            </li>
                            <li class="-silver">
                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-silver.svg" alt="silver">
                                SILVER
                            </li>
                            <li class="-bronze">
                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-bronze.svg" alt="bronze">
                                BRONZE
                            </li>
                            <li class="-white">
                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-white.svg" alt="white">
                                WHITE
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h5>2. SHISEIDO THE TABLESの特別価格提供</h5>
                        <p>カフェの全メニューを10％OFFの優待価格でご利用いただけます。</p>
                        <ul class="member-class-list">
                            <li class="-black">
                                <img src="<?php bloginfo('template_url');?>/images/MEMBER black.svg" alt="black">
                                BLACK
                            </li>
                            <li class="-platinum">
                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-platinum.svg" alt="platinum">
                                PLATINUM
                            </li>
                            <li class="-gold">
                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-gold.svg" alt="gold">
                                GOLD
                            </li>
                            <li class="-silver">
                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-silver.svg" alt="silver">
                                SILVER
                            </li>
                            <li class="-bronze">
                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-bronze.svg" alt="bronze">
                                BRONZE
                            </li>
                            <li class="-white">
                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-white.svg" alt="white">
                                WHITE
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h5>3.SHISEIDO THE STORE サービスギフト券の進呈</h5>
                        <p>ステータスに合わせて、サービスギフト券を進呈します。</p>
                        <div class="status-class-table">
                            <div class="status-class-table_inner">
                                <table>
                                    <tr class="status-class-table_row">
                                        <th>
                                            <div class="status-class-table_color -black">
                                                <img src="<?php bloginfo('template_url');?>/images/MEMBER black.svg">
                                                BLACK
                                                <span>
                                                    ブラック
                                                </span>
                                            </div>
                                        </th>
                                        <td>
                                            <span class="status-class-table_ticket">50,000円分</span>
                                        </td>
                                    </tr>
                                    <tr class="status-class-table_row">
                                        <th>
                                            <div class="status-class-table_color -platinum">
                                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-platinum.svg">
                                                PLATINUM
                                                <span>
                                                    プラチナ
                                                </span>
                                            </div>
                                        </th>
                                        <td>
                                            <span class="status-class-table_ticket">20,000円分</span>
                                        </td>
                                    </tr>
                                    <tr class="status-class-table_row">
                                        <th>
                                            <div class="status-class-table_color -gold">
                                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-gold.svg">
                                                GOLD
                                                <span>
                                                    ゴールド
                                                </span>
                                            </div>
                                        </th>
                                        <td>
                                            <span class="status-class-table_ticket">10,000円分</span>
                                        </td>
                                    </tr>
                                    <tr class="status-class-table_row">
                                        <th>
                                            <div class="status-class-table_color -silver">
                                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-silver.svg">
                                                SILVER
                                                <span>
                                                    シルバー
                                                </span>
                                            </div>
                                        </th>
                                        <td>
                                            <span class="status-class-table_ticket">5,000円分</span>
                                        </td>
                                    </tr>
                                    <tr class="status-class-table_row">
                                        <th>
                                            <div class="status-class-table_color -bronze">
                                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-bronze.svg">
                                                BRONZE
                                                <span>
                                                    ブロンズ
                                                </span>
                                            </div>
                                        </th>
                                        <td>
                                            <span class="status-class-table_ticket">2,000円分</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <p class="status-table_notes">
                                <small>※ギフト券はサービスのご利用の際にご使用いただけます。<br>
                                    有効期限：発行日より6ヶ月</small>
                            </p>
                            <div class="support-service">
                                <h6>サービスギフト券対応サービス</h6>
                                <ul class="support-service_list">
                                    <li>4F パーソナルビューティーセッション</li>
                                    <li>4F シセイドウ ザ テーブルズ（イベントのみ）</li>
                                    <li>3F エスパス クレ・ド・ポー ボーテ</li>
                                    <li>3F ビューティーブーストバー&フォトスタジオ</li>
                                    <li>2F ビューティーアップキャビン</li>
                                    <li>1F スタイリングバー</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <h5>4. 「花椿CLUB」サービスへの登録</h5>
                        <p>ご購入品お取り換えサービスやカウンセリングサービスなどをご利用いただけます。</p>
                        <ul class="member-class-list">
                            <li class="-black">
                                <img src="<?php bloginfo('template_url');?>/images/MEMBER black.svg" alt="black">
                                BLACK
                            </li>
                            <li class="-platinum">
                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-platinum.svg" alt="platinum">
                                PLATINUM
                            </li>
                            <li class="-gold">
                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-gold.svg" alt="gold">
                                GOLD
                            </li>
                            <li class="-silver">
                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-silver.svg" alt="silver">
                                SILVER
                            </li>
                            <li class="-bronze">
                                <img src="<?php bloginfo('template_url');?>/images/MEMBER-bronze.svg" alt="bronze">
                                BRONZE
                            </li>
                            <li class="-white">
                                <img src=".<?php bloginfo('template_url');?>/images/MEMBER-white.svg" alt="white">
                                WHITE
                            </li>
                        </ul>
                        <p>さらに⋯⋯<br>
                            SHISEIDO THE STOREメンバープログラムご入会後に、<br>
                            お客さまご自身でワタシプラスにご登録いただくと、ワタシプラスポイントが貯まります。<br>
                            詳しくは、ワタシプラスガイドをご覧ください。</p>
                        <p class="member-content-link"><a href="#">ワタシプラスガイド</a></p>
                    </li>
                </ol>
           </div>
       </div>
       <div class="store-faq">
           <div class="section-inner">
               <h3>FAQ</h3>
               <h4>特典について</h4>
           </div>
       </div>
<?php get_footer();?>