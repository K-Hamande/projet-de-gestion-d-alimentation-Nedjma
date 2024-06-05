@extends('products.layouts.app')

@section('heading','Modification de Caracteristique')

@section('Button')
        <a href="{{Route('products.list')}}" class="btn btn-primary"><i class="fas fa-eye"></i> Tous Les Produits </a>
@endsection

@section('main_content')

<div class="section-body ">
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{Route('products.update',['id'=>$Product_Data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Nom</label>
                                    <input type="text" class="form-control @error('heading') is-invalid @enderror" name="Nom" value="{{$Product_Data->Nom}}">
                                    
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Prix d'achat (CFA)<span class="alert text-danger">*</span> </label>
                                    <input type="text" class="form-control @error('PrixDAchat') is-invalid @enderror" name="PrixDAchat" value="{{$Product_Data->PrixDAchat}}">
                                    
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Prix de vente (CFA)<span class="alert text-danger">*</span> </label>
                                    <input type="text" class="form-control @error('PrixDVente') is-invalid @enderror" name="PrixDVente" value="{{$Product_Data->PrixDVente}}">
                                    
                                </div>


                                <div class="mb-4">
                                    <label class="form-label">Code barre </label>
                                    <input type="text" class="form-control @error('heading') is-invalid @enderror" name="Code_Barre_ean_13" value="{{$Product_Data->Code_Barre_ean_13}}">
                                    
                                </div>

                                <div class="mb-4">
                                    <div>
                                        <label class="form-label">Image Existant </label>
                                    </div>
                                    <img src=" {{Vite::asset('public/images/').$Product_Data->image}} " alt="" class="w_150"> 
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Image <span class="alert text-danger">*</span> </label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{$Product_Data->photo}}">  
                                </div>
                                <div class="mb-4">

                                <div class="mb-4">
                                    <label class="form-label">Description </label>
                                    <input class="form-control @error('Description') is-invalid @enderror" name="description" value="{{$Product_Data->Description}}">
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