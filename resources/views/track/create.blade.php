@extends('layouts.app')

@section('content')
<div class="container">
    <h5>Add new Tracker</h5>
    <form action="{{ route('tracker.store') }}" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-4">
                <label for="tracking_id">Tracking ID</label>
                <input type="text" name="tracking_id" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Start</label>
                <input type="text" name="start" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Current</label>
                <input type="text" name="current" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Destination</label>
                <input type="text" name="destination" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Weight</label>
                <input type="text" name="weight" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Delivered to (Name)</label>
                <input type="text" name="delivered_name" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Phone</label>
                <input type="tel" name="phone" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Delivered to (Phone)</label>
                <input type="tel" name="delivered_phone" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Email Address</label>
                <input type="text" name="email" class="form-control">
            </div>
            <!-- jjc -->
            <div class="col-sm-4">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="quantity">Quantity</label>
                <input type="text" name="qty" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Price</label>
                <input type="text" name="price" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="tracking_id">Total Price</label>
                <input type="number" name="amount" class="form-control">
            </div>
            <!-- jjc -->
            <div class="col-sm-12 my-3">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
            
        </div>
    </form>
</div>
@endsection