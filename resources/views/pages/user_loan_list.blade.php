@extends('layout.default')

@section('content')
<section class="banner">
    <div class="container">
        <div class="row gy-4 gy-sm-0 align-items-center">
            <div class="col-12 col-sm-6">
                <div class="banner__content">
                    <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">User List</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">user</li>
                            <li class="breadcrumb-item active" aria-current="page">loan list</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="banner__thumb text-end">
                    <img src="assets/images/about_banner.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
   <div class="section">
    <div class="main-content container">
        <table id="user_list" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Loan Type</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Applied</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              
            </tbody>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Loan Type</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Applied</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
   </div>
@endsection
