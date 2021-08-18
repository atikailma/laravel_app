<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <div style="display:flex" class="row">
                    @php
                        $product= \App\Models\Product::where('is_delete',0)->get();

                    @endphp
                    @foreach ( $product as $prod )
                    <div class="col-md-4" style="    width: 40%;text-align:center;padding:80px">
                        <img style="width:100%" src="{{asset('img/shop.png')}}"/>
                         <p>{{$prod->name}}</p>
                         <a href="{{route('product.storeprod',$prod->id)}}">
                             <button class="btn btn-primary" style="background-color: chartreuse;
                             padding: 5px 20px 5px 20px;">Order</button
                         </a>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
