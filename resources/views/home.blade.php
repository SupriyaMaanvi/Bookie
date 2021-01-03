@extends('base')
@section('content')

<div class="jumbotron rounded-0" style="background-image:url('picture1.jpeg');height:700px;background-size:cover">
<div class="row">
    <div class="col-lg-12 mx-auto">
        <div class="row">
              @foreach($records as $item)
                <div class="col-lg-3">
                    <div class="card mt-3">
                      <img src="{{asset('images/'.$item->cover)}}" alt="" width="120px" class="mx-auto">
                        <div class="card-body mx-auto">
                            <h6>Title : {{$item->title}}</h6>
                            <h6>Author : {{$item->author}}</h6>
                            <h6 class="text-success">Rs.{{$item->price}}</h6>
                            <a href="{{route('book.show',['book'=>$item->id])}}" class="btn btn-success">View</a>
                            <form action="{{route('book.destroy',['book'=>$item->id])}}" method="POST" class="d-inline">
                              @csrf
                              @method('delete')
                              <input type="submit" value="delete" class="btn btn-danger">
                            </form>
                            <a href="{{route('book.edit',['book'=>$item->id])}}" class="btn btn-info">edit</a>
                        </div>
                    </div>
                </div>
              @endforeach 
        </div>
    </div>
</div>   
</div>

@endsection