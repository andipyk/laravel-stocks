@extends('layout')

@section('content')
<style>
    .uper{
        margin-top: 40px;
    }
</style>
<div class="car uper">
    <div class="card-header">
        Edit Share
    </div>
    <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div><br>
        @endif
        <form action="{{route('shares.update', $share->id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="name">Share Name:</label>
                <input type="text" name="share_name" class="form-control" value="{{$share->share_name}}">
            </div>
            <div class="form-group">
                <label for="price">Share Price:</label>
                <input type="text" name="share_price" class="form-control" value="{{$share->share_price}}">
            </div>
            <div class="form-group">
                <label for="quantity">Share Quantity:</label>
                <input type="text" name="share_qty" class="form-control" value="{{$share->share_qty}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection