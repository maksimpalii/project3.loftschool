<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="content-wrapper">
    <div class="content">
    <div class="article-title title-page">
        <?php the_title(); ?>
    </div>
    <div class="article-image"><img src="<?php echo arkuwp_thumbnail(); ?>" alt="Image поста"></div>
    <div class="article-info">
        <div class="post-date"><?php the_date(); ?></div>
    </div>
    <div class="article-text">
        <?php the_content(); ?>
    </div>
<?php endwhile; else: ?>
    <p><?php _e('Ничего не найдено.'); ?></p>
<?php endif; ?>
<?php
$prev = get_previous_post();
$next = get_next_post();
?>
    <div class="article-pagination">
        <div class="article-pagination__block pagination-prev-left">
            <a href="<?php the_permalink($prev->ID); ?>" class="article-pagination__link">
                <i class="icon icon-angle-double-left"></i>Предыдущая статья
            </a>
            <div class="wrap-pagination-preview pagination-prev-left">
                <div class="preview-article__img">
                    <img src="<?php echo arkuwp_thumbnail($prev->ID); ?>" class="preview-article__image">
                </div>
                <div class="preview-article__content">
                    <div class="preview-article__info">
                        <a href="<?php the_permalink($prev->ID); ?>" class="post-date">
                            <?php echo substr($prev->post_date, 0, 10); ?>
                        </a>
                    </div>
                    <div class="preview-article__text"><?php echo $prev->post_title; ?></div>
                </div>
            </div>
        </div>
        <div class="article-pagination__block pagination-prev-right">
            <a href="<?php the_permalink($next->ID); ?>" class="article-pagination__link">Сдедующая статья<i
                        class="icon icon-angle-double-right"></i></a>
            <div class="wrap-pagination-preview pagination-prev-right">
                <div class="preview-article__img">

                    <img src="<?php echo arkuwp_thumbnail($next->ID); ?>" class="preview-article__image">
                </div>
                <div class="preview-article__content">
                    <div class="preview-article__info">
                        <a href="<?php the_permalink($next->ID); ?>" class="post-date">
                            <?php echo substr($prev->post_date, 0, 10); ?>
                        </a>
                    </div>
                    <div class="preview-article__text"><?php echo $next->post_title; ?></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- sidebar-->
<?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>