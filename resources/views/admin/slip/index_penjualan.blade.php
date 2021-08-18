<!DOCTYPE html>
<html>
<body>

<h2>Slip Pembelian</h2>
@php
    $user= \App\Models\User::findOrFail($data->user_id);
@endphp
<p>Nama Pembeli : {{$user->name}}</p>
<table style="width:100%">
  <tr>
    <th>Nama Produk</th>
    <th>Harga</th>
    <th>Tanggal</th>
  </tr>
  <tr>
      @foreach ( $detail as $data )
      @php

          $name= \App\Models\Product::findOrFail($data->product_id);
      @endphp
      <td>{{$name->name}}</td>
      <td>{{$data->product->price}}</td>
      <td>{{date('d-m-Y', strtotime($data->created_at))}}</td>
      @endforeach

  </tr>

</table>

</body>
</html>
