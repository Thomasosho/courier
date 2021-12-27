@extends('layouts.stuff')

@section('content')

@if($search->count())
    @foreach($search as $key => $s)
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>Search Result ({{++$key}}): </p>
                    <h3>{{$s->tracking_id}}</h3>
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th width="35%">
                                    From
                                </th>
                                <th width="35%">
                                    Current
                                </th>
                                <th width="35%">
                                    To
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="35%">
                                    {{$s->start}}
                                </td>
                                <td width="35%">
                                    {{$s->current}}
                                </td>
                                <td width="35%">
                                    {{$s->destination}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endforeach
@else
    <tr>
        <td colspan="4">There is no data.</td>
    </tr>
@endif

@endsection