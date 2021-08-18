@extends('layouts.admin')
@section('content')
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
    <div class="card-header py-3" style="display: flex;justify-content: space-between;">
        <h6 class="m-0 font-weight-bold text-primary">Master Produk</h6>
        <a href="{{route('pembelian.create')}}"  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus"></i> Tambah Kedatangan</a>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Stok</th>
                        <th>Tanggal</th>
                        <th>Cetak Slip</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pembelian as $key => $p)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$p->product->name}}</td>
                        <td>{{$p->stok}}</td>
                        <td>{{date('d-m-Y', strtotime($p->created_at));
                        }}</td>
                        <td class="text-center">
                          <a href="{{route('pembelian.cetak',$p->id)}}">
                            <button class="btn btn-primary"
                            >Cetak</button>
                          </a>
                        </td>

                    </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
