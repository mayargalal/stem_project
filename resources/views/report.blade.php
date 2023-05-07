<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEMA-CBU</title>
    <link rel="shortcut icon" href="{{asset('front/images/Color logo - no background.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('front/CSS/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/aos.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/style.css')}}">
</head>

<body class="container-fluid">
<div class="row ">
    <div class="col-lg-2 side-bar" style="background: linear-gradient(to bottom, #0EB0BA, #304BAB); height: 100vh;">
        <div class="container m-auto p-1 justify-content-center">
            <div class="mt-2 p-3 mb-5 pb-5">
                <a href="index.html"><img src="images/White logo - no background.png" alt="STEMA-Logo"
                                          width="130px"></a>

            </div>

            <div class="contaier m-auto p-2 ps-3 justify-content-center">
                <ul class="navbar-nav justify-content-center report-list">
                    <li class="nav-item m-2">
                        <a class="nav-link allFiles-link" href="{{route('report')}}" onclick="allFilesShow()"><i
                                class="fa-regular fa-copy p-1 m-1"></i> All
                            files</a>
                    </li>

                    <li class="nav-item m-2">
                        <a class="nav-link recent-link" href="#" onclick="RecentFileShow()" ><i
                                class="fa-solid fa-clock-rotate-left p-1 m-1"></i>
                            Recent</a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link starred-link" href="#" onclick="StarredFilesShow()"><i
                                class="fa-regular fa-star p-1 m-1"></i>
                            Starred</a>
                    </li>

                </ul>
            </div>

        </div>
    </div>


    <div class="col-lg-10 files">
        <div class="container m-auto">
            <div class="row d-flex ">
                <div class="col-lg-1 p-4 mt-2">
                    <a href="services.html">
                        <i class="fas fa-arrow-left fa-2x"></i>
                    </a>
                </div> <!-- back button -->
                <form action="{{route('report')}}" method="get">
                <div class="col-lg-4 p-4 d-flex search">

                    <input name="name" type="search" class="form-control" placeholder="Find Document" height="20px" required>
                  <button style="border-style: none;background-color: white">  <i class="fa  fa-search m-1 p-2" aria-hidden="true"></i></button>

                </div> <!-- search -->
                </form>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 hstack gap-2  ms-auto user">
                    <div class=" ms-auto mt-4">
                        <h6>Dr/ Ali Mohammed</h6>
                        <p class="text-muted">
                            Regenerative medicine specialist
                        </p>
                    </div>
                    <div class="hstack gap-2 ">
                        <a href="profile.html"> <img src="images/mydoctor.jpg" alt="user-photo" width="60px"></a>

                    </div>

                </div>
                <div class="col-lg-1"></div>



            </div> <!-- end of row doctor photo-->

            <div class="RecentFilesName">


                <h3>Reports</h3>
                <div class="row p-2 m-2 report-label">
                    <div class="col-lg-3 ">
                        <center>
                            <h5 class="p-2">File Name</h5>
                        </center>


                    </div>
                    <div class="col-lg-3">
                        <center>
                            <h5 class="p-2">Owner</h5>
                        </center>


                    </div>
                    <div class="col-lg-3">
                        <center>
                            <h5 class="p-2">Last Modified</h5>
                        </center>


                    </div>
                    <div class="col-lg-3">
                        <center>
                            <h5 class="p-2">Starred</h5>
                        </center>


                    </div>

                </div> <!-- end headline row -->


                <?php $i=1 ?>
                @foreach($pendings as $pending)
                <div class="row p-1 m-1 r4">
                    <div class="col-lg-3 p-2 name" >

                        <a href="{{route('show',$pending->id)}}"><p class="text-capitalize">  {{$pending->mother_name_ar}}

                            </p></a>
                    </div>
                    <div class="col-lg-3 p-2 owner">
                        <p class="text-capitalize">Mona </p>
                    </div>
                    <div class="col-lg-3 p-2  modified">
                        <p class="text-capitalize">{{\Carbon\Carbon::parse($pending->created_at)->diffForHumans() }}</p>

                    </div>

                        <div class="col-lg-3 p-2  name">
                            <a href="{{route('start',$pending->id)}}"><p class="ms-5 text-capitalize"> <i class="fa-regular fa-star  ms-5"
                                                                                                    @if($pending->start ==1) style="color: yellow;" @else style="color: black;" @endif></i></p></a>
                        </div>

                </div> <!-- row1 data -->

                        <?php $i++ ?>
                @endforeach
            </div> <!-- end of all report files -->



            <div class="RecentFilesName">


                <h3>Recent</h3>
                <div class="row p-2 m-2 report-label">
                    <div class="col-lg-3 ">
                        <center>
                            <h5 class="p-2">File Name</h5>
                        </center>


                    </div>
                    <div class="col-lg-3">
                        <center>
                            <h5 class="p-2">Owner</h5>
                        </center>


                    </div>
                    <div class="col-lg-3">
                        <center>
                            <h5 class="p-2">Last Modified</h5>
                        </center>


                    </div>
                    <div class="col-lg-3">
                        <center>
                            <h5 class="p-2">Starred</h5>
                        </center>


                    </div>

                </div> <!-- end headline row -->

                @foreach($resents as $resent)
                <div class="row p-1 m-1 r4">
                    <div class="col-lg-3 p-2  name">
                        <a href="{{route('show',$resent->id)}}"><p class="text-capitalize"> {{$resent->mother_name_ar}}</p></a>
                    </div>
                    <div class="col-lg-3 p-2 owner">
                        <p class="text-capitalize">Mona Zaher</p>
                    </div>
                    <div class="col-lg-3 p-2  modified">
                        <p class="text-capitalize">{{\Carbon\Carbon::parse($resent->created_at)->diffForHumans() }}</p>

                    </div>
                    <div class="col-lg-3 p-2  name">
                        <a href="{{route('start',$resent->id)}}"><p class="ms-5 text-capitalize"> <i class="fa-regular fa-star  ms-5"
                                                                                                      @if($resent->start ==1) style="color: yellow;" @else style="color: black;" @endif></i></p></a>
                    </div>

                </div> <!-- row1 data -->
                @endforeach




            </div> <!-- end of recent report files -->



            <div class="RecentFilesName">


                <h3>Starred</h3>
                <div class="row p-2 m-2 report-label">
                    <div class="col-lg-4 ">
                        <center>
                            <h5 class="p-2">File Name</h5>
                        </center>


                    </div>
                    <div class="col-lg-4">
                        <center>
                            <h5 class="p-2">Owner</h5>
                        </center>


                    </div>
                    <div class="col-lg-4">
                        <center>
                            <h5 class="p-2">Last Modified</h5>
                        </center>


                    </div>

                </div> <!-- end headline row -->

                @foreach($starts as $start)

                <div class="row p-1 m-1 r4">
                    <div class="col-lg-4 p-2  name">
                        <a href="{{route('show',$start->id)}}"><p class="ms-5 text-capitalize">{{$start->mother_name_ar}}</p></a>
                    </div>
                    <div class="col-lg-4 p-2 owner">
                        <p class="text-capitalize">Mona</p>
                    </div>
                    <div class="col-lg-4 p-2  modified">
                        <p class="text-capitalize">{{\Carbon\Carbon::parse($start->created_at)->diffForHumans() }}</p>

                    </div>

                </div> <!-- row2 data -->
                @endforeach


            </div> <!-- end of starred report files -->




        </div><!-- container of files -->

    </div> <!-- end of files -->
