@extends('layouts.app')

@section('content')

<div class="container">
    <a href="/tracker/create" class="btn btn-primary">create new tracking</a>
    <h5 class="p-2">Tracking List</h5>
    <div class="row">
        <div class="col">
        <div class="table-responsive">
                <table class="table table-striped no-wrap">
                    <thead>
                        <tr>
                            <th>Tracking Id</th>
                            <th>Pickup location</th>
                            <th>Current Location</th>
                            <th>Drop Location</th>
                            <th>Last Update</th>
                            <th>Action</th>
                            <th>Receipt</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($track as $i)
                        <tr>
                            <td>{{$i->tracking_id}}</td>
                            <td>{{$i->start}}</td>
                            <td>{{$i->current}}</td>
                            <td>{{$i->destination}}</td>
                            <td>{{$i->updated_at->diffForHumans()}}</td>
                            <td class="text-nowrap">
                                <a href="{{ route('tracker.edit',$i->id)}}" style="float:left;" data-toggle="tooltip" data-original-title="Edit">
                                    <i class="fas fa-pencil-alt text-inverse mr-2"></i> Edit
                                </a>
                                <a href="{{ route('tracker.show',$i->id)}}" class="px-2" style="float:left;" data-toggle="tooltip" data-original-title="Show">
                                    <i class="fas fa-eye text-inverse mr-2"></i> Show
                                </a>
                                <form action="{{ route('tracker.destroy', $i->id)}}" style="margin-left : 20px;float:left;"  method="post" data-toggle="tooltip" data-original-title="Delete">
                                    {{ csrf_field() }}
                                    @method('DELETE')    
                                    <button style="border:0px;" class="fas fa-window-close text-danger" type="submit"> Delete</button> 
                                </form>
                            </td>
                            <td>
                                <a href="receipt/{{$i->id}}" class="px-2" style="float:left;" data-toggle="tooltip" data-original-title="Show">
                                    <i class="fas fa-eye text-inverse mr-2"></i> Receipt
                                </a>
                            </td>
                            <!-- <td>
                                <a href="deposit/{{$i->tracking_id}}" class="px-2" style="float:left;" data-toggle="tooltip" data-original-title="Show">
                                    <i class="fas fa-eye text-inverse mr-2"></i> Deposit
                                </a>
                            </td> -->
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $track->links() !!}
        </div>
    </div>
</div>

@endsection