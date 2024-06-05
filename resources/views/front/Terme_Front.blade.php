@extends('front.layouts.app')

@section('heading','A Propos')


@section('PageTop')    
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2> {{  $Terme_Display->titre_terme }} </h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-content')

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <p>
                    {!! $Terme_Display->contenu_terme !!}
                </p>
            </div>
        </div>
    </div>
</div>
    
@endsection
    