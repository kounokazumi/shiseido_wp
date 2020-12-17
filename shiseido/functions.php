<?php 
/*
*　アイキャッチ画像を使用可能にする
*/
 add_theme_support('post-thumbnails');
/*
 * アイキャッチ画像サイズ設定
 */

 function style(){
    wp_register_style('reset',get_template_directory_uri().'/css/reset.css');
    wp_register_style('footer',get_template_directory_uri().'/css/footer.css');
    wp_register_style('header',get_template_directory_uri().'/css/header.css');
    wp_register_style('home',get_template_directory_uri().'/style.css');
    wp_register_style('floor',get_template_directory_uri().'/css/T_floa.css');
    wp_register_style('article',get_template_directory_uri().'/css/T_article.css');
    wp_register_style('member',get_template_directory_uri().'/css/T_member-program.css');
   

    // 標準スタイル適用
    wp_enqueue_style('reset');
    wp_enqueue_style('footer');
    wp_enqueue_style('header');
    
 }

function wp_style($url){

    //urlに対応したオブジェクト取得
    $page_ID = get_page_by_path($url);
    // オブジェクトの中のページID取得
    $id = $page_ID->ID;
    
    // 固定ページのそれぞれのスタイルを適用
    switch($id){
        case 6:
        wp_enqueue_style('home');
        break;
        case 13:
        wp_enqueue_style('floor');
        break;
        case 20:
        wp_enqueue_style('article');    
        break;
        case 26:
        wp_enqueue_style('member');
        break;    

    }
    
}
function post_style($post_type){

    wp_enqueue_style('article');
}
?>