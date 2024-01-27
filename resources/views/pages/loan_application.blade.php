@extends('layout.default')

@section('content')
    <link rel="stylesheet" href="{{ asset('admin_assets/css/main.css') }}">
    <div class="main-content">
        <div class="main-content-inner" id="mainCont">
            <h2>Apply Now.</h2>
            <div class="steps_tab">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-11 col-sm-10 col-md-10 col-lg-8 col-xl-8 text-center p-0 mt-3 mb-2">
                            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">

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
                                                    <h2 class="fs-title">Account Information:</h2>
                                                </div>
                                                <div class="col-5">
                                                    <h2 class="steps">Step 1 - 4</h2>
                                                </div>
                                            </div> <label class="fieldlabels">Loan Amount: *</label> <input type="number"
                                                name="loan_amount" placeholder="Enter Loan Amount"
                                                value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->amount : '') : '' }}"
                                                required />

                                            <label class="fieldlabels">Loan
                                                Type: *</label>
                                            @php
                                                $loan_type = isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->loan_type : 0) : 0;
                                            @endphp
                                            <select class="form-control" name="loan_type" id="loan_type" required>
                                                <option {{ $loan_type == 0 ? 'selected' : '' }} value="0" disabled>
                                                    Select Loan Type</option>
                                                <option {{ $loan_type == 1 ? 'selected' : '' }} value="1">Abroad
                                                    Education Loan</option>
                                                <option {{ $loan_type == 2 ? 'selected' : '' }} value="2">Business Loan
                                                </option>
                                                <option {{ $loan_type == 3 ? 'selected' : '' }} value="3">Personal Loan
                                                </option>
                                                <option {{ $loan_type == 4 ? 'selected' : '' }} value="4">Domestic
                                                    Education Loan</option>
                                            </select>

                                            <div id="current_address">
                                                <label class="fieldlabels">Current Address: *</label>
                                                <input
                                                    value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->current_add : '') : '' }}"
                                                    type="text" name="current_address" placeholder="" required />
                                                <label class="fieldlabels">Current Address Line 2: *</label>
                                                <input
                                                    value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->current_add_extra : '') : '' }}"
                                                    type="text" name="current_address_2" placeholder="" required />
                                                <label class="fieldlabels">Current Landmark: *</label>
                                                <input
                                                    value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->current_landmark : '') : '' }}"
                                                    type="text" name="current_landmark" placeholder="" required />
                                                <label class="fieldlabels">Current Country: *</label>
                                                <select name="current_country" id="current_country" class="form-control"
                                                    required>
                                                    <option value="0" disabled>Select Country</option>
                                                    <option value="105" selected>India</option>
                                                </select><br />
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
                                                @php
                                                    $current_city_selected = isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->current_city : '') : '';
                                                @endphp
                                                <label class="fieldlabels">Current City: *</label>
                                                <select name="current_city" class="form-control" required id="current_city">
                                                    @if (isset($data['loan_app']) && !empty($data['loan_app'][0]))
                                                        @foreach ($data['cities'] as $city)
                                                            <option
                                                                {{ $current_city_selected == $city->id ? 'selected' : '' }}
                                                                value='{{ $city->id }}'>{{ $city->city }}
                                                            </option>
                                                        @endforeach
                                                    @endif

                                                </select><br />
                                                <label class="fieldlabels">Current Pincode: *</label>
                                                <input
                                                    value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->current_pincode : '') : '' }}"
                                                    type="text" name="current_pincode" placeholder=""
                                                    class="form-control" required />
                                                <label class="fieldlabels">Current Residence: *</label>
                                                <input
                                                    value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->current_residence : '') : '' }}"
                                                    type="text" name="current_residence" placeholder="" required />

                                            </div>

                                            <div class="same_address">
                                                <input type="checkbox" name="same_address_as_current"
                                                    id="same_address_as_current">
                                            </div>

                                            <div id="permanent_address" style="background-color: rgb(197, 197, 197)">
                                                {{-- <div class="head">Permanent Address</div> --}}
                                                <label class="fieldlabels">Permanent Address: *</label>
                                                <input type="text" name="permanent_address" placeholder=""
                                                    value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->per_add : '') : '' }}"
                                                    required />
                                                <label class="fieldlabels">Permanent Address Line 2: *</label>
                                                <input type="text" name="permanent_address_2" placeholder=""
                                                    value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->per_add_extra : '') : '' }}"
                                                    required />
                                                <label class="fieldlabels">Permanent Landmark: *</label>
                                                <input type="text" name="permanent_landmark"
                                                    value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->per_landmark : '') : '' }}"
                                                    placeholder="" required />
                                                <label class="fieldlabels">Permanent Country: *</label>
                                                <select name="permanent_country" id="permanent_country"
                                                    class="form-control" required>
                                                    <option value="0" disabled>Select Country</option>
                                                    <option value="105" selected>India</option>
                                                </select><br />
                                                @php
                                                    $permanent_state_selected = isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->per_state : '') : '';
                                                @endphp
                                                <label class="fieldlabels">Permanent State: *</label>
                                                <select name="permanent_state" id="permanent_state" class="form-control"
                                                    required>
                                                    <option value="0" selected disabled>Select State</option>

                                                    @if (isset($states))
                                                        @foreach ($states as $state)
                                                            <option
                                                                {{ $permanent_state_selected ? ($permanent_state_selected == $state->id ? 'selected' : '') : '' }}
                                                                value="{{ $state->id }}">{{ $state->name }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select><br />
                                                @php
                                                    $permanent_city_selected = isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->per_city : '') : '';
                                                @endphp
                                                <label class="fieldlabels">Permanent City: *</label>
                                                <select name="permanent_city" id="permanent_city" class="form-control"
                                                    required>
                                                    @if (isset($data['loan_app']) && !empty($data['loan_app'][0]))
                                                        @foreach ($data['cities'] as $city)
                                                            <option
                                                                {{ $permanent_city_selected == $city->id ? 'selected' : '' }}
                                                                value='{{ $city->id }}'>{{ $city->city }}
                                                            </option>
                                                        @endforeach
                                                    @endif

                                                </select><br />
                                                <label class="fieldlabels">Permanent Pincode: *</label>
                                                <input type="text" name="permament_pincode"
                                                    value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->per_pincode : '') : '' }}"
                                                    placeholder="" required />
                                                <label class="fieldlabels">Permanent Residence: *</label>
                                                <input type="text" name="permanent_residence"
                                                    value="{{ isset($data['loan_app']) ? (!empty($data['loan_app'][0]) ? $data['loan_app'][0]->per_residence : '') : '' }}"
                                                    placeholder="" required />

                                            </div>

                                        </div> <input type="button" name="next" id="first_form"
                                            class="next action-button" value="Next" />
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
                                            </div>
                                            @php
                                                $work_type_selected = isset($data['second_form']) ? (!empty($data['second_form'][0]) ? $data['second_form'][0]->work_status : 0) : 0;
                                            @endphp
                                            <label class="fieldlabels">Work Status: *</label>
                                            <select name="work_status" id="work_status" class="form-control" required>
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
                                            <label class="fieldlabels">Contact No.:
                                                *</label>
                                            <input type="text" id="contact" name="contact"
                                                placeholder="Contact No."
                                                value="{{ isset($data['second_form']) ? (!empty($data['second_form'][0]) ? $data['second_form'][0]->contact : '') : '' }}"
                                                required />
                                            <label class="fieldlabels">Alternate Contact No.: *</label>
                                            <input type="text" id="alt_contact" name="contact_2"
                                                placeholder="Alternate Contact No."
                                                value="{{ isset($data['second_form']) ? (!empty($data['second_form'][0]) ? $data['second_form'][0]->alt_contact : '') : '' }}"
                                                required />
                                        </div>
                                        <input type="button" name="next" id="second_form" class="next action-button"
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
                                            </div>
                                            <div class="form-group mt-2">

                                                <label class="fieldlabels">Latest 3 month bank statement upto till
                                                    date:</label>
                                                <input type="file" required id="bank_pdf" name="bank_pdf"
                                                    accept="pdf">
                                                <img src="{{ asset('assets/images/pdfIcon.png') }}" alt="bank_pdf"
                                                    class="view_pdf">
                                            </div>
                                            <div class="form-group mt-2">

                                                <label class="fieldlabels">Pan card:</label>
                                                <input type="file" required id="pan_card" name="pan_card"
                                                    accept="image/*">
                                                <img src="" alt="pan_card" class="d-none view_img"
                                                    title="Click to view uploaded image">
                                            </div>

                                            <div class="form-group mt-2">

                                                <label class="fieldlabels">Aadhaar card front:</label>
                                                <input type="file" required id="adhar_card_front" name="adhar_card_front"
                                                    accept="image/*">
                                                <img src="" alt="adhar_card_front" class="d-none view_img"
                                                    title="Click to view uploaded image">
                                            </div>
                                           
                                            <div class="form-group mt-2">

                                                <label class="fieldlabels">Aadhaar card back:</label>
                                                <input type="file" required id="adhar_card_back" name="adhar_card_back"
                                                    accept="image/*">
                                                <img src="" alt="adhar_card_back" class="d-none view_img"
                                                    title="Click to view uploaded image">
                                            </div>

                                            <div class="form-group mt-2">

                                                <label class="fieldlabels">Passport size photograph:</label>
                                                <input type="file" required id="passport" name="passport"
                                                    accept="image/*">
                                                <img src="" alt="passport" class="d-none view_img"
                                                    title="Click to view uploaded image">
                                            </div>
                                            <div class="form-group mt-2">

                                                <label class="fieldlabels">Other financial documents, if required:</label>
                                                <input type="file" required name="financial" id="financial"
                                                    accept="pdf">
                                                <img src="" alt="financial" class="d-none view_img"
                                                    title="Click to view uploaded image">
                                            </div>

                                            <div class="form-group mt-2">

                                                <label class="fieldlabels">Salary slip as per occupation:</label>
                                                <input type="file" required id="salary" name="salary"
                                                    accept="image/*">
                                                <img src="" alt="salary" class="d-none view_img"
                                                    title="Click to view uploaded image">
                                            </div>
                                            <div class="form-group mt-2">

                                                <label class="fieldlabels">Work experience documents:</label>
                                                <input type="file" required id="work_exp" name="work_exp"
                                                    accept="pdf">
                                                <img src="" alt="work_exp" class="d-none view_img"
                                                    title="Click to view uploaded image">
                                            </div>

                                        </div>
                                        <input type="submit" name="next" id="third_form" class="next action-button"
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
