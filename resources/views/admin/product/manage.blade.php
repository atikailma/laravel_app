@extends('layouts.admin')
@section('content')
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
    <div class="card-header py-3" style="display: flex;justify-content: space-between;">
        <h6 class="m-0 font-weight-bold text-primary">Master Produk</h6>
        <a href="{{route('product.create')}}"  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus"></i> Tambah Product</a>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pict</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($product as $key => $p)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td style="width:30%"><img style="width:30%" src="{{asset('img/shop.png')}}"/></td>
                        <td>{{$p->name}}</td>
                        <td>Rp. {{$p->price}}</td>
                        <td>{{$p->stok}}</td>
                        <td class="text-center">
                          <a href="{{route('product.destroy',$p->id)}}">
                            <button class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
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
