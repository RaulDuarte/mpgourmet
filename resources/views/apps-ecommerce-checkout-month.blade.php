@extends('layouts.master')
@section('title')
    @lang('translation.checkout')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            
        @endslot
        @slot('title')
            
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body checkout-tab">

                    <form action="#">
                        <div class="step-arrow-nav mt-n3 mx-n3 mb-3">

                            <ul class="nav nav-pills nav-justified custom-nav" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fs-15 p-3 active" id="pills-bill-info-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-bill-info" type="button" role="tab"
                                        aria-controls="pills-bill-info" aria-selected="true"><i
                                            class="ri-user-2-line fs-16 p-2 bg-soft-warning text-warning rounded-circle align-middle me-2"></i>
                                        Info. Pessoais
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fs-15 p-3" id="pills-payment-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-payment" type="button" role="tab"
                                        aria-controls="pills-payment" aria-selected="false"><i
                                            class="ri-bank-card-line fs-16 p-2 bg-soft-warning text-warning rounded-circle align-middle me-2"></i>
                                        Pagamento</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fs-15 p-3" id="pills-finish-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-finish" type="button" role="tab" aria-controls="pills-finish"
                                        aria-selected="false"><i
                                            class="ri-checkbox-circle-line fs-16 p-2 bg-soft-warning text-warning rounded-circle align-middle me-2"></i>Confirmação</button>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-bill-info" role="tabpanel"
                                aria-labelledby="pills-bill-info-tab">
                                <div>
                                    <h5 class="mb-1">Informações de Compra</h5>
                                    <p class="text-muted mb-4">Por favor, preencha as informações abaixo</p>
                                </div>

                                <div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="billinginfo-firstName" class="form-label">Nome</label>
                                                <input type="text" class="form-control" id="billinginfo-firstName"
                                                    placeholder="Insira seu nome" value="">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="billinginfo-lastName" class="form-label">CPF</label>
                                                <input type="text" class="form-control" id="billinginfo-lastName"
                                                    placeholder="Insira seu cpf" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="billinginfo-email" class="form-label">Email
                                                    <span class="text-muted">(Optional)</span></label>
                                                <input type="email" class="form-control" id="billinginfo-email"
                                                    placeholder="Insira seu email">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="billinginfo-phone" class="form-label">Telefone</label>
                                                <input type="text" class="form-control" id="billinginfo-phone"
                                                    placeholder="Insira seu telefone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="billinginfo-address" class="form-label">Endereço</label>
                                        <textarea class="form-control" id="billinginfo-address" placeholder="Insira seu endereço" rows="3"></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="country" class="form-label">País</label>
                                                <select class="form-select" id="country" data-plugin="choices">
                                                    <option value="">Selecione um país...</option>
                                                    <option selected>Brasil</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="state" class="form-label">Estado</label>
                                                <select class="form-select" id="state" data-plugin="choices">
                                                    <option value="">Selecione um estado...</option>
                                                    <option value="Alabama">Rio de Janeiro</option>
                                                    <option value="California" selected>São Paulo
                                                    </option>
                                                   
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="zip" class="form-label">Cep</label>
                                                <input type="text" class="form-control" id="zip"
                                                    placeholder="Insira seu cep">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-start gap-3 mt-3">

                                        <a class="btn btn-light btn-label previestab" href="/pages-pricing-date" role="button"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>
                                            Voltar para Refeições Avulsas
                                        </a>

                                        <button type="button" class="btn btn-warning btn-label right ms-auto nexttab"
                                            data-nexttab="pills-payment-tab"><i
                                                class="ri-bank-card-line label-icon align-middle fs-16 ms-2"></i>Continuar para Pagamento</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab pane -->


                            <div class="tab-pane fade" id="pills-payment" role="tabpanel"
                                aria-labelledby="pills-payment-tab">
                                <div>
                                    <h5 class="mb-1">Informações de Pagamento</h5>
                                    <p class="text-muted mb-4">Por favor, preencha as informações abaixo</p>
                                </div>

                                <div class="row g-4">
                                    <div class="col-lg-4 col-sm-6">
                                        <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse.show"
                                            aria-expanded="false" aria-controls="paymentmethodCollapse">
                                            <div class="form-check card-radio">
                                                <input id="paymentMethod01" name="paymentMethod" type="radio"
                                                    class="form-check-input">
                                                <label class="form-check-label" for="paymentMethod01">
                                                    <span class="fs-16 text-muted me-2"><i
                                                            class="ri-paypal-fill align-bottom"></i></span>
                                                    <span class="fs-14 text-wrap">Paypal</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse"
                                            aria-expanded="true" aria-controls="paymentmethodCollapse">
                                            <div class="form-check card-radio">
                                                <input id="paymentMethod02" name="paymentMethod" type="radio"
                                                    class="form-check-input" checked>
                                                <label class="form-check-label" for="paymentMethod02">
                                                    <span class="fs-16 text-muted me-2"><i
                                                            class="ri-bank-card-fill align-bottom"></i></span>
                                                    <span class="fs-14 text-wrap">Cartão de Crédito</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse.show"
                                            aria-expanded="false" aria-controls="paymentmethodCollapse">
                                            <div class="form-check card-radio">
                                                <input id="paymentMethod03" name="paymentMethod" type="radio"
                                                    class="form-check-input">
                                                <label class="form-check-label" for="paymentMethod03">
                                                    <span class="fs-16 text-muted me-2"><i
                                                            class="ri-money-dollar-box-fill align-bottom"></i></span>
                                                    <span class="fs-14 text-wrap">Pix</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse show" id="paymentmethodCollapse">
                                    <div class="card p-4 border shadow-none mb-0 mt-4">
                                        <div class="row gy-3">
                                            <div class="col-md-12">
                                                <label for="cc-name" class="form-label">Nome</label>
                                                <input type="text" class="form-control" id="cc-name"
                                                    placeholder="Enter name">
                                                <small class="text-muted">Full name as displayed on
                                                    card</small>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="cc-number" class="form-label">Número do cartão</label>
                                                <input type="text" class="form-control" id="cc-number"
                                                    placeholder="xxxx xxxx xxxx xxxx">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="cc-expiration" class="form-label">Vencimento</label>
                                                <input type="text" class="form-control" id="cc-expiration"
                                                    placeholder="MM/AA">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="cc-cvv" class="form-label">CVV</label>
                                                <input type="text" class="form-control" id="cc-cvv" placeholder="xxx">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-muted mt-2 fst-italic">
                                        <i data-feather="lock" class="text-muted icon-xs"></i> 
                                        Sua transação é protegida com criptografia SSL
                                    </div>
                                </div>

                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button" class="btn btn-light btn-label previestab"
                                        data-previous="pills-bill-info-tab"><i
                                            class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>Voltar para Info. Pessoais</button>
                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab"
                                        data-nexttab="pills-finish-tab"><i
                                            class="ri-shopping-basket-line label-icon align-middle fs-16 ms-2"></i>Finalizar Compra</button>
                                </div>
                            </div>
                            <!-- end tab pane -->

                            <div class="tab-pane fade" id="pills-finish" role="tabpanel"
                                aria-labelledby="pills-finish-tab">
                                <div class="text-center py-5">

                                    <div class="mb-4">
                                        <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop"
                                            colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px">
                                        </lord-icon>
                                    </div>
                                    <h5>Muito Obrigado! A compra de refeições avulsas foi completada com sucesso!</h5>
                                    <p class="text-muted">Você receberá um e-mail de confirmação do pedido com os detalhes do seu pedido.</p>

                                    <h3 class="fw-semibold">Id da Compra: <a href="{{URL::asset('/apps-ecommerce-order-details')}}"
                                            class="text-decoration-underline">CA100123#2451</a></h3>
                                </div>
                            </div>
                            <!-- end tab pane -->
                        </div>
                        <!-- end tab content -->
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-0">Resumo da Compra</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-borderless align-middle mb-0">
                            <thead class="table-light text-muted">
                                <tr>
                                    <th style="width: 90px;" scope="col">Refeição</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col" class="text-end">Preço</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>
                                        <div class="avatar-md bg-light rounded p-1">
                                            <img src="{{ URL::asset('assets/images/products/cup-of-coffee-juice-eggs-fruits-toasts-breakfast-concept.jpg') }}" alt="" class="img-fluid d-block">
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="fs-14"><a href="{{URL::asset('/apps-ecommerce-product-details')}}"
                                                class="text-dark">Refeição Avulsa - Café da Manhã</a>
                                        </h5>
                                        <p class="text-muted mb-0">R$ 24.90 x 1</p>
                                    </td>
                                    <td class="text-end">R$ 24.90</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="avatar-md bg-light rounded p-1">
                                            <img src="{{ URL::asset('assets/images/products/roasted-and-grilled-sausage-smoked-pork-served-hot-with-rice-and-beans-farofa-tomato-salad-and-fries-typical-minas-gerais-food-brazilian-lunch.jpg') }}" alt="" class="img-fluid d-block">
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="fs-14"><a href="{{URL::asset('/apps-ecommerce-product-details')}}"
                                                class="text-dark">Refeição Avulsa - Almoço</a>
                                        </h5>
                                        <p class="text-muted mb-0">R$ 24.90 x 1</p>
                                    </td>
                                    <td class="text-end">R$ 24.90</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="avatar-md bg-light rounded p-1">
                                            <img src="{{ URL::asset('assets/images/products/ham-and-cheese-sandwich-on-picnic-cloth.jpg') }}" alt="" class="img-fluid d-block">
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="fs-14"><a href="{{URL::asset('/apps-ecommerce-product-details')}}"
                                                class="text-dark">Refeição Avulsa - Lanche da Tarde</a>
                                        </h5>
                                        <p class="text-muted mb-0">R$ 24.90 x 1</p>
                                    </td>
                                    <td class="text-end">R$ 24.90</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="avatar-md bg-light rounded p-1">
                                            <img src="{{ URL::asset('assets/images/products/rice-with-potatoes-and-meat.jpg') }}" alt="" class="img-fluid d-block">
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="fs-14"><a href="{{URL::asset('/apps-ecommerce-product-details')}}"
                                                class="text-dark">Refeição Avulsa - Jantar</a>
                                        </h5>
                                        <p class="text-muted mb-0">R$ 24.90 x 1</p>
                                    </td>
                                    <td class="text-end">R$ 24.90</td>
                                </tr>
                             
                                <tr>
                                    <td class="fw-semibold" colspan="2">Valor Total :</td>
                                    <td class="fw-semibold text-end">R$ 99.60</td>
                                </tr>
                                <tr>
                                    <td colspan="2">Desconto <span class="text-muted"></span>
                                        : </td>
                                    <td class="text-end">- $ 00.00</td>
                                </tr>
                               
                                <tr class="table-active">
                                    <th colspan="2">Total (R$) :</th>
                                    <td class="text-end">
                                        <span class="fw-semibold">
                                            R$ 99.60
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <!-- removeItemModal -->
    <div id="removeItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                            colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Address ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger ">Yes, Delete It!</button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- editItemModal -->
    <div id="addAddressModal" class="modal fade zoomIn" tabindex="-1" aria-labelledby="addAddressModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAddressModalLabel">Address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="mb-3">
                            <label for="addaddress-Name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="addaddress-Name" placeholder="Enter name">
                        </div>

                        <div class="mb-3">
                            <label for="addaddress-textarea" class="form-label">Address</label>
                            <textarea class="form-control" id="addaddress-textarea" placeholder="Enter address" rows="2"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="addaddress-Name" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="addaddress-Name" placeholder="Enter phone no.">
                        </div>

                        <div class="mb-3">
                            <label for="state" class="form-label">Address Type</label>
                            <select class="form-select" id="state" data-choices data-choices-search-false>
                                <option value="homeAddress">Home (7am to 10pm)</option>
                                <option value="officeAddress">Office (11am to 7pm)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/pages/ecommerce-product-checkout.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
