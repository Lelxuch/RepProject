<div class="blog" id="blog_link">
    <div class="blog_all_header">
       <div class="container">
           <div class="blog_header">
               <div class="blog_head_item">
                   <a class="blog_head_arrow" href="#" onclick="slowScroll('#intro_link')"></a>
               </div>
               <div class="blog_head_item">
                   <div class="blog_head_inner">
                       <div class="blog_head_subtitle">
                           <?php echo $config[$lang]['blog_head_subtitle']; ?>
                       </div>
                       <div class="blog_head_title">
                           <?php echo $config[$lang]['blog_head_title']; ?>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
    <div class="container">
        <div class="blog_posts">
            <?php
            $latest_articles = mysqli_query($connection, 'SELECT * FROM blog ORDER BY pubdate DESC LIMIT 3');
            while( $article = mysqli_fetch_assoc($latest_articles) ){
            ?>
            <div class="blog_item">
                <div class="blog_item_header">
                    <a href="../assets/pages/blog.php?id=<?php echo $article['id']; ?>">
                        <img class="blog_photo" src="../assets/images/blog/<?php echo $article['image']; ?>">
                    </a>
                </div>
                <div class="blog_item_content">
                    <a href="../assets/pages/blog.php?id=<?php echo $article['id']; ?>" class="blog_title"><div><?php echo $article['title']; ?></div></a>
                    <div class="blog_text">
                        <?php echo mb_substr(strip_tags($article['text']), 0, 100, 'utf-8')." ..."; ?>
                    </div>
                </div>
                <div class="blog_footer">
                    <div class="blog_stat">
                        <div class="blog_stat_item">
                            <img src="../assets/images/blog/view.png" class="blog_stat_photo">
                            <?php echo $article['views']; ?>
                        </div>
                        <div class="blog_stat_item">
                            <img src="../assets/images/blog/like.png" class="blog_stat_photo">
                            <?php echo $article['likes']; ?>
                        </div>
                    </div>
                    <div class="blog_date">
                        <?php echo date("j", strtotime($article['pubdate'])) ." ". $config['month_ru'][date("F", strtotime($article['pubdate']))]; ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
