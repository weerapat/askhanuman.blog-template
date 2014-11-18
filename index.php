<?php get_header(); ?>


<div class="container main-content">

    <div class="row">
        <div class="col-lg-2 col-md-4">
            <?php get_sidebar(); ?>
        </div> 

        <div class="col-lg-7 col-md-8">



            <?php
                // Set limit of the post in front page to 10
                $page_num = $paged;
                if ($pagenum='') $pagenum =1;
                query_posts('showposts=10&paged='.$page_num); 
            ?>


            <div class="content">
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="post-header">
                    
                    <h2 class="title">
                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <div class="post-meta-infos">
                        
                        <em><?php the_time( 'M j ,Y' ); ?> By <strong><?php the_author(); ?></strong></em>

                    </div>
                </div><!--end post header-->

                <div class="entry-content">
                    <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
                    <?php the_content(); ?>
                    <?php edit_post_link(); ?>
                    <?php wp_link_pages(); ?>
                </div><!--end entry-->

                <div class="post-footer">



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

        <div class="col-md-3 visible-lg rightbar-widget">
            <div class="row">

                <!-- Trustbox  --> 
                <div class="col-md-12 trustbox box">

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
                <!-- End Trustbox  --> 

                <div class="col-md-12 box">

                    <iframe id="trustedcompany-badge" src="//trustedcompany.com/embed/widget/v2?domain=askhanuman.co.th&type=b&review=1&text=a" 
                    width="100%" height="220" frameborder="0" scrolling="no">
                    </iframe>

                </div>

                <div class="col-md-12 box">
                <!-- Facebook like  --> 
                    <div class="fb-like-box" data-href="https://www.facebook.com/askhanuman" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                </div>

                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
            </div>

        </div>

    </div>

</div>


<?php get_footer(); ?>