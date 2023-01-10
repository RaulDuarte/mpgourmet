<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.settings'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg profile-setting-img">
            <img src="<?php echo e(URL::asset('/assets/images/login/scooping-the-food.jpg')); ?>" class="profile-wid-img" alt="">
            <div class="overlay-content">
                <div class="text-end p-3">
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-3">


            <div class="card mt-n5">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-5">
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-0">Complete o Perfil</h5>
                        </div>
                        <div class="flex-shrink-0">
                        </div>
                    </div>
                    <div class="progress animated-progress custom-progress progress-label">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30"
                            aria-valuemin="0" aria-valuemax="100">
                            <!--<div class="label">30%</div>-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center">
                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4 mt-3">
                            <img src="<?php if(Auth::user()->avatar != ''): ?> <?php echo e(URL::asset('images/' . Auth::user()->avatar)); ?><?php else: ?><?php echo e(URL::asset('assets/images/users/avatar-1.jpg')); ?> <?php endif; ?>"
                                class="rounded-circle avatar-xl img-thumbnail user-profile-image  shadow"
                                alt="user-profile-image">
                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                                <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                    <span class="avatar-title rounded-circle bg-light text-body shadow">
                                        <i class="ri-camera-fill"></i>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <!--
                        <h5 class="fs-16 mb-1">Anna Adame</h5>
                        <p class="text-muted mb-0">Lead Designer / Developer</p>
                        -->
                    </div>
                </div>
            </div>
            <!--end card-->

            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-0">Informações do Responsável</h5>
                        </div>
                        <div class="flex-shrink-0">
                            
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="JoiningdatInput" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="JoiningdatInput"  placeholder="Insira seu nome"/>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="JoiningdatInput" class="form-label">Email</label>
                            <input type="text" class="form-control" id="JoiningdatInput" placeholder="Insira seu email"/>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="JoiningdatInput" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="JoiningdatInput" placeholder="Insira seu Telefone"/>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="JoiningdatInput" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="JoiningdatInput" placeholder="Insira seu CPF"/>
                        </div>
                    </div>

                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-xxl-9">
            <div class="card mt-xxl-n5">
                <div class="card-header">
                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-dark" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                <i class="fas fa-home"></i>
                                Informações do Aluno
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" data-bs-toggle="tab" href="#changePassword" role="tab">
                                <i class="far fa-user"></i>
                                Alterar Senha
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body p-4">
                    <div class="tab-content">
                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                            <form action="javascript:void(0);">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="firstnameInput" class="form-label">Nome</label>
                                            <input type="text" class="form-control" id="nomedoaluno"
                                                placeholder="Enter your firstname">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="phonenumberInput" class="form-label">Registro Acadêmico</label>
                                            <input type="text" class="form-control" id="registroacademico"
                                                placeholder="Enter your phone number">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="JoiningdatInput" class="form-label">Nascimento</label>
                                            <input type="text" class="form-control" data-provider="flatpickr"
                                                id="JoiningdatInput" data-date-format="d M, Y"
                                                data-deafult-date="24 Nov, 2021" placeholder="Select date" />
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="phonenumberInput" class="form-label">Turma</label>
                                            <input type="text" class="form-control" id="registroacademico"
                                                placeholder="Enter your phone number">
                                        </div>
                                    </div>
                                     <!--end col-->
                                     <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="phonenumberInput" class="form-label">Período</label>
                                            <input type="text" class="form-control" id="registroacademico"
                                                placeholder="Enter your phone number">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="phonenumberInput" class="form-label">Unidade</label>
                                            <input type="text" class="form-control" id="registroacademico"
                                                placeholder="Enter your phone number">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="phonenumberInput" class="form-label">Endereço</label>
                                            <input type="text" class="form-control" id="registroacademico"
                                                placeholder="Enter your phone number">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="cityInput" class="form-label">Cidade</label>
                                            <input type="text" class="form-control" id="cityInput" placeholder="City"
                                                value="" />
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="countryInput" class="form-label">Estado</label>
                                            <input type="text" class="form-control" id="countryInput"
                                                placeholder="Country" value="United States" />
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="zipcodeInput" class="form-label">CEP</label>
                                            <input type="text" class="form-control" minlength="5" maxlength="6"
                                                id="zipcodeInput" placeholder="Enter zipcode" value="90011">
                                        </div>
                                    </div>



                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="skillsInput" class="form-label ">Alergias e Intolerâncias</label>
                                            <select class="form-control" name="skillsInput" data-choices
                                                data-choices-removeItem multiple id="skillsInput">
                                                <option value="alergia01">Alergia 01</option>
                                                <option value="alergia02">Alergia 02</option>
                                                <option value="alergia03">Alergia 03</option>
                                                <option value="alergia04">Alergia 04</option>
                                                <option value="alergia05" selected>Alergia 05</option>
                                                <option value="alergia06">Alergia 06</option>
                                                <option value="alergia07">Alergia 07</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    
                                    
                                    <!--end col-->
                                    <div class="col-lg-12">
                                        <div class="mb-3 pb-2">
                                            <label for="exampleFormControlTextarea"
                                                class="form-label">Observações importantes sobre o aluno</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea" placeholder="Enter your description"
                                                rows="3">Consectetur adipiscing elit. Aliquam sed orci finibus, fringilla urna ac, ullamcorper risus. Curabitur eu dui ut elit commodo luctus. Praesent vestibulum magna non mollis ultrices. Morbi ipsum ipsum, tempor eu nunc vel, ultrices semper ligula. Aenean id volutpat justo, quis blandit erat. Ut non enim diam.</textarea>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-12">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="submit" class="btn btn-success">Salvar</button>
                                            <a class="btn btn-danger" href="<?php echo e("/pages-profile"); ?>" role="button">Cancelar</a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                        <!--end tab-pane-->
                        <div class="tab-pane" id="changePassword" role="tabpanel">
                            <form action="javascript:void(0);">
                                <div class="row g-2">
                                    <div class="col-lg-4">
                                        <div>
                                            <label for="oldpasswordInput" class="form-label">Senha Atual*</label>
                                            <input type="password" class="form-control" id="oldpasswordInput"
                                                placeholder="Insira a senha atual">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-4">
                                        <div>
                                            <label for="newpasswordInput" class="form-label">Nova Senha*</label>
                                            <input type="password" class="form-control" id="newpasswordInput"
                                                placeholder="Insira a nova senha">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-4">
                                        <div>
                                            <label for="confirmpasswordInput" class="form-label">Confirme a Senha*</label>
                                            <input type="password" class="form-control" id="confirmpasswordInput"
                                                placeholder="Confirme a senha">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <a href="javascript:void(0);"
                                                class="link-primary text-decoration-underline">Esqueceu a Senha?</a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-12">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-success">Salvar</button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                        <!--end tab-pane-->
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/js/pages/profile-setting.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/raul/Workspace/mpgourmet/resources/views/pages-profile-settings.blade.php ENDPATH**/ ?>