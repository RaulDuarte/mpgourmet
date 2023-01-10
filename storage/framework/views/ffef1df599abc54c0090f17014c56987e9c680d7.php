<?php $__env->startSection('title'); ?> Home <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('assets/libs/swiper/swiper.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

   <!-- Begin page -->
   <div class="layout-wrapper landing">
    <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(URL::asset('/index')); ?>">
                <img src="<?php echo e(URL::asset('assets/images/logos/Logotipo-M&P-Gourmet_colorido-fundo-transparente2.png')); ?>" class="card-logo card-logo-dark" alt="logo dark" height="60">
                <img src="<?php echo e(URL::asset('assets/images/logos/Logotipo-M&P-Gourmet_colorido-fundo-transparente2.png')); ?>" class="card-logo card-logo-light" alt="logo light"
                    height="17">
            </a>
            <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                    <!--
                    <li class="nav-item">
                        <a class="nav-link fs-14 active" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-14" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-14" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-14" href="#plans">Plans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-14" href="#reviews">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-14" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-14" href="#contact">Contact</a>
                    </li>
                -->
                </ul>
                
                <div>
                    <a href="<?php echo e(URL::asset('/auth-signup-basic')); ?>" style="font-weight: bold" class="btn btn-danger">Crie sua Conta</span></a>
                    <a href="<?php echo e(URL::asset('/index')); ?>" style="font-weight: bold" class="btn btn-success">Área do Cliente</a>
                </div>
            </div>

        </div>
    </nav>
    <!-- end navbar -->
     <div class="vertical-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show"></div>

    <!-- start hero section -->
    <section class="section pb-0 hero-section" id="hero">
        <div class="bg-overlay bg-overlay-image"></div>
        <div class="container">

            <div class="row align-items-center" style="height: 100vh">
                <div class="col-lg-8 col-sm-10" style="margin-top: -17rem">


                    <div class="text-left">
                        <h1 class="display-6 fw-semibold lh-base">

                            Sua plataforma digital para compra de refeições no 
                            restaurante estudantil do 

                            <span class="text-success">Colégio ARBOS</span></h1>
                    </div>

                    <!--
                    <div class="d-flex gap-2 mt-4">
                        <a href="<?php echo e(URL::asset('/pages-pricing')); ?>" class="btn btn-lg btn-danger">Crie sua Conta</a>
                    </div>
                    -->
                 
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end hero section -->

    <div class="mt-5"></div>

    <!-- start Work Process -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h3 class="mb-3 fw-semibold">Como Funciona a Compra de Refeições?</h3>
                        <p class="text-muted mb-4 ff-secondary">
                            A plataforma digital da M&P Gourmet permite a compra de refeições no restaurante 
                            estudantil nas dependencias do Colégio Arbos, seja atráves de pacotes mensais ou
                            compras avulsas.
                        </p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row text-center">
                <div class="col-lg-4">
                    <div class="process-card mt-4">
                        <div class="process-arrow-img d-none d-lg-block">
                            <img src="<?php echo e(URL::asset('assets/images/landing/process-arrow-img.png')); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="avatar-sm icon-effect mx-auto mb-4">
                            <div class="avatar-title bg-transparent rounded-circle h1 pallet-primary-color">
                                <i class="ri-user-follow-line"></i>
                            </div>
                        </div>

                        <h4>Crie sua Conta</h4>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="process-card mt-4">
                        <div class="process-arrow-img d-none d-lg-block">
                            <img src="<?php echo e(URL::asset('assets/images/landing/process-arrow-img.png')); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="avatar-sm icon-effect mx-auto mb-4">
                            <div class="avatar-title bg-transparent rounded-circle h1 pallet-primary-color">
                                <i class="ri-open-arm-line"></i>
                            </div>
                        </div>

                        <h4>Registre o Aluno</h4>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="process-card mt-4">
                        <div class="avatar-sm icon-effect mx-auto mb-4">
                            <div class="avatar-title bg-transparent rounded-circle h1 pallet-primary-color">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                        </div>

                        <h4>Compre as Refeições</h4>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end Work Process -->

    <!-- start cta -->
    <section class="py-5 position-relative" style="background-color: #471016">
        <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-sm">
                    <div>
                        <h4 class="text-white mb-0 fw-semibold">Garanta a melhor refeição para o seu filho, compre pela M&P Gourmet.</h4>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-sm-auto">
                    <div>
                        <a href="https://1.envato.market/velzon-admin" target="_blank" style="font-weight: bold" class="btn bg-gradient btn-danger"></i>Crie sua Conta</a>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end cta -->

    <!-- start features -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="text-muted">
                        <h4 class="mb-3">Pacotes Mensais</h4>
                        <p class="mb-4 ff-secondary">
                            Não tenha preocupações com a alimentação do seu filho, programe a compra de todas 
                            as refeições do mês e realize um único pagamento.
                        </p>

                        <div class="row">
                            <div class="col-sm-5">
                                <div class="vstack gap-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <div class="avatar-xs icon-effect">
                                                <div
                                                    class="avatar-title bg-transparent text-success rounded-circle h2">
                                                    <i class="ri-check-fill pallet-primary-color"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 mb-0">Único Pagamento</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <div class="avatar-xs icon-effect">
                                                <div
                                                    class="avatar-title bg-transparent text-success rounded-circle h2">
                                                    <i class="ri-check-fill pallet-primary-color"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 mb-0">Acompanhe o Consumo</h5>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="vstack gap-2">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-sm-7 col-10 ms-auto order-1 order-lg-2">
                    <div>
                        <img src="<?php echo e(URL::asset('assets/images/landing/features/basket-full-of-vegetables.jpg')); ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row align-items-center mt-5 pt-lg-5 gy-4">
                <div class="col-lg-6 col-sm-7 col-10 mx-auto">
                    <div>
                        <img src="<?php echo e(URL::asset('assets/images/landing/features/delicious-salad-with-pasta-and-seafood-in-beautiful-plate.jpg')); ?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-muted ps-lg-5">
                        <h4 class="mb-3">Compra Avulsa</h4>
                        <p class="mb-4">
                            Seu filho está em um evento ou atividade recreativa e precisa de uma refeição fora do pacote mensal? 
                            Sem problemas, compre pacotes avulsos para que ele possa se alimentar.
                        </p>

                        <div class="vstack gap-2">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2">
                                    <div class="avatar-xs icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                            <i class="ri-check-fill pallet-primary-color    "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">Sem contrato</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2">
                                    <div class="avatar-xs icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                            <i class="ri-check-fill pallet-primary-color"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">Rápido e Eficiênte</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end features -->


    <!-- start review -->
    <section class="section" id="reviews" style="background-color: #471016">
        <div class="bg-overlay bg-overlay-pattern"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center">
                        <div>
                            <i class="ri-double-quotes-l text-danger display-3"></i>
                        </div>

                        <!-- Swiper -->
                        <div class="swiper client-review-swiper rounded" dir="ltr">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <div class="text-white-50">
                                                <p class="fs-20 ff-secondary mb-4">
                                                    "consectetur adipiscing elit. Aenean vestibulum nibh at volutpat 
                                                    venenatis. Nulla id tortor tempor, pharetra velit dictum, tempus sapien."
                                                </p>
                                                <div>
                                                    <h5 class="text-white">gregoriusus</h5>
                                                    <p>- Skote User</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slide -->
                                <div class="swiper-slide">
                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <div class="text-white-50">
                                                <p class="fs-20 ff-secondary mb-4">
                                                    "consectetur adipiscing elit. Aenean vestibulum nibh at volutpat 
                                                    venenatis. Nulla id tortor tempor, pharetra velit dictum, tempus sapien."
                                                </p>
                                                <div>
                                                    <h5 class="text-white">GeekyGreenOwl</h5>
                                                    <p>- Skote User</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slide -->
                                <div class="swiper-slide">
                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <div class="text-white-50">
                                                <p class="fs-20 ff-secondary mb-4">
                                                    "consectetur adipiscing elit. Aenean vestibulum nibh at volutpat 
                                                    venenatis. Nulla id tortor tempor, pharetra velit dictum, tempus sapien."
                                                </p>
                                                <div>
                                                    <h5 class="text-white">sreeks456</h5>
                                                    <p>- Veltrix User</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slide -->
                            </div>
                            <div class="swiper-button-next bg-white rounded-circle"></div>
                            <div class="swiper-button-prev bg-white rounded-circle"></div>
                            <div class="swiper-pagination position-relative mt-2"></div>
                        </div>
                        <!-- end slider -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end review -->


    <!-- start contact -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h3 class="mb-3 fw-semibold">Dúvidas? Fale Conosco.</h3>
                        <p class="text-muted mb-4 ff-secondary">
                            Nossa equipe está a disposição para ajuda-lo. Iremos responder no email informado em até 24 horas.
                        </p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row gy-4 justify-content-center">
        
                <!-- end col -->
                <div class="col-lg-8">
                    <div>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="name" class="form-label fs-13">Nome</label>
                                        <input name="name" id="name" type="text"
                                            class="form-control bg-light border-light" placeholder="Seu nome*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="email" class="form-label fs-13">Email</label>
                                        <input name="email" id="email" type="email"
                                            class="form-control bg-light border-light" placeholder="Seu email*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="comments" class="form-label fs-13">Menssagem</label>
                                        <textarea name="comments" id="comments" rows="3"
                                            class="form-control bg-light border-light"
                                            placeholder="Sua mensagem..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-end">
                                    <input type="submit" id="submit" name="send" style="font-weight: bold" class="submitBnt btn btn-success"
                                        value="Enviar mensagem">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end contact -->

      <!-- start cta -->
    <section class="py-5 position-relative" style="background-color: #471016">
        <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-sm">
                    <div>
                        <h4 class="text-white mb-0 fw-semibold">Garanta a melhor refeição para o seu filho, compre pela M&P Gourmet.</h4>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-sm-auto">
                    <div>
                        <a href="https://1.envato.market/velzon-admin" target="_blank" style="font-weight: bold" class="btn bg-gradient btn-danger"></i>Crie sua Conta</a>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end cta -->

    <!-- Start footer -->
    <footer class="custom-footer bg-dark py-5 position-relative">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-2">
                    <div>
                        <div>
                            <img src="<?php echo e(URL::asset('assets/images/logos/mp-logo.png')); ?>" alt="logo light" height="100">
                        </div>
                    </div>
                </div>

                <div style="padding-left:5rem" class="col-lg-10 mt-4 text-center">
                    <p>A plataforma digital da M&P Gourmet permite a compra de refeições no restaurante estudantil nas dependencias do Colégio Arbos, seja atráves de pacotes mensais ou compras avulsas.</p>
                </div>
            </div>

            <div class="row text-center text-sm-start align-items-center mt-5">
                <div class="col-sm-6">

                    <div>
                        <p class="copy-rights mb-0">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © M&P Gourmet - Desenvolvido por Agência Hanne.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end">
                        <ul class="list-inline mb-0 footer-social-link">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="avatar-xs d-block">
                                    <div class="avatar-title rounded-circle">
                                        <i class="ri-facebook-fill"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="avatar-xs d-block">
                                    <div class="avatar-title rounded-circle">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

</div>
<!-- end layout wrapper -->


    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <script src="<?php echo e(URL::asset('/assets/libs/swiper/swiper.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('/assets/js/pages/landing.init.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/raul/Workspace/mpgourmet/resources/views/landing.blade.php ENDPATH**/ ?>