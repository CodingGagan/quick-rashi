@extends('includes.admin.default')

@section('content')
    <div class="main-content">
        <div class="main-content-inner" id="mainCont">
            <section class="agent-details">
                <div class="container">
                    <h2 class="mb-3">Lead Details</h2>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="true">User
                                Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="account-tab" data-bs-toggle="tab" data-bs-target="#account"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Account
                                Information</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal"
                                type="button" role="tab" aria-controls="personal" aria-selected="false">Personal
                                Information</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="document-tab" data-bs-toggle="tab" data-bs-target="#documents"
                                type="button" role="tab" aria-controls="documents" aria-selected="false">User
                                Documents</button>
                        </li>
                    </ul>
                    <div class="tab-content mt-2" id="myTabContent">
                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            <div class="ad-left-wrap">
                                <img src="{{ asset($data['document'][0]->photo) }}" alt="Agent Details" />
                                <h3 class="add-name">{{ $data['user'][0]->firstname }}</h3>
                                {{-- <p class="add-prof">Brooklyn Agent</p> --}}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">

                            <div class="ad-right-wrap">
                                <div class="w-60">
                                    <h2 class="add-name mb-4">Account Information</h2>


                                    <p class="add-prof mb-2"><b>Loan Amount</b> : {{ $data['loan'][0]->amount }}</p>
                                    <p class="add-prof mb-2"><b>Loan Type</b> : {{ $data['loan_type'][0]->name }}</p>
                                    <p class="add-prof mb-2"><b>Current Address</b> : {{ $data['loan'][0]->current_add }}
                                    </p>
                                    <p class="add-prof mb-2">
                                        <b>Current Landmark</b> : {{ $data['loan'][0]->current_landmark }}
                                    </p>
                                    <p class="add-prof mb-2"><b>Current Country</b> : India</p>
                                    <p class="add-prof mb-2"><b>Current State</b> :
                                        {{ $data['current_country'][0]->city_name }}</p>
                                    <p class="add-prof mb-2"><b>Current City</b> :
                                        {{ $data['current_country'][0]->state_name }}</p>
                                    <p class="add-prof mb-2"><b>Current Pincode</b> :
                                        {{ $data['loan'][0]->current_pincode }}</p>
                                    <p class="add-prof mb-2">
                                        <b>Current Residence</b> : {{ $data['loan'][0]->current_residence }}
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                            <div class="ad-right-wrap">
                                <h2 class="add-name mb-4">Personal Information</h2>
                                <div class="agent-contact-box">
                                    <div class="icon-box">
                                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                                            aria-hidden="true" viewBox="0 0 24 24" data-testid="PersonIcon">
                                            <path
                                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="contact-info">
                                        <p>Contact No:- {{ $data['second_form'][0]->contact }}</p>
                                        <p>Alternate Contact No:- {{ $data['second_form'][0]->alt_contact }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="document-tab">
                            <div class="ad-right-wrap">
                                <h2 class="add-name mb-4">User Documents</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="agent-contact-box">
                                            {{-- <div class="icon-box">
                                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv"
                                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                    data-testid="PersonIcon">
                                                    <path
                                                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                                                    </path>
                                                </svg>
                                            </div> --}}
                                            <div class="contact-info">
                                                <p class="mb-5">Bank Statement:-
                                                    <a target="_blank" href="/{{ $data['document'][0]->bank }}"> <img
                                                            src="{{ asset('admin_assets/Images/download.png') }}"
                                                            alt="" class="lead_info_img" /></a>
                                                </p>
                                                <p class="mb-5">Other Documents:-
                                                    <a target="_blank" href="/{{ $data['document'][0]->financial_doc }}">
                                                        <img src="{{ asset('admin_assets/Images/download.png') }}"
                                                            alt="" class="lead_info_img" />
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="agent-contact-box">
                                            {{-- <div class="icon-box">
                                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv"
                                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                    data-testid="NextWeekIcon">
                                                    <path
                                                        d="M20 7h-4V5c0-.55-.22-1.05-.59-1.41C15.05 3.22 14.55 3 14 3h-4c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zM10 5h4v2h-4V5zm1 13.5-1-1 3-3-3-3 1-1 4 4-4 4z">
                                                    </path>
                                                </svg>
                                            </div> --}}
                                            <div class="contact-info">
                                                <p class="mb-5">Adhar card front:- <img
                                                        src="{{ asset($data['document'][0]->adhar_card_front) }}"
                                                        alt="" class="lead_info_img" /></p>
                                                <p>Adhar card back:- <img
                                                        src="{{ asset($data['document'][0]->adhar_card_back) }}"
                                                        alt="" class="lead_info_img" /></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-lg-6">
                                        <div class="agent-contact-box">
                                            {{-- <div class="icon-box">
                                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv"
                                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                    data-testid="NextWeekIcon">
                                                    <path
                                                        d="M20 7h-4V5c0-.55-.22-1.05-.59-1.41C15.05 3.22 14.55 3 14 3h-4c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zM10 5h4v2h-4V5zm1 13.5-1-1 3-3-3-3 1-1 4 4-4 4z">
                                                    </path>
                                                </svg>
                                            </div> --}}
                                            <div class="contact-info">
                                                <p class="mb-5"><span class="mr-5">Salary Slip:-</span> <img
                                                        src="{{ asset($data['document'][0]->salary_slip) }}"
                                                        alt="" class="lead_info_img" /></p>
                                                <p>Work Experinece:-
                                                    <a target="_blank" href="/{{ $data['document'][0]->experience }}">
                                                        <img src="{{ asset('admin_assets/Images/ScreenShot2022-04-26at10.45.59AM-aab9d8741c8f4ee1aff95f057ca2ab3a.png') }}"
                                                            alt="" class="lead_info_img" />
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="agent-contact-box">
                                            {{-- <div class="icon-box">
                                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv"
                                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                    data-testid="NextWeekIcon">
                                                    <path
                                                        d="M20 7h-4V5c0-.55-.22-1.05-.59-1.41C15.05 3.22 14.55 3 14 3h-4c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zM10 5h4v2h-4V5zm1 13.5-1-1 3-3-3-3 1-1 4 4-4 4z">
                                                    </path>
                                                </svg>
                                            </div> --}}
                                            <div class="contact-info">
                                             
                                                <p class="mb-5"><span class="custom_mrgpanCard">Pan card:-</span> <img
                                                    src="{{ asset($data['document'][0]->pan_card) }}" alt=""
                                                    class="lead_info_img" /></p>
                                                <p><span class="mr-5">User Image:-</span>  
                                                    <a target="_blank" href="/{{ $data['document'][0]->photo }}">
                                                        <img src="{{ asset($data['document'][0]->photo) }}"
                                                            alt="" class="lead_info_img" />
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
