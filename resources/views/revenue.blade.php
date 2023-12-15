<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        h1 {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1 class="text-center">Laporan Pendapatan</h1>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Total Price</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php $totalPrice = 0; @endphp
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->total_price }}</td>
                    <td>{{ $item->transaction_status }}</td>
                </tr>
            @endforeach
            @php $totalPrice += $item->total_price; @endphp
        </tbody>
        <tfoot>
            <tr>
              <th colspan="2">Total Pendapatan</th>
              <td colspan="2">Rp. {{ $totalPrice }}</td>
            </tr>
          </tfoot>
    </table>
</body>

</html>
