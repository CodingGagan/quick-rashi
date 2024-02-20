@extends('layout.default')

@section('content')
    <link rel="stylesheet" href="{{ asset('admin_assets/css/main.css') }}">
    <section class="banner">
        <div class="container">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">Apply Loan</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">

                                <li class="breadcrumb-item">user</li>
                                <li class="breadcrumb-item active" aria-current="page">Apply Loan</li>
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
    <div class="main-content">
        <div class="pt-5" id="mainCont">
            <h2 class="text-center">Apply Now.</h2>
            <div class="steps_tab">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-6 text-center p-0 mb-2">
                            <div class="card px-0 pt-4 pb-0 mb-3">

                                <form id="msform" enctype="multipart/form-data">
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
                                                    <h2 class="fs-title mt-3">Account Information:</h2>
                                                </div>
                                                <div class="col-5">
                                                    <h2 class="steps mt-3">Step 1 - 4</h2>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="fieldlabels">Loan Amount: *</label>
                                                        <input type="number" class="loan_input" name="loan_amount"
                                                            placeholder="Enter Loan Amount"
                                                            value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->amount : '') : '' }}"
                                                            required />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="fieldlabels">Loan
                                                            Type: *</label>
                                                        @php
                                                            $loan_type = isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->loan_type : 0) : 0;
                                                        @endphp
                                                        <select class="form-control custom_select" name="loan_type"
                                                            id="loan_type" required>
                                                            <option {{ $loan_type == 0 ? 'selected' : '' }} value="0"
                                                                disabled>
                                                                Select Loan Type</option>
                                                            <option {{ $loan_type == 1 ? 'selected' : '' }} value="1">
                                                                Abroad
                                                                Education Loan</option>
                                                            <option {{ $loan_type == 2 ? 'selected' : '' }} value="2">
                                                                Business Loan
                                                            </option>
                                                            <option {{ $loan_type == 3 ? 'selected' : '' }} value="3">
                                                                Personal Loan
                                                            </option>
                                                            <option {{ $loan_type == 4 ? 'selected' : '' }} value="4">
                                                                Domestic
                                                                Education Loan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>



                                            <div id="current_address" class="currnt_add">
                                                <div class="form-group">
                                                    <label class="fieldlabels">Current Address: *</label>
                                                    <input
                                                        value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->current_add : '') : '' }}"
                                                        type="text" name="current_address" class="loan_input"
                                                        placeholder="" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="fieldlabels">Current Address Line 2: *</label>
                                                    <input
                                                        value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->current_add_extra : '') : '' }}"
                                                        type="text" name="current_address_2" class="loan_input"
                                                        placeholder="" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="fieldlabels">Current Landmark: *</label>
                                                    <input
                                                        value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->current_landmark : '') : '' }}"
                                                        type="text" name="current_landmark" class="loan_input"
                                                        placeholder="" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="fieldlabels">Current Country: *</label>
                                                    <select name="current_country" id="current_country"
                                                        class="form-control custom_select" required>
                                                        <option value="0" disabled>Select Country</option>
                                                        <option value="105" selected>India</option>
                                                    </select>
                                                </div>


                                                <br />
                                                <div class="form-group mt-3">
                                                    <label class="fieldlabels">Current State: *</label>
                                                    @php
                                                        $current_state_selected = isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->current_state : '') : '';
                                                    @endphp
                                                    <select name="current_state" id="current_state" class="form-control"
                                                        required>
                                                        <option value="0" selected disabled>Select State</option>
                                                        @if (isset($states))
                                                            @foreach ($states as $state)
                                                                <option
                                                                    {{ $current_state_selected ? ($current_state_selected == $state->id ? 'selected' : '') : '' }}
                                                                    value="{{ $state->id }}">{{ $state->name }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="form-group mt-3">
                                                    @php
                                                        $current_city_selected = isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->current_city : '') : '';
                                                    @endphp
                                                    <label class="fieldlabels">Current City: *</label>
                                                    <select name="current_city" class="form-control custom_select"
                                                        required id="current_city">
                                                        @if (isset($data['loan_app']) && !empty($data['loan_app'][0]))
                                                            @foreach ($data['cities'] as $city)
                                                                <option
                                                                    {{ $current_city_selected == $city->id ? 'selected' : '' }}
                                                                    value='{{ $city->id }}'>{{ $city->city }}
                                                                </option>
                                                            @endforeach
                                                        @endif

                                                    </select>
                                                </div>

                                                <br />
                                                <div class="form-group mt-3">
                                                    <label class="fieldlabels">Current Pincode: *</label>
                                                    <input
                                                        value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->current_pincode : '') : '' }}"
                                                        type="text" name="current_pincode" placeholder=""
                                                        class="loan_input" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="fieldlabels">Current Residence: *</label>
                                                    <input
                                                        value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->current_residence : '') : '' }}"
                                                        type="text" name="current_residence" class="loan_input"
                                                        placeholder="" required />
                                                </div>

                                            </div>

                                            <div class="form-group custom_width mt-4">
                                                <label class="cont_checkbox">Check if same address
                                                    <input type="checkbox" name="same_address_as_current"
                                                        id="same_address_as_current"  class="cont_checkbox_input">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

                                            <div id="permanent_address" class="permanent_add currnt_add">
                                                {{-- <div class="head">Permanent Address</div> --}}
                                                <div class="form-group">

                                                    <label class="fieldlabels">Permanent Address: *</label>
                                                    <input type="text" name="permanent_address" class="loan_input"
                                                        placeholder=""
                                                        value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->per_add : '') : '' }}"
                                                        required />
                                                </div>
                                                <div class="form-group">

                                                    <label class="fieldlabels">Permanent Address Line 2: *</label>
                                                    <input type="text" name="permanent_address_2" class="loan_input"
                                                        placeholder=""
                                                        value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->per_add_extra : '') : '' }}"
                                                        required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="fieldlabels">Permanent Landmark: *</label>
                                                    <input type="text" name="permanent_landmark" class="loan_input"
                                                        value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->per_landmark : '') : '' }}"
                                                        placeholder="" required />
                                                </div>
                                                <div class="from-group">

                                                    <label class="fieldlabels">Permanent Country: *</label>
                                                    <select name="permanent_country" class="custom_select form-control"
                                                        id="permanent_country" required>
                                                        <option value="0" disabled>Select Country</option>
                                                        <option value="105" selected>India</option>
                                                    </select>
                                                </div>

                                                <br />
                                                <div class="form-group mt-3">
                                                    @php
                                                        $permanent_state_selected = isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->per_state : '') : '';
                                                    @endphp
                                                    <label class="fieldlabels">Permanent State: *</label>
                                                    <select name="permanent_state" id="permanent_state"
                                                        class="form-control custom_select" required>
                                                        <option value="0" selected disabled>Select State</option>

                                                        @if (isset($states))
                                                            @foreach ($states as $state)
                                                                <option
                                                                    {{ $permanent_state_selected ? ($permanent_state_selected == $state->id ? 'selected' : '') : '' }}
                                                                    value="{{ $state->id }}">{{ $state->name }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="from-group mt-3">
                                                    @php
                                                        $permanent_city_selected = isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->per_city : '') : '';
                                                    @endphp
                                                    <label class="fieldlabels">Permanent City: *</label>
                                                    <select name="permanent_city" id="permanent_city"
                                                        class="form-control custom_select" required>
                                                        @if (isset($data['loan_app']) && !empty($data['loan_app'][0]))
                                                            @foreach ($data['cities'] as $city)
                                                                <option
                                                                    {{ $permanent_city_selected == $city->id ? 'selected' : '' }}
                                                                    value='{{ $city->id }}'>{{ $city->city }}
                                                                </option>
                                                            @endforeach
                                                        @endif

                                                    </select>
                                                </div>

                                                <br />
                                                <div class="form-group mt-3">
                                                    <label class="fieldlabels">Permanent Pincode: *</label>
                                                    <input type="text" name="permament_pincode" class="loan_input"
                                                        value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->per_pincode : '') : '' }}"
                                                        placeholder="" required />
                                                </div>

                                                <br />
                                                <div class="from-group">
                                                    <label class="fieldlabels">Permanent Residence: *</label>
                                                    <input type="text" name="permanent_residence" class="loan_input"
                                                        value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->per_residence : '') : '' }}"
                                                        placeholder="" required />
                                                </div>

                                            </div>

                                        </div> <input type="button" name="next" id="first_form"
                                            class="next action-button" value="Next" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card mt-4">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Personal Information:</h2>
                                                </div>
                                                <div class="col-5">
                                                    <h2 class="steps">Step 2 - 4</h2>
                                                </div>
                                            </div>

                                            @php
                                                $work_type_selected = isset($data['second_form']) ? (!empty($data['second_form'][0]) ? $data['second_form'][0]->work_status : 0) : 0;
                                            @endphp
                                            <div class="form-group">
                                                <label class="fieldlabels">Work Status: *</label>
                                                <select name="work_status" id="work_status"
                                                    class="form-control custom_select" required>
                                                    <option
                                                        {{ $work_type_selected ? ($work_type_selected == 0 ? 'selected' : '') : '' }}
                                                        value="0" disabled selected>Select Work Status</option>
                                                    <option
                                                        {{ $work_type_selected ? ($work_type_selected == 1 ? 'selected' : '') : '' }}
                                                        value="1">Salary</option>
                                                    <option
                                                        {{ $work_type_selected ? ($work_type_selected == 2 ? 'selected' : '') : '' }}
                                                        value="2">Self Employed</option>
                                                    <option
                                                        {{ $work_type_selected ? ($work_type_selected == 3 ? 'selected' : '') : '' }}
                                                        value="3">Unemployed</option>
                                                    <option
                                                        {{ $work_type_selected ? ($work_type_selected == 4 ? 'selected' : '') : '' }}
                                                        value="4">Business</option>
                                                    <option
                                                        {{ $work_type_selected ? ($work_type_selected == 5 ? 'selected' : '') : '' }}
                                                        value="5">Corporate</option>
                                                    <option
                                                        {{ $work_type_selected ? ($work_type_selected == 6 ? 'selected' : '') : '' }}
                                                        value="6">Pensioner</option>
                                                    <option
                                                        {{ $work_type_selected ? ($work_type_selected == 7 ? 'selected' : '') : '' }}
                                                        value="7">Farmer</option>
                                                    <option
                                                        {{ $work_type_selected ? ($work_type_selected == 8 ? 'selected' : '') : '' }}
                                                        value="8">Retired</option>
                                                    <option
                                                        {{ $work_type_selected ? ($work_type_selected == 9 ? 'selected' : '') : '' }}
                                                        value="9">Employer</option>
                                                    <option
                                                        {{ $work_type_selected ? ($work_type_selected == 10 ? 'selected' : '') : '' }}
                                                        value="10">Other</option>
                                                </select>

                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="fieldlabels">Contact No.:
                                                            *</label>
                                                        <input type="text" id="contact" name="contact"
                                                            class="loan_input" placeholder="Contact No."
                                                            value="{{ isset($data['second_form']) ? (!empty($data['second_form'][0]) ? $data['second_form'][0]->contact : '') : '' }}"
                                                            required />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="fieldlabels">Alternate Contact No.: *</label>
                                                        <input type="text" id="alt_contact" name="contact_2"
                                                            class="loan_input" placeholder="Alternate Contact No."
                                                            value="{{ isset($data['second_form']) ? (!empty($data['second_form'][0]) ? $data['second_form'][0]->alt_contact : '') : '' }}"
                                                            required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="next" id="second_form" class="next action-button"
                                            value="Next" /> <input type="button" name="previous"
                                            class="previous action-button-previous" value="Previous" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card mt-3">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Image Upload:</h2>
                                                </div>
                                                <div class="col-5">
                                                    <h2 class="steps">Step 3 - 4</h2>
                                                </div>
                                            </div>
                                            <div class="button-wrap mt-2">
                                                <label class="fieldlabels imagebtn">Latest 3 month bank statement upto till
                                                    date:</label>
                                                <input type="file" required id="bank_pdf" name="bank_pdf"
                                                    class="fileBtnupload" accept="pdf">

                                                <a href="" target="_blank" id="show_pdf" class="d-none">
                                                    <img src="{{ asset('assets/images/pdfIcon.png') }}" alt="bank_pdf"
                                                        class="view_pdf">
                                                </a>
                                            </div>
                                            <div class="form-group mt-2">

                                                <label class="fieldlabels">Pan card:</label>
                                                <input type="file" required id="pan_card" name="pan_card"
                                                    class="fileBtnupload" accept="image/*">
                                                <img src="" alt="pan_card" class="d-none view_img"
                                                    title="Click to view uploaded image">
                                            </div>

                                            <div class="form-group mt-2">

                                                <label class="fieldlabels">Aadhaar card front:</label>
                                                <input type="file" required id="adhar_card_front"
                                                    name="adhar_card_front" class="fileBtnupload" accept="image/*">
                                                <img src="" alt="adhar_card_front" class="d-none view_img"
                                                    title="Click to view uploaded image">
                                            </div>

                                            <div class="form-group mt-2">

                                                <label class="fieldlabels">Aadhaar card back:</label>
                                                <input type="file" required id="adhar_card_back" class="fileBtnupload"
                                                    name="adhar_card_back" accept="image/*">
                                                <img src="" alt="adhar_card_back" class="d-none view_img"
                                                    title="Click to view uploaded image">
                                            </div>

                                            <div class="form-group mt-2">

                                                <label class="fieldlabels">Passport size photograph:</label>
                                                <input type="file" required id="passport" name="passport"
                                                    class="fileBtnupload" accept="image/*">
                                                <img src="" alt="passport" class="d-none view_img"
                                                    title="Click to view uploaded image">
                                            </div>
                                            <div class="form-group mt-2">

                                                <label class="fieldlabels">Other financial documents, if required:</label>
                                                <input type="file" required name="financial" id="financial"
                                                    class="fileBtnupload" accept="pdf">
                                                    <a href="" target="_blank" id="show_bank_pdf" class="d-none">
                                                        <img src="{{ asset('assets/images/pdfIcon.png') }}" alt="show_bank_pdf"
                                                            class="show_bank_pdf">
                                                    </a>
                                            </div>

                                            <div class="form-group mt-2">

                                                <label class="fieldlabels">Salary slip as per occupation:</label>
                                                <input type="file" required id="salary" name="salary"
                                                    class="fileBtnupload" accept="image/*">
                                                <img src="" alt="salary" class="d-none view_img"
                                                    title="Click to view uploaded image">
                                            </div>
                                            <div class="form-group mt-2">

                                                <label class="fieldlabels">Work experience documents:</label>
                                                <input type="file" required id="work_exp" name="work_exp"
                                                    class="fileBtnupload" accept="pdf">
                                                    <a href="" target="_blank" id="show_Work" class="d-none">
                                                        <img src="{{ asset('assets/images/pdfIcon.png') }}" alt="show_Work"
                                                            class="show_Work">
                                                    </a>
                                            </div>

                                        </div>
                                        <input type="submit" name="next" id="third_form" class="next action-button"
                                            value="Submit" /> <input type="button" name="previous"
                                            class="previous action-button-previous" value="Previous" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card mt-3">
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
                                                    <h5 class="purple-text text-center">Your loan file submitted successfully</h5>
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
        document.addEventListener('DOMContentLoaded', function() {
            // Check if the current URL matches the desired route
            if (window.location.pathname === '/user/dashboard') {
                // Get the element you want to add the class to
                var dashboardElement = document.getElementById('mainCont');

                // Add the desired class to the element
                dashboardElement.classList.add('user_main');
            }
        });
    </script>

    @php
        // echo '<pre>'; print_r(isset($data['loan_app']) ? (!empty($data['loan_app'][0]->id) ? $data['loan_app'][0]->id : 0) : 0); echo '<pre>'; die();
    @endphp
    <script>
        let EditedLoanId =
            {{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->id : 0) : 0 }}
        console.log(EditedLoanId);
    </script>
    <script src="{{ asset('assets/js/pages/loan_application.js') }}"></script>
@endsection
