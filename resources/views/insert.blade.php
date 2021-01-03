@extends('base')
@section('content')
<div class="jumbotron rounded-0" style="background-image:url('{{asset('picture1.jpeg')}}');height:900px;background-size:cover">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <form action="{{route('book.store')}}" method="POST" enctype="multipart/form-data">
             @csrf
                <div class="form-group mb-3">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Author</label>
                    <input type="text" name="author" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Cover</label>
                    <input type="file" name="cover" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Description</label>
                    <textarea rows="7" name="description" class="form-control"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="">Price</label>
                    <input type="text" name="price" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">ISBN</label>
                    <input type="text" name="isbn" class="form-control">
                </div>
                <div class="form-group d-grid gap-2">
                    <input type="submit" class="btn btn-info">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection