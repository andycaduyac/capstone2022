<section class="d-flex justify-content-center">
    <div class="container" id="card-container">
        <div class="card" id="card-1">
            <div class="content">
                <div class="imgBx">
                    <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg">
                </div>
                <div class="contentBx">
                    <h3>Cottage<br><span>Rate: ₱500 - ₱600 </span></h3>
                </div>
            </div>
            <ul class="sci">
                <li>
                    <a href="/all-cottages" class="btn btn-primary btn-sm">View</a>
                </li>
            </ul>
        </div>
        <div class="card" id="card-2">
            <div class="content">
                <div class="imgBx">
                    <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg">
                </div>
                <div class="contentBx">
                    <h3>Table<br><span>Rate: ₱200 - ₱300 </span></h3>
                </div>
            </div>
            <ul class="sci">
                <li>
                    <a href="/all-tables" class="btn btn-primary btn-sm">View</a>
                </li>
            </ul>
        </div>
        <div class="card" id="card-3">
            <div class="content">
                <div class="imgBx">
                    <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg">
                </div>
                <div class="contentBx">
                    <h3>Function Hall<br><span>Rate: ₱8,500 </span></h3>
                </div>
            </div>
            <ul class="sci">
                <li>
                    <a href="/all-functionhall" class="btn btn-primary btn-sm">View</a>
                </li>
            </ul>
        </div>

    </div>
</section>
<style>
    #mk-reserve {
        --c: #0084ff; /* the border color */
        --b: 2px;    /* the border thickness*/
        --g: 6px;     /* the gap on hover */
        border-radius: 2px;
        padding: calc(var(--g) + var(--b));
        --_g: #0000 25%,var(--c) 0;
        background:
            conic-gradient(from 180deg at top    var(--b) right var(--b),var(--_g))
            var(--_i,200%) 0  /200% var(--_i,var(--b))  no-repeat,
            conic-gradient(            at bottom var(--b) left  var(--b),var(--_g))
            0   var(--_i,200%)/var(--_i,var(--b)) 200%  no-repeat;
        transition: .3s, background-position .3s .3s;
        cursor: pointer;
    }
    #mk-reserve:hover {
        --_i: 100%;
        transition: .3s, background-size .3s .3s;
    }

    h1, p{
        /* text-shadow: 2px 2px 4px #b3b3b3; */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    #card-container {
        position: relative;
        z-index: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }
    #card-container .card {
        position: relative;
        width: 300px;
        height: 400px;
        background: rgba(255, 255, 255, 0.05);
        margin: 45px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
        border-radius: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        backdrop-filter: blur(10px);
    }

    #card-container .card .content {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        transition: 0.5s;
    }

    #card-container .card:hover .content {
        transform: translateY(-20px);
    }

    #card-container .card .content .imgBx {
        position: relative;
        width: 250px;
        height: 200px;;
        overflow: hidden;
    }

    #card-container .card .content .imgBx img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    #card-container .card .content .contentBx h3 {
        color: rgb(0, 0, 0);
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 500;
        font-size: 18px;
        text-align: center;
        margin: 20px 0 10px;
        line-height: 1.1em;
    }

    #card-container .card .content .contentBx h3 span {
        font-size: 12px;
        font-weight: 300;
        text-transform: initial;
    }

    #card-container .card .sci {
        position: absolute;
        bottom: 20px;
        display: flex;
    }

    #card-container .card .sci li {
        list-style: none;
        margin-left: -20px;
        transform: translateY(30px);
        transition: 0.7s;
        opacity: 0;
    }

    #card-container .card:hover .sci li {
        transform: translateY(0px);
        opacity: 1;
    }

    #card-container .card .sci li a {
        color: rgb(255, 255, 255);
        font-size: 15px;
    }

    #card-1 {
        -webkit-animation: fadeInUp 1.2s both;
        -moz-animation: fadeInUp 1.2s both;
        -o-animation: fadeInUp 1.2s both;
        animation: fadeInUp 1.2s both;
    }
    #card-2 {
        -webkit-animation: fadeInUp 1.8s both;
        -moz-animation: fadeInUp 1.8s both;
        -o-animation: fadeInUp 1.8s both;
        animation: fadeInUp 1.8s both;
    }
    #card-3 {
        -webkit-animation: fadeInUp 2.4s both;
        -moz-animation: fadeInUp 2.4s both;
        -o-animation: fadeInUp 2.4s both;
        animation: fadeInUp 2.4s both;

    }
    @keyframes fadeInUp {
            0%{
                opacity: 0;
            }
            30%{
                opacity: 0;
                transform: translateY(30px);
            }
            100%{
                opacity: 1;
                transform: translateY(0);
            }
        }

</style>
