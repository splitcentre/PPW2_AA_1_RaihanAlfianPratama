<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>nama barang</th>
                <th>harga</th>
                <th>stok</th>
                <th>id suplier</th>
            </tr>    
        <thead>
        <tbody>
            @foreach($data_barang as $barang)
                <tr>
                    <td>{{$barang->id}}</td>
                    <td>{{$barang->nama_barang}}</td>
                    <td>{{$barang->harga}}</td>
                    <td>{{$barang->stok}}</td>
                    <td>{{$barang->id_suplier}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
