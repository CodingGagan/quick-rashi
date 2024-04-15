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
                        Logout </a>
                </li>

            </ul>
        </section>

        <div class="main-content">
            <div class="main-content-inner" id="mainCont">
                <h2>Personal Details</h2>
                <div class="steps_tab">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-11 col-sm-10 col-md-10 col-lg-8 col-xl-8 text-center p-0 mt-3 mb-2">
                                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">

                                    <form id="msform">
                                        <!-- progressbar -->
                                        <ul id="progressbar">
                                            <li class="active" id="account"><strong>Account</strong></li>
                                            <li id="personal"><strong>Personal</strong></li>
                                            <li id="payment"><strong>Image</strong></li>
                                            <li id="confirm"><strong>Finish</strong></li>
                                        </ul>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div> <br> <!-- fieldsets -->
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Account Information:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 1 - 4</h2>
                                                    </div>
                                                </div> <label class="fieldlabels">Email: *</label> <input type="email"
                                                    name="email" placeholder="Email Id" /> <label
                                                    class="fieldlabels">Username: *</label> <input type="text"
                                                    name="uname" placeholder="UserName" /> <label
                                                    class="fieldlabels">Password: *</label> <input type="password"
                                                    name="pwd" placeholder="Password" /> <label
                                                    class="fieldlabels">Confirm Password: *</label> <input
                                                    type="password" name="cpwd" placeholder="Confirm Password" />
                                            </div> <input type="button" name="next" class="next action-button"
                                                value="Next" />
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Personal Information:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 2 - 4</h2>
                                                    </div>
                                                </div> <label class="fieldlabels">First Name: *</label> <input
                                                    type="text" name="fname" placeholder="First Name" /> <label
                                                    class="fieldlabels">Last Name: *</label> <input type="text"
                                                    name="lname" placeholder="Last Name" /> <label
                                                    class="fieldlabels">Contact No.: *</label> <input type="text"
                                                    name="phno" placeholder="Contact No." /> <label
                                                    class="fieldlabels">Alternate Contact No.: *</label> <input
                                                    type="text" name="phno_2" placeholder="Alternate Contact No." />
                                            </div> <input type="button" name="next" class="next action-button"
                                                value="Next" /> <input type="button" name="previous"
                                                class="previous action-button-previous" value="Previous" />
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Image Upload:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 3 - 4</h2>
                                                    </div>
                                                </div> <label class="fieldlabels">Upload Your Photo:</label> <input
                                                    type="file" name="pic" accept="image/*"> <label
                                                    class="fieldlabels">Upload Signature Photo:</label> <input
                                                    type="file" name="pic" accept="image/*">
                                            </div> <input type="button" name="next" class="next action-button"
                                                value="Submit" /> <input type="button" name="previous"
                                                class="previous action-button-previous" value="Previous" />
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Finish:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 4 - 4</h2>
                                                    </div>
                                                </div> <br><br>
                                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2>
                                                <br>

                                                <div class="row justify-content-center">
                                                    <div class="col-7 text-center">
                                                        <h5 class="purple-text text-center">You Have Successfully
                                                            Signed
                                                            Up</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    document.querySelectorAll("#progressbar li")[Array.from(document
                        .querySelectorAll("fieldset")).indexOf(next_fs)].classList.add("active");

                    // Show the next fieldset
                    next_fs.style.display = "block";

                    // Hide the current fieldset with style
                    var animation = setInterval(function() {
                        opacity = parseFloat(current_fs.style.opacity) || 1;
                        opacity -= 0.1;
                        current_fs.style.opacity = opacity;

                        if (opacity <= 0) {
                            clearInterval(animation);
                            current_fs.style.display = 'none';
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
                    document.querySelectorAll("#progressbar li")[Array.from(document
                        .querySelectorAll("fieldset")).indexOf(current_fs)].classList.remove(
                        "active");

                    // Show the previous fieldset
                    previous_fs.style.display = "block";

                    // Hide the current fieldset with style
                    var animation = setInterval(function() {
                        opacity = parseFloat(current_fs.style.opacity) || 1;
                        opacity -= 0.1;
                        current_fs.style.opacity = opacity;

                        if (opacity <= 0) {
                            clearInterval(animation);
                            current_fs.style.display = 'none';
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

</body>

</html>
