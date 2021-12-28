<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />

@extends('layouts.index')
@section('noidung')

<fieldset>
    <legend class="pt-4 text-center">Danh sách nước uống</legend>
    <form class="flex flex-col" method="post" action="/thempb">
    {{csrf_field()}}
    <div class="flex flex-col px-2 py-2 w-full">
        <div class=" flex flex-row px-2 py-2 w-full">
            <div class="">Tên sản phẩm</div>
            <div class="px-5 w-3/4" >
                <input  type="text" name="tensp" placeholder="Tên phòng" class="input-group border-2 w-80"/>
            </div>
        </div>
        <div class="flex flex-row px-2 py-2">
            <div>Mô tả</div>
            <div class="px-4">
                <input type="text" name="mota" placeholder="Tên viết tắt" class="input-group border-2 w-80"/>
            </div>
        </div>
        <div class="flex flex-row px-2 py-2">
        <div>Giá</div>
            <div  class="px-10">
                <input type="text" name="gia" placeholder="Ghi chú"class="input-group border-2 w-80"/>
            </div>
        </div>
        <div class="flex flex-row px-2 py-2">
        <div>Size</div>
            <div  class="px-10">
                <input type="text" name="Size" placeholder="Ghi chú"class="input-group border-2 w-80"/>
            </div>
        </div>
        <div class="py-2">
            <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full cursor-pointer" value="Add to cart">
        </div>
    </div>
    
        </form>
</fieldset>

<div class="flex flex-col">
    <div class="flex flex-row">
    <div class="text-lg m-auto flex flex-col">
            <div class="bg-blue-200 h-20">
                
            </div>
            <div>
                Trà sữa ô long
            </div>
            <div>
                Giá: 50000
            </div>
            <button class="bg-red-100 ">Add to cart</button>
        </div>
        <div class="text-lg m-auto flex flex-col">
            <div class="bg-blue-200 h-20    ">
                
            </div>
            <div>
                Trà sữa ô long
            </div>
            <div>
                Giá: 50000
            </div>
            <button class="bg-red-100 ">Add to cart</button>
        </div>
        <div class="text-lg m-auto flex flex-col">
            <div class="bg-blue-200 h-20    ">
                
            </div>
            <div>
                Trà sữa ô long
            </div>
            <div>
                Giá: 50000
            </div>
            <button class="bg-red-100 ">Add to cart</button>
        </div>
        
    </div>
    <div class="flex flex-row py-10">
        <div class="text-lg m-auto flex flex-col">
            <div class="bg-blue-200 h-20    ">
                
            </div>
            <div>
                Trà sữa ô long
            </div>
            <div>
                Giá: 50000
            </div>
            <button class="bg-red-100 ">Add to cart</button>
        </div>
        <div class="text-lg m-auto flex flex-col">
            <div class="bg-blue-200 h-20    ">
                
            </div>
            <div>
                Trà sữa ô long
            </div>
            <div>
                Giá: 50000
            </div>
            <button class="bg-red-100 ">Add to cart</button>
        </div>
        <div class="text-lg m-auto flex flex-col">
            <div class="bg-blue-200 h-20    ">
                
            </div>
            <div>
                Trà sữa ô long
            </div>
            <div>
                Giá: 50000
            </div>
            <button class="bg-red-100 ">Add to cart</button>
        </div>
        
    </div>
    <div class="flex flex-row">
    <div class="text-lg m-auto flex flex-col">
            <div class="bg-blue-200 h-20    ">
                
            </div>
            <div>
                Trà sữa ô long
            </div>
            <div>
                Giá: 50000
            </div>
            <button class="bg-red-100 ">Add to cart</button>
        </div>
        <div class="text-lg m-auto flex flex-col">
            <div class="bg-blue-200 h-20    ">
                
            </div>
            <div>
                Trà sữa ô long
            </div>
            <div>
                Giá: 50000
            </div>
            <button class="bg-red-100 ">Add to cart</button>
        </div>
        <div class="text-lg m-auto flex flex-col">
            <div class="bg-blue-200 h-20    ">
                
            </div>
            <div>
                Trà sữa ô long
            </div>
            <div>
                Giá: 50000
            </div>
            <button class="bg-red-100 ">Add to cart</button>
        </div>
        
    </div>


    
</div>
@endsection