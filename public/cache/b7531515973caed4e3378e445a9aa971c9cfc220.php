<nav class="pcoded-navbar navbar-dark brand-dark">
  <div class="navbar-wrapper">
    <div class="navbar-brand header-logo">
      <a href="/admin" class="b-brand">
        <img src="/resources/themes/core/images/logos/META_LOGO_2.png" width="100px" alt="shMeta Admin Panel">
        
      </a>
      <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
    </div>
    <div class="navbar-content scroll-div">
      <ul class="nav pcoded-inner-navbar">
        <li class="nav-item pcoded-menu-caption">
          <label>Navigation</label>
        </li>
        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
          <a href="/admin" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
        </li>
        <?php if (\Illuminate\Support\Facades\Blade::check('auth')): ?>
          <?php if($data['user']->isADM()): ?>
          <?php echo $__env->make('partials.ap.nav.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          
            <?php echo $__env->make('partials.ap.nav.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php endif; ?>
          <?php if($data['user']->isADM() || $data['user']->isGM() || $data['user']->isGMA()): ?>
            <?php echo $__env->make('partials.ap.nav.account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.ap.nav.player', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.ap.nav.misc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.ap.nav.server', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php endif; ?>
          <?php if($data['user']->isGS()): ?>
            <?php echo $__env->make('partials.ap.nav.gs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php endif; ?>
        <?php endif; ?>
    </div>
  </div>
</nav>
<?php /**PATH C:\laragon\www\shaiyabattles\resources\views/partials/ap/nav.blade.php ENDPATH**/ ?>