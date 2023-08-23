@extends('backend.layouts.master')
@section('title', 'Goi dich vu')

@section('content')
    <form method="post" action="{{route('backend.goi-dich-vu.store')}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="name">
            </div>
            <div class="form-group col-md-6">
                <label for="time">Time</label>
                <input type="number" min="1" name="time" value="10" class="form-control" id="time" placeholder="30">
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" id="description" placeholder="description">
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" id="price">
            </div>
            <div class="form-group col-md-3">
                <label for="old_price">Old Price</label>
                <input type="text" class="form-control" name="old_price" id="old_price">
            </div>
            <div class="form-group col-md-6">
                <label for="product_id">State</label>
                <select id="product_id" name="product_id" class="form-control">
                    @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
