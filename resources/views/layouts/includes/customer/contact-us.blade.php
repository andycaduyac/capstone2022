@extends('base')

@section('content')
    <div class="container">
        <div class="container-fluid mt-3" id="text-to-right">
            <h1 class="display-6"> <strong> Contact Us </strong> </h1>
            <p class="text-muted"> If you have any inquiries, feel free to contact us through the following:</p>
        </div>
        <div class="body">
            <div class="row mt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 mb-3" id="card1">
                                <a href="tel:09328826688" class="card text-dark">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <h5 class="card-title"><i class="bi bi-phone-fill me-2"></i> 0932 882 6688</h5>
                                    </div>
                                        <h5 class="card-subtitle d-flex justify-content-center mb-3">Mobile No.</h5>
                                </a>

                            </div>


                            <div class="col-md-4 mb-3" id="card2">
                                <a href="https://www.google.com/maps/place/Jyra's+Resort/@9.940816,123.9524754,227m/data=!3m1!1e3!4m19!1m13!4m12!1m4!2m2!1d123.9056384!2d10.3153664!4e1!1m6!1m2!1s0x33aa2f9f5fae5763:0xbf1f94bae0d543f0!2sjyras+resort!2m2!1d123.9527309!2d9.9410097!3m4!1s0x33aa2f9f5fae5763:0xbf1f94bae0d543f0!8m2!3d9.9410097!4d123.9527309"
                                    class="card text-dark shadow-lg" target="_blank">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <h5 class="card-title"><i class="bi bi-geo-alt-fill me-2"></i> Guiwanon, Tubigon, Bohol</h5>
                                    </div>
                                        <h5 class="card-subtitle d-flex justify-content-center mb-3"> Address</h5>

                                </a>

                            </div>

                        <div class="col-md-4 mb-3" id="card3">

                            <a href="https://web.facebook.com/jyraresort/" class="card text-dark shadow-lg" target="_blank">
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <h5 class="card-title"><i class="bi bi-facebook me-2"></i> Jyra's Resort</h5>
                                </div>
                                <h5 class="card-subtitle d-flex justify-content-center mb-3">Facebook</h5>
                            </a>
                        </div>
                        </div>
                    </div>

            </div>
        </div>
        <div class="container mt-5 border p-3" id="message-form">
            Send us a message:
            <form action="" method="post">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <label for="">Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col mb-3">
                                <label for="">Email</label>
                                <input type="text"  class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label text-dark">Message:</label>
                                <textarea name='message' class="form-control" rows="5"></textarea>
                            </div>
                            <div class="pt-2">
                                <input class="btn btn-primary btn-lg float-end" type="submit" value="Submit" />
                            </div>
                        </div>
                    </div>
            </form>

        </div>
    </div>

    <style>
        .card{
            border-radius: 4px;
            background: #fff;
            box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
            transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
            padding: 14px 35px 18px 35px;
            cursor: pointer;
            height: 18rem;
        }

        .card:hover{
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
        }

        .card h3{
            font-weight: 600;
        }
        #card1{
            -webkit-animation: fadeInUp 1.2s both;
            -moz-animation: fadeInUp 1.2s both;
            -o-animation: fadeInUp 1.2s both;
            animation: fadeInUp 1.2s both;
        }
        #card2{
            -webkit-animation: fadeInUp 1.8s both;
            -moz-animation: fadeInUp 1.8s both;
            -o-animation: fadeInUp 1.8s both;
            animation: fadeInUp 1.8s both;
        }
        #card3{
            -webkit-animation: fadeInUp 2.4s both;
            -moz-animation: fadeInUp 2.4s both;
            -o-animation: fadeInUp 2.4s both;
            animation: fadeInUp 2.4s both;
        }
        @keyframes fadeInUp {
            0%{
                opacity: 0;
            }
            55%{
                opacity: 0;
                transform: translateY(50px);
            }
            100%{
                opacity: 1;
                transform: translateY(0);
            }
        }
        #text-to-right h1{
            -webkit-animation: fadeInRight 1.3s both;
            -moz-animation: fadeInRight 1.3s both;
            -o-animation: fadeInRight 1.3s both;
            animation: fadeInRight 1.3s both;
        }
        @keyframes fadeInRight {
            0%{
                opacity: 0;
                transform: translateX(-50px);
            }
            100%{
                opacity: 1;
                transform: translateX(0);
            }
        }
        #text-to-right p{
            -webkit-animation: fadeInDown 1.3s both;
            -moz-animation: fadeInDown 1.3s both;
            -o-animation: fadeInDown 1.3s both;
            animation: fadeInDown 1.3s both;
        }
        @keyframes fadeInDown {
            0%{
                opacity: 0;
            }
            40%{
                opacity: 0;
                transform: translateY(-15px);
            }
            100%{
                opacity: 1;
                transform: translateY(0);
            }
        }
        #message-form {
            -webkit-animation: fadeInDown 2s both;
            -moz-animation: fadeInDown 2s both;
            -o-animation: fadeInDown 2s both;
            animation: fadeInDown 2s both;
        }
    </style>
@endsection
