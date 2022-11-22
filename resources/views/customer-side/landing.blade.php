
<section id="header" class="jumbotron text-center">
    <br>
    <br>
    <h1 class="display-3 text-white py-2"><strong>JYRA'S RESORT</strong></h1>
    <p class="lead text-white">Guiwanon, Tubigon, Bohol</p>
    <br> <br> <br> <br>
    <a href="/make-reservation" class="my-3 text-white" id="mk-reserve">Make Reservation</a>
</section>

<section>
    @include('customer-side.cards.cards-type')
</section>

<style>


/* -0  */

    #header {
        background: url('/resort-images/resort-img.png') center center / cover no-repeat ;
        min-height: 350px;
        /* filter: blur(1.5px);
        -webkit-filter: blur(1.5px); */
    }

    #header {
        -webkit-animation: fadeInDown 1.5s both;
        -moz-animation: fadeInDown 1.5s both;
        -o-animation: fadeInDown 1.5s both;
        animation: fadeInDown 1.5s both;
    }
    @keyframes fadeInDown {
            0%{
                opacity: 0;
                transform: translateY(-10px);
            }
            100%{
                opacity: 1;
                transform: translateY(0);
            }
        }
</style>
