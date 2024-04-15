@extends('layout.default')
@section('content')
    <section class="banner">
        <div class="container ">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">blog - details</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">pages</li>
                                <li class="breadcrumb-item active" aria-current="page">blog details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                        <img src="assets/images/blog_banner.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Blog details start -->
    <section class="blog-details section">
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <div class="gap-4 flex-column">
                        <div class="card card--secondary">
                            <div class="card--secondary__thumb wow fadeInUp" data-wow-duration="0.8s">
                                <img src="{{ asset('/images/'. $blog[0]->image) }}" alt="image">
                            </div>
                            <div class="card--secondary__content">
                                <div class="card--secondary__content-part wow fadeInDown" data-wow-duration="0.8s">
                                    <p class="card--secondary__time mb-4"><span class="gap-6"><i
                                                class="bi bi-person-circle"></i>By Quick Rashi</span><i
                                            class="bi bi-dot"></i>
                                        <span class="gap-6"><i class="bi bi-calendar3"></i>{{ $blog[0]->created_at }}
                                        </span><i class="bi bi-dot"></i><span class="gap-6"></span>
                                    </p>
                                    <h2 class="mb-4">{{ $blog[0]->title }}</h2>
                                  <div>
                                    {!! $blog[0]->description !!}
                                  </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>
    <!-- Blog details end -->
@endsection
