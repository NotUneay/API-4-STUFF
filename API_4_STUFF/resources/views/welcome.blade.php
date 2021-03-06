<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    <title>API 4 Stuff</title>
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
                    <td class="tableButtons"><a href="{{route('createProduct')}}">Nieuw</a></td>
                </tr>
        @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->titel }}</td>
                    <td>{{ $product->prijs }}</td>
                    <td>{{ $product->beschrijving }}</td>
                    <td>{{ $product->voorraad }}</td>
                    <td class="tableButtons"><a href="{{ route('editrouting', $product->id)}}">Bijwerken</a><button>Verwijderen</button></td>
                </tr>
        @endforeach
            </table>
        </div>
    </body>
</html>