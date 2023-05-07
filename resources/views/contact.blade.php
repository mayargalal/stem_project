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

<body>
<section class="container-fluid">

    <div class="row">
        <div class="col-lg-2 col-md-3 dash"
             style="background: linear-gradient(to bottom, #0EB0BA, #304BAB); height: 100vh;">
            <h2>Unit Admission</h2>
            <nav class="nav flex-column">
                <div class="d-flex">
                    <div><i class="fa fa-check" aria-hidden="true"></i></div>
                    <h5><a class="nav-link active" aria-current="page" > Registration</a></h5>
                </div><!-- d-flex 1 -->
                <div class="d-flex">
                    <div><i class="fas fa-ellipsis-h"></i></div>
                    <h5><a class="nav-link active" aria-current="page" href="{{route('contact',$id)}}">Contact</a></h5>
                </div><!-- d-flex 3 -->
                <div class="d-flex">
                    <div><i class="fa fa-check" aria-hidden="true"></i></div>
                    <h5><a class="nav-link active" aria-current="page" >CBU Data</a></h5>
                </div><!-- d-flex 2 -->
                <div class="d-flex">
                    <div><i class="fas fa-ellipsis-h" aria-hidden="true"></i></div>
                    <h5><a class="nav-link active" aria-current="page" >Collection</a></h5>
                </div><!-- d-flex 2 -->

            </nav>

        </div>
        <!--section2-->

        <div class="col-10 files">
            <div class="container m-auto container-fluid">
                <div class="d-flex ">
                    <div class="col-lg-1 p-4">
                        <a href="regisrtation.html">
                            <i class="fas fa-arrow-left fa-2x"></i>
                        </a>
                    </div> <!-- back button -->
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5 hstack gap-2  ms-auto user">
                        <div class=" ms-auto ">
                            <h6>Laila Ahmed</h6>
                            <p class="text-muted">
                                Nurse
                            </p>
                        </div>

                        <a href="profile.html"> <img src="images/nurse.svg" alt="user-photo" width="60px"></a>

                    </div>
                    <div class="col-lg-1"></div>


                </div>
                <div class="row">
                    <div class="d-flex donrhead mt-5">
                        <div class="col-10" style="color: #0EB0BA;">
                            <h1>Contact Data</h1>
                        </div>
                        <div class="col-2">
                            <p>Page 2 of 4</p>
                        </div>

                    </div><!--donarhead-->


                    <form action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="row donors">
                            <input type="hidden" name="donar_id" value="{{$id}}">
                            <div class="col-6">
                                <input name="phone" type="number" class="form-control myformcontrol" placeholder="Phone number 1 "id="entry1">
                                @error('phone')
                                <span class=" text-danger">{{$message}}</span>
                                @enderror
                                <input name="first_address" type="text" class="form-control myformcontrol" placeholder="Address 1" id="entry2">
                                @error('first_address')
                                <span class=" text-danger">{{$message}}</span>
                                @enderror

                            </div>
                            <div class="col-6">

                                <input name="mobile" type="number" class="form-control myformcontrol" placeholder="Phone number 2" id="entry3">
                                @error('mobile')
                                <span class=" text-danger">{{$message}}</span>
                                @enderror
                                <input name="second_address" type="text" class="form-control myformcontrol" placeholder="Address 2" id="entry4">
                                @error('second_address')
                                <span class=" text-danger">{{$message}}</span>
                                @enderror
                                <div class="offset-9"> <button class="btn" style="width:100%;">Next</button>
                                </div>
                            </div>

                        </div><!--inputs-->
                    </form>
                </div>



            </div>
        </div>


    </div><!--row-->
</section>







<script src="{{asset('front/JS/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('front/JS/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>
<script src="{{asset('front/JS/aos.js')}}"></script>
<script>
    AOS.init();
</script>
</body>

</html>
