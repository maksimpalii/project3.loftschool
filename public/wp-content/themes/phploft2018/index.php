<?php get_header(); ?>
    <div class="content-wrapper">
        <div class="content">
            <h1 class="title-page">Последние новости и акции из мира туризма</h1>
            <div class="posts-list">
                <?php

                /* $posts = query_posts(['post_type' => ['news', 'akcia', 'post']]);*/
                $the_query = new WP_Query(array('posts_per_page' => 10,
                        'post_type' => ['news', 'akcia'],
                        'paged' => get_query_var('paged') ? get_query_var('paged') : 1)
                );

                ?>
                <?/*php if (have_posts()) : while (have_posts()) : the_post();*/ ?>
                <?php if (have_posts()) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <div class="post-wrap">
                        <div>
                            <?php if (get_post_type() === 'news') {
                                echo 'news';
                            } elseif (get_post_type() === 'akcia') {
                                echo 'akcia';
                            }
                            ?>
                        </div>
                        <div class="post-thumbnail">
                            <img src="<?php echo arkuwp_thumbnail(); ?>" alt="Image поста"
                                 class="post-thumbnail__image">
                        </div>
                        <div class="post-content">
                            <div class="post-content__post-info">
                                <div class="post-date">
                                    <?php the_date(); ?>
                                </div>
                            </div>
                            <div class="post-content__post-text">
                                <div class="post-title">
                                    <?php the_title(); ?>
                                </div>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                            <div class="post-content__post-control">
                                <a href="<?php the_permalink(); ?>" class="btn-read-post">Читать далее >></a>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                else : ?>
                    <p><?php _e('Ничего не найдено.'); ?></p>
                <?php endif; ?>
            </div>
            <div class="pagenavi-post-wrap">

                <?php
                the_posts_pagination(array(
                    'prev_next' => true,
                    'prev_text' => __('<i class="icon icon-angle-double-left"></i>', 'twentyfifteen'),
                    'next_text' => __('<i class="icon icon-angle-double-right"></i>', 'twentyfifteen'),
                    'screen_reader_text' => __(' '),
                ));
                ?>
                <?php wp_reset_query();
                wp_reset_postdata(); ?>
            </div>
        </div>
        <!-- sidebar-->
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>