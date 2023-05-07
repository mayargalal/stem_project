<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEMA-Regstration</title>
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
        <div class="col-md-2 dash"
             style="background: linear-gradient(to bottom, #0EB0BA, #304BAB); height: 100vh;">
            <h2>Unit Admission</h2>
            <nav class="nav flex-column">
                <div class="d-flex">
                    <div>  <i class="fa fa-check" aria-hidden="true"></i></div>
                    <h5><a class="nav-link active" aria-current="page" href="{{route('register')}}">Registration</a></h5>
                </div> <!-- d-flex 1 -->
                <div class="d-flex">
                    <div><i class="fas fa-ellipsis-h"></i></div>
                    <h5><a class="nav-link active" aria-current="page" >Contact</a></h5>
                </div><!-- d-flex 3 -->
                <div class="d-flex">
                    <div><i class="fas fa-ellipsis-h" aria-hidden="true"></i></div>
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
                        <a href="services.html">
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

                        <a href="profile.html"> <img src="{{asset('front/images/nurse.svg')}}" alt="user-photo" width="60px"></a>

                    </div>
                    <div class="col-lg-1"></div>


                </div>
                <div class="row">
                    <div class="d-flex donrhead mt-5">
                        <div class="col-10" style="color: #0EB0BA;">
                            <h1>Donar Data</h1>
                        </div>
                        <div class="col-2">
                            <p>Page 1 of 2</p>
                        </div>

                    </div><!--donarhead-->

<form action="{{route('register.store')}}" method="post">
    @csrf
    <input type="hidden" value="2" name="nurse_id">
                    <div class="row donors">

                        <div class="col-6">

                            <div class="d-flex donorform">
                                <span style="color: #db0000; position: relative;top:30px;left:-3px; margin:5px auto;">*</span>
                                <input name="mother_name_ar" type="text" class="form-control myformcontrol" placeholder="Mother name in Arabic " required id="entry1">
                                @error('mother_name_ar')
                                <span class=" text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="d-flex donorform">
                                <span style="color: #db0000; position: relative;top:30px;left:-3px; margin:5px auto;">*</span>
                                <input name="national_id" type="text" class="form-control myformcontrol" placeholder="National ID/passport number"required id="entry2">

                            </div>
                            @error('national_id')
                            <small class=" text-danger">{{$message}}</small>
                            @enderror

                            <input name="region" type="text" class="form-control myformcontrol" placeholder="Region" id="entry3">

                            <input name="date" type="date" class="form-control myformcontrol" placeholder="Date of birth" id="entry4">


                            <select name="rh_first_system" id="RH_system 1" class="form-control myformcontrol">
                                <option value="" class="RH" >RH system 1</option>
                                <option value="C">C</option>
                                <option value="c">c</option>
                                <option value="D">D</option>
                                <option value="d">d</option>
                                <option value="E">E</option>
                                <option value="e">e</option>
                            </select>

                            <input name="miner_group" type="text" class="form-control myformcontrol" placeholder="Miner group" id="entry6">

                        </div>
                        <div class="col-6">

                            <input name="mother_name_en" type="text" class="form-control myformcontrol" placeholder="Mother name in English" id="entry7">
                            <input name="nationality" type="text" class="form-control myformcontrol" placeholder="Nationality" id="entry8">
                            <div class="d-flex donorform">
                                <span style="color: #db0000; position: relative;top:-11px;left:-3px; margin:5px auto;">*</span>
                                <select name="blood_group" id="Blood Group" class="form-control myformcontrol">
                                    <option value="{{null}}" class="BloodGroup">Blood Group</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>

                                </select>

                            </div>
                            @error('blood_group')
                            <span class=" text-danger">{{$message}}</span>
                            @enderror

                            <select name="rh" id="RH" class="form-control myformcontrol">
                                <option value="RH"class="RH">RH</option>
                                <option value="Positive">Positive</option>
                                <option value="Negative">Negative</option>


                            </select>
                            <select name="rh_second_system" id="RH_system2" class="form-control myformcontrol">
                                <option value="RH_system2" class="RH">RH system2</option>
                                <option value="C">C</option>
                                <option value="c">c</option>
                                <option value="D">D</option>
                                <option value="d">d</option>
                                <option value="E">E</option>
                                <option value="e">e</option>

                            </select>
                            <input name="result" type="text" class="form-control myformcontrol" placeholder="Result" id="entry12">
                            <div class="offset-9"> <button  class="btn" style="width:100%;">Next</button>
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
