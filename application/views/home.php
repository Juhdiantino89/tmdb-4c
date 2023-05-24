<!-- NAVBAR -->
<nav class="px-5 navbar navbar-expand-lg navbar-dark" style="background-color: #032541;">
    <a class="navbar-brand" href="#">
        <!-- <h2 class="font-weight-bold">TMDB</h2> -->
        <img src="assets/logotmdb.png" style="width:150px" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li> -->
            <li class="nav-item dropdown">
                <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                <a class="nav-link text-white" style="font-weight:bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Movies
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Populer</a>
                    <a class="dropdown-item" href="#">Sedang Diputar</a>
                    <!-- <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item" href="#">Mendatang</a>
                    <a class="dropdown-item" href="#">Top Rating</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                <a class="nav-link text-white" style="font-weight:bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    TV Series
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Populer</a>
                    <a class="dropdown-item" href="#">Sedang Diputar</a>
                    <a class="dropdown-item" href="#">Mendatang</a>
                    <a class="dropdown-item" href="#">Top Rating</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                <a class="nav-link text-white" style="font-weight:bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    People
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Orang Terpopuler</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                <a class="nav-link text-white" style="font-weight:bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    More
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Diskusi</a>
                    <a class="dropdown-item" href="#">Papan Peringkat</a>
                    <a class="dropdown-item" href="#">Dukungan</a>
                    <a class="dropdown-item" href="#">API</a>
                </div>
            </li>
        </ul>
        <a class="mr-4" href="">
            <h2 class="text-weight-bold text-white">+</h2>
        </a>
        <button type="button" class="mr-4 btn btn-outline-light font-weight-bold" style="border-radius: 10px; margin: 5px;">ID</button>
        <a class="nav-link text-white" style="font-weight:bold" href="#" aria-haspopup="true" aria-expanded="false">
            Masuk
        </a>
        <a class="mr-2 nav-link text-white" style="font-weight:bold" href="#" aria-haspopup="true" aria-expanded="false">
            Bergabung dengan TMDB
        </a>
        <div>
            <button class="btn color-light" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <!-- <i class="fa-solid fa-magnifying-glass" style="color: #0074dd;" ></i> -->
                <img src="assets/search.png" alt="" style="width:40px">
            </button>

            <!-- <form class="form-inline">
            <input class="form-control mr-sm-2" style="border-radius: 25px;" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" style="border-radius: 25px;" type="submit">Search</button>
        </form> -->
        </div>
</nav>





<style>
    .jumbotron {
        /* padding: 2rem 1rem;
        margin-bottom: 2rem; */
        border-radius: 0;

        background: #000064;
        /* old browsers fallback color*/
        /* background: -webkit-linear-gradient(to right, #1BADD8, #00003E);
        background: linear-gradient(to right, #1BADD8, #00003E); */
        background-image: url('https://cdn.windowsreport.com/wp-content/uploads/2022/06/5-Best-HD-Marvel-Wallpapers-for-.png');


    }

    .hd1 {
        color: #fff;
    }

    @media (max-width: 991px) {
        .navbar:not(.top-nav-collapse) {
            background: #424f95 !important;
        }
    }

    .rgba-gradient {
        background: -moz-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
        background: -webkit-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
        background: -webkit-gradient(linear, 45deg, from(rgba(42, 27, 161, 0.7)), to(rgba(29, 210, 177, 0.7)));
        background: -o-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
        background: linear-gradient(to 45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
    }
</style>

<!-- <div class="jumbotron" style="background-image: url('https://cdn.windowsreport.com/wp-content/uploads/2022/06/5-Best-HD-Marvel-Wallpapers-for-.png');"> -->
<!-- collapse search -->
<div class="collapse" id="collapseExample">
    <div class="border">
        <input class="form-control container mt-2 mb-2" style="border-radius: 25px;" type="search" placeholder="Cari sebuah film, serial tv, kru / aktor" aria-label="Cari sebuah film, serial tv, kru / aktor">
    </div>
</div>


<div class="">

    <div class="view" style="background-image: url('https://cdn.windowsreport.com/wp-content/uploads/2022/06/5-Best-HD-Marvel-Wallpapers-for-.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-gradient align-items-center">



            <!-- JUMBOTRON -->
            <!-- Content -->
            <div class="px-5">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md white-text text-md-left mt-xl-5 mb-5" data-wow-delay="0.3s">
                        <h1 class="hd1 text-weight-bold" style="font-size: 50px;">Welcome</h1>
                        <h2 class="hd1 text-weight-bold">Millions of movies, TV shows and people to discover. Explore now."</h2>
                    </div>
                </div>
                <form class="d-flex mb-5">
                    <input class="form-control mr-sm-2" style="border-radius: 25px;" type="search" placeholder="Cari sebuah film, serial tv, kru / aktor..." aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" style="border-radius: 25px;" type="submit">Cari</button>
                </form>
                <hr>
                <hr>
            </div>
            <!-- Content -->
            <!-- END JUMBOTRON -->
        </div>

        <!-- Mask & flexbox options-->
    </div>

    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
</div>