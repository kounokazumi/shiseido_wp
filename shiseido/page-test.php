<?php $page_ID = get_page_by_path('top/test'); // 投稿オブジェクトの取得
    $page_id = $page_ID->ID; 
              echo $page_id;
              echo get_the_permalink();?>