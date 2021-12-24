@extends('layouts.stuff')

@section('content')

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Service</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Service</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Our Services</h6>
                <h1 class="mb-4">Best Logistic Services</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-plane text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Domestic Courier</h6>
                    </div>
                    <p>
                        Serving more than 3000 destination across the country. 
                        Delta Elite Courier Service is one the most 
                        trusted company to deliver consignments at much 
                        faster time as compared to other. We strive hard 
                        to achieve this with our strong network and delivery team.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-ship text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">International Courier</h6>
                    </div>
                    <p>
                        To provide international services Delta Elite Courier Service 
                        have tie-ups with the renowned courier companies to provide better 
                        service at cheap rates.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-truck text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Same Day Delivery</h6>
                    </div>
                    <p>
                        Service for Document/Parcel delivery within City municipal limits as per the selective 
                        serviceable pin codes in main North and Metro cities, with safe and secure delivery 
                        along with real time delivery updating to the clients and customer through various 
                        communication channel like SMS and Mails.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-store text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Online Tracking System</h6>
                    </div>
                    <p>
                        Recently the company launched its on-line tracking system on its website. 
                        This service provides the status of the consignments booked by the company. 
                        From here one can get each and every detail of his consignment just by entering 
                        the Docket number given to him at the time of booking.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

@endsection