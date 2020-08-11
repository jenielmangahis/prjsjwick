  <footer id="main-footer">
    <div class="container pl-0 pr-0">
      <div class="col-4 left pl-0 pr-0">
         <h4 class="title uppercase montserrat">Services</h4>
         <div>
            <ul class="service-list">
               <li><a href="/services/accounting-bookkeeping/">Accounting &amp; Bookkeeping</a></li>
               <li><a href="/services/business-consulting/">Business Consulting</a></li>
               <li><a href="/services/cfo-services/">Outsourced CFO Services</a></li>
               <li><a href="/services/payroll-services/">Payroll Services</a></li>
               <li><a href="/services/quickbooks-accounting/">Quickbook Accounting</a></li>
               <li><a href="/services/small-business-package/">Small Business Package</a></li>
               <li><a href="/services/tax-service/">Tax Service</a></li>
            </ul>
         </div>
      </div>
      <div class="col-4 left sr-2">
        <div id="media_image-2" class="fwidget et_pb_widget widget_media_image">
           <a href="https://sjwickcpa.com">
              <img width="367" height="286" src="https://sjwickcpa.com/wp-content/uploads/2018/07/stacked-logo.png" class="image wp-image-1367 attachment-full size-full lazyloaded" alt="" style="max-width: 98%; height: auto;" sizes="(max-width: 367px) 100vw, 367px" srcset="https://sjwickcpa.com/wp-content/uploads/2018/07/stacked-logo.png 367w, https://sjwickcpa.com/wp-content/uploads/2018/07/stacked-logo-300x234.png 300w" data-ll-status="loaded">
           </a>
        </div>
      </div>
      <div class="col-4 left pl-0 pr-0">
        <div id="text-2" class="fwidget et_pb_widget widget_text">
           <h4 class="title uppercase montserrat">Steven J. Wick &amp; Associates, P.C.</h4>
           <div class="textwidget">
              <div class="montserrat">2809 E. Harmony Rd. Suite 120<br>
                 Fort Collins,&nbsp;CO&nbsp;80528
              </div>
              <p class="montserrat">(970) 224-3366<br>
                 <a href="https://sjwickcpa.com/" class="montserrat uppercase link-footer">www.SJWickCPA.com</a>
              </p>
           </div>
           <br class="clearfix"/>
           <br/>
           <br/>
           <div id="text-4" class="fwidget et_pb_widget widget_text">
              <div class="textwidget">
                 <p><a href="https://sjwickcpa.com/" class="link-footer montserrat uppercase">Home</a> | <a href="/blog" class="link-footer montserrat uppercase">Blog</a> | <a href="/privacy-policy/" class="link-footer montserrat uppercase">Policies</a>&nbsp;| <a href="/contact" class="link-footer montserrat uppercase">Contact</a></p>
              </div>
           </div>
        </div>
      </div>
  </footer>
  <div class="footer-bottom col-12 pl-0 pr-0">
    <div class="container clearfix pl-0 pr-0">
      <div class="col-7 left pl-0 pr-0">
        <span class="footer-copyright montserrat">Copyright All Rights Reserved © 2013 - 2020</span>
      </div>
      <div class="col-5 left pl-0 pr-0">
        <ul class="copyright-social">
          <li><a href="https://www.facebook.com/sjwickcpa"><i class="fa fa-facebook home-social" aria-hidden="true"></i></a></li>
          <li><a href="http://www.linkedin.com/in/stevenwick" class="icon" target="_blank"><i class="fa fa-linkedin home-social" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<script>
  $(function() {
    $('#carousel-a, #carousel-b').carousel({
      pause: true,
      interval: false
    });
    $('div.parallelogram-mobile-default').click(function() {
      if ($('section.home-mobile-menu').hasClass('hide-mobile')) {
        $('section.home-mobile-menu').removeClass('hide-mobile');
        $('section.home-mobile-menu').addClass('show-mobile');
      } else {
        $('section.home-mobile-menu').addClass('hide-mobile');
        $('section.home-mobile-menu').removeClass('show-mobile');
      }
    });
    // add jquery code here
  });
</script>
<?php wp_footer();?>
</body>
</html>
