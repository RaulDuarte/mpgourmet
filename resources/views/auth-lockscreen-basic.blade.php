@extends('layouts.master-without-nav')
@section('title')
    @lang('translation.lock-screen')
@endsection
@section('content')

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
                    <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <div class="mp-logo">
                            <a href="index" class="d-inline-block auth-logo">
                                <img src="{{ URL::asset('assets/images/logos/mp-logo.png') }}" alt="" height="200">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h4 class="text-dark">Tela de Bloqueio</h4>
                                <p class="text-muted">Insira a senha para entrar no sistema</p>
                            </div>
                            <div class="user-thumb text-center">
                                <img src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}" class="rounded-circle img-thumbnail avatar-lg" alt="thumbnail">
                                <h5 class="font-size-15 mt-3">Anna Adame</h5>
                            </div>
                            <div class="p-2 mt-4">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Senha</label>
                                        <input type="password" class="form-control" id="userpassword" placeholder="Insira sua senha" required>
                                    </div>
                                    <div class="mb-2 mt-4">
                                        <button class="btn btn-warning fs-14 w-100" type="submit">Desbloquear</button>
                                    </div>
                                </form><!-- end form -->

                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="mt-4 text-center">
                        <p class="mb-0">Não é você? Retorne para o <a href="auth-signin-basic" class="fw-semibold text-primary text-decoration-underline">Login</a> </p>
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
                        <p class="mb-0 text-muted"><script>document.write(new Date().getFullYear())</script> &copy; M&P Gourmet. Criado por Agência Hanne.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->
@section('script')
    <script src="{{ URL::asset('assets/libs/particles.js/particles.js.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/particles.app.js') }}"></script>
@endsection

</html>
