<section class="home-contact background-map desktop-only">
  <div class="col-12 pl-0 pr-0">
    <div class="col-5 left home-map pl-0 pr-0 z-2">
      <div class="yellow-whitespace"></div>
      <div class="home-prs-colored border-prs pl-4 pb-5">
        <div class="reshape-contact">
          <h1 class="txt-black mb-3 bold opensans-bold lh-xl">CONTACT US</h1>
          <span class="text-default text-medium mb-0 txt-white d-block opensans-light bold">Solvent Traps USA</span>
          <div class="cd-h-5 pl-0 pr-0 left">
            <span class="text-default text-home-contact mb-0 txt-white d-block opensans-light bold">175 Cassia Way</span>
            <span class="text-default text-home-contact mb-0 txt-white d-block opensans-light bold">(702) 232-0714</span>
          </div>
          <div class="cd-h-5 pl-0 pr-0 left">
            <i class="fa fa-facebook home-icon" aria-hidden="true"></i>
            <i class="fa fa-twitter home-icon" aria-hidden="true"></i>
          </div>
          <br class="clearfix"/>
          <div class="col-7 mt-4 home-contact-container pl-0 pr-0">
            <div class="form-default">
              <input type="text" placeholder="name">
            </div>
            <div class="form-default">
              <input type="text" placeholder="email">
            </div>
            <div class="form-default">
              <input type="text" placeholder="phone">
            </div>
            <div class="form-default">
              <textarea placeholder="Message"></textarea>
            </div>
            <div class="margin-auto mt-4">
              <div class="parallelogram-contact-default left">
                <div class="normalize-shape-default">
                  <a class="opensans-bold fp-btn pl-2">SUBMIT</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-7 pl-0 pr-0 z-1 left">

    </div>
  </div>
  <br class="clearfix"/>
</section>

<section class="home-contact pt-4 pb-4 pl-4 pr-4 bg-yellow mobile-only">
  <div class="col-12 pl-0 pr-0">
    <div class="col-12 left home-map pl-0 pr-0 z-2">
      <h1 class="txt-black mb-3 bold opensans-bold lh-xl">CONTACT US</h1>
      <span class="text-default text-medium mb-0 txt-white d-block opensans-light bold">Solvent Traps USA</span>
      <div class="cd-h-5 pl-0 pr-0 left">
        <span class="text-default text-home-contact mb-0 txt-white d-block opensans-light bold">175 Cassia Way</span>
        <span class="text-default text-home-contact mb-0 txt-white d-block opensans-light bold">(702) 232-0714</span>
      </div>
      <div class="cd-h-5 pl-0 pr-0 left">
        <i class="fa fa-facebook home-icon" aria-hidden="true"></i>
        <i class="fa fa-twitter home-icon" aria-hidden="true"></i>
      </div>
      <br class="clearfix"/>
      <div class="col-12 mt-4 home-contact-container pl-0 pr-0">
        <div class="form-default">
          <input type="text" placeholder="name">
        </div>
        <div class="form-default">
          <input type="text" placeholder="email">
        </div>
        <div class="form-default">
          <input type="text" placeholder="phone">
        </div>
        <div class="form-default">
          <textarea placeholder="Message"></textarea>
        </div>
        <div class="margin-auto mt-4">
          <div class="parallelogram-contact-default left">
            <div class="normalize-shape-default">
              <a class="opensans-bold fp-btn pl-2">SUBMIT</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="footer-a desktop-only">
  <div class="container-home-news">
    <div class="col-4 left">
      <h1 class="txt-yellow opensans-bold">SOLVENT TRAPS USA</h1>
      <span class="txt-footer text-white">A solvent trap is a firearm cleaning system that is designed to capture cleaning solvent in order to be disposed of efficiently. Solvent traps feature cups, also referred to as dividers, that trap byproduct created during the cleaning process. Not to sound all National Geographic on you, but in their original environment, solvent traps might look familiar. They have a distinct resemblance to silencers. The big difference is that solvent traps do not have a hole bored through the center and they do not have a serial number engraved on them. They are also not always designed to be shot.</span>
    </div>
    <div class="col-2 text-center left">
      <h5 class="txt-yellow opensans-bold">MENU</h5>
      <?php
        $v = 0;
        $menuargs = array(
          "theme_location" => "primary",
          "menu_class" => "s-menu",
          "menu_id" => "MAIN-MENU",
        );
        $items = wp_get_nav_menu_items( 'MAIN-MENU', $menuargs);
      ?>
      <?php foreach( $items as $item ){ ?>
        <a class="link-footer" href="<?php echo $item->url; ?><?php echo $item->title; ?>"><?php echo $item->title; ?></a>
      <?php } ?>
    </div>
    <div class="col-3 left text-center">
      <h5 class="txt-yellow opensans-bold">CONTACT</h5>
      <span class="link-footer txt-white d-block">175 Cassia Way</span>
      <span class="link-footer txt-white d-block">(702) 232-0714</span>
    </div>
    <div class="col-3 left">
      <h5 class="txt-yellow opensans-bold">SOCIAL MEDIA</h5>
      <div class="col-12 pl-0 pr-0">
        <i class="fa fa-facebook footer-icon" aria-hidden="true"></i>
        <i class="fa fa-twitter footer-icon" aria-hidden="true"></i>
      </div>
    </div>
  </div>
</section>

<section class="footer-a mobile-only">
  <div class="container-home-news">
    <div class="col-12 pb-4">
      <h1 class="txt-yellow opensans-bold">SOLVENT TRAPS USA</h1>
      <span class="txt-footer text-white">A solvent trap is a firearm cleaning system that is designed to capture cleaning solvent in order to be disposed of efficiently. Solvent traps feature cups, also referred to as dividers, that trap byproduct created during the cleaning process. Not to sound all National Geographic on you, but in their original environment, solvent traps might look familiar. They have a distinct resemblance to silencers. The big difference is that solvent traps do not have a hole bored through the center and they do not have a serial number engraved on them. They are also not always designed to be shot.</span>
    </div>
    <div class="col-12 pb-4">
      <h5 class="txt-yellow opensans-bold">CONTACT</h5>
      <span class="link-footer txt-white d-block">175 Cassia Way</span>
      <span class="link-footer txt-white d-block">(702) 232-0714</span>
    </div>
    <div class="col-12">
      <h5 class="txt-yellow opensans-bold">SOCIAL MEDIA</h5>
      <div class="col-12 pl-0 pr-0">
        <i class="fa fa-facebook footer-icon" aria-hidden="true"></i>
        <i class="fa fa-twitter footer-icon" aria-hidden="true"></i>
      </div>
    </div>
  </div>
</section>
<section class="footer-b">
  <div class="col-12 pl-0 pr-0">
    <span class="footer-copyright">COPYRIGHT 2020 F1EZTRAP.COM | ALL RIGHTS RESERVED</span>
  </div>
</section>
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
