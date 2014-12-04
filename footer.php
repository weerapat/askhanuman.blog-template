<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

    <!-- Close content zone --> 
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


        </div><!-- # header container -->
</div><!-- #main -->

<footer class="center-block">

    <div class="container">

        <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12">

                <ul class="list-unstyled">

                    <li style="display:none;" itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                        <a itemprop="url" href="/"><span itemprop="title">บ้าน</span></a>
                    </li>

                    <li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" itemprop="child">
                        <a itemprop="url" target="_blank" href="/about-us">
                            <span itemprop="title">เกี่ยวกับเรา</span>
                        </a>
                    </li>

                    <li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" itemprop="child">
                        <a itemprop="url" target="_blank" href="/faq">
                        <span itemprop="title">คำถามที่พบบ่อย</span></a>
                    </li>
                    
                    <li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" itemprop="child">
                        <a itemprop="url" target="_blank" href="/jobs"><span itemprop="title">ร่วมงานกับเรา</span></a>
                    </li>

                </ul>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">

                <ul class="list-unstyled">

                    <li style="display:none;" itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                        <a itemprop="url" href="/"><span itemprop="title">บ้าน</span></a>
                    </li>

                    <li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" itemprop="child">
                        <a itemprop="url" target="_blank" href="/privacy-statement">
                        <span itemprop="title">นโยบายสิทธิส่วนบุคคล</span></a>
                    </li>

                    <li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" itemprop="child">
                        <a itemprop="url" target="_blank" href="/terms-and-conditions">
                        <span itemprop="title">ข้อกำหนดและเงื่อนไข</span></a>
                    </li>

                    <li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" itemprop="child">
                        <a itemprop="url" target="_blank" href="/articles"><span itemprop="title">บล็อกของเรา</span></a>
                    </li>

                </ul>

            </div>

            <div class="clearfix visible-xs"></div>

            <div class="col-md-6 col-sm-12 col-xs-12 text-right padding-footer">

                <div class="row">
                    <div class="col-md-0">
                        <ul class="list-unstyled list-inline mania">

                            <li><div class="icon-secured-logo"></div></li>
                            <li><div class="icon-dbd-oic-logo"></div></li>
                            <li class="worktime">
                                <div class="icon-24hr-phone-white pull-left"></div>
                                <div class="number">02-022-1222</div>
                            </li>
                        </ul>
                    </div>
                </div>
            <div class="row">

        <address><p class="address">

        <strong>Ask Hanuman Co., Ltd.</strong><br> อาคาร กริต ชั้น 2 เลขที่ 1032/1-5, 14 ถนน พระราม 4<br> แขวงทุ่งมหาเมฆ เขตสาธร กรุงเทพฯ ประเทศไทย 10120<br>

        <a href="mailto:support@askhanuman.com">support@askhanuman.com</a></p></address></div>

        <!-- .row --></div></div><!-- .row -->

        </div><!-- .container -->


        <div class="copyright">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12">

                        <p> Copyright &copy; <time>2014</time> ASK Hanuman. All Rights Reserved. </p>

                    </div>

                </div>

            </div>

        </div>

</footer>


<!-- For show admin bar if loged in -->
<?php wp_footer(); ?>
</body>
</html>