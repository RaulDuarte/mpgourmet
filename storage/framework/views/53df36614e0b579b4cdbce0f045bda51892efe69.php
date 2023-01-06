<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.coming-soon'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="auth-page-wrapper pt-5">
    <!-- auth page bg -->
    <div class="auth-one-bg-position auth-one-bg"  id="auth-particles">
        <div class="bg-overlay"></div>

        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div>
    </div>

    <!-- auth page content -->
    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-sm-5 pt-4 mb-4">
                        <div class="mb-sm-5 pb-sm-4 pb-5">
                            <img src="<?php echo e(URL::asset('assets/images/comingsoon.png')); ?>" alt="" height="120" class="move-animation">
                        </div>
                        <div class="mb-5">
                            <h1 class="display-2 coming-soon-text">Coming Soon</h1>
                        </div>
                        <div>
                            <div class="row justify-content-center mt-5">
                                <div class="col-lg-8">
                                    <div id="countdown" class="countdownlist"></div>
                                </div>
                            </div>

                            <div class="mt-5">
                                <h3>Get notified when we launch</h3>
                                <p class="text-muted">Don't worry we will not spam you 😊</p>
                            </div>

                            <div class="input-group countdown-input-group mx-auto my-4">
                                <input type="email" class="form-control border-light shadow" placeholder="Enter your email address" aria-label="search result" aria-describedby="button-email">
                                <button class="btn btn-success" type="button" id="button-email">Send<i class="ri-send-plane-2-fill align-bottom ms-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0 text-muted">&copy; <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/particles.js/particles.js.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/particles.app.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/coming-soon.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/raul/Desktop/mpgourmet/resources/views/pages-coming-soon.blade.php ENDPATH**/ ?>