@extends('layouts.admin')
@section('title','Ubah informasi bahan '.$ingredient->name)
@section('ingredients','active')

@section('content')
@include('includes.page-title',['title' => 'Ubah Bahan','paragraph' => 'Silahkan ubah data bahan sesuai form yang
disediakan'])

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Ubah Bahan</h4>
    </div>
    <div class="card-content">
        <div class="card-body pt-0">
            <form class="form form-vertical" action="{{ route('ingredients.update',$ingredient->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-body">

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Nama Bahan
                                @error('name')
                                <span class="text-danger">({{ $message }})</span>
                                @enderror
                            </label>
                            <div class="position-relative">
                                <input type="text" class="form-control @error('name') border-danger @enderror"
                                    name="name" placeholder="Nama Bahan" id="name"
                                    value="{{ old('name') ?? $ingredient->name }}" autocomplete="off>
                                    <div class=" form-control-icon">
                                <div class="form-control-icon">
                                    <i data-feather="feather" class="@error('name') text-danger @enderror"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Kuantitas Bahan (Gr)
                                @error('quantity')
                                <span class="text-danger">({{ $message }})</span>
                                @enderror
                            </label>
                            <div class="position-relative">
                                <input type="text" class="form-control @error('quantity') border-danger @enderror"
                                    name="quantity" placeholder="Kuantitas Bahan" id="name"
                                    value="{{ old('quantity') ?? $ingredient->quantity }}" autocomplete="off">
                                <div class="form-control-icon">
                                    <i data-feather="plus-square" class="@error('quantity') text-danger @enderror"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Harga Bahan
                                @error('price')
                                <span class="text-danger">({{ $message }})</span>
                                @enderror
                            </label>
                            <div class="position-relative">
                                <input type="text" class="form-control @error('price') border-danger @enderror"
                                    name="price" placeholder="Harga" id="name"
                                    value="{{ old('price') ?? $ingredient->price }}" autocomplete="off">
                                <div class="form-control-icon">
                                    <i data-feather="tag" class="@error('price') text-danger @enderror"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-success  mb-1">Ubah</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
@endsection