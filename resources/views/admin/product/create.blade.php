@extends('layouts.admin')

@section('content')



<div class="container-fluid">
    <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-8">
                <h5 class="card-title">
                    Data Product
                </h5>
            </div>
            <div class="col-md-4 text-right">
                <a href="{{route('product.index')}}" class="btn btn-sm btn-outline-success"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>


    </div>
            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="form-group row">
                <label for="namaProduk" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">Nama Produk</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="namaProduk" placeholder="Nama Produk" name="name" required>
                </div>

              </div>

              <div class="form-group row">
                <label for="price" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">Harga Produk</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="price" placeholder="Rp" name="price" required>
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
