<section class="menu-area">
  <div class="container-xl">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

          <ul class="mobile-header-buttons">
            <li><a class="mobile-nav-trigger" href="#mobile-primary-nav">Menu<span></span></a></li>
            <li><a class="mobile-search-trigger" href="#mobile-search">Search<span></span></a></li>
          </ul>

          <a href="<?php echo site_url(''); ?>" class="navbar-brand" href="#"><img src="<?php echo base_url('uploads/system/'.get_frontend_settings('dark_logo')); ?>" alt="" height="35"></a>

          <?php include 'menu.php'; ?>

          
 
          <form class="inline-form" action="<?php echo site_url('home/search'); ?>" method="get" style="width: 100%;">
            <div class="input-group search-box mobile-search">
              <input type="text" name = 'query' class="form-control" placeholder="<?php echo site_phrase('search_for_courses'); ?>">
              <div class="input-group-append">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </form>

          <div class="instructor-box menu-icon-box">
              <div class="icon">
                <a href="<?php echo site_url('home/about_us'); ?>"
                 style="border: 1px solid transparent; margin: 10px 10px; font-size: 14px; width: 100%; border-radius: 0;"><?php echo site_phrase('about_us'); ?></a>
              </div>
            </div>
            <div class="instructor-box menu-icon-box">
              <div class="icon">
                <a href="<?php echo site_url('home/contact'); ?>"
                 style="border: 1px solid transparent; margin: 10px 10px; font-size: 14px; width: 100%; border-radius: 0;"><?php echo site_phrase('contact'); ?></a>
              </div>
            </div>
          <?php if ($this->session->userdata('admin_login')): ?>
            <div class="instructor-box menu-icon-box">
              <div class="icon">
                <a href="<?php echo site_url('admin'); ?>" style="border: 1px solid transparent; margin: 10px 10px; font-size: 14px; width: 100%; border-radius: 0;"><?php echo site_phrase('administrator'); ?></a>
              </div>
            </div>
          <?php endif; ?>
          

          <div class="cart-box menu-icon-box" id = "cart_items">
            <?php include 'cart_items.php'; ?>
          </div>

          <span class="signin-box-move-desktop-helper"></span>
          <div class="sign-in-box btn-group">

            <a href="<?php echo site_url('home/login'); ?>" class="btn btn-sign-in"><?php echo site_phrase('log_in'); ?></a>

            <a href="<?php echo site_url('home/sign_up'); ?>" class="btn btn-sign-up"><?php echo site_phrase('sign_up'); ?></a>

          </div> <!--  sign-in-box end -->
        </nav>
      </div>
    </div>
  </div>
</section>
<style>
  /* *************************************************************** */
/* *************************** social icon *********************** */
/* *************************************************************** */
.social-icon {
    position: fixed;
    top: 33%;
    left: 0;
    z-index: 999;
    background: rgb(0 0 0 / 81%);
    padding: 15px 10px 0px 7px;
    border-radius: 0;
    transition: 0.5s;
}

 .social-icon .link {
    display: block;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px dashed white;
    background-clip: content-box;
    padding: 4px;
    transition: .5s;
    line-height: 30px;
    font-size: 15px;
    text-align: center;
    margin-bottom: 15px;
  }

 .social-icon .link:hover {
    transform: rotate(360deg);
  }

 .social-icon .link.linkedin {
    background-color: #007ab7;
    color: white;
  }
  .social-icon .link.instagram {
    background-color: #e14b92;
    color: white;
  }

 .social-icon .link.twitter {
    background-color: #2aa3ef;
    color: white;
  }

 .social-icon .link.facebook {
    background-color: #3d5a96;
    color: white;
  }

  @media only screen and (max-width: 500px){

    .social-icon .link {
        display: block;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        border: 1px dashed white;
        background-clip: content-box;
        padding: 4px;
        transition: .5s;
        line-height: 22px;
        font-size: 11px;
        text-align: center;
        margin-bottom: 8px;
    }

    .social-icon {
        padding: 35px 10px 0px 7px;
    }
 
  }

</style>

<div class="social-icon">
        <a href="#" class="link facebook" target="_blank"><span class="fab fa-facebook"></span></a>
        <a href="#" class="link twitter" target="_blank"><span class="fab fa-twitter"></span></a>
        <a href="#" class="link instagram" target="_blank"><span class="fab fa-instagram"></span></a>
        <a href="#" class="link linkedin" target="_blank"><span class="fab fa-linkedin"></span></a>
    </div>
