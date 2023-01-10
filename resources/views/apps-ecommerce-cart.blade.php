@extends('layouts.master')
@section('title')
    @lang('translation.singlemeal')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            
        @endslot
        @slot('title')
            
        @endslot
    @endcomponent
    <div class="row mb-3">
        <div class="col-xl-8">

            <div class="card product">
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-sm-auto">
                            <div class="avatar-lg bg-light rounded p-1">
                                <img src="{{ URL::asset('assets/images/products/cup-of-coffee-juice-eggs-fruits-toasts-breakfast-concept.jpg') }}" alt="" class="img-fluid d-block">
                            </div>
                        </div>
                        <div class="col-sm">
                            <h5 class="fs-14 text-truncate"><a href="{{URL::asset('/ecommerce-product-detail')}}"
                                    class="text-dark">Refeição Avulsa - Café da Manhã</a></h5>
                            <ul class="list-inline text-muted">
                                <li class="list-inline-item">Compra válida para o dia 10/01/2023</li>
                            </ul>

                            <div class="input-step light">
                                <button type="button" class="minus shadow">–</button>
                                <input type="number" class="product-quantity" value="0" min="0" max="4">
                                <button type="button" class="plus shadow">+</button>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="text-lg-end">
                                <p class="text-muted mb-1">Valor por Refeição:</p>
                                <h5 class="fs-14">R$<span id="ticket_price" class="product-price">24.90</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card body -->
                <div class="card-footer">
                    <div class="row align-items-center gy-3">
                        <div class="col-sm">
                            <div class="d-flex flex-wrap my-n1">
                                <!--
                                <div>
                                    <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal"
                                        data-bs-target="#removeItemModal"><i
                                            class="ri-delete-bin-fill text-muted align-bottom me-1"></i>
                                        Remove</a>
                                </div>
                                <div>
                                    <a href="#" class="d-block text-body p-1 px-2"><i
                                            class="ri-star-fill text-muted align-bottom me-1"></i> Add
                                        Wishlist</a>
                                </div>
                                -->
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="d-flex align-items-center gap-2 text-muted">
                                <div>Total :</div>
                                <h5 class="fs-14 mb-0">$<span class="product-line-price">0.00</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card footer -->
            </div>
            <!-- end card -->

            <div class="card product">
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-sm-auto">
                            <div class="avatar-lg bg-light rounded p-1">
                                <img src="{{ URL::asset('assets/images/products/roasted-and-grilled-sausage-smoked-pork-served-hot-with-rice-and-beans-farofa-tomato-salad-and-fries-typical-minas-gerais-food-brazilian-lunch.jpg') }}" alt="" class="img-fluid d-block">
                            </div>
                        </div>
                        <div class="col-sm">
                            <h5 class="fs-14 text-truncate"><a href="{{URL::asset('/ecommerce-product-detail')}}"
                                    class="text-dark">Refeição Avulsa - Almoço</a></h5>
                            <ul class="list-inline text-muted">
                                <li class="list-inline-item">Compra válida para o dia 10/01/2023</li>
                            </ul>

                            <div class="input-step light">
                                <button type="button" class="minus shadow">–</button>
                                <input type="number" class="product-quantity" value="0" min="0" max="4">
                                <button type="button" class="plus shadow">+</button>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="text-lg-end">
                                <p class="text-muted mb-1">Valor por Refeição:</p>
                                <h5 class="fs-14">R$<span id="ticket_price" class="product-price">24.90</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card body -->
                <div class="card-footer">
                    <div class="row align-items-center gy-3">
                        <div class="col-sm">
                            <div class="d-flex flex-wrap my-n1">
                                <!--
                                <div>
                                    <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal"
                                        data-bs-target="#removeItemModal"><i
                                            class="ri-delete-bin-fill text-muted align-bottom me-1"></i>
                                        Remove</a>
                                </div>
                                <div>
                                    <a href="#" class="d-block text-body p-1 px-2"><i
                                            class="ri-star-fill text-muted align-bottom me-1"></i> Add
                                        Wishlist</a>
                                </div>
                                -->
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="d-flex align-items-center gap-2 text-muted">
                                <div>Total :</div>
                                <h5 class="fs-14 mb-0">$<span class="product-line-price">0.00</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card footer -->
            </div>
            <!-- end card -->

            <div class="card product">
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-sm-auto">
                            <div class="avatar-lg bg-light rounded p-1">
                                <img src="{{ URL::asset('assets/images/products/ham-and-cheese-sandwich-on-picnic-cloth.jpg') }}" alt="" class="img-fluid d-block">
                            </div>
                        </div>
                        <div class="col-sm">
                            <h5 class="fs-14 text-truncate"><a href="{{URL::asset('/ecommerce-product-detail')}}"
                                    class="text-dark">Refeição Avulsa - Lanche da Tarde</a></h5>
                            <ul class="list-inline text-muted">
                                <li class="list-inline-item">Compra válida para o dia 10/01/2023</li>
                            </ul>

                            <div class="input-step light">
                                <button type="button" class="minus shadow">–</button>
                                <input type="number" class="product-quantity" value="0" min="0" max="4">
                                <button type="button" class="plus shadow">+</button>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="text-lg-end">
                                <p class="text-muted mb-1">Valor por Refeição:</p>
                                <h5 class="fs-14">R$<span id="ticket_price" class="product-price">24.90</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card body -->
                <div class="card-footer">
                    <div class="row align-items-center gy-3">
                        <div class="col-sm">
                            <div class="d-flex flex-wrap my-n1">
                                <!--
                                <div>
                                    <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal"
                                        data-bs-target="#removeItemModal"><i
                                            class="ri-delete-bin-fill text-muted align-bottom me-1"></i>
                                        Remove</a>
                                </div>
                                <div>
                                    <a href="#" class="d-block text-body p-1 px-2"><i
                                            class="ri-star-fill text-muted align-bottom me-1"></i> Add
                                        Wishlist</a>
                                </div>
                                -->
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="d-flex align-items-center gap-2 text-muted">
                                <div>Total :</div>
                                <h5 class="fs-14 mb-0">$<span class="product-line-price">0.00</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card footer -->
            </div>
            <!-- end card -->

            <div class="card product">
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-sm-auto">
                            <div class="avatar-lg bg-light rounded p-1">
                                <img src="{{ URL::asset('assets/images/products/rice-with-potatoes-and-meat.jpg') }}" alt="" class="img-fluid d-block">
                            </div>
                        </div>
                        <div class="col-sm">
                            <h5 class="fs-14 text-truncate"><a href="{{URL::asset('/ecommerce-product-detail')}}"
                                    class="text-dark">Refeição Avulsa - Jantar</a></h5>
                            <ul class="list-inline text-muted">
                                <li class="list-inline-item">Compra válida para o dia 10/01/2023</li>
                            </ul>

                            <div class="input-step light">
                                <button type="button" class="minus shadow">–</button>
                                <input type="number" class="product-quantity" value="0" min="0" max="4">
                                <button type="button" class="plus shadow">+</button>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="text-lg-end">
                                <p class="text-muted mb-1">Valor por Refeição:</p>
                                <h5 class="fs-14">R$<span id="ticket_price" class="product-price">24.90</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card body -->
                <div class="card-footer">
                    <div class="row align-items-center gy-3">
                        <div class="col-sm">
                            <div class="d-flex flex-wrap my-n1">
                                <!--
                                <div>
                                    <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal"
                                        data-bs-target="#removeItemModal"><i
                                            class="ri-delete-bin-fill text-muted align-bottom me-1"></i>
                                        Remove</a>
                                </div>
                                <div>
                                    <a href="#" class="d-block text-body p-1 px-2"><i
                                            class="ri-star-fill text-muted align-bottom me-1"></i> Add
                                        Wishlist</a>
                                </div>
                                -->
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="d-flex align-items-center gap-2 text-muted">
                                <div>Total :</div>
                                <h5 class="fs-14 mb-0">$<span class="product-line-price">0.00</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card footer -->
            </div>
            <!-- end card -->

        </div>
        <!-- end col -->

        <div class="col-xl-4">
            <div class="sticky-side-div">
                <div class="card">
                    <div class="card-header border-bottom-dashed">
                        <h5 class="card-title mb-0">Resumo da Compra</h5>
                    </div>
                    <div class="card-header bg-soft-light border-bottom-dashed">
                        <div class="text-center">
                            <h6 class="mb-2">Tem um <span class="fw-semibold">cupom de desconto?</span></h6>
                        </div>
                        <div class="hstack gap-3 px-3 mx-n3">
                            <input class="form-control me-auto" type="text" placeholder="Insira o cupom de desconto"
                                aria-label="Add Promo Code here...">
                            <button type="button" class="btn btn-warning w-xs">Aplicar</button>
                        </div>
                    </div>
                    <div class="card-body pt-2">
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td>Valor Parcial :</td>
                                        <td class="text-end" id="cart-subtotal">R$ 00.00</td>
                                    </tr>
                                    <tr>
                                        <td>Desconto <span class="text-muted"></span> : </td>
                                        <td class="text-end" id="">- R$ 00.00</td>
                                    </tr>
                                    <tr class="table-active">
                                        <th>Total (R$) :</th>
                                        <td class="text-end">
                                            <span class="fw-semibold" id="cart-total">
                                                R$00.00
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>

                <div class="alert border-dashed alert-danger" role="alert">
                    <div class="d-flex align-items-center">
                        <i class="las la-question la-5x"></i>
                        <div class="ms-2">
                            <h4 class="text-danger fw-semibold"> Como funciona a compra avulsa?</h4>
                            <p class="text-black mb-1">
                                Laboris minim aute irure magna commodo minim aliquip aliquip mollit veniam. Nostrud exercitation reprehenderit do mollit amet labore occaecat. 
                            </p>
                            <p class="text-black mb-1">
                                Deserunt aute eu deserunt est. Enim aliquip velit excepteur non id. Nostrud laborum velit eiusmod ea sunt cupidatat.
                            </p>
                            <p class="text-black mb-1">
                                Ea aliquip exercitation pariatur ex enim. Non consectetur ut aute cupidatat anim non eu. Fugiat cupidatat quis id laborum mollit ipsum cillum.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="text-end mb-4">
                    <a href="{{URL::asset('/apps-ecommerce-checkout')}}" class="btn btn-warning btn-label right ms-auto"><i
                            class="ri-arrow-right-line label-icon align-bottom fs-16 ms-2"></i> Finalizar Compra</a>
                </div>

            </div>
            <!-- end stickey -->
        </div>
    </div>
    <!-- end row -->
    <!-- removeItemModal -->
    <div id="removeItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                            colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure You want to remove this Product ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" id="remove-product">Yes, Delete It!</button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/pages/form-input-spin.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/ecommerce-cart.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
