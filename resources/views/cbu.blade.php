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
                    <h5><a class="nav-link active" aria-current="page" >Contact</a></h5>
                </div><!-- d-flex 3 -->
                <div class="d-flex">
                    <div><i class="fa fa-check" aria-hidden="true"></i></div>
                    <h5><a class="nav-link active" aria-current="page" href="{{route('cbu',$id)}}">CBU Data</a></h5>
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
                        <a href="contactdata.html">
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
                            <h1>CBU Data</h1>
                        </div>
                        <div class="col-2">
                            <p>Page 3 of 4</p>

                        </div>

                    </div><!--cbu-->

                    <form action="{{route('cbu.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="row donors">
<input type="hidden" name="donar_id" value="{{$id}}">
                        <div class="col-6">
                            <div class="d-flex donorform" style="margin-left:2px;">

                                    <span
                                        style="color: #db0000; position: relative;top:30px;left:-3px; margin:5px auto;">*</span>
                                <input name="hospital_name" type="text" class="form-control myformcontrol" placeholder="Hospital name "
                                       required id="entry1">
                            </div>
                            @error('hospital_name')
                            <span class=" text-danger">{{$message}}</span>
                            @enderror
                            <div class="d-flex">
                                    <span
                                        style="color: #db0000; position: relative;top:30px;left:-3px; margin:5px auto;">*</span>
                                <select name="donation_type" id="RH_system 1" class="form-control myformcontrol"
                                        required>
                                    <option value="" class="Donation_type">Donation type</option>
                                    <option value="Public">Public</option>
                                    <option value="Private">Private</option>
                                </select>
                            </div>
                            @error('donation_type')
                            <span class=" text-danger">{{$message}}</span>
                            @enderror


                        </div>
                        <div class="col-6">

                            <input name="hospital_number" type="number" class="form-control myformcontrol" placeholder="Hospital number"
                                   id="entry3">
                            @error('hospital_number')
                            <span class=" text-danger">{{$message}}</span>
                            @enderror

                            <div class="d-flex" style="margin-top: -41px; margin-left: -10px;">
                                    <span
                                        style="color: #db0000; position: relative;top:30px;left:-3px; margin:5px auto;">*</span>
                                <select name="stem_sells" id="source" class="form-control myformcontrol" required>
                                    <option value="" class="source">Source of stem cells</option>
                                    <option value="Cord_tissue">Cord Tissue</option>
                                    <option value="Cord_blood">Cord Blood</option>
                                    <option value="Amniotic">Amniotic Fluid</option>
                                </select>
                            </div>
                            @error('stem_sells')
                            <span class=" text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-12">


                            <div class="d-flex chosefile">
                                    <span
                                        style="color: #db0000; position: relative;top:30px;left:-15px; margin:5px auto;">*</span>
                                <div class="image-upload" style="margin-top:55px; margin-right: -30px; z-index: 2;">
                                    <label for="file-input" >
                                        <img src="{{asset('front/images/attach.svg')}}"/>
                                    </label>

                                    <input name="donar_consest" id="file-input" type="file" />
                                </div>
                                <input type="text" class="form-control myformcontrol attach"
                                       placeholder="Cord Blood Donar Consent" id="entry4">
                            </div>
                            @error('donar_consest')
                            <span class=" text-danger">{{$message}}</span>
                            @enderror

                            <div class="d-flex chosefile">
                                    <span
                                        style="color: #db0000; position: relative;top:30px;left:-15px; margin:5px auto;">*</span>
                                <div class="image-upload" style="margin-top:55px; margin-right: -30px; z-index: 2;">
                                    <label for="file2-input" >
                                        <img src="{{asset('front/images/attach.svg')}}"/>
                                    </label>

                                    <input name="donar_agreement" id="file2-input" type="file" />
                                </div>
                                <input type="text" class="form-control myformcontrol attach"
                                       placeholder="Cord Blood Donor Agreement" id="entry5">
                            </div>
                            @error('donar_agreement')
                            <span class=" text-danger">{{$message}}</span>
                            @enderror
                            <div class="d-flex chosefile">
                                    <span
                                        style="color: #db0000; position: relative;top:30px;left:-15px; margin:5px auto;">*</span>
                                <div class="image-upload" style="margin-top:55px; margin-right: -30px; z-index: 2;">
                                    <label for="file-input3" >
                                        <img src="{{asset('front/images/attach.svg')}}"/>
                                    </label>

                                    <input name="unit_image" id="file-input3" type="file" />
                                </div>
                                <input type="text" class="form-control myformcontrol attach" placeholder="CBU Unit Image"
                                       id="entry6">

                            </div>
                            @error('unit_image')
                            <span class=" text-danger">{{$message}}</span>
                            @enderror
                            <div class="offset-10"> <button  class="btn" style="width:100%;">Next</button>
                            </div>
                        </div><!--inputs-->
                        <div class="row myfiles">


                        </div>
                    </div>
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
