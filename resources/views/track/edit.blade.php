@extends('layouts.app')

@section('content')
<div class="container">
    <h5>Add new Tracker</h5>
    <form action="{{ route('tracker.update', $track->id) }}" method="post">
        {{ csrf_field() }}
        @method('PATCH')
        <div class="row">
            <h3>Edit #{{$track->tracking_id}}</h3>
            <div class="col-sm-4">
                <label for="tracking_id">Start</label>
                <input type="text" name="start" value="{{$track->start}}" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Current</label>
                <input type="text" name="current" value="{{$track->current}}" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Destination</label>
                <input type="text" name="destination" value="{{$track->destination}}" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Weight</label>
                <input type="text" name="weight" value="{{$track->weight}}" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Name</label>
                <input type="text" name="name" value="{{$track->name}}" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Delivered to (Name)</label>
                <input type="text" name="delivered_name" value="{{$track->delivered_name}}" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Phone</label>
                <input type="tel" name="phone" value="{{$track->phone}}" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Delivered to (Phone)</label>
                <input type="tel" name="delivered_phone" value="{{$track->delivered_phone}}" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Email Address</label>
                <input type="text" name="email" value="{{$track->email}}" class="form-control">
            </div>
            <!-- jjc -->
            <div class="col-sm-4">
                <label for="description">Description</label>
                <input type="text" name="description" value="{{$track->description}}" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="quantity">Quantity</label>
                <input type="text" name="qty" value="{{$track->qty}}" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Price</label>
                <input type="text" name="price" value="{{$track->price}}" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Total Price</label>
                <input type="number" name="amount" value="{{$track->amount}}" class="form-control">
            </div>
            <!-- jjc -->
            <div class="col-sm-12 my-3">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
            
        </div>
    </form>
</div>
@endsection