@extends('layouts.spacedime')
@section('title','contact us')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="row">
            <div class="col-12 mx-auto text-center my-auto cont">
                <h1 class="mt-5">Get in touch</h1>
                <hr>
            </div>
        </div>

    </section>

    <section >
        <div class="row  justify-content-center mb-5 bg-light">
                <div class="col-md-10 mb-md-5">
                    <form action="#" class="bg-light p-5 contact-form">
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <input type="text" class="form-control" placeholder="Your Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                    <h2 class="text-center mt-5">If you got any questions please do not hesitate to send us a message</h2>
                </div>
            </div>
            <div class="row d-flex mb-5 contact-info justify-content-center">
                <div class="col-md-8">
                    <div class="row mb-5">
                        <div class="col-md-4 text-center py-4">
                            <div class="icon">
                                <span class="fa fa-map"></span>
                            </div>
                            <p><span>Address:</span> </p>
                        </div>
                        <div class="col-md-4 text-center border-height py-4">
                            <div class="icon">
                                <span class="fa fa-phone"></span>
                            </div>
                            <p><span>Phone:</span> <a href="tel://1234567920">+254 707 992 865</a></p>
                        </div>
                        <div class="col-md-4 text-center py-4">
                            <div class="icon">
                                <span class="fa fa-paper-plane"></span>
                            </div>
                            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@spacedime.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center m-5">
                <div class="col-12">
                    <div id="map" class="bg-white"></div>
                </div>
            </div>

    </section>
@endsection
