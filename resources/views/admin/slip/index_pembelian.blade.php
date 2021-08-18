<!DOCTYPE html>
<html>
<body>

<h2>Slip Pembelian</h2>

<table style="width:100%">
  <tr>
    <th>Nama Produk</th>
    <th>Stok</th>
    <th>Tanggal</th>
  </tr>
  <tr>
    <td>{{$data->product->name}}</td>
    <td>{{$data->stok}}</td>
    <td>{{date('d-m-Y', strtotime($data->created_at))}}</td>
  </tr>

</table>

</body>
</html>
