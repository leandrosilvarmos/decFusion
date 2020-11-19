@extends('layouts.app')

@section('content')

<div class="welcome">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h2>Dashboard</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="dashboard-grid">
    <div class="general-stat-grid card shadow p-4 general-stats">
        <div class="stat-group d-flex justify-content-around align-items-center">
            <img src="https://firebasestorage.googleapis.com/v0/b/cloud-functions-playground-01.appspot.com/o/multiple-users-silhouette.svg?alt=media&token=0ad87cb5-875d-4e02-a6ee-018ad54db5b4" class="general-stat-icon" alt="">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class="my-0 font-weight-bold">540</h1>
                <h6 class="my-0">USERS</h6>
            </div>
        </div>
        <div class="stat-group d-flex justify-content-around align-items-center">
            <img src="https://firebasestorage.googleapis.com/v0/b/cloud-functions-playground-01.appspot.com/o/store.svg?alt=media&token=50331150-ef50-4f23-bb13-93f7f9608d2a" class="general-stat-icon" alt="">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class="my-0 font-weight-bold">145</h1>
                <h6 class="my-0">STORES</h6>
            </div>
        </div>
        <div class="stat-group d-flex justify-content-around align-items-center">
            <img src="https://firebasestorage.googleapis.com/v0/b/cloud-functions-playground-01.appspot.com/o/man-painting.svg?alt=media&token=27104735-f8a6-499b-832b-6df3d0d9cd79" class="general-stat-icon" alt="">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class="my-0 font-weight-bold">184</h1>
                <h6 class="my-0">PAINTERS</h6>
            </div>
        </div>
        <div class="stat-group d-flex justify-content-around align-items-center">
            <img src="https://firebasestorage.googleapis.com/v0/b/cloud-functions-playground-01.appspot.com/o/calendar.svg?alt=media&token=56beee02-dfd9-4774-83b1-617be486e8d9" class="general-stat-icon" alt="">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class="my-0 font-weight-bold">130</h1>
                <h6 class="my-0">BOOKINGS</h6>
            </div>
        </div>
    </div>
</div>




@endsection