@extends('layouts.admin')

@section('content')



<div class="container-fluid">
    <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-8">
                <h5 class="card-title">
                    Pembelian
                </h5>
            </div>
            <div class="col-md-4 text-right">
                <a href="{{route('pembelian.index')}}" class="btn btn-sm btn-outline-success"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>


    </div>
            <form action="{{route('pembelian.store')}}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="form-group row">
                <label for="Produk" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">Produk</label>
                <div class="col-sm-7">
                    <select class="form-control selectdata" name="product_id" required >
                        @php
                        $product= \App\Models\Product::where('is_delete',0)->get();
                        @endphp
                        <option value="">--Pilih Produk--</option>

                        @foreach($product as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach

                      </select>
                     </div>

              </div>

              <div class="form-group row">
                <label for="stok" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">Stok</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="stok" placeholder="stok" name="stok" required>
                </div>

              </div>
              <button type="submit" class="btn btn-primary mt-3 offset-sm-3 col-sm-7">Submit</button>

              </form>
        </div>
      </div>
</div>

@endsection
