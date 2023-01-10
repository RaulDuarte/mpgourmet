<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.pricing'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
        
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> 
         
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row justify-content-center mt-4">
        <div class="col-lg-5">
            <div class="text-center mb-5">
                <h4 class="fw-semibold fs-22">Escolha o Pacote e Defina o Dia e e Período</h4>
                <p class="text-muted mb-4 fs-15">
                    Escolha o pacote de refeições mensal mais adequado para seu filho.
                    Em seguida selecione os melhores dias e horários para as refeições do seu filho</p>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
        <div class="col-xxl-3 col-lg-6">
            <div class="card pricing-box">
                <div class="card-body bg-light m-2 p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fw-semibold">Pacote 01</h5>
                            <p class="text-danger">Economize R$ 10.98</p>
                        </div>
                        <div class="ms-auto">
                            <h2 class="month mt-n3">R$ 199.20 <small class="fs-13 text-muted">/Mês</small></h2>
                        </div>
                    </div>

                    <ul class="list-unstyled vstack gap-3">
                        <li>
                            <div class="d-flex">
                                <div class="flex-shrink-0 text-success me-1">
                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                </div>
                                <div class="flex-grow-1 fs-14">
                                    <b>2</b> Refeições Semanais 
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-3 pt-2">
                        <a href="javascript:void(0);" class="btn btn-warning w-100">Trocar Contrato</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->

        <div class="col-xxl-3 col-lg-6">
            <div class="card pricing-box">
                <div class="card-body bg-light m-2 p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fw-semibold">Pacote 02</h5>
                            <p class="text-danger">Economize R$ 10.98</p>
                        </div>
                        <div class="ms-auto">
                            <h2 class="month mt-n3">R$ 298.80 <small class="fs-13 text-muted">/Mês</small></h2>
                        </div>
                    </div>
                    <ul class="list-unstyled vstack gap-3">
                        <li>
                            <div class="d-flex">
                                <div class="flex-shrink-0 text-success me-1">
                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                </div>
                                <div class="flex-grow-1 fs-14">
                                    <b>3</b> Refeições Semanais
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-3 pt-2">
                        <a href="javascript:void(0);" class="btn btn-warning w-100">Trocar Plano</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->

        <div class="col-xxl-3 col-lg-6">
            <div class="card pricing-box ribbon-box right">
                <div class="card-body bg-light m-2 p-4">
                    <div class="ribbon-two ribbon-two-danger"><span>Popular</span></div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fw-semibold">Pacote 03</h5>
                            <p class="text-danger">Economize R$ 10.98</p>
                        </div>
                        <div class="ms-auto">
                            <h2 class="month mt-n3">R$ 398.40 <small class="fs-13 text-muted">/Mês</small></h2>
                        </div>
                    </div>
                    <ul class="list-unstyled vstack gap-3">
                        <li>
                            <div class="d-flex">
                                <div class="flex-shrink-0 text-success me-1">
                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                </div>
                                <div class="flex-grow-1 fs-14">
                                    <b>4</b> Refeiçẽos Semanais
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-3 pt-2">
                        <a href="javascript:void(0);" class="btn btn-success disabled w-100">Seu Plano Atual</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->

        <div class="col-xxl-3 col-lg-6">
            <div class="card pricing-box">
                <div class="card-body bg-light m-2 p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fw-semibold">Pacote 04</h5>
                            <p class="text-danger">Economize R$ 10.98</p>
                        </div>
                        <div class="ms-auto">
                            <h2 class="month mt-n3">R$ 498.00 <small class="fs-13 text-muted">/Mês</small></h2>
                        </div>
                    </div>
                    <ul class="list-unstyled vstack gap-3">
                        <li>
                            <div class="d-flex">
                                <div class="flex-shrink-0 text-success me-1">
                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                </div>
                                <div class="flex-grow-1 fs-14">
                                    <b>5</b> Refeições Semanais
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-3 pt-2">
                        <a href="javascript:void(0);" class="btn btn-warning w-100">Trocar Plano</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row mb-4">
        <div class="col-xxl-3 col-lg-6">
            <div class="card pricing-box">
                <div class="card-body bg-light m-2 p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fw-semibold">Pacote 05</h5>
                            <p class="text-danger">Economize R$ 10.98</p>
                        </div>
                        <div class="ms-auto">
                            <h2 class="month mt-n3">R$ 597.6 <small class="fs-13 text-muted">/Mês</small></h2>
                        </div>
                    </div>

                    <ul class="list-unstyled vstack gap-3">
                        <li>
                            <div class="d-flex">
                                <div class="flex-shrink-0 text-success me-1">
                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                </div>
                                <div class="flex-grow-1 fs-14">
                                    <b>6</b> Refeições Semanais 
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-3 pt-2">
                        <a href="javascript:void(0);" class="btn btn-warning w-100">Trocar Contrato</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->

        <div class="col-xxl-3 col-lg-6">
            <div class="card pricing-box">
                <div class="card-body bg-light m-2 p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fw-semibold">Pacote 06</h5>
                            <p class="text-danger">Economize R$ 10.98</p>
                        </div>
                        <div class="ms-auto">
                            <h2 class="month mt-n3">R$ 697.2 <small class="fs-13 text-muted">/Mês</small></h2>
                        </div>
                    </div>
                    <ul class="list-unstyled vstack gap-3">
                        <li>
                            <div class="d-flex">
                                <div class="flex-shrink-0 text-success me-1">
                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                </div>
                                <div class="flex-grow-1 fs-14">
                                    <b>7</b> Refeições Semanais
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-3 pt-2">
                        <a href="javascript:void(0);" class="btn btn-warning w-100">Trocar Plano</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->

        <div class="col-xxl-3 col-lg-6">
            <div class="card pricing-box">
                <div class="card-body bg-light m-2 p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fw-semibold">Pacote 08</h5>
                            <p class="text-danger">Economize R$ 10.98</p>
                        </div>
                        <div class="ms-auto">
                            <h2 class="month mt-n3">R$ 796.8 <small class="fs-13 text-muted">/Mês</small></h2>
                        </div>
                    </div>
                    <ul class="list-unstyled vstack gap-3">
                        <li>
                            <div class="d-flex">
                                <div class="flex-shrink-0 text-success me-1">
                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                </div>
                                <div class="flex-grow-1 fs-14">
                                    <b>8</b> Refeições Semanais
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-3 pt-2">
                        <a href="javascript:void(0);" class="btn btn-warning w-100">Trocar Plano</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->

        <div class="col-xxl-3 col-lg-6">
            <div class="card pricing-box">
                <div class="card-body bg-light m-2 p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fw-semibold">Pacote 08</h5>
                            <p class="text-danger">Economize R$ 10.98</p>
                        </div>
                        <div class="ms-auto">
                            <h2 class="month mt-n3">R$ 896.4 <small class="fs-13 text-muted">/Mês</small></h2>
                        </div>
                    </div>
                    <ul class="list-unstyled vstack gap-3">
                        <li>
                            <div class="d-flex">
                                <div class="flex-shrink-0 text-success me-1">
                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                </div>
                                <div class="flex-grow-1 fs-14">
                                    <b>9</b> Refeições Semanais
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-3 pt-2">
                        <a href="javascript:void(0);" class="btn btn-warning w-100">Trocar Plano</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="text-end mb-4">
        <a href="<?php echo e(URL::asset('/pages-pricing-date')); ?>" class="btn btn-warning btn-label right ms-auto"><i
                class="ri-arrow-right-line label-icon align-bottom fs-16 ms-2"></i>Selecionar Datas</a>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/js/pages/pricing.init.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/raul/Workspace/mpgourmet/resources/views/pages-pricing.blade.php ENDPATH**/ ?>