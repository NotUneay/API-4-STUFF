<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update Product</title>
</head>
<body>
    
<div class="container">
            <table >
                <tr>
                    <td>Id</td>
                    <td>Titel</td>
                    <td>Prijs</td>
                    <td>Beschrijving</td>
                    <td>Voorraad</td>
                    <td class="tableButtons"><button>Nieuw</button></td>
                </tr>
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->titel }}</td>
                    <td>{{ $product->prijs }}</td>
                    <td>{{ $product->beschrijving }}</td>
                    <td>{{ $product->voorraad }}</td>
                </tr>
            </table>
</body>
</html>