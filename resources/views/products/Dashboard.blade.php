@extends('products.layouts.app')

@section('heading','Dashboard')

@section('main_content')
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Tous Produits </h4>
                    </div>
                    <div class="card-body">
                        {{ $totalProducts }}
                    </div>
                </div>
            </div>
        </div> 

        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-book-open"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4><a href=" {{Route('products.create')}}"></i> Nouveau produit </a></h4>
                    </div>
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4><a href=" {{Route('products.list')}} "> Liste des Produits </a></h4>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection