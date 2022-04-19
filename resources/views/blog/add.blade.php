<!-- tambah data -->
@extends('partial.master-blog')

@section('judul','tambah-blog')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-primary" style="float: right;">
                            <h3 class="card-title">Tambah Data </h3>
                        </div>
                        <div class="card-body">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{ route('blog.save-blog') }}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="iidd">Id </label>
                                    <input type="number" id="id" name="id" class="form-control" value="{{old('id')}}" autocomplete="off" autofocus>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="at">Author</label>
                                    <input type="text" id="at" name="author" class="form-control" value="{{old('author')}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tl">Title</label>
                                    <input type="text" id="tl" name="title" class="form-control" value="{{old('title')}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="bd">Body</label>
                                    <br>
                                    <textarea name="body" id="bd" cols="30" rows="2" autocomplete="off">{{old('body')}}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="key">Keyword</label>
                                    <input type="text" id="key" name="keyword" class="form-control" value="{{old('keyword')}}" autocomplete="off">
                                </div>

                                <input type="submit" class="btn btn-success" name="submit" value="Simpan Data">
                                <a class="btn btn-primary" href="{{ url('data-blog') }}" role="button">Kembali</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection