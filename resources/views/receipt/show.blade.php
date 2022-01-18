@extends('layouts.app')

<style>
    body{
    margin-top:20px;
    color: #484b51;
}
.text-secondary-d1 {
    color: #728299!important;
}
.page-header {
    margin: 0 0 1rem;
    padding-bottom: 1rem;
    padding-top: .5rem;
    border-bottom: 1px dotted #e2e2e2;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-align: center;
    align-items: center;
}
.page-title {
    padding: 0;
    margin: 0;
    font-size: 1.75rem;
    font-weight: 300;
}
.brc-default-l1 {
    border-color: #dce9f0!important;
}

.ml-n1, .mx-n1 {
    margin-left: -.25rem!important;
}
.mr-n1, .mx-n1 {
    margin-right: -.25rem!important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}

.text-grey-m2 {
    color: #888a8d!important;
}

.text-success-m2 {
    color: #86bd68!important;
}

.font-bolder, .text-600 {
    font-weight: 600!important;
}

.text-110 {
    font-size: 110%!important;
}
.text-blue {
    color: #FF4800 !important;
}
.pb-25, .py-25 {
    padding-bottom: .75rem!important;
}

.pt-25, .py-25 {
    padding-top: .75rem!important;
}
.bgc-default-tp1 {
    background-color: #FF4800 !important;
}
.bgc-default-l4, .bgc-h-default-l4:hover {
    background-color: #ff480038 !important;
}
.page-header .page-tools {
    -ms-flex-item-align: end;
    align-self: flex-end;
}

.btn-light {
    color: #757984;
    background-color: #f5f6f9;
    border-color: #dddfe4;
}
.w-2 {
    width: 1rem;
}

.text-120 {
    font-size: 120%!important;
}
.text-primary-m1 {
    color: #4087d4!important;
}

.text-danger-m1 {
    color: #dd4949!important;
}
.text-blue-m2 {
    color: #FF4800 !important;
}
.text-150 {
    font-size: 150%!important;
}
.text-60 {
    font-size: 60%!important;
}
.text-grey-m1 {
    color: #7b7d81!important;
}
.align-bottom {
    vertical-align: bottom!important;
}
</style>

@section('content')
<div class="page-content container">
    <div class="page-header text-blue-d2">
        <h1 class="page-title text-secondary-d1">
            <small class="page-info">
                <i class="fa fa-angle-double-right text-80"></i>
                ID: {{$track->tracking_id}}
            </small>
        </h1>

        <div class="page-tools">
            <div class="action-buttons">
                <button class="btn bg-white btn-light mx-1px text-95" onclick="Convert_HTML_To_PDF();">Generate PDF</button>
            </div>
        </div>
    </div>
</div>

<div id="contentToPrint">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="text-center text-uppercase text-150 text-blue">
                    <i class="fa fa-truck mr-2"></i>
                    <span>Delta Courier Services</span>
                </div>
            </div>
            <div class="col-4">
                <h5 class="text-uppercase">Receipt Bill: {{$track->tracking_id}}</h5>
            </div>
            <div class="col-4">
                <span class="text-uppercase" style="border: 1px #ff4821 dotted; padding: 2px;">Origin: {{$track->start}}</span>
                <span class="text-uppercase" style="border: 1px #ff4821 dotted; padding: 2px;">Destination: {{$track->destination}}</span>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-4">
                <!-- 1 -->
                <div class="row">
                    <span style="background-color: #ff4821; height: 50px; margin: 0 !important;">
                        <h6 class="text-uppercase px-1 py-4" style="color: #ffffff; line-height: 0.0; margin-bottom: 0;">
                            <span style="width: 100%; background-color: #971c02; padding: 5px;">1.</span>
                            sender:
                        </h6>
                    </span>
                </div>
                <div class="row">
                    <div class="col-6" style="border: 1px stroke #000;">
                        <label for="text" class="text-uppercase" style="font-weight: bold;">Tracking Number: </label>
                        <input type="text" class="form-control" value="{{$track->tracking_id}}" disabled>
                    </div>
                    <div class="col-6" style="border: 1px stroke #000;">
                        <label for="text" class="text-uppercase" style="font-weight: bold;">Sender's Name in block letters: </label>
                        <input type="text" class="form-control" value="{{$track->name}}" disabled>
                    </div>

                    <div class="col-12" style="border: 1px stroke #000;">
                        <label for="text" class="text-uppercase" style="font-weight: bold;">Company: </label>
                        <input type="text" class="form-control" value="Delta Courier Services" disabled>
                    </div>

                    <div class="col-6" style="border: 1px stroke #000;">
                        <label for="text" class="text-uppercase" style="font-weight: bold;">Issue Date: </label>
                        <input type="text" class="form-control" value="{{$track->created_at->todatestring()}}" disabled>
                    </div>
                    <div class="col-12" style="border: 1px stroke #000;">
                        <label for="text" class="text-uppercase" style="font-weight: bold;">Telephone: </label>
                        <span style="color: #971c02;">{{$track->phone}}</span>
                    </div>
                </div>
                <!-- 2 -->
                <div class="row">
                    <span style="background-color: #ff4821; height: 50px; margin: 0 !important;">
                        <h6 class="text-uppercase px-1 py-4" style="color: #ffffff; line-height: 0.0; margin-bottom: 0;">
                            <span style="width: 100%; background-color: #971c02; padding: 5px;">2.</span>
                            Destination:
                        </h6>
                    </span>
                </div>
                <div class="row">
                    <div class="col-12" style="border: 1px stroke #000;">
                        <label for="text" class="text-uppercase" style="font-weight: bold;">Name: </label>
                        <input type="text" class="form-control" value="{{$track->delivered_name}}" disabled>
                    </div>

                    <div class="col-12" style="border: 1px stroke #000;">
                        <label for="text" class="text-uppercase" style="font-weight: bold;">Address: </label>
                        <input type="text" class="form-control" value="{{$track->destination}}" disabled>
                    </div>

                    <div class="col-12" style="border: 1px stroke #000;">
                        <label for="text" class="text-uppercase" style="font-weight: bold;">Telephone: </label>
                        <span style="color: #971c02;">{{$track->delivered_phone}}</span>
                    </div>
                </div>
                <!-- 3 -->
                <div class="row">
                    <span style="background-color: #ff4821; height: 50px; margin: 0 !important;">
                        <h6 class="text-uppercase px-1 py-4" style="color: #ffffff; line-height: 0.0; margin-bottom: 0;">
                            <span style="width: 100%; background-color: #971c02; padding: 5px;">3.</span>
                            Sender's Authorised Signature:
                        </h6>
                    </span>
                </div>
                <div class="row">
                    <div class="col-7" style="border: 1px stroke #000;">
                        <label for="text" class="text-uppercase" style="font-weight: bold;">Signature: </label>
                        <input type="text" class="form-control" value="{{$track->name}}" disabled>
                    </div>

                    <div class="col-5" style="border: 1px stroke #000;">
                        <label for="text" class="text-uppercase" style="font-weight: bold;">Date: </label>
                        <input type="text" class="form-control" value="{{$track->created_at->todatestring()}}" disabled>
                    </div>
                </div>
            </div>
            <!-- 4 -->
            <div class="col-4">
                <div class="row">
                    <span style="background-color: #ffffff; height: 50px; margin: 0 !important;">
                        <h6 class="text-uppercase px-1 py-4" style="color: #000000; line-height: 0.0; margin-bottom: 0;">
                            <span style="width: 100%; background-color: #971c02; padding: 5px; color: #ffffff;">4.</span>
                            Details of Goods and Services:
                        </h6>
                    </span>
                </div>
                <div class="row">
                    <div class="col-12" style="border: 1px stroke #000;">
                        <label for="text" class="text-uppercase" style="font-weight: bold;">Goods Description: </label>
                        <p>
                            {{$track->description}}
                        </p>
                    </div>
                    <div class="col-4" style="border: 1px stroke #000;">
                        <label for="text" class="text-uppercase" style="font-weight: bold;">Quantity: </label>
                        <p>
                            {{$track->qty}}
                        </p>
                    </div>

                    <div class="col-4" style="border: 1px stroke #000;">
                        <label for="text" class="text-uppercase" style="font-weight: bold;">Tax: </label>
                        <p>
                            $ {{$tax}}
                        </p>
                    </div>

                    <div class="col-4" style="border: 1px stroke #000;">
                        <label for="text" class="text-uppercase" style="font-weight: bold;">Total: </label>
                        <p>
                            $ {{$total}}
                        </p>
                    </div>
                </div>
                <!-- signature -->
                <div class="row">
                    <div class="col-12" style="border: 1px stroke #000;">
                        <label for="text" class="text-uppercase" style="font-weight: bold;">Approval: </label>
                        <p class="px-5">
                            <img src="{{ asset('img/approved.png') }}" style="width: -webkit-fill-available;">
                            <img src="{{ asset('img/stamp.png') }}" style="width: -webkit-fill-available;">
                        </p>
                    </div>
                </div>
            </div>
            <!-- 5 -->
            <div class="col-4">
                <div class="row">
                    <span style="background-color: #ff4821; height: 50px; margin: 0 !important;">
                        <h6 class="text-uppercase px-1 py-4" style="color: #ffffff; line-height: 0.0; margin-bottom: 0;">
                            <span style="width: 100%; background-color: #971c02; padding: 5px;">5.</span>
                            Dimensions/Weight
                        </h6>
                    </span>
                </div>
                <div class="row">
                    <div class="col-6 p-5" style="border: 1px dotted #000;">
                        <label for="text" class="text-capitalize" style="font-weight: bold;">Number of Pieces </label>
                        <p>
                            {{$track->qty}}
                        </p>
                    </div>
                    <div class="col-6 p-5" style="border: 1px dotted #000;">
                        <label for="text" class="text-capitalize" style="font-weight: bold;">Weight </label>
                        <p>
                            {{$track->weight}}
                        </p>
                    </div>
                </div>
                <br>
                <!-- 6 -->
                <div class="row">
                    <span style="background-color: #ff4821; height: 50px; margin: 0 !important;">
                        <h6 class="text-uppercase px-1 py-4" style="color: #ffffff; line-height: 0.0; margin-bottom: 0;">
                            <span style="width: 100%; background-color: #971c02; padding: 5px;">6.</span>
                            Total Expenditure
                        </h6>
                    </span>
                </div>
                <div class="row">
                    <div class="col-12 p-5" style="border: 1px dotted #000;">
                        <label for="text" class="text-capitalize" style="font-weight: bold;">Volumetric Charged Weight </label>
                        <div class="row">
                            <div class="col-6 px-3">
                                <p>
                                    {{$track->weight}}
                                </p>
                            </div>
                            <div class="col-6 px-3">
                                <p>
                                    KG
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-5" style="border: 1px dotted #000;">
                        <label for="text" class="text-capitalize" style="font-weight: bold;">Transport Collect Sticker No:</label>
                        <p>
                            DHPA09VOL{{$track->weight}}
                        </p>
                    </div>
                </div>
            </div>
            <col-12>
                <span class="text-secondary-d1 text-105">Thank you for your business</span>
            </col-12>
        </div>
    </div>
</div>
@endsection