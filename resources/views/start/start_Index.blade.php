@extends('layout.layout_Master')
@section('layout_Title')
<title>Início</title>
@endsection
@section('layout_Body')
<div class="grid grid-flow-col">
    {{-- News --}}
    <div class="col-span-1 grid grid-cols-5 mt-4">
        <div class="col-span-1"></div>
        <div class="col-span-3">
            <a href="#"><img src="storage\image\banner\banner_News.png" alt="banner_News"></a>
            <div></div>
        </div>
        <div class="col-span-1"></div>
    </div>
</div>
@endsection
