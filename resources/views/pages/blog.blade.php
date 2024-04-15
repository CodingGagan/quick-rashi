@extends('layout.default')
@section('content')
    <!-- Banner Start -->
    <section class="banner">
        <div class="container ">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">blog</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">pages</li>
                                <li class="breadcrumb-item active" aria-current="page">blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                        <img src="{{asset('assets/images/blog_banner.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Blog start -->
    <section class="blog section">
        <div class="container ">
            <div class="row g-4">
                @if (isset($blog))
                    @foreach ($blog as $item)
                        <div class="col-12 col-md-4 col-xl-6">
                            <div class="card card--secondary wow fadeInUp" data-wow-duration="0.8s">
                                <a href="blog-details.html" class="card--secondary__thumb zoom_effect">
                                    <img src="{{ asset('/images/'.$item->image) }}" alt="image">
                                </a>
                                <div class="card--secondary__content">
                                    <p class="card--secondary__time mb-4"><span class="gap-6"><i
                                                class="bi bi-person-circle"></i>By Quick Rashi</span><i class="bi bi-dot"></i>
                                        <span class="gap-6"><i class="bi bi-calendar3"></i>{{ date('Y-m-d h:i:s', strtotime($item->created_at)) }} </span></p>
                                    <h4><a href="{{ url('blog/detail/'.$item->id) }}">{{ $item->title }}</a></h4>
                                    <p class="mt-4">{{ $item->description }}</p>
                                    <a href="{{ url('blog/detail/'.$item->id) }}" class="mt_32 read_more">Read More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
            {{-- <div class="row">
                <div class="col-12">
                    <nav aria-label="Page navigation" class="nav_pagination wow fadeInUp" data-wow-duration="0.8s">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">
                                <span class="prev-icon"></span>
                            </a></li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link three_dots_box" href="#">
                                <span class="three-dots"> </span></a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">
                                <span class="next-icon"></span>
                            </a></li>
                        </ul>
                    </nav>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- Blog end -->
@endsection
