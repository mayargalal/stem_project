<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEMA-Collection</title>
    <link rel="shortcut icon" href="{{asset('front/images/Color logo - no background.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('front/CSS/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/aos.css')}}">
    <link rel="stylesheet" href="{{asset('front/CSS/style.css')}}">
</head>

<body>
<!-- collection 1 -->
<section class="container-fluid">

    <div class="row">

        <div class="col-lg-3 col-md-4  collectionf">
            <!-- <div class="collectionf"> -->
            <div class=" ps-4 pe-4  leftcollection ">
                <div class="contaier mt-5 col-lg-12 flex-column justify-content-center">
                    <h3 id="unitAdd">Unit Admission</h3>

                    <ul class="navbar-nav justify-content-center leftco">
                        <li class="nav-item licoll circ1">
                            <div class="rr bg-light vertline">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <a>
                                <p class="ps-3">Registration</p>
                            </a>
                        </li>

                        <!-- 1 -->
                        <li class="nav-item licoll ">
                            <div class="rr bg-light vertline">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <a >
                                <p class="ps-3">CBU Data</p>
                            </a>
                        </li>

                        <!-- 2 -->
                        <li class="nav-item licoll circ3">
                            <div class="rr bg-light ">
                                <i class="fas fa-ellipsis-h"></i>
                            </div>
                            <a href="{{route('collection',$id)}}">
                                <p class="ps-3">Collection </p>
                            </a>
                        </li>
                        <!-- 3 -->
                    </ul>


                </div>
                <!-- <i class="fa fa-circle circleleft"></i>
                    <i class="fa fa-circle circleleft cl2"></i> -->
            </div>
            <!-- </div> -->
        </div>


        <!-- end left side -->

        <div class="col-md-9   rightcollside">
            <div class="pt-3 d-flex trightcollection ">
                <button type="button" class="ps-4 " style="background: transparent; border: none;" id="prevBtn"
                        onclick="nextPrev(-1)">
                    <i class="fa fa-arrow-left arrowprevee"></i>
                </button>
                <div class="ps-4 pt-2"><a href="cbu.html" style="display: none;" id="prevve"><i
                            class="fa fa-arrow-left arrowprevee"></i></a> </div>
                <div class="lilanurse pt-2">
                    <a href="profile.html" class="text-black text-decoration-none">
                        <div class="pe-3 text-capitalize">
                            <h6>lila ahmed</h6>
                            <p>nurse </p>
                        </div>

                        <div class="">
                            <img src="images/nurse.svg" alt="" srcset="">
                        </div>
                    </a>
                </div>


            </div>
            <!-- end top right side -->
            <!--********************************************************************* -->
            <div class="col-md-12 mt-3  container-fluid ">

                <form action="{{route('collection.store')}}" method="post" id="regForm" class=" ps-2 pb-3">
                    @csrf
                    <div class="tab">

                        <input type="hidden" name="donar_id" value="{{$id}}">
                        <div class="d-flex pt-3 justify-content-between">
                            <h5 class="ps-2 collh5">Cord Eligibility Criteria</h5>
                            <p class="me-1 mt-2 pagenum">Page 1 of 4</p>

                        </div>
                        <!--1 row -->
                        <div class="col-lg-12 col-sm-6 ">
                            <div class="d-flex">
                                <input type="text" class="inputUnit divofform ps-3" id="cordLength"
                                       name="cord_length" placeholder="Cord Length">
                                <input type="text" class="inputUnit ps-3 " id="placentalWeight"
                                       name="placental_weight" placeholder="Placental Weight">
                            </div>

                            <div class="listvessels d-flex">
                                <input type="text" class="inputUnit divofform ps-3" id="cordPathology"
                                       name="cord_pathology" placeholder="Cord Pathology ">
                                <select name="three_vesseles" class="inputUnit selectcollec pe-3" id="cordVessels">
                                    <option value class="d-none">Cord has three Vessels</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>

                            </div>
                        </div>
                        <!-- end form1 -->
                        <div class="d-flex radiocollection ">
                            <h5 class="ps-1 collh5">Neonatal Eligibility Criteria </h5>
                            <p class="ms-5 mt-2 fw-bold"><span style="color:red;">*</span> Are there any infectious
                                diseases?</p>
                            <div class="ms-4 mt-2 ">
                                <input type="radio" id="yes" name="infectious_diseases" value="yes">
                                <label for="yes" class="me-3">Yes</label>
                                <input type="radio" id="no" name="infectious_diseases" value="no">
                                <label for="no">No</label>
                            </div>
                        </div><!--top form2-->
                        <div class="col-lg-12 col-sm-6 ">

                            <!-- <input type="text" class="inputUnit  divofform ps-3" id="" name=""
                                placeholder="Specify your answer" required style="width: 99.75%;"> -->
                            <div class=" d-flex inputUnit ps-3" style="width: 99.75%; ">
                                <span class="pt-3">*</span>
                                <input type="text" id="specifyans" name="answer" class="inputrequiredYes"
                                       placeholder="Specify your answer">
                            </div>

                            <div class="d-flex">
                                <input type="text" class="inputUnit divofform ps-3" id="NeonatalApgarScore1m"
                                       name="NeonatalApgarScore1m" placeholder="Neonatal Apgar Score (1 min )">
                                <input type="text" class="inputUnit ps-3 " id="NeonatalApgarScore10m"
                                       name="NeonatalApgarScore10m" placeholder="Neonatal Apgar Score (10 min )">
                            </div>
                            <div class="listNeonatal d-flex">
                                <input type="text" class="inputUnit divofform ps-3" id="NeonatalordeOfBirth"
                                       name="order_birth" placeholder="Neonatal order of Birth ">
                                <select name="gender" class="inputUnit selectcollec pe-3"
                                        id="NeonatalGender">
                                    <option value class="d-none">Neonatal gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>

                            </div>
                            <div class="d-flex">
                                <input type="text" class="inputUnit divofform ps-3" id="NeonatalHead"
                                       name="head_circum" placeholder="Neonatal Head Circumference">
                                <input type="text" class="inputUnit ps-3 " id="NeonatalChest" name="chest"
                                       placeholder="Neonatal Chest measurement">
                            </div>
                        </div>

                    </div>
                    <!-- tab 1-->
                    <!-- ------------------------------------------ -->
                    <!-- ------------------------------------------ -->

                    <!-- tab 4-->






                    <!-- <input type="submit" value="Send" class="btn mt-1 px-5" style="font-size: 17px;margin-left:84%;width: 180px;"> -->
                    <!-- <button type="button" class="btn mt-1 px-5"
                        style="font-size: 17px;margin-left:84%;width: 180px;" id="nextBtn"
                        onclick="nextPrev(1)">Next</button> -->


                    <div class=" mt-4  ">
                        <button type="submit" class="btn mt-4 px-5 "
                                style="font-size: 17px;margin-left:84%;width: 170px;"
                                >finish</button>
                    </div>


                </form>
                <!-- form -->
            </div>
            <!-- end bottom right side -->
        </div>
        <!-- end rigth side -->


    </div><!--row-->
</section>








<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevve").style.display = "inline";
            document.getElementById("prevBtn").style.display = "none";
        } else {
            // document.getElementById("prevBtn").innerHTML="<i class='fa fa-arrow-left '>";
            document.getElementById("prevve").style.display = "none";
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Send";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:

    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        return valid; // return the valid status
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
