@extends('front.layouts.app')

@section('heading','Contact')


@section('PageTop')    
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2> {{  $contactDisplay->contacTitre }} </h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-content')

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="contact-form">
                    <div class="mb-3">
                        <label for="" class="form-label">Nom</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Address Email </label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Message</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary bg-website"> Envoyer </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="map">
                    <iframe src="{{$contactDisplay->contactMap }} " width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
    