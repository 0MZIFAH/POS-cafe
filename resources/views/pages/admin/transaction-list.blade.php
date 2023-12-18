@extends('layouts.admin')
@section('title','Revenue')
@section('Revenue','active')
@section('content')
@include('includes.page-title',['title' => 'REVENUE','paragraph' => 'Laporan Transaksi pendapatan'])
<div class="card card-shadow">
  <div class="card-header">
    <div class="card-title">
      <h2>LAPORAN PENDAPATAN</h2>
    </div>
  </div>

  <div class="card-body">
    <table class="table table-bordered">
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
            <td>Rp. {{ $item->total_price }}</td>
            <td>{{ $item->transaction_status }}</td>
          </tr>
          @php $totalPrice += $item->total_price; @endphp
        @endforeach
      </tbody>
      
      <tfoot>
        <tr>
          <th colspan="2">Total Pendapatan :</th>
          <td colspan="2">Rp. {{ $totalPrice }}</td>
        </tr>
      </tfoot>
    </table>

    <div class="d-flex">
      <a href="/admin/exportRevenue" class="btn btn-outline-success mt-2">Unduh</a>
    </div>
  </div>
</div>
@endsection
