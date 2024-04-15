<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('admin_assets/css/main.css') }}" />
    <script src="{{ asset('assets/js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>

    <div class="container-fluid staticPadding">
        @includeIf('includes.admin.header')
        @includeIf('includes.admin.sidebar')
        @yield('content')
    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            var togleBtn = document.getElementById("togglBtn");
            var mainContt = document.getElementById("mainCont");
            sidebar.classList.toggle("shrink-sidebar");
            togleBtn.classList.toggle("marginToggleBtn");
            mainContt.classList.toggle("mainContClass");
        }
    </script>
    <script src="{{ asset('assets/js/jquery/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui/jquery-ui.min.js') }}"></script>

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var current_fs, next_fs, previous_fs; // fieldsets
            var opacity;
            var current = 1;
            var steps = document.querySelectorAll("fieldset").length;

            setProgressBar(current);

            document.querySelectorAll(".next").forEach(function(nextButton) {
                nextButton.addEventListener("click", function() {
                    current_fs = this.parentElement;
                    next_fs = this.parentElement.nextElementSibling;

                    // Add Class Active
                    document
                        .querySelectorAll("#progressbar li")[
                            Array.from(document.querySelectorAll("fieldset")).indexOf(
                                next_fs
                            )
                        ].classList.add("active");

                    // Show the next fieldset
                    next_fs.style.display = "block";

                    // Hide the current fieldset with style
                    var animation = setInterval(function() {
                        opacity = parseFloat(current_fs.style.opacity) || 1;
                        opacity -= 0.1;
                        current_fs.style.opacity = opacity;

                        if (opacity <= 0) {
                            clearInterval(animation);
                            current_fs.style.display = "none";
                            next_fs.style.opacity = 1;
                        }
                    }, 50);

                    setProgressBar(++current);
                });
            });

            document.querySelectorAll(".previous").forEach(function(prevButton) {
                prevButton.addEventListener("click", function() {
                    current_fs = this.parentElement;
                    previous_fs = this.parentElement.previousElementSibling;

                    // Remove class active
                    document
                        .querySelectorAll("#progressbar li")[
                            Array.from(document.querySelectorAll("fieldset")).indexOf(
                                current_fs
                            )
                        ].classList.remove("active");

                    // Show the previous fieldset
                    previous_fs.style.display = "block";

                    // Hide the current fieldset with style
                    var animation = setInterval(function() {
                        opacity = parseFloat(current_fs.style.opacity) || 1;
                        opacity -= 0.1;
                        current_fs.style.opacity = opacity;

                        if (opacity <= 0) {
                            clearInterval(animation);
                            current_fs.style.display = "none";
                            previous_fs.style.opacity = 1;
                        }
                    }, 50);

                    setProgressBar(--current);
                });
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                document.querySelector(".progress-bar").style.width = percent + "%";
            }

            // document.querySelector(".submit").addEventListener("click", function () {
            //     return false;
            // });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        if (document.querySelector('#admin_list')) {

            document.addEventListener("DOMContentLoaded", function() {
                new DataTable("#admin_list", {
                    ajax: {
                        url: '/admin/loans/history',
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
                                            `<span class="badge bg-success">Domestic Education Loan</span>` :
                                            "")
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
                                return `<select name="loan_approval_status" class="form-control loan_approval_status" ${row.status == 3 || row.status == 2 ? "disabled" : ""} data-id="${row.id}" id="">
                                    <option ${row.status == 0 ? "selected" : ""} value="0">Pending</option>
                                    <option ${row.status == 2 ? "selected" : ""} value="2">In-Review</option>
                                    <option ${row.status == 1 ? "selected" : ""} value="1">Approve</option>
                                    <option ${row.status == 3 ? "selected" : ""} value="3">Reject</option>
                                </select>`
                                // row.status == 1 ?
                                //     `<span class="badge bg-success">Approved</span>` :
                                //     `<span class="badge bg-danger">Pending</span>`
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M5 10c-1.1 0-2 .9-2 2s.9 2 2 2s2-.9 2-2s-.9-2-2-2m14 0c-1.1 0-2 .9-2 2s.9 2 2 2s2-.9 2-2s-.9-2-2-2m-7 0c-1.1 0-2 .9-2 2s.9 2 2 2s2-.9 2-2s-.9-2-2-2"/></svg>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" style="">
                            <li><a href="/admin/loan/details/${row.id}" class="dropdown-item edit-item-btn"><i
                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i> View</a></li>
                            </ul>
                            </div>`
                            }
                        }
                    ]
                });
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <script>
        setTimeout(() => {
            document.querySelector('.loan_approval_status').addEventListener('change', async (e) => {
                // console.log();
                let loan_id = e.target.getAttribute('data-id');
                let loan_status = e.target.value;
                let reason = "";
                if (loan_status == 3) {
                    const {
                        value: RejectionReason
                    } = await Swal.fire({
                        title: "Enter File Rejection Reason",
                        input: "text",
                        inputLabel: "File Rejection Reason",

                        showCancelButton: true,
                        inputValidator: (value) => {
                            if (!value) {
                                return "You need to write something!";
                            }
                        }
                    });
                    if (RejectionReason) {
                        reason = RejectionReason;
                        Swal.fire(`File Rejection Reason ${RejectionReason}`);
                    }
                    let csrf_token = document.querySelector('meta[name="csrf-token"]').content;

                    let response = await fetch(`${window.location.origin}/update_loan_status`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': csrf_token
                        },
                        body: JSON.stringify({
                            loan_id: loan_id,
                            loan_status: loan_status,
                            reason: reason
                        })
                    });

                    let fetchResponse = await response.json();
                    e.target.setAttribute('disabled', true)
                    
                } else {
                    let csrf_token = document.querySelector('meta[name="csrf-token"]').content;

                    let response = await fetch(`${window.location.origin}/update_loan_status`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': csrf_token
                        },
                        body: JSON.stringify({
                            loan_id: loan_id,
                            loan_status: loan_status,
                        })
                    });

                    let fetchResponse = await response.json();
                }

            })
        }, 2000);
    </script>
     <script>
        tinymce.init({
          selector: '#mytextarea'
        });
      </script>
</body>

</html>