</div>






<script>
    var rowColor = document.getElementsByClassName('r4')
    var all = document.getElementsByClassName('allFiles-link')[0]
    var recent = document.getElementsByClassName('recent-link')[0]
    var star = document.getElementsByClassName('starred-link')[0]


    for (i = 0; i < rowColor.length; i++) {

        if (i % 2 == 0) {
            rowColor[i].style.background = "#F8F8F8"
        }
    }


    var x = document.getElementsByClassName('RecentFilesName')

    x[0].style.display = "block"




    function allFilesShow(){

        x[0].style.display = "block"
        all.style.color="#0EB0BA"
        all.style.backgroundColor="rgb(255, 255, 255)"
        all.style.borderRadius="70px"
        x[1].style.display="none"
        recent.style.color="rgb(255,255,255)"
        recent.style.backgroundColor="rgba(255,255,255,0)"


        x[2].style.display="none"
        star.style.color="rgb(255,255,255)"
        star.style.backgroundColor="rgba(255,255,255,0)"



    }
    function RecentFileShow(){
        x[0].style.display="none"
        all.style.color="rgb(255,255,255)"
        all.style.backgroundColor="rgba(255,255,255,0)"


        x[1].style.display="block"
        recent.style.color="#0EB0BA"
        recent.style.backgroundColor="rgb(255, 255, 255)"
        recent.style.borderRadius="70px"

        x[2].style.display="none"
        star.style.color="rgb(255,255,255)"
        star.style.backgroundColor="rgba(255,255,255,0)"


    }

    function StarredFilesShow(){
        x[0].style.display="none"
        all.style.color="rgb(255,255,255)"
        all.style.backgroundColor="rgba(255,255,255,0)"


        x[1].style.display="none"
        recent.style.color="rgb(255,255,255)"
        recent.style.backgroundColor="rgba(255,255,255,0)"


        x[2].style.display="block"
        star.style.color="#0EB0BA"
        star.style.backgroundColor="rgb(255, 255, 255)"
        star.style.borderRadius="70px"
    }
</script>

<script src="JS/bootstrap.bundle.min.js"></script>
<script src="JS/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script src="JS/aos.js"></script>
<script>
    AOS.init();
</script>

</body>

</html>
