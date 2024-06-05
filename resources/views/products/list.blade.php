@extends('products.layouts.app')

@section('heading','Liste des produits')

@section('main_content')

@section('Button')
        <a href=" {{Route('products.create')}} " class="btn btn-primary"><i class="fas fa-plus"></i> Nouveau produit </a>
@endsection

<section class="section">
    
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example1">
                                <thead>
                                <tr>
                                    <th>Numéro</th>
                                    <th>Nom du produit</th>
                                    <th>Prix d'achat</th>
                                    <th>Prix de vente</th>
                                    <th>Alimentation</th>
                                    <th>Code Barre </th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                               @foreach ($products as $Values)
                               <tr>
                                <td> {{$loop->iteration}} </td>
                                
                                <td>
                                    {{ $Values->Nom}}
                                </td>

                                <td>
                                    {{ $Values->PrixDAchat}}
                                </td>

                                <td>
                                    {{ $Values->PrixDVente}}
                                </td>

                                <td>
                                    {{ strtoupper($Values->Alimentation)}}
                                </td>

                                <td >
                                    <span>{!! DNS1D::getBarcodeHTML("$Values->Code_Barre_ean_13", "EAN13", 1, 25, 'black') !!}</span>
                                    <span class="text-center"> </span>
                                    <div class="d-flex justify-content-center">
                                        <span>{{ $Values->Code_Barre_ean_13}}</span>
                                      </div>
                                </td >

                                <td>
                                    
                                    <img src="{{Vite::asset('public/images/').$Values->image }}" alt="" width="96">
                               
                                </td>
                                
                                
                                <td class="pt_10 pb_10">
                                    <a href=" {{Route('editer',['id'=>$Values->id])}}" class="btn btn-success" ><i class="fas fa-edit"></i></a>
                                    <a href=" {{Route('printPage',['id'=>$Values->id])}}" class="btn btn-info " ><i class="fas fa-print"></i></a>
                                    <a href="{{Route('deleteProduct',['id'=>$Values->id])}}" class="btn btn-danger" onClick="return confirm('Voulez vous Supprimer ?');"><i class="fas fa-trash"></i></</a>
                                    
                                </td>
                            </tr>
                                   
                               @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection