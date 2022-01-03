<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />

@extends('layouts.index')
@section('noidung')

<fieldset>
    <legend class="pt-4 text-center">Danh sách nước uống</legend>
    <form class="flex flex-col" method="post" action="/thempb">
    {{csrf_field()}}
    <div id="themsanpham" class="flex flex-col px-2 py-2 w-full">
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

<div id="sanpham" class="flex flex-col">
<div>
    <fieldset>
        @if(isset($error))
        <div>
            <div>
                {{$error}}
            </div>
        </div>
        @endif
        <div>Danh sách trà sữa</div>
        @if(isset($ds))
                <table class="flex flex-col">
                    
                    <tbody>
                        @foreach($ds as $i)
                        <tr>
                            <td>{{$i -> Ten}}</td>
                            <td>{{$i -> Mota}}</td>
                            <td>{{$i -> Gia}}</td>
                            <td>{{$i -> size}}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <i>Chưa có nước nào</i>
            @endif
        </div>
    </fieldset>
</div>


    
</div>
@endsection