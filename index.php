<?php get_header(); ?>


<div class="container main-content">

    <div class="row">
        <div class="col-lg-3 col-md-4">
            <?php get_sidebar(); ?>
        </div> 

        <div class="col-lg-6 col-md-8">

            <div class="content">
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="post-header">
                    <div class="date"><?php the_time( 'M j y' ); ?></div>
                    <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <div class="author"><?php the_author(); ?></div>
                </div><!--end post header-->
                <div class="entry clear">
                    <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
                    <?php the_content(); ?>
                    <?php edit_post_link(); ?>
                    <?php wp_link_pages(); ?>
                </div><!--end entry-->
                <div class="post-footer">
                    <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
                </div><!--end post footer-->
              </div><!--end post-->
            <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
              <div class="navigation index">
                <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
                <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
              </div><!--end navigation-->
            <?php else : ?>
            <?php endif; ?>

            </div>
        </div>  



        <!-- Right bar widget --> 

        <!-- Trustbox  --> 

        <div class="col-md-3 visible-lg trustbox">

            

            <div class="padding-around">
                <ul ng-click="selectionFormShow = true" class="list-unstyled list-trust center-block font-thai">
                    <li>
                        <div class="trust-shield-30s pull-left"></div>
                        <div class="trust-text">เปรียบเทียบจาก 30 แบรนด์ ภายใน 30 วินาที</div>
                    </li>
                    <li><div class="trust-shield-bath pull-left"></div><div class="trust-text">ยินดีคืนเงิน 100% หากเจอที่อื่นถูกกว่า</div></li>
                    <li><div class="trust-shield-24h pull-left"></div><div class="trust-text">บริการช่วยเหลือฉุกเฉิน 24 ชม.</div></li>
                    <li><div class="trust-shield-0per pull-left"></div><div class="trust-text">ผ่อน 0% 10 เดือน จ่ายสดลดอีก 5%</div></li>
                    <li><div class="trust-shield-gift pull-left"></div><div class="trust-text">แจกของสมนาคุณฟรีมูลค่า4,000บาท</div></li>
                </ul>
            </div>

        </div>


    </div>

</div>


<?php get_footer(); ?>