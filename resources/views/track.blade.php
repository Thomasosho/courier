@extends('layouts.stuff')

@section('content')

<div class="container my-5">
    <form action="/tracs" method="post">
        @csrf
        <label for="tracking_id" style="font-weight:bold;">Tracking ID</label>
        <div class="row">
            <div class="col-sm-10">
                <input type="text" class="form-control" name="q" placeholder="enter tracking id">
            </div>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-secondary">Check</button>
            </div>
        </div>
    </form>
</div>

@endsection