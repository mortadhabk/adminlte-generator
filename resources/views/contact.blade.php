@extends('layouts.master')
@section('content')
       
            <div class="breadcrum-area">
                <div class="container">
                    <div class="breadcrumb">
                        <ul class="list-unstyled">
                            <li><a href="index-1.html">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                        <h1 class="title h2">Contact</h1>
                    </div>
                </div>
                <ul class="shape-group-8 list-unstyled">
                    <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                        <img src="assets/media/others/bubble-9.png" alt="Bubble">
                    </li>
                    <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                        <img src="assets/media/others/bubble-17.png" alt="Bubble">
                    </li>
                    <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                        <img src="assets/media/others/line-4.png" alt="Line">
                    </li>
                </ul>
            </div>
            <!--=====================================-->
            <!--=       Contact  Area Start        =-->
            <!--=====================================-->
            <div class="container">
                @if(session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
                @endif
            </div>
    
            <section class="section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="contact-form-box shadow-box mb--30">
                                <h3 class="title">Contact Me</h3>
                                
                                <form action={{route('contactPost')}} method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name">
                                        <span class="text-danger">{{ $errors->first('name') }}</span>

                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email">
                                        <span class="text-danger">{{ $errors->first('email') }}</span>

                                    </div>
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" class="form-control" name="subject">
                                        <span class="text-danger">{{ $errors->first('subject') }}</span>

                                    </div>
                                    <div class="form-group mb--40">
                                        <label>Message</label>
                                        <textarea name="message" id="contact-message" class="form-control textarea" cols="30" rows="4"></textarea>
                                        <span class="text-danger">{{ $errors->first('message') }}</span>

                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="axil-btn btn-fill-primary btn-fluid btn-primary" >Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 offset-xl-1">
                            <div class="contact-info mb--100 mb_md--30 mt_md--0 mt--150">
                                <h4 class="title">Phone</h4>
                                <p>Our customer care is open from Mon-Fri, 10:00 am to 6:00 pm</p>
                                <h4 class="phone-number"><a href="tel:1234567890">(+33) 7 53 45 28 15</a></h4>
                            </div>
                   
                        </div>
                    </div>
                </div>
                <ul class="list-unstyled shape-group-12">
                    <li class="shape shape-1"><img src="assets/media/others/bubble-2.png" alt="Bubble"></li>
                    <li class="shape shape-2"><img src="assets/media/others/bubble-1.png" alt="Bubble"></li>
                    <li class="shape shape-3"><img src="assets/media/others/circle-3.png" alt="Circle"></li>
                </ul>
            </section>

            <!--=====================================-->
            <!--=       Location  Area Start        =-->
            <!--=====================================-->
            
            @include('inc.Footerarea')
    
@endsection