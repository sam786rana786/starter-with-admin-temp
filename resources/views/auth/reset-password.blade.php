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

                    <h4 class="text-muted text-center font-size-18"><b>Reset Password</b></h4>

                    <div class="p-3">
                        <form class="form-horizontal mt-3" method="POST" action="{{ route('password.update') }}">@csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="form-group mb-3">
                                <div class="col-xs-12">
                                    <input class="form-control" type="email" id="email" name="email"
                                        :value="old('email', $request - > email)" required autofocus placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="col-xs-12">
                                    <input class="form-control" type="password" id="password" name="password" required
                                        placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="col-xs-12">
                                    <input class="form-control" type="password" id="password_confirmation"
                                        name="password_confirmation" required placeholder="Confirm Password">
                                </div>
                            </div>

                            <div class="form-group pb-2 text-center row mt-3">
                                <div class="col-12">
                                    <button class="btn btn-info w-100 waves-effect waves-light"
                                        type="submit">{{ __('Reset Password') }}</button>
                                </div>
                            </div>
                        </form>
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
