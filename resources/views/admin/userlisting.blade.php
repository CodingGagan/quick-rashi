@extends('includes.admin.default')

@section('content')
    <div class="main-content">
        <div class="main-content-inner" id="mainCont">
            <section class="agent-details">
                <section class="banner">
                    <div class="container">
                        <div class="row gy-4 gy-sm-0 align-items-center">
                            <div class="col-12 col-sm-6">
                                <div class="banner__content">
                                    <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">User List
                                    </h1>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                            <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                                            <li class="breadcrumb-item">user</li>
                                            <li class="breadcrumb-item active" aria-current="page">loan list</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                {{-- <div class="banner__thumb text-end">
                <img src="assets/images/about_banner.png" alt="image">
            </div> --}}
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
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Join Date</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Join Date</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
        </div>
    </div>
    <script>
        if (document.querySelector('#user_list')) {

            document.addEventListener("DOMContentLoaded", function() {
                new DataTable("#user_list", {
                    ajax: {
                        url: '/admin/users/list',
                        dataSrc: ""
                    },
                    "fnCreatedRow": function(row, data, index) {
                        $('td', row).eq(0).html(index + 1);
                    },
                    columns: [{
                            data: "id",
                            name: "id"
                        },
                        {
                            data: 'firstname',
                            name: 'name'
                        },
                     
                        {
                            data: 'email',
                            name: 'email'
                        },
                     
                        {
                            data: 'contact',
                            name: 'contact'
                        },
                        {
                            data: 'created_at',
                            name: 'applied',
                        },
                //         {
                //             data: 'action',
                //             name: 'action',
                //             "render": function(data, type, row) {
                //                 return `<div class="dropdown d-inline-block">
                // <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown"
                // aria-expanded="false">
                // <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M5 10c-1.1 0-2 .9-2 2s.9 2 2 2s2-.9 2-2s-.9-2-2-2m14 0c-1.1 0-2 .9-2 2s.9 2 2 2s2-.9 2-2s-.9-2-2-2m-7 0c-1.1 0-2 .9-2 2s.9 2 2 2s2-.9 2-2s-.9-2-2-2"/></svg>
                // </button>
                // <ul class="dropdown-menu dropdown-menu-end" style="">
                // <li><a href="/admin/loan/details/${row.id}" class="dropdown-item edit-item-btn"><i
                //             class="ri-pencil-fill align-bottom me-2 text-muted"></i> View</a></li>
                // </ul>
                // </div>`
                //             }
                //         }
                    ]
                });
            });
        }
    </script>
@endsection
