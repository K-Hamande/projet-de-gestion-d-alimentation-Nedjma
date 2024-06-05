@extends('products.layouts.app')

@section('heading','Ajouter un nouveau produit')

@section('Button')
        <a href="{{ route('products.list') }}" class="btn btn-primary"><i class="fas fa-eye"></i> Tous Les Produits </a>
@endsection

@section('main_content')

<div class="section-body ">
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Nom du produit <span class="alert text-danger">*</span> </label>
                                    <input type="text" class="form-control @error('Nom') is-invalid @enderror" name="Nom" value="{{old('Nom')}}">
                                    
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Prix d'achat (CFA)<span class="alert text-danger">*</span> </label>
                                    <input type="text" class="form-control @error('PrixDAchat') is-invalid @enderror" name="PrixDAchat" value="{{old('PrixDAchat')}}">
                                    
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Prix de vente (CFA)<span class="alert text-danger">*</span> </label>
                                    <input type="text" class="form-control @error('PrixDVente') is-invalid @enderror" name="PrixDVente" value="{{old('PrixDVente')}}">
                                    
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Code Barre </label>
                                    <input type="text" class="form-control @error('Code_Barre_ean_13') is-invalid @enderror" name="Code_Barre_ean_13" value="">
                                    
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Image du produit</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="">  
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Description <span class="alert text-danger">*</span> </label>
                                    <textarea class="form-control h_100 @error('text') is-invalid @enderror" name="Description" value="{{old('description')}}">

                                    </textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">AJOUTER</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection