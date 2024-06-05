<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/jpg" href="images/alimentationNedjama.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $products->Nom }}</title>
    <link rel="stylesheet" href="{{ Vite::asset('resources/dist/css/bootstrap.min.css') }}">
    <style>
        @page {
            size: A4;
            margin: 0;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Garamond, serif;
        }

        .container {
            width: 210mm;
            height: 297mm;
            margin: 0 auto;
            padding: 0;
        }

        table {
            width: 100%;
            height: calc(100% - 20px); /* Subtracting 20px for print button space */
            border-collapse: collapse;
            table-layout: fixed;
        }

        th, td {
            padding: 0;
            text-align: left;
            width: 38mm;
            height: 21.2mm;
            box-sizing: border-box;
        }

        .product-card {
            width: 100%;
            height: 100%;
            padding: 3px;
            text-align: center;
            box-sizing: border-box;
        }

        .product-name,
        .product-price,
        .barcode,
        .product-code,
        .product-brand {
            margin: 0;
            padding: 0;
        }

        .product-name {
            font-size: 9px;
            font-weight: bold;
        }

        .product-price {
            font-size: 9px;
        }

        .barcode {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .product-code {
            font-size: 9px;
            font-weight: bold;
        }

        .product-brand {
            font-size: 9px;
            font-weight: bold;
            text-transform: uppercase;
        }

        @media print {
            .print-button {
                display: none;
            }
        }

        .print-button {
            margin-bottom: 10px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <button class="btn btn-primary print-button" onclick="window.print()">Imprimer</button>
            <table>
                <tbody>
                    @for ($i = 0; $i < 14; $i++) <!-- Adjusted the number of rows to fit the new label height -->
                        <tr>
                            @for ($j = 0; $j < 5; $j++) <!-- Adjusted the number of columns to fit the new label width -->
                                <td>
                                    <div class="product-card">
                                        <div class="product-name">{{ $products->Nom }}</div>
                                        <div class="product-price">{{ $products->PrixDVente }} FCFA</div>
                                        <div class="barcode">{!! DNS1D::getBarcodeHTML("$products->Code_Barre_ean_13", "EAN13", 1, 30, 'black') !!}</div> <!-- Adjusted the barcode height -->
                                        <div class="product-code">{{ $products->Code_Barre_ean_13 }}</div>
                                        <div class="product-brand">Alimentation {{ Str::ucfirst($products->Alimentation) }}</div>
                                    </div>
                                </td>
                            @endfor
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="{{ Vite::asset('resources/dist/js/bootstrap.min.js') }}"></script>
</body>

</html>
