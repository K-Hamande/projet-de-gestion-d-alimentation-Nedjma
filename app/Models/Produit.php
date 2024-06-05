<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom', 'Description', 'PrixDAchat', 'Code_Barre_ean_13', 'image','Alimentation', 'PrixDVente'
    ];


    public static function generateEAN13()
    {
        $base = '200'; // Utilisez un préfixe de base (200 ici, mais cela peut être différent)
        $random = str_pad(rand(0, 999999999), 9, '0', STR_PAD_LEFT);
        $base .= $random;

        // Calcul du chiffre de contrôle
        $sum = 0;
        for ($i = 0; $i < 12; $i++) {
            $sum += $base[$i] * ($i % 2 === 0 ? 1 : 3);
        }
        $checksum = (10 - ($sum % 10)) % 10;

        return $base . $checksum;
    }
}
