<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/jpg" href="images/alimentationNedjama.jpg">

    

    <title>Alimentation NEDJMA</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    @include('products.layouts.styles')


    @include('products.layouts.scripts')


</head>

<body>
<div id="app">
    <div class="main-wrapper">

        @include('products.layouts.navbar')

       @include('products.layouts.sidbar')
 
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>@yield('heading')</h1>
            <div class="ml-auto">
                @yield('Button')
            </div>
        </div> 
                @yield('main_content')
            </section>
        </div>

    </div>
</div>

@include('products.layouts.scripts_footer')

    @if($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                iziToast.error({
                    title:'',
                    position: 'topRight',
                    message: '{{ $error }}',
                });
            </script>
        @endforeach
    @endif

@if(session()->get('error'))
<script>
    iziToast.error({
        title:'',
        position:'topRight',
        message:'{{session()->get('error')}}',
    });
</script>

@endif

@if(session()->get('success'))
<script>
    iziToast.success({
        title:'',
        position:'topRight',
        message: '{{session()->get('success')}}',
    });
</script>

@endif


@include('products.layouts.scripts_footer')

</body>
</html>