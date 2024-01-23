<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/main.css') }}">
</head>

<body>
    <header class="topbar">
        <button type="button" class="topbar_toggleBtn" id="togglBtn" onclick="toggleSidebar()">
            <img src="../assets/Images/toggleBtn.png" alt="" />
        </button>
    </header>
    <div class="container-fluid staticPadding">
        <section class="sidebar" id="sidebar">
            <div class="dashboard-logo">
                <img src="../assets/Images/logo.jpg" alt="" />
            </div>
            <ul>
                <li>
                    <a href="/admin/user">
                        <!-- <img src="../assets/Images/user.png" alt="" />  -->
                        Users</a>
                </li>
                <li>
                    <a href="/admin/vehicles">
                        <!-- <img src="../assets/Images/logout.png" alt="" /> -->
                        Logout</a>
                </li>

            </ul>
        </section>

        <div class="main-content">
            <div class="main-content-inner" id="mainCont">
                <h2 class="mb-3">Query Listing</h2>
                <div class="table-reponsive mr-5">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>

        </div>
    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            var togleBtn = document.getElementById('togglBtn');
            var mainContt = document.getElementById('mainCont')
            sidebar.classList.toggle("shrink-sidebar");
            togleBtn.classList.toggle("marginToggleBtn");
            mainContt.classList.toggle("mainContClass")
        }
    </script>



</body>

</html>
