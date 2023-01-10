@extends('layouts.master')
@section('title') @lang('translation.pricing') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
        
        @endslot
        @slot('title') 
         
        @endslot
    @endcomponent
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

    <!--Primeira Semana-->
    <div class="row justify-content-center">
        <div class="col-md-12 mb-2 mt-2 text-center">
            <h3>Primeira Semana</h3>
            <hr>
        </div>

        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Segunda-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid1" name="listGroupRadioGrid1" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid1">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid2" name="listGroupRadioGrid1" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid3" name="listGroupRadioGrid1" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid3">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Terça-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid4" name="listGroupRadioGrid2" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid5" name="listGroupRadioGrid2" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid5">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid6" name="listGroupRadioGrid2" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Quarta-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid7" name="listGroupRadioGrid3" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid7">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid8" name="listGroupRadioGrid3" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid8">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid9" name="listGroupRadioGrid3" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid9">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Quinta-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid10" name="listGroupRadioGrid4" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid10">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid11" name="listGroupRadioGrid4" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid11">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid12" name="listGroupRadioGrid4" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid12">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Sexta-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid13" name="listGroupRadioGrid5" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid13">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid14" name="listGroupRadioGrid5" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid14">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid15" name="listGroupRadioGrid5" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid15">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Sábado</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid16" name="listGroupRadioGrid6" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid16">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid17" name="listGroupRadioGrid6" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid17">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid18" name="listGroupRadioGrid6" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid18">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>

    <!--Segunda Semana-->
    <div class="row justify-content-center">
        <div class="col-md-12 mb-2 mt-2 text-center">
            <h3>Segunda Semana</h3>
            <hr>
        </div>

        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Segunda-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid19" name="listGroupRadioGrid7" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid19">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid20" name="listGroupRadioGrid7" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid20">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid21" name="listGroupRadioGrid7" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid21">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Terça-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid22" name="listGroupRadioGrid8" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid22">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid23" name="listGroupRadioGrid8" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid23">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid24" name="listGroupRadioGrid8" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid24">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Quarta-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid25" name="listGroupRadioGrid9" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid25">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid26" name="listGroupRadioGrid9" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid26">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid27" name="listGroupRadioGrid9" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid27">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Quinta-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid28" name="listGroupRadioGrid10" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid28">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid29" name="listGroupRadioGrid10" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid29">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid30" name="listGroupRadioGrid10" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid30">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Sexta-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid31" name="listGroupRadioGrid11" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid31">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid32" name="listGroupRadioGrid11" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid32">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid33" name="listGroupRadioGrid11" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid33">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Sábado</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid34" name="listGroupRadioGrid12" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid34">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid35" name="listGroupRadioGrid12" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid35">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid36" name="listGroupRadioGrid12" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid36">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>

    <!--Terceira Semana-->
    <div class="row justify-content-center">
        <div class="col-md-12 mb-2 mt-2 text-center">
            <h3>Terceira Semana</h3>
            <hr>
        </div>

        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Segunda-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid37" name="listGroupRadioGrid13" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid37">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid38" name="listGroupRadioGrid13" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid38">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid39" name="listGroupRadioGrid13" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid39">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Terça-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid40" name="listGroupRadioGrid14" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid40">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid41" name="listGroupRadioGrid14" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid41">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid42" name="listGroupRadioGrid14" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid42">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Quarta-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid43" name="listGroupRadioGrid15" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid43">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid44" name="listGroupRadioGrid15" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid44">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid45" name="listGroupRadioGrid15" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid45">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Quinta-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid46" name="listGroupRadioGrid16" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid46">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid47" name="listGroupRadioGrid16" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid47">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid48" name="listGroupRadioGrid16" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid48">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Sexta-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid49" name="listGroupRadioGrid17" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid49">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid50" name="listGroupRadioGrid17" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid50">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid51" name="listGroupRadioGrid17" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid51">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Sábado</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid52" name="listGroupRadioGrid18" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid52">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid53" name="listGroupRadioGrid18" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid53">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid54" name="listGroupRadioGrid18" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid54">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>

    <!--Quarta Semana-->
    <div class="row justify-content-center">
        <div class="col-md-12 mb-2 mt-2 text-center">
            <h3>Quarta Semana</h3>
            <hr>
        </div>

        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Segunda-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid55" name="listGroupRadioGrid19" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid55">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid56" name="listGroupRadioGrid19" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid56">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid57" name="listGroupRadioGrid19" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid57">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Terça-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid58" name="listGroupRadioGrid20" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid58">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid59" name="listGroupRadioGrid20" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid59">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid60" name="listGroupRadioGrid20" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid60">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Quarta-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid61" name="listGroupRadioGrid21" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid61">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid62" name="listGroupRadioGrid21" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid62">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid63" name="listGroupRadioGrid21" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid63">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Quinta-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid64" name="listGroupRadioGrid22" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid64">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid65" name="listGroupRadioGrid22" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid65">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid66" name="listGroupRadioGrid22" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid66">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Sexta-feira</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid67" name="listGroupRadioGrid23" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid67">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid68" name="listGroupRadioGrid23" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid68">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid69" name="listGroupRadioGrid23" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid69">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-2 col-md-2">
            <div class="card">
                <div class="card-body position-relative">
                    <h5 class="mb-3">Sábado</h5>
                    <div class="vstack gap-2">
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid70" name="listGroupRadioGrid24" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid70">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-utensils"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Almoço</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid71" name="listGroupRadioGrid24" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid71">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-hamburger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Lanche</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check card-radio">
                            <input id="listGroupRadioGrid72" name="listGroupRadioGrid24" type="radio" class="form-check-input">
                            <label class="form-check-label" for="listGroupRadioGrid72">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-soft-warning text-dark fs-18 rounded">
                                                <i class="las la-fish"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">Jantar</h5>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                        <div class="alert alert-warning" role="alert">
                            Select at list one item
                        </div>
                    </div>
                    <!-- notification-warning -->

                    <div class="notification-elem" id="notification-overlay">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                            <div class="mt-4 pt-2">
                                <h5 class="mb-1 success-pay">$6,201 Payment Successfully</h5>
                                <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-overlay -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>

    <div class="d-flex align-items-start gap-3 mt-4 mb-5">
        <a href="{{URL::asset('/pages-pricing')}}" class="btn btn-light btn-label previestab"><i
            class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>Voltar</a>
        
        <a href="{{URL::asset('/apps-ecommerce-checkout-month')}}" class="btn btn-success btn-label right ms-auto nexttab"><i
            class="ri-shopping-basket-line label-icon align-middle fs-16 ms-2"></i>Selecionar Datas</a>
    </div>

    

@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/pages/pricing.init.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
