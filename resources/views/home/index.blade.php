@extends('layout.main')

@section('content')
    <div class="text-center mt-5">
        <div class="row ">
            <div class="col ">
                <h1>Change Your Life Here</h1>
                <p>You have skill? or need someone skill? offer and find it here. </p>

                <div class="row">
                    <div class="d-flex justify-content-center ">
                        <div class="col-10   col-md-12 col-lg-6">
                            <div class="input-group mb-3 ">
                                <input type="text" class="form-control form-rounded" placeholder="Recipient's username"
                                       aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-danger form-rounded" type="button" id="button-addon2">Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-center" style="z-index: -1; ">
                <div class="hero-image2 text-center"></div>
                <div class="hero-image text-center"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-6">
            <div class="d-flex flex-column justify-content-center  h-100" style="padding-right: 5rem">
                <div style="text-align: right">
                    <h1>Find Your</h1>
                    <h1>Perfect Service</h1>
                    <h1>with <img src="{{asset('assets/frendcer.png')}}" alt=""></h1>
                </div>
                <div style="text-align: right">
                    <p class="" style="text-align: right">we have been working with some</p>
                    <p class="text-right" style="text-align: right">awesome and professional freelancer.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="row ">
                <div class="col-12 col-md-6 ">
                    <div class="d-flex flex-column my-2 " style="padding-top: 150px">
                        <div class="card shadow  py-5" style="width: 18rem;">
                            <div class="card-body p-3 text-center">
                                <img src="{{asset('assets/icon1_1.png')}}" alt="">
                                <h5 class="card-title">Programming and
                                    Technology</h5>
                                <p class="card-text">vwordpress, mobile apps,
                                    web programming, game,
                                    chatbots.</p>
                            </div>
                        </div>
                        <div class="card shadow my-5 py-5" style="width: 18rem;">
                            <div class="card-body p-3 text-center">
                                <img src="{{asset('assets/icon1_1.png')}}" alt="">
                                <h5 class="card-title">Programming and
                                    Technology</h5>
                                <p class="card-text">vwordpress, mobile apps,
                                    web programming, game,
                                    chatbots.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="d-flex flex-column my-2 ">
                        <div class="card shadow  py-5" style="width: 18rem;">
                            <div class="card-body p-3 text-center">
                                <img src="{{asset('assets/icon1_1.png')}}" alt="">
                                <h5 class="card-title">Programming and
                                    Technology</h5>
                                <p class="card-text">vwordpress, mobile apps,
                                    web programming, game,
                                    chatbots.</p>
                            </div>
                        </div>
                        <div class="card shadow my-5 py-5" style="width: 18rem;">
                            <div class="card-body p-3 text-center">
                                <img src="{{asset('assets/icon1_1.png')}}" alt="">
                                <h5 class="card-title">Programming and
                                    Technology</h5>
                                <p class="card-text">vwordpress, mobile apps,
                                    web programming, game,
                                    chatbots.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-6">
            <div class="d-flex flex-row">
                <div>
                    <img class="w-75" src="{{asset('assets/Manequin11.png')}}" alt="">
                </div>
                <div class="d-flex flex-column justify-content-center">
                    <h1>How It Work</h1>
                    <h1 class="" style="text-decoration: underline;color: red;">for Customer ?</h1>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="d-flex flex-column justify-content-center h-100">
                <div class="d-flex flex-row">
                    <div class="mx-3">
                        <img class="mt-1" src="{{asset('assets/checklisticon.png')}}" alt="" style="width: 40px">
                    </div>
                    <div class="d-flex flex-column">
                        <h2>Find Service</h2>
                        <h5 class="w-75" style="color: #718096">see the service, and find the service that you
                            wanted.</h5>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="mx-3">
                        <img class="mt-1" src="{{asset('assets/checklisticon.png')}}" alt="" style="width: 40px">
                    </div>
                    <div class="d-flex flex-column">
                        <h2>Find Service</h2>
                        <h5 class="w-75" style="color: #718096">see the service, and find the service that you
                            wanted.</h5>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="mx-3">
                        <img class="mt-1" src="{{asset('assets/checklisticon.png')}}" alt="" style="width: 40px">
                    </div>
                    <div class="d-flex flex-column">
                        <h2>Find Service</h2>
                        <h5 class="w-75" style="color: #718096">see the service, and find the service that you
                            wanted.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-5">
       <div class="col-6">
            <div class="d-flex flex-column justify-content-center h-100">
                <div class="d-flex flex-row">
                    <div class="mx-3">
                        <img class="mt-1" src="{{asset('assets/checklisticon.png')}}" alt="" style="width: 40px">
                    </div>
                    <div class="d-flex flex-column">
                        <h2>Find Service</h2>
                        <h5 class="w-75" style="color: #718096">see the service, and find the service that you
                            wanted.</h5>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="mx-3">
                        <img class="mt-1" src="{{asset('assets/checklisticon.png')}}" alt="" style="width: 40px">
                    </div>
                    <div class="d-flex flex-column">
                        <h2>Find Service</h2>
                        <h5 class="w-75" style="color: #718096">see the service, and find the service that you
                            wanted.</h5>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="mx-3">
                        <img class="mt-1" src="{{asset('assets/checklisticon.png')}}" alt="" style="width: 40px">
                    </div>
                    <div class="d-flex flex-column">
                        <h2>Find Service</h2>
                        <h5 class="w-75" style="color: #718096">see the service, and find the service that you
                            wanted.</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="d-flex flex-column justify-content-center text-center">
                <div class="d-flex flex-column justify-content-center">
                    <h1>How It Work</h1>
                    <h1 class="" style="text-decoration: underline;color: red;">for Customer ?</h1>
                </div>
                <div>
                    <img class="h-75 w-50" src="{{asset('assets/FlatDesign12.png')}}"  alt="">
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col">
            <h1 class="text-center">Advantage using         <img src="{{asset('assets/frendcer.png')}}" alt=""></h1>
            <div class="row my-5">
                <div class="col-md-4 text-center">
                    <img src="{{asset('assets/SecureIcon1.png')}}" alt="">
                    <h1>Secure <br/> Transaction</h1>
                    <p style="line-height: 1.8;">your payment will be hold by us,
                        and after your project finish with
                        the freelancer, we will transfer your
                        payment to the freelancer.</p>

                </div>
                <div class="col-md-4 text-center">
                    <img src="{{asset('assets/EasyOrderIcon1.png')}}" alt="">
                    <h1 class="my-2">Easy To <br/> Order</h1>
                    <p style="line-height: 1.8;">your payment will be hold by us,
                        and after your project finish with
                        the freelancer, we will transfer your
                        payment to the freelancer.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{asset('assets/BestFreelancer1.png')}}" alt="">
                    <h1 class="my-2">Best<br/> Freelencer</h1>
                    <p style="line-height: 1.8;">your payment will be hold by us,
                        and after your project finish with
                        the freelancer, we will transfer your
                        payment to the freelancer.</p>
               </div>
            </div>
        </div>
    </div>




    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <div class="container-fluid px-3 px-sm-5 my-5 text-center">
        <h4 class="mb-5 font-weight-bold">What Our Client Say</h4>
        <div class="owl-carousel owl-theme">
            <div class="item first prev">
                <div class="card border-0 py-3 px-4">
                    <div class="row justify-content-center"> <img src="https://i.imgur.com/gazoShk.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                    <h6 class="mb-3 mt-2">Marielle Haag</h6>
                    <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
                </div>
            </div>
            <div class="item show">
                <div class="card border-0 py-3 px-4">
                    <div class="row justify-content-center"> <img src="https://i.imgur.com/oW8Wpwi.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                    <h6 class="mb-3 mt-2">Ximena Vegara</h6>
                    <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
                </div>
            </div>
            <div class="item next">
                <div class="card border-0 py-3 px-4">
                    <div class="row justify-content-center"> <img src="https://i.imgur.com/ndQx2Rg.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                    <h6 class="mb-3 mt-2">John Paul</h6>
                    <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
                </div>
            </div>
            <div class="item next">
                <div class="card border-0 py-3 px-4">
                    <div class="row justify-content-center"> <img src="https://i.imgur.com/ndQx2Rg.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                    <h6 class="mb-3 mt-2">John Paul</h6>
                    <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
                </div>
            </div>
            <div class="item last">
                <div class="card border-0 py-3 px-4">
                    <div class="row justify-content-center"> <img src="https://i.imgur.com/T5aOhwh.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                    <h6 class="mb-3 mt-2">William Doe</h6>
                    <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <script>
        $(document).ready(function() {

            $('.owl-carousel').owlCarousel({
                mouseDrag:false,
                loop:true,
                margin:2,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:3
                    }
                }
            });

            $('.owl-prev').click(function() {
                $active = $('.owl-item .item.show');
                $('.owl-item .item.show').removeClass('show');
                $('.owl-item .item').removeClass('next');
                $('.owl-item .item').removeClass('prev');
                $active.addClass('next');
                if($active.is('.first')) {
                    $('.owl-item .last').addClass('show');
                    $('.first').addClass('next');
                    $('.owl-item .last').parent().prev().children('.item').addClass('prev');
                }
                else {
                    $active.parent().prev().children('.item').addClass('show');
                    if($active.parent().prev().children('.item').is('.first')) {
                        $('.owl-item .last').addClass('prev');
                    }
                    else {
                        $('.owl-item .show').parent().prev().children('.item').addClass('prev');
                    }
                }
            });

            $('.owl-next').click(function() {
                $active = $('.owl-item .item.show');
                $('.owl-item .item.show').removeClass('show');
                $('.owl-item .item').removeClass('next');
                $('.owl-item .item').removeClass('prev');
                $active.addClass('prev');
                if($active.is('.last')) {
                    $('.owl-item .first').addClass('show');
                    $('.owl-item .first').parent().next().children('.item').addClass('prev');
                }
                else {
                    $active.parent().next().children('.item').addClass('show');
                    if($active.parent().next().children('.item').is('.last')) {
                        $('.owl-item .first').addClass('next');
                    }
                    else {
                        $('.owl-item .show').parent().next().children('.item').addClass('next');
                    }
                }
            });

        });
    </script>

@endsection

