@extends('layouts.admin')
@section('content')
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
    <div class="card-header py-3" style="display: flex;justify-content: space-between;">
        <h6 class="m-0 font-weight-bold text-primary">User Pengguna</h6>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($user as $key => $u)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>
                        <td>{{$u->role->name}}</td>


                    </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
