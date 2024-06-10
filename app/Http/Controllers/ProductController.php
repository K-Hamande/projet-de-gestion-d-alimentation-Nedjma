<?php

namespace App\Http\Controllers;

use App\Models\Produit;


use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public function Index()
    { 
        $totalProducts = Produit::count();
        return view('products.Dashboard',compact('totalProducts'));;
    }

    public function create()
    {
        return view('products.create');
    }

    

    public function store(Request $request)
    {
        $request->validate([
            'Nom' => 'required',
            'PrixDAchat' => 'required|integer',
            'PrixDVente' => 'required|integer',
            'Description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        $input['Alimentation'] = "NEDJMA";

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        // Générer un code EAN-13 si non fourni
        if (empty($input['Code_Barre_ean_13'])) {
            $input['Code_Barre_ean_13'] = Produit::generateEAN13();
        }

        Produit::create($input);

        return redirect()->back()->with('success','Produit ajouté avec success');
    }


    public function list_Products()
    {
        $products = Produit::all();
        return view('products.list', compact('products'));
    }

    public function editer($id)
    {
        $Product_Data = Produit::Where('id',$id)->first();
        return view('products.edit',compact('Product_Data'));


    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'Nom' => 'required',
            'PrixDAchat' => 'required|integer',
            'PrixDVente' => 'required|integer',
            'Description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = Produit::findOrFail($id);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $product->update($input);

        return redirect()->route('products.list')
                         ->with('success', 'Produit mis à jour avec succès.');
    }


    public function printForty($id)
    {
        // Récupérez les produits ou créez des faux produits pour générer des codes-barres pour cet exemple
        $products = Produit::Where('id',$id)->first();
        return view('products.printForty', compact('products'));
    }


    public function printSixtyFive($id)
    {
        // Récupérez les produits ou créez des faux produits pour générer des codes-barres pour cet exemple
        $products = Produit::Where('id',$id)->first();
        return view('products.printSixtyFive', compact('products'));
    }


    public function printFiftySix($id)
    {
        // Récupérez les produits ou créez des faux produits pour générer des codes-barres pour cet exemple
        $products = Produit::Where('id',$id)->first();
        return view('products.printFiftySix', compact('products'));
    }


    public function printPage($id)
    {
        $Values = Produit::Where('id',$id)->first();
        // dd($Values);
        return view('products.printPage', compact('Values'));
    }




    public function deleteProduct($id)
    {
        $Delete = Produit::Where('id',$id)->first();
        unlink(public_path('images/').$Delete->image);
        $Delete->delete();
        return redirect()->back()->with('success','Suppression effecuée avec success');

    }
}
