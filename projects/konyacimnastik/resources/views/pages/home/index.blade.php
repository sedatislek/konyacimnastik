@extends('layouts.app')
@section('title','Anasayfa')
@section('content')
    <div class="custom-container-space bg6 rounded-bottom-4 mb-xxl-5 mb-4">

    <!-- Banner Section Start -->
    <section class="banner-section hero-style5 fix">
        <div class="rounded-top-4 z-1 position-relative">
            <div class="container">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content-version5">
                            <h1 class="mb-30 white-clr wow fadeInUp" data-wow-delay=".6s">
                                Hosting service provide user
                                <span class="fw-normal">with the technology</span>
                            </h1>
                            <p class="white-clr fs-five pb-40">
                                Hosting services provide users with the technology services include provide users
                                with technology and infrastructure
                            </p>
                            <div
                                class="hero-adjust-partner d-flex flex-sm-nowrap flex-wrap align-items-center justify-content-lg-start justify-content-center gap-lg-4 gap-3">
                                <div class="text-center wow fadeInUp" data-wow-delay=".7s">
                                    <a href="about.html"
                                       class="common-btn box-style btn2 p1-bg d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fw-500 white-clr py-3 overflow-hidden rounded100">
                                        Get Started
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                                <div class="trusted-partner-wrap d-flex align-items-center gap-md-3 gap-sm-2 gap-2 justify-content-center wow fadeInUp"
                                     data-wow-delay=".5s">
                                    <div class="partner-inner">
                                        <div class="partner-icon">
                                            <img src="{{ asset('assets/img/banner/partner1.png') }}" alt="img">
                                        </div>
                                        <div class="partner-icon">
                                            <img src="{{ asset('assets/img/banner/partner2.png') }}" alt="img">
                                        </div>
                                        <div class="partner-icon">
                                            <img src="{{ asset('assets/img/banner/partner3.png') }}" alt="img">
                                        </div>
                                        <div class="partner-icon d-center white-bg">
                                                <span class="fs-eight p2-clr fw-500">
                                                    12k+
                                                </span>
                                        </div>
                                    </div>
                                    <span class="fs-seven fw-500 white-clr wow fadeInUp" data-wow-delay=".6s">Tusted
                                            Partner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-thumb5 w-100">
                            <img src="{{ asset('assets/img/banner/hero5-thumb.png') }}" alt="img" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sponsor02 Section Start -->
    <section class="sponsor-section-white fix section-padding">
        <div class="container">
            <div class="swiper sponsor-wrapper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="sponsor-items2">
                            <img src="{{ asset('assets/img/brand/sport-white1.png') }}" alt="img" class="sponsor-text">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-items2">
                            <img src="{{ asset('assets/img/brand/sport-white2.png') }}" alt="img" class="sponsor-text">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-items2">
                            <img src="{{ asset('assets/img/brand/sport-white3.png') }}" alt="img" class="sponsor-text">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-items2">
                            <img src="{{ asset('assets/img/brand/sport-white4.png') }}" alt="img" class="sponsor-text">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-items2">
                            <img src="{{ asset('assets/img/brand/sport-white5.png') }}" alt="img" class="sponsor-text">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-items2">
                            <img src="{{ asset('assets/img/brand/sport-white1.png') }}" alt="img" class="sponsor-text">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-items2">
                            <img src="{{ asset('assets/img/brand/sport-white2.png') }}" alt="img" class="sponsor-text">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-items2">
                            <img src="{{ asset('assets/img/brand/sport-white3.png') }}" alt="img" class="sponsor-text">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- work Section Start -->
    <section class="worke-section fixed-bg4 section-padding fix">
        <div class="container">
            <div class="cont-head text-center pb-50">
                <h2 class="wow fadeInUp white-clr visible-slowly-right" data-wow-delay=".3s">
                    Reliable Hosting for <br> your Success
                </h2>
            </div>
            <div class="row g-md-4 g-3">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="worke-items5 blackbg rounded-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icons d-center rounded-4 p5-bg">
                            <img src="{{ asset('assets/img/icon/work-icon1.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3 class="white-clr mb-sm-4 mb-3">
                                Skyline Servers
                            </h3>
                            <p class="white-clr fs-eight mb-4">
                                Hosting services provide users with the technology and infrastructure needed to make
                                accessible on the These services
                                often include
                            </p>
                            <a href="service-details.html"
                               class="read-more border-0 d-flex align-items-center gap-2 white-clr">
                                Read More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="worke-items5 blackbg rounded-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icons d-center rounded-4 p5-bg">
                            <img src="{{ asset('assets/img/icon/work-icon2.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3 class="white-clr mb-sm-4 mb-3">
                                Cloud Peak Hosting
                            </h3>
                            <p class="white-clr fs-eight mb-4">
                                Hosting services provide users with the technology and infrastructure needed to make
                                accessible on the These services
                                often include
                            </p>
                            <a href="service-details.html"
                               class="read-more border-0 d-flex align-items-center gap-2 white-clr">
                                Read More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="worke-items5 blackbg rounded-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icons d-center rounded-4 p5-bg">
                            <img src="{{ asset('assets/img/icon/work-icon3.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3 class="white-clr mb-sm-4 mb-3">
                                Silver Loom Hosting
                            </h3>
                            <p class="white-clr fs-eight mb-4">
                                Hosting services provide users with the technology and infrastructure needed to make
                                accessible on the These services
                                often include
                            </p>
                            <a href="service-details.html"
                               class="read-more border-0 d-flex align-items-center gap-2 white-clr">
                                Read More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Hosting Section Start -->
    <section class="our-hosting-section fix section-padding">
        <div class="container">
            <div class="row align-items-end justify-content-between g-md-4 g-sm-3 g-2 mb-50">
                <div class="col-lg-7">
                    <h2 class="wow fadeInUp white-clr visible-slowly-right" data-wow-delay=".3s">
                        Unlimited Possibilities <br> with Our Hosting
                    </h2>
                </div>
                <div class="col-lg-5">
                    <p class="pra-cmn fs-six">
                        Hosting services provide users with the technology services often include Hosting services
                        provide users with technology
                        and infrastructure needed to make accessible
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-md-6">
                    <div class="hosting-thumb-wrapper">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/global/our-hosting.png') }}" alt="img">
                        </div>
                        <div class="hosting-count">
                            <div class="d-flex align-items-center mb-2">
                                <span class="count">1</span>
                                <span class="count-text">k+</span>
                            </div>
                            <span class="fs-seven white-clr">Clients</span>
                        </div>
                        <ul class="hosting-cont-info d-grid gap-xl-4 gap-lg-3 gap-2">
                            <li class="fs-seven fw-500 white-clr">
                                WebWise Hosting Solutions
                            </li>
                            <li class="d-flex align-items-center gap-2 white-clr fs-eight">
                                <i class="fa-solid fa-check"></i> hosting-thumb-wrapper
                            </li>
                            <li class="d-flex align-items-center gap-2 white-clr fs-eight">
                                <i class="fa-solid fa-check"></i> IT Excellence, Every Step
                            </li>
                            <li class="d-flex align-items-center gap-2 white-clr fs-eight">
                                <i class="fa-solid fa-check"></i> The Future is Now
                            </li>
                            <li class="d-flex align-items-center gap-2 white-clr fs-eight">
                                <i class="fa-solid fa-check"></i> Swift Tech Services Digita
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="hosting-information-cloude">
                        <div class="hosting-info-items wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon/hos1.png') }}" alt="img">
                            </div>
                            <div class="cont">
                                    <span class="fs-seven fw-semibold white-clr d-block mb-2">
                                        Cloud Peak Hosting
                                    </span>
                                <p class="pra-cmn fs-eight">
                                    Hosting services provide users with the technology services often include
                                    Hosting services provide users with technology
                                    and infrastructure needed
                                </p>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="hosting-info-items wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon/hos2.png') }}" alt="img">
                            </div>
                            <div class="cont">
                                    <span class="fs-seven fw-semibold white-clr d-block mb-2">
                                        Hosting for Online Excellence
                                    </span>
                                <p class="pra-cmn fs-eight">
                                    Hosting services provide users with the technology services often include
                                    Hosting services provide users with technology
                                    and infrastructure needed
                                </p>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="hosting-info-items wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon/hos3.png') }}" alt="img">
                            </div>
                            <div class="cont">
                                    <span class="fs-seven fw-semibold white-clr d-block mb-2">
                                        Hosting for Exceptional Websites
                                    </span>
                                <p class="pra-cmn fs-eight">
                                    Hosting services provide users with the technology services often include
                                    Hosting services provide users with technology
                                    and infrastructure needed
                                </p>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="btn-area mt-2">
                            <a href="about.html"
                               class="common-btn box-style p1-hover blackbg d-inline-flex align-items-center gap-xxl-2 gap-2 fw-500 white-clr py-3 overflow-hidden rounded100">
                                Learn More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section Start -->
    <section class="pricing-section fixed-bg4 section-padding fix">
        <div class="container">
            <h2 class="wow fadeInUp text-center mb-50 white-clr visible-slowly-right" data-wow-delay=".3s">
                Our Oricing Plane
            </h2>
            <div class="row g-4">
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay=".4s">
                    <div class="pricing-items style5 rounded-4 blackbg">
                        <h3 class="white-clr text-center mb-lg-3 mb-2">
                            Normal
                        </h3>
                        <h2 class="text-center white-clr mb-4">
                            $25 <span>Month</span>
                        </h2>
                        <ul class="price-list d-grid gap-xl-3 gap-2 mb-4 pb-lg-3">
                            <li class="d-flex align-items-center gap-2 white-clr">
                                <i class="fa-solid fa-angles-right white-clr"></i> Mistakes To Avoid
                            </li>
                            <li class="line"></li>
                            <li class="d-flex align-items-center gap-2 white-clr">
                                <i class="fa-solid fa-angles-right white-clr"></i> Winning for Your Startup
                            </li>
                            <li class="line"></li>
                            <li class="d-flex align-items-center gap-2 white-clr">
                                <i class="fa-solid fa-angles-right white-clr"></i> Making Every Moment
                                Special
                            </li>
                            <li class="line"></li>
                            <li class="d-flex align-items-center gap-2 white-clr">
                                <i class="fa-solid fa-angles-right white-clr"></i> Your Event, Your Memories
                            </li>
                        </ul>
                        <a href="contact.html"
                           class="common-btn btn1 box-style d-flex justify-content-center align-items-center gap-xxl-2 gap-2 border fw-500 white-clr overflow-hidden rounded100">
                            Get Now
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay=".6s">
                    <div class="pricing-items active style5 rounded-4 blackbg">
                        <h3 class="white-clr text-center mb-lg-3 mb-2">
                            Basic Plan
                        </h3>
                        <h2 class="text-center white-clr mb-4">
                            $19 <span>Month</span>
                        </h2>
                        <ul class="price-list d-grid gap-xl-3 gap-2 mb-4 pb-lg-3">
                            <li class="d-flex align-items-center gap-2 white-clr">
                                <i class="fa-solid fa-angles-right white-clr"></i> Mistakes To Avoid
                            </li>
                            <li class="line"></li>
                            <li class="d-flex align-items-center gap-2 white-clr">
                                <i class="fa-solid fa-angles-right white-clr"></i> Winning for Your Startup
                            </li>
                            <li class="line"></li>
                            <li class="d-flex align-items-center gap-2 white-clr">
                                <i class="fa-solid fa-angles-right white-clr"></i> Making Every Moment
                                Special
                            </li>
                            <li class="line"></li>
                            <li class="d-flex align-items-center gap-2 white-clr">
                                <i class="fa-solid fa-angles-right white-clr"></i> Your Event, Your Memories
                            </li>
                        </ul>
                        <a href="contact.html"
                           class="common-btn btn1 box-style d-flex justify-content-center align-items-center gap-xxl-2 gap-2 border fw-500 white-clr overflow-hidden rounded100">
                            Get Now
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay=".7s">
                    <div class="pricing-items style5 rounded-4 blackbg">
                        <h3 class="white-clr text-center mb-lg-3 mb-2">
                            Hard Plan
                        </h3>
                        <h2 class="text-center white-clr mb-4">
                            $30 <span>Month</span>
                        </h2>
                        <ul class="price-list d-grid gap-xl-3 gap-2 mb-4 pb-lg-3">
                            <li class="d-flex align-items-center gap-2 white-clr">
                                <i class="fa-solid fa-angles-right white-clr"></i> Mistakes To Avoid
                            </li>
                            <li class="line"></li>
                            <li class="d-flex align-items-center gap-2 white-clr">
                                <i class="fa-solid fa-angles-right white-clr"></i> Winning for Your Startup
                            </li>
                            <li class="line"></li>
                            <li class="d-flex align-items-center gap-2 white-clr">
                                <i class="fa-solid fa-angles-right white-clr"></i> Making Every Moment
                                Special
                            </li>
                            <li class="line"></li>
                            <li class="d-flex align-items-center gap-2 white-clr">
                                <i class="fa-solid fa-angles-right white-clr"></i> Your Event, Your Memories
                            </li>
                        </ul>
                        <a href="contact.html"
                           class="common-btn btn1 box-style d-flex justify-content-center align-items-center gap-xxl-2 gap-2 border fw-500 white-clr overflow-hidden rounded100">
                            Get Now
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-4 space-top justify-content-center">
                <div class="col-xl-4 wow fadeInUp" data-wow-delay=".4s">
                    <div class="hosting-connect-item text-xl-start text-center mb-xl-0 mb-3">
                        <div class="section-title">
                            <h2 class="wow fadeInUp white-clr visible-slowly-right mb-xl-3 mb-2"
                                data-wow-delay=".3s">
                                Navigating is the Digital Frontier
                            </h2>
                            <p class="fs-five mb-4 pb-xxl-3 wow fadeInLeft white-clr">
                                Hosting services provide users wit technology and infrastructure needed to make
                            </p>
                            <a href="service.html"
                               class="common-btn box-style p1-hover blackbg d-inline-flex align-items-center gap-xxl-2 gap-2 fw-500 white-clr py-3 overflow-hidden rounded100">
                                View More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay=".4s">
                    <div class="hosting-connect-item">
                        <a href="service-details.html"
                           class="text-area d-flex justify-content-between gap-2 align-items-end mb-xl-4 mb-lg-3 mb-2">
                            <div class="cont">
                                    <span class="d-block fs-eight white-clr">
                                        Skyline Servers
                                    </span>
                                <h3 class="white-clr">
                                    Zenith Hosting Solutions
                                </h3>
                            </div>
                            <span class="arrows rounded-circle d-center">
                                    <img src="{{ asset('assets/img/icon/arrow-right-white.png') }}" alt="img">
                                </span>
                        </a>
                        <a href="service-details.html" class="d-block thumb w-100 rounded-4 overflow-hidden">
                            <img src="{{ asset('assets/img/global/hosting-c1.png') }}" alt="img"
                                 class="rounded-4 w-100 overflow-hidden">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay=".4s">
                    <div class="hosting-connect-item">
                        <a href="service-details.html"
                           class="text-area d-flex justify-content-between gap-2 align-items-end mb-xl-4 mb-lg-3 mb-2">
                            <div class="cont">
                                    <span class="d-block fs-eight white-clr">
                                        Skyline Servers
                                    </span>
                                <h3 class="white-clr">
                                    Web Wise Hosting Solutions
                                </h3>
                            </div>
                            <span class="arrows rounded-circle d-center">
                                    <img src="{{ asset('assets/img/icon/arrow-right-white.png') }}" alt="img">
                                </span>
                        </a>
                        <a href="service-details.html" class="d-block thumb w-100 rounded-4 overflow-hidden">
                            <img src="{{ asset('assets/img/global/hosting-c2.png') }}" alt="img"
                                 class="rounded-4 w-100 overflow-hidden">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sponsor Section Start -->
    <section class="sponsor-section sponsor-version5 fix">
        <div class="swiper sponsor-wrapper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="sponsor-items1 d-flex align-items-center gap-4">
                        <img src="{{ asset('assets/img/testimonial/sponsor-text1.png') }}" alt="img" class="sponsor-text">
                        <img src="{{ asset('assets/img/testimonial/sponsor-icon1.png') }}" alt="img" class="sponsor-icon">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-items1 d-flex align-items-center gap-4">
                        <img src="{{ asset('assets/img/testimonial/sponsor-text2.png') }}" alt="img" class="sponsor-text">
                        <img src="{{ asset('assets/img/testimonial/sponsor-icon2.png') }}" alt="img" class="sponsor-icon">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-items1 d-flex align-items-center gap-4">
                        <img src="{{ asset('assets/img/testimonial/sponsor-text3.png') }}" alt="img" class="sponsor-text">
                        <img src="{{ asset('assets/img/testimonial/sponsor-icon3.png') }}" alt="img" class="sponsor-icon">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-items1 d-flex align-items-center gap-4">
                        <img src="{{ asset('assets/img/testimonial/sponsor-text4.png') }}" alt="img" class="sponsor-text">
                        <img src="{{ asset('assets/img/testimonial/sponsor-icon3.png') }}" alt="img" class="sponsor-icon">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section Start -->
    <section class="contact-section05 fix section-padding">
        <div class="container">
            <div class="row justify-content-center mb-lg-5 mb-4">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title text-center">
                        <h2 class="wow fadeInUp white-clr visible-slowly-right mb-sm-2 mb-1" data-wow-delay=".3s">
                            Contact With Us
                        </h2>
                        <p class="fs-five wow fadeInLeft white-clr">
                            Hosting services provide users with the technology infrastructure needed to make
                            websites accessible on the internet
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4 align-items-center justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <form action="#" class="get-inform get-inform-black h-100 style4 blackbg rounded-4">
                        <div class="row g-xl-4 g-3">
                            <h3 class="white-clr fs-50 visible-slowly-right mb-lg-3 mb-md-2 mb-2 fw-500">
                                Feel Free To Write
                            </h3>
                            <div class="col-lg-12">
                                <input type="text" placeholder="Your Name">
                            </div>
                            <div class="col-lg-12">
                                <input type="email" placeholder="Your Email">
                            </div>
                            <div class="col-lg-12">
                                <textarea name="write" rows="3" placeholder="Message here..."></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="button"
                                        class="common-btn box-style p2-bg d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fw-500 white-clr py-3 overflow-hidden rounded100">
                                    Sent A Message Now
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact-thumb5 w-100 reveal-left ps-xl-4">
                        <img src="{{ asset('assets/img/contact/contact-thumb5.png') }}" alt="img" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faq Section Start -->
    <section class="faq-section5 fixed-bg4 section-padding fix">
        <div class="container">
            <div class="section-title text-center mb-lg-5 mb-4">
                <h2 class="wow fadeInUp white-clr visible-slowly-right mb-sm-3 mb-2" data-wow-delay=".3s">
                    Ask Some Question
                </h2>
                <p class="fs-five wow fadeInLeft white-clr">
                    Hosting services provide users with the technology and infrastructure needed to make websites
                    accessible on the
                    internet. These services often include server space, bandwidth, and support
                </p>
            </div>
            <div class="accordion custom-accordion accordion-style5" id="accordionExample">
                <div class="line"></div>
                <div class="accordion-item active bg-transparent wow fadeInUp" data-wow-delay=".3s">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button bg-transparent" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What security measures do you have in place to protect my website?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body pt-1">
                            <p class="fs-eight">
                                Hosting services provide users with the technology and infrastructure needed to make
                                websites accessible on the
                                internet. These services often include server space, bandwidth, and support to
                                ensure websites operate smoothly and
                                securely Hosting services provide users with the technology and infrastructure
                                needed to make websites
                            </p>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
                <div class="accordion-item bg-transparent wow fadeInUp" data-wow-delay=".5s">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button bg-transparent collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                            Can I upgrade my hosting plan if my website grows?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body pt-1">
                            <p class="fs-eight pra">
                                Hosting services provide users with the technology and infrastructure needed to make
                                websites accessible on the
                                internet. These services often include server space, bandwidth, and support to
                                ensure websites operate smoothly and
                                securely Hosting services provide users with the technology and infrastructure
                                needed to make websites
                            </p>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
                <div class="accordion-item bg-transparent wow fadeInUp" data-wow-delay=".6s">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button bg-transparent collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                            What is your uptime guarantee for hosting services?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body pt-1">
                            <p class="fs-eight pra">
                                Hosting services provide users with the technology and infrastructure needed to make
                                websites accessible on the
                                internet. These services often include server space, bandwidth, and support to
                                ensure websites operate smoothly and
                                securely Hosting services provide users with the technology and infrastructure
                                needed to make websites
                            </p>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
                <div class="accordion-item bg-transparent wow fadeInUp" data-wow-delay=".6s">
                    <h2 class="accordion-header" id="headingThree001">
                        <button class="accordion-button bg-transparent collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree001" aria-expanded="false"
                                aria-controls="collapseThree001">
                            How often do you back up my website data?
                        </button>
                    </h2>
                    <div id="collapseThree001" class="accordion-collapse collapse" aria-labelledby="headingThree001"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body pt-1">
                            <p class="fs-eight pra">
                                Hosting services provide users with the technology and infrastructure needed to make
                                websites accessible on the
                                internet. These services often include server space, bandwidth, and support to
                                ensure websites operate smoothly and
                                securely Hosting services provide users with the technology and infrastructure
                                needed to make websites
                            </p>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
            </div>
            <div class="text-center mt-sm-5 mt-4">
                <a href="contact.html"
                   class="common-btn box-style p1-hover p1-bg d-inline-flex align-items-center gap-xxl-2 gap-2 fw-500 white-clr py-3 overflow-hidden rounded100">
                    Contact Us
                    <i class="fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Start -->
    <section class="testimonial-section space-top">
        <div class="container">
            <div class="testimonail-wrapper-style1 p-0 bg-transparent">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-8">
                        <div class="swiper testimonial-slider1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-items5 blackbg rounded-4 border-0">
                                        <div
                                            class="naming-area d-sm-flex d-grid align-items-center justify-content-sm-between justify-content-center gap-3 flex-wrap">
                                            <div
                                                class="naming-thumb-inner d-sm-flex d-grid flex-sm-nowrap flex-wrap align-items-center gap-3">
                                                <img src="{{ asset('assets/img/testimonial/confident.png') }}" alt="img"
                                                     class="rounded-circle danne-author">
                                                <div class="cont">
                                                    <h3 class="white-clr mb-1">
                                                        Dianne Russell
                                                    </h3>
                                                    <span class="fs-eight white-clr d-block">President of
                                                            Sales</span>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/img/testimonial/quote4.png') }}" alt="img" class="quote5">
                                        </div>
                                        <p class="pragraphs">
                                            Info Hosting services provide users with the technology and
                                            infrastructure needed to make websites accessible on the a
                                            internet. These services often include server bandwidth, and support to
                                            ensure websites operate smoothly they can do it
                                            securelydesign, development implementation
                                        </p>
                                        <div
                                            class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
                                            <div class="array-button verstion-2 gap-xxl-4 gap-3 d-flex">
                                                <button class="array-prev d-center">
                                                    <i class="fa-solid fa-arrow-left p2-clr"></i>
                                                </button>
                                                <button class="array-next active d-center">
                                                    <i class="fa-solid fa-arrow-right p2-clr"></i>
                                                </button>
                                            </div>
                                            <div
                                                class="d-flex justify-content-md-start justify-content-center align-items-center gap-1">
                                                <i class="fa-solid fa-star fs-six star-clr"></i>
                                                <i class="fa-solid fa-star fs-six star-clr"></i>
                                                <i class="fa-solid fa-star fs-six star-clr"></i>
                                                <i class="fa-solid fa-star fs-six star-clr"></i>
                                                <i class="fa-solid fa-star fs-six star-clr"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4">
                        <div class="testimonial-big5">
                            <img src="{{ asset('assets/img/testimonial/testimonial-thumb5.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hosting Section Start -->
    <section class="hosting-exprience fix section-padding">
        <div class="container">
            <div class="hosting-exprience-wrap p5-bg rounded-4">
                <div class="section-title text-center">
                    <h2 class="wow fadeInUp black visible-slowly-right mb-30" data-wow-delay=".3s">
                        Elevate Your Online Experience with Our Hosting
                    </h2>
                    <a href="contact.html"
                       class="common-btn box-style p1-hover d-inline-flex align-items-center gap-xxl-2 gap-2 fw-500 black-clr py-3 overflow-hidden mb-3 rounded-5">
                        Contact Us
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                    <p class="fs-seven black-clr">
                        It only takes 2 minutes to complete.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section Start -->
    <section class="blog-section fixed-bg4 space-top space-bottom fix position-relative">
        <div class="container">
            <div
                class="d-flex gap-3 flex-md-nowrap flex-wrap align-items-end justify-content-sm-between justify-content-center mb-50">
                <h2 class="wow fadeInUp text-center text-sm-start text-center white-clr visible-slowly-right"
                    data-wow-delay=".3s">
                    Our Latest Blog <br> And News
                </h2>
                <a href="blog.html"
                   class="common-btn box-style p1-hover p1-bg d-inline-flex align-items-center gap-xxl-2 gap-2 fw-500 white-clr py-3 overflow-hidden rounded100">
                    View All Blog
                    <i class="fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
            <div class="row g-xl-4 g-sm-3 g-4">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="blog-items style2 border-0 d-grid rounded-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="thumb rounded-4 position-relative w-100">
                            <img src="{{ asset('assets/img/blog/blog-grid1.jpg') }}" alt="img" class="w-100">
                        </div>
                        <div class="content pt-4">
                            <div
                                class="admin-area d-flex justify-content-start align-items-center gap-xxl-4 gap-3 mb-20">
                                <div class="d-flex align-items-center gap-xxl-2 gap-2 fs-eight white-clr">
                                    <i class="fa-solid fa-calendar-days white-clr"></i>
                                    By admin
                                </div>
                                <div class="d-flex align-items-center gap-xxl-2 gap-2 fs-eight white-clr">
                                    <i class="fa-solid fa-user white-clr"></i>
                                    October 19, 2022
                                </div>
                            </div>
                            <h3 class="mb-4">
                                <a href="blog-details.html" class="white-clr">
                                    Navigating the Digital Frontier
                                    Transforming Ideas
                                </a>
                            </h3>
                            <a href="blog-details.html"
                               class="common-btn box-style p1-hover blackbg d-inline-flex align-items-center gap-xxl-2 gap-2 fw-500 white-clr py-3 overflow-hidden rounded100">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="blog-items style2 border-0 d-grid rounded-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="thumb rounded-4 position-relative w-100">
                            <img src="{{ asset('assets/img/blog/blog-grid2.jpg') }}" alt="img" class="w-100">
                        </div>
                        <div class="content pt-4">
                            <div
                                class="admin-area d-flex justify-content-start align-items-center gap-xxl-4 gap-3 mb-20">
                                <div class="d-flex align-items-center gap-xxl-2 gap-2 fs-eight white-clr">
                                    <i class="fa-solid fa-calendar-days white-clr"></i>
                                    By admin
                                </div>
                                <div class="d-flex align-items-center gap-xxl-2 gap-2 fs-eight white-clr">
                                    <i class="fa-solid fa-user white-clr"></i>
                                    October 19, 2022
                                </div>
                            </div>
                            <h3 class="mb-4">
                                <a href="blog-details.html" class="white-clr">
                                    Your Website Deserves Our Top HostingExpert Hosting
                                </a>
                            </h3>
                            <a href="blog-details.html"
                               class="common-btn box-style p1-hover blackbg d-inline-flex align-items-center gap-xxl-2 gap-2 fw-500 white-clr py-3 overflow-hidden rounded100">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="blog-items style2 border-0 d-grid rounded-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="thumb rounded-4 position-relative w-100">
                            <img src="{{ asset('assets/img/blog/blog-grid4.png') }}" alt="img" class="w-100">
                        </div>
                        <div class="content pt-4">
                            <div
                                class="admin-area d-flex justify-content-start align-items-center gap-xxl-4 gap-3 mb-20">
                                <div class="d-flex align-items-center gap-xxl-2 gap-2 fs-eight white-clr">
                                    <i class="fa-solid fa-calendar-days white-clr"></i>
                                    By admin
                                </div>
                                <div class="d-flex align-items-center gap-xxl-2 gap-2 fs-eight white-clr">
                                    <i class="fa-solid fa-user white-clr"></i>
                                    October 19, 2022
                                </div>
                            </div>
                            <h3 class="mb-4">
                                <a href="blog-details.html" class="white-clr">
                                    Hosting for Exceptional Websites Services Seamless
                                </a>
                            </h3>
                            <a href="blog-details.html"
                               class="common-btn box-style p1-hover blackbg d-inline-flex align-items-center gap-xxl-2 gap-2 fw-500 white-clr py-3 overflow-hidden rounded100">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>
@endsection
