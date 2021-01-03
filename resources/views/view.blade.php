@extends('base')
@section('content')
<div class="jumbotron rounded-0" style="background-image:url('{{asset('picture1.jpeg')}}');height:800px;background-size:cover">
    <div class="row">
        <div class="col-lg-8 mx-auto mt-3">
          
          <div class="card mt-3">
              <div class="card-body" style="background-image:url('{{asset('release-notess.jpg')}}');height:600px;background-size:cover">
                <h2 class="text-warning mb-5">Details :</h2>
                  <div class="row">
                      <div class="col-lg-4">
                        <td>
                          <img src="{{asset('images/'.$d->cover)}}" alt="" width="260px">
                        </td>
                      </div>
                      <div class="col-lg-8">
                      <table class="table text-white">
                      <tr>
                        <th colspan="2">Title</th>
                        <td colspan="4">{{$d->title}}</td>
                      </tr>
                      <tr>
                        <th colspan="2">Author</th>
                        <td colspan="4">{{$d->author}}</td>
                      </tr>
                      <tr>
                        <th colspan="2">Description</th>
                        <td colspan="3">{{$d->description}}</td>
                      </tr>
                      <tr>
                        <th colspan="2">Price</th>
                        <td colspan="4">Rs.{{$d->price}}</td>
                      </tr>
                      <tr>
                        <th colspan="2">ISBN</th>
                        <td colspan="4">{{$d->isbn}}</td>
                      </tr>
                      <tr>
                        <th colspan="5"> 
                          <a href="" class="btn btn-success mt-4 ml-auto float-left mr-3">Buy Now</a>
                          <a href="" class="btn btn-danger mt-4 ml-auto float-left">Add To Cart</a> 
                        </th>
                      </tr>  
                  </table>
                      </div>
                  </div>
              </div>
          </div>  
          
        </div>
    </div>
</div> 
@endsection   