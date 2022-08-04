<x-guest-layout>
    <div class="bg-overlay"></div>
    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-body">

                    <div class="text-center mt-4">
                        <div class="mb-3">
                            <a href="index.html" class="auth-logo">
                                <img src="{{ asset('backend/images/logo-light.png') }}" height="30"
                                    class="logo-dark mx-auto" alt="">
                                <img src="{{ asset('backend/images/logo-light.png') }}" height="30"
                                    class="logo-light mx-auto" alt="">
                            </a>
                        </div>
                    </div>

                    <h4 class="text-muted text-center font-size-18"><b>Register</b></h4>

                    <div class="p-3">
                        <form class="form-horizontal mt-3" action="{{ route('register') }}" method="POST">@csrf

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input id="name" class="form-control" type="text" name="name"
                                        :value="old('name')" required autofocus placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input id="email" class="form-control" type="email" name="email"
                                        :value="old('email')" required placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input id="username" class="form-control" type="text" name="username"
                                        :value="old('username')" required placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input id="password" class="form-control" type="password" name="password" required
                                        autocomplete="new-password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input id="password_confirmation" class="form-control" type="password"
                                        name="password_confirmation" required placeholder="Confirm Password">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="form-label ms-1 fw-normal" for="customCheck1">I accept <a
                                                href="#" class="text-muted">Terms and Conditions</a></label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row mt-3 pt-1">
                                <div class="col-12">
                                    <button class="btn btn-info w-100 waves-effect waves-light"
                                        type="submit">Register</button>
                                </div>
                            </div>

                            <div class="form-group mt-2 mb-0 row">
                                <div class="col-12 mt-3 text-center">
                                    <a href="{{ route('login') }}" class="text-muted">Already have account?</a>
                                </div>
                            </div>
                        </form>
                        <!-- end form -->
                    </div>
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
    <!-- end -->
</x-guest-layout>
