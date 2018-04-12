<div id="widget-area" class="widget-area" role="complementary">
    <div class="sidebar">
        <div class="sidebar__sidebar-item">
            <div class="sidebar-item__title">Календарь</div>
            <div class="sidebar-item__content">
                <?php get_calendar(); ?>
            </div>
        </div>
        <div class="sidebar__sidebar-item">
            <div class="sidebar-item__title">Теги</div>
            <div class="sidebar-item__content">
                <ul class="tags-list">
                    <?php wp_tag_cloud();?>
                </ul>
            </div>
        </div>
        <div class="sidebar__sidebar-item">
            <div class="sidebar-item__title">Категории</div>
            <div class="sidebar-item__content">
                <ul class="category-list">
                    <?php
                    $test = wp_list_categories(array(
                        'title_li' => '',
                        'exclude'  => array( 1 )
                    ));
                    ?>
                </ul>
            </div>
        </div>
    </div>
 </div>



