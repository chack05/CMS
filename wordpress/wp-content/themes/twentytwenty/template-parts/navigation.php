<?php
/**
 * Custom Query to display the latest posts in the requested format (Day/Month Year | Full Title).
 */

$args = array(
    'posts_per_page' => 2, // Số lượng bài viết muốn hiển thị (có thể thay đổi)
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$latest_posts = new WP_Query( $args );

if ( $latest_posts->have_posts() ) {
    ?>
    <div class="custom-post-list-wrapper list-final-style">
        <?php
        while ( $latest_posts->have_posts() ) {
            $latest_posts->the_post();

            // Lấy ngày, tháng và năm
            $day   = get_the_date( 'd' ); // Ví dụ: 03
            $month = get_the_date( 'm' ); // Ví dụ: 08
            $year  = get_the_date( 'y' ); // Ví dụ: 18 (hoặc Y cho 2018)

            $post_title = get_the_title(); // Lấy tiêu đề bài viết đầy đủ
            ?>

            <div class="custom-post-item">
                <a href="<?php the_permalink(); ?>" class="post-link">

                    <div class="post-date-box date-box-final">
                        <div class="date-fraction">
                            <span class="post-day"><?php echo esc_html( $day ); ?></span>
                            <span class="date-divider"></span>
                            <span class="post-month"><?php echo esc_html( $month ); ?></span>
                        </div>
                        <span class="post-year"><?php echo esc_html( $year ); ?></span>
                    </div>
                    <div class="post-title-box">
                        <h4 class="post-title"><?php echo wp_kses_post( $post_title ); ?></h4>
                    </div>
                </a>
            </div> <?php
        }
        ?>
    </div> <?php
    wp_reset_postdata();
}
?>