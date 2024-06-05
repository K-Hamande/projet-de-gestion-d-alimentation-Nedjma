<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">


    <link rel="icon" type="image/jpg" href="images/alimentationNedjama.jpg">

    <title>Alimentation Nedjama</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    @include('products.layouts.styles')


    @include('products.layouts.scripts')
</head>

<body>
<div id="app">
    <div class="main-wrapper">
        <section class="section">
            <div class="container container-login">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary border-box">
                            <div class="card-header card-header-auth">
                                <h4 class="text-center">Page De Conexion </h4>
                            </div>
                            <div class="card-body card-body-auth">

                                <form method="POST" action=" {{ route('login')}} ">
                                    
                                    @csrf

                                @if(session()->get('error'))
                                    <div class="alert alert-danger">{{session()->get('error')}}</div>
                                @endif

                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder=" Address Email" value="{{old('email')}}" autofocus>
                                        @error('email')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                        @enderror
                                       
                                     </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Mot De Passe">
                                        @error('password')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                            <!-- Remember Me -->
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Connexion
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        {{-- <div>
                                            <a href="{{Route('admin_forget_password')}}">
                                                Mot de Passe oublié?
                                            </a>
                                        </div> --}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('products.layouts.scripts_footer')

</body>
</html>