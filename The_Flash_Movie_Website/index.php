<!-- 
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="" src="https://www.youtube.com/embed/Yj0l7iGKh8g" frameborder="0" allowfullscreen="allowfullscreen" data-link="https://www.youtube.com/watch?v=Yj0l7iGKh8g"></iframe>
    </div>
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Flash | TV Series</title>
    <!-- linking bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- linking my own css -->
    <link href="css/main.css" rel="stylesheet">
    <!-- linking fonts -->
    <link href="https://fonts.googleapis.com/css?family=Exo+2:100,400,700" rel="stylesheet">
</head>

<body>

    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand navbar-dark flash-transparent-black sticky-top">
        <a class="navbar-brand" href="#hero"><img class="img-fluid" src="img/nav-logo-flash.png" alt="flash logo"><span class="flash-text-shadow ">The Flash</span></a>
        <ul class="navbar-nav pl-5">
            <li class="nav-item">
                <a class="flash-fw-400 flash-text-shadow nav-link" href="#plot">Plot</a>
            </li>
            <li class="nav-item">
                <a class="flash-fw-400 flash-text-shadow nav-link" href="#cast">Cast</a>
            </li>
            <li class="nav-item">
                <a class="flash-fw-400 flash-text-shadow nav-link" href="#extra">Extra</a>
            </li>
        </ul>
    </nav>

    <!-- HERO -->
    <section id="hero" class="d-flex flex-column justify-content-end flash-vh-100">
        <div id="hero-flash-logo">
            <img class="px-5 img-fluid" src="img/hero-logo-flash.png" alt="The Flash Logo">
        </div>  
        <div id="basic-info">
            <p class="px-5 pt-4 flash-fw-100 text-white text-uppercase flash-fs-1 flash-text-shadow">2014 | Tv show | 3 seasons | <span class="badge badge-pill badge-danger">75</span> metascore</p>
        </div>
        <div id="next-season">
            <p class="px-5 flash-fw-100 text-uppercase text-white flash-fs-1 flash-text-shadow">Next season: <date>October 11 2017</date></p> 
        </div>
        <div id="playbutton">
            <button href="#" onclick="autoPlayYouTubeModal()" class="ml-5 mb-3 flash-fw-100 text-uppercase text-white flash-fs-1 flash-text-shadow btn btn-dark flash-bg-red" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/Yj0l7iGKh8g">Watch trailer</button>
        </div>
    </section>

    <div class="modal fade flash-fw-100 flash-fs-1 text-uppercase" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-transparent" style="border: none !important;">
                <div class="modal-body p-0 container">
                    <div class="row d-flex flex-row justify-content-between sticky-top">
                        <p class="text-white pl-3 pt-3">The Flash Trailer</p>
                        <button type="button" class="bg-transparent btn" data-dismiss="modal" aria-label="close"><span class="text-white close" aria-hidden="true">x</span></button>
                    </div>
                    <div class="iframe">
                        <iframe style="border: none !important;" class="rounded" width="100%" height="350px" src="https://www.youtube.com/embed/Yj0l7iGKh8g" data-link="https://www.youtube.com/watch?v=Yj0l7iGKh8g" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PLOT -->
    <section id="plot">
        <div class="container pb-5">
            <div class="row pt-5">
                <div class="col-lg-7 col-sm-6 col-12 pt-lg-5">
                    <div class="flash-plot-text row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="text-uppercase text-white">The Flash</h1>
                                </div>
                            </div>
                            <div class="row pt-1 pt-lg-3  pb-3 pb-lg-5">
                                <div class="col flash-fs-11-12">   
                                    <p class="flash-fs-08 flash-fw-100 text-white"><strong class="text-uppercase">Genre:</strong> Action/Adventure, Drama, Sci-Fi/Fantasy</p>
                                </div>
                                <div class="col flash-fs-11-12">
                                    <p class="flash-fs-08 flash-fw-100 text-white"><strong class="text-uppercase">Creators:</strong> Greg Berlanti, Geoff Johns, Andrew Kreisberg</p>
                                </div>    
                            </div>
                            <div class="row">
                                <div class="flash-box-shadow plot-window h-25 col-12">
                                    <p class="flash-fs-09 text-white flash-fw-100">Barry Allen is a Central City police forensic scientist with a reasonably happy life, despite the childhood trauma of a mysterious red and yellow lightning killing his mother and framing his father. All that changes when a massive particle accelerator accident leads to Barry being struck by lightning in his lab. Coming out of coma nine months later, Barry and his new friends at S.T.A.R labs find that he now has the ability to move at superhuman speed. Furthermore, Barry learns that he is but one of many affected by that event, most of whom are using their powers for evil. Determined to make a difference, Barry dedicates his life to fighting such threats, as The Flash. While he gains allies he never expected, there are also secret forces determined to aid and manipulate him for their own agenda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center col-lg-5 col-sm-6 col-12 pt-4 pt-lg-5">
                    <img class="img-fluid" src="img/flash-poster.jpg" alt="The Flash Poster">
                </div>
            </div>
        </div>
    </section>

    <!-- CAST -->
    <section id="cast">
        <div class="container pt-4">
            <h2 class="text-uppercase text-white mt-3 ml-lg-5 ml-xl-0">Cast: </h2>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row mb-5 mx-lg-5 mx-xl-0">
                        <div class="col-6 col-md-4 col-xl-2 mb-2">
                            <div class="card bg-transparent border border-dark rounded">
                                <img class="card-img-top" src="img/grant-gustin.png" alt="Grant Gustin Portrait">
                                <div class="card-body text-white bg-transparent">
                                    <h4 class="card-title flash-fs-11">Grant Gustin</h4>
                                    <p class="card-text flash-fs-08">as Barry Allen / The Flash</p>
                                    <a href="#" class="card-link flash-bg-red flash-fw-100 btn btn-dark rounded">Read more!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2 mb-2">
                            <div class="card bg-transparent border border-dark rounded">
                                <img class="card-img-top" src="img/candice-patton.png" alt="Candice Patton Portrait">
                                <div class="card-body text-white bg-transparent">
                                    <h4 class="card-title flash-fs-11">Candice Patton</h4>
                                    <p class="card-text flash-fs-08">as Iris West</p>
                                    <a href="#" class="card-link flash-bg-red flash-fw-100 btn btn-dark rounded">Read more!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2 mb-2">
                            <div class="card bg-transparent border border-dark rounded">
                                <img class="card-img-top" src="img/carlos-valdes.png" alt="Carlos Valdes Portrait">
                                <div class="card-body text-white bg-transparent">
                                    <h4 class="card-title flash-fs-11">Carlos Valdes</h4>
                                    <p class="card-text flash-fs-08">as Cisco Ramon / Vibe</p>
                                    <a href="#" class="card-link flash-bg-red flash-fw-100 btn btn-dark rounded">Read more!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2 mb-2">
                            <div class="card bg-transparent border border-dark rounded">
                                <img class="card-img-top" src="img/danielle-panabaker.png" alt="Danielle Panabaker Portrait">
                                <div class="card-body text-white bg-transparent">
                                    <h4 class="card-title flash-fs-11">Danielle Panabaker</h4>
                                    <p class="card-text flash-fs-08">as Caitlin Snow</p>
                                    <a href="#" class="card-link flash-bg-red flash-fw-100 btn btn-dark rounded">Read more!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2 mb-2">
                            <div class="card bg-transparent border border-dark rounded">
                                <img class="card-img-top" src="img/jesse-l-martin.png" alt="Jesse L. Martin Portrait">
                                <div class="card-body text-white bg-transparent">
                                    <h4 class="card-title flash-fs-11">Jesse L. Martin</h4>
                                    <p class="card-text flash-fs-08">as Det. Joe West</p>
                                    <a href="#" class="card-link flash-bg-red flash-fw-100 btn btn-dark rounded">Read more!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2 mb-2">
                            <div class="card bg-transparent border border-dark rounded">
                                <img class="card-img-top" src="img/tom-cavanagh.png" alt="Tom Cavanagh Portrait">
                                <div class="card-body text-white bg-transparent">
                                    <h4 class="card-title flash-fs-11">Tom Cavanagh</h4>
                                    <p class="card-text flash-fs-08">Harrison Wells</p>
                                    <a href="#" class="card-link flash-bg-red flash-fw-100 btn btn-dark rounded">Read more!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EXTRA -->
    <section id="extra">
        <div class="container pt-4">
            <h2 class="text-uppercase text-white mt-3">Extra:</h2>
            <div class="row mt-2">
                <div class="col-12">
                    <div class="row">
                        <h3 class="flash-fs-13 text-uppercase text-white flash-fw-100 pl-3">Top rated episodes:</h3>
                    </div>
                    <div class="row p-3">
                        <div class="p-2 col-12 col-md-4 mt-3 text-white rounded">
                            <div class="card bg-transparent">
                                <img class="card-img-top border border-dark" src="img/fast-enough.jpg" alt="Fast Enough Thumbnail">
                                <div class="border border-dark card-body bg-transparent">
                                    <h4 class="card-title flash-fs-1">Fast Enough</h4>
                                    <p class="card-text flash-fw-100 flash-fs-09">Season 01 - Episode 23</p>
                                    <button class="btn btn-dark flash-bg-red flash-fw-100 mb-3" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                        Details
                                    </button>
                                    <div class="collapse" id="collapse1">
                                        <div class="card card-body bg-transparent">
                                            <p class="card-text flash-fw-100 flash-fs-09">With the Particle Accelerator back online, Barry can go back in time to stop Eobard Thawne on the night of his mother's murder fifteen years ago.</p>        
                                        </div>
                                    </div>
                                    <div class="progress bg-transparent border border-dark">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="9.7"
                                        aria-valuemin="0" aria-valuemax="10" style="width:97%; background-color: rgba(138, 0, 5, 0.8);">
                                            <span>9.7 / 10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 col-12 col-md-4 mt-3 text-white rounded">
                            <div class="card bg-transparent">
                                <img class="card-img-top border border-dark" src="img/out-of-time.jpg" alt="Out of Time Thumbnail">
                                <div class="border border-dark card-body bg-transparent">
                                    <h4 class="card-title flash-fs-1">Out of Time</h4>
                                    <p class="card-text flash-fw-100 flash-fs-09">Season 01 - Episode 15</p>
                                    <button class="btn btn-dark flash-bg-red flash-fw-100 mb-3" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Details
                                    </button>
                                    <div class="collapse" id="collapse2">
                                        <div class="card card-body bg-transparent">
                                            <p class="card-text flash-fw-100 flash-fs-09">Mark Mardon, having survived his apparent death during the dark matter explosion, returns to seek revenge on Joe for the death of his brother Clyde, bearing the same weather-manipulation powers as last time.</p>
                                        </div>
                                    </div>
                                    <div class="progress bg-transparent border border-dark">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="9.7"
                                        aria-valuemin="0" aria-valuemax="10" style="width:97%; background-color: rgba(138, 0, 5, 0.8);">
                                            <span>9.7 / 10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 col-12 col-md-4 mt-3 text-white rounded">
                            <div class="card bg-transparent">
                                <img class="card-img-top border border-dark" src="img/enter-zoom.jpg" alt="Enter Zoom Thumbnail">
                                <div class="border border-dark card-body bg-transparent">
                                    <h4 class="card-title flash-fs-1">Enter Zoom</h4>
                                    <p class="card-text flash-fw-100 flash-fs-09">Season 02 - Episode 06</p>
                                    <button class="btn btn-dark flash-bg-red flash-fw-100 mb-3" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Details
                                    </button>
                                    <div class="collapse" id="collapse3">
                                        <div class="card card-body bg-transparent">
                                            <p class="card-text flash-fw-100 flash-fs-09">Barry and his team plan to trap Zoom with Linda's help while Joe is against it.</p>
                                        </div>
                                    </div>
                                    <div class="progress bg-transparent border border-dark">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="9.5"
                                        aria-valuemin="0" aria-valuemax="10" style="width:95%; background-color: rgba(138, 0, 5, 0.8);">
                                            <span>9.5 / 10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mb-2">
                <div class="col-12">
                    <div class="row">
                        <h3 class="flash-fs-13 text-uppercase text-white flash-fw-100 pl-3">Related tv series:</h3>
                    </div>
                    <div class="row mx-2">
                        <div class="p-2 col-6 col-md-3 mt-3 text-white rounded">
                            <div class="card bg-transparent border border-dark rounded">
                                <img class="card-img-top border border-dark" src="img/arrow.jpg" alt="Arrow">
                                <div class="card-body text-white bg-transparent">
                                    <h4 class="card-title flash-fs-1">Arrow</h4>
                                    <a href="http://www.imdb.com/title/tt2193021/?ref_=tt_rec_tti" class="card-link flash-bg-red flash-fw-100 btn btn-dark rounded">Read more!</a>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 col-6 col-md-3 mt-3 text-white rounded">
                            <div class="card bg-transparent border border-dark rounded">
                                <img class="card-img-top border border-dark" src="img/supergirl.jpg" alt="Supergirl">
                                <div class="card-body text-white bg-transparent">
                                    <h4 class="card-title flash-fs-1">Supergirl</h4>
                                    <a href="http://www.imdb.com/title/tt4016454/?ref_=tt_rec_tti" class="card-link flash-bg-red flash-fw-100 btn btn-dark rounded">Read more!</a>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 col-6 col-md-3 mt-3 text-white rounded">
                            <div class="card bg-transparent border border-dark rounded">
                                <img class="card-img-top border border-dark" src="img/legends.jpg" alt="Legends of Tomorrow">
                                <div class="card-body text-white bg-transparent">
                                    <h4 class="card-title flash-fs-1">Legends of Tomorrow</h4>
                                    <a href="http://www.imdb.com/title/tt4532368/?ref_=tt_rec_tti" class="card-link flash-bg-red flash-fw-100 btn btn-dark rounded">Read more!</a>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 col-6 col-md-3 mt-3 text-white rounded">
                            <div class="card bg-transparent border border-dark rounded">
                                <img class="card-img-top border border-dark" src="img/lightning.jpg" alt="Black Lightning">
                                <div class="card-body text-white bg-transparent">
                                    <h4 class="card-title flash-fs-1">Black Lightning</h4>
                                    <a href="http://www.imdb.com/title/tt6045840/?ref_=ttmi_tt" class="card-link flash-bg-red flash-fw-100 btn btn-dark rounded">Read more!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <section id="footer" class="py-1 flash-fw-100 text-light d-flex justify-content-between">
        <img src="img/flash-logo-2.png" alt="Footer Flash Logo">
        <p class="flash-fs-13 pt-1"><span class="flash-fw-400">#</span>theflash<span class="flash-fw-400 text-uppercase">cw</span>series</p>
        <p class="pt-2 pr-3">Designed by Ján Poprócsi</p>
    </section>


    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>