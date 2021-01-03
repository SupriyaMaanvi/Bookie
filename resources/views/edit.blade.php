@extends('base')
@section('content')
<div class="jumbotron rounded-0" style="background-image:url('{{asset('picture1.jpeg')}}');height:1400px;background-size:cover">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <form action="{{route('book.update',['book'=>$record->id])}}" method="POST" enctype="multipart/form-data">
             @csrf
             @method('put')
                <div class="mb-3">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$record->title}}">
                </div>
                <div class="mb-3">
                    <label for="">Author</label>
                    <input type="text" name="author" class="form-control" value="{{$record->author}}">
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{asset('images/'.$record->cover)}}" alt="" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="">Cover</label>
                    <input type="file" name="cover" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea rows="7" name="description" class="form-control">{{$record->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Price</label>
                    <input type="text" name="price" class="form-control" value="{{$record->price}}">
                </div>
                <div class="mb-3">
                    <label for="">ISBN</label>
                    <input type="text" name="isbn" class="form-control" value="{{$record->isbn}}"> 
                </div>
                <div class="d-grid gap-2">
                    <input type="submit" class="btn btn-info">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection