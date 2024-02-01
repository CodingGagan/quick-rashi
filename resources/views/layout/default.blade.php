<!DOCTYPE html>
<html lang="en">

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- #favicon -->

    <title>Home</title>
    <!-- bootstrap five css -->

    <link rel="stylesheet" href="{{ asset('assets/js/bootstrap/css/bootstrap.min.css') }}">
    <!-- bootstrap-icons css -->
    <link rel="stylesheet" href="{{ asset('assets/font/bootstrap-icons.css') }}">
    <!-- nice select css -->
    <link rel="stylesheet" href="{{ asset('assets/js/nice-select/css/nice-select.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/css/magnific-popup.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/slick/css/slick.css') }}">
    <!-- odometer css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/odometer/css/odometer.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <!--  / css dependencies end  -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom_style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/icons/fontawesome.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>
    <header class="header-section">
        @includeIf('includes/header')
    </header>
    @yield('content')
    <footer class="footer">
        @includeIf('includes.scripts')
        @includeIf('includes.foot')
        @includeIf('includes.footer')
    </footer>
    {{-- @includeIf('includes.mobile-foot-nav') --}}
    <!-- scroll to top -->
    <a href="#" class="scrollToTop"><i class="bi bi-chevron-double-up"></i></a>

    <script src="{{ asset('assets/js/jquery/jquery-3.6.3.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery-validate/jquery.validate.min.js') }}"></script>
    <!-- bootstrap five js -->
    <!-- nice select js -->
    <script src="{{ asset('assets/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('assets/js/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('assets/js/viewport/viewport.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui/jquery-ui.min.js') }}"></script>

    <script src="{{ asset('assets/js/wow/wow.min.js') }}"></script>

    <!--  / js dependencies end  -->
    <!-- plugins js -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/vendor/slick/js/slick.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script src="{{ asset('assets/js/pages/signin.js') }}"></script>

    <script>
        if ($('#formContactus')) {
            $('#formContactus').validate();
        }

        if ($('#signUpForm')) {
            $('#signUpForm').validate();
        }

        if (document.querySelector('#user_list')) {

            document.addEventListener("DOMContentLoaded", function() {
                new DataTable("#user_list", {
                    ajax: {
                        url: '/user/loans/history',
                        dataSrc: ""
                    },
                    "fnCreatedRow": function(row, data, index) {
                        $('td', row).eq(0).html(index + 1);
                    },
                    columns: [{
                            data: "id",
                            name: ""
                        },
                        {
                            data: 'firstname',
                            name: 'name'
                        },
                        {
                            data: 'loan_type',
                            name: 'loan_type',
                            render: function(data, type, row) {
                                return row.loan_type == 1 ?
                                    `<span class="badge bg-success">Abroad Edu. Loan</span>` :
                                    (row.loan_type == 2 ?
                                        `<span class="badge bg-success">Business Loan</span>` :
                                        (row.loan_type == 3 ?
                                            `<span class="badge bg-success">Personal Loan</span>` :
                                            (row.loan_type == 4) ?
                                            `<span class="badge bg-success">Domestic Education Loan</span>` : "")
                                    )
                            }
                        },
                        {
                            data: 'amount',
                            name: 'name'
                        },
                        {
                            data: 'status',
                            name: 'status',
                            render: function(data, type, row) {
                                return row.status == 1 ?
                                    `<span class="badge bg-success">Approved</span>` :
                                    `<span class="badge bg-danger">Pending</span>`
                            }
                        },
                        {
                            data: 'created_at',
                            name: 'applied',
                        },
                        {
                            data: 'action',
                            name: 'action',
                            "render": function(data, type, row) {
                                return `<div class="dropdown d-inline-block">
        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="ri-more-fill align-middle"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end" style="">
            <li><a href="/user/dashboard/${row.id}" class="dropdown-item edit-item-btn"><i
                        class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
        </ul>
    </div>`
                            }
                        }
                    ]
                });
            });
        }
    </script>
</body>

</html>
