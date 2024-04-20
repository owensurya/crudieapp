@extends('layouts.master')

@section('content')
<section class="d-flex justify-content-center">
    <div class="row p-4">
        <div class="p-2">
            <a href="{{route('product.add')}}" class="btn btn-md btn-primary">
                <span>+ Tambah</span>
            </a>
        </div>
        <table class="table table-responsive table-hover table-stripped">
        <caption>daftar produk</caption>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Deskripsi Produk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $key => $item)
                <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$item->title}}</td>
                    <td>{{$item->desc}}</td>
                    <td>
                        <div class="align-content-around">
                            <a href="{{route('product.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                            <a class="btn btn-danger ">Hapus</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</section>
@stop