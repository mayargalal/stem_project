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
<nav class="navbar navbar-expand-lg ps-3 navbar-light " style="background-color:#0EB0BA;">
    <div class="container-fluid">
        <p class="navbar-brand ms-5 ps-5 final-nav">Final Report</p>
        <div class="collapse navbar-collapse ms-5 ps-5" id="navbarSupportedContent">

            <div class="d-flex hstack gap-2 ms-auto me-1 user-services">
                <div class="pt-3 ">
                    <h6>Dr/ Ali Mohammed</h6>
                    <p>
                        Regenerative medicine specialist
                    </p>
                </div>

                <a href="profile.html"> <img src="images/mydoctor.jpg" alt="user-photo" width="60px"></a>

            </div> <!-- end of doctor profile photo -->



        </div>
    </div> <!-- end of container -->
</nav> <!-- end nav -->
<div class="head-line-rows">
    <div class="row">
        <div class="link-logo">
            <a href="services.html"><img src="images/Color logoo - no background.svg" width="200px" alt="Stema-Logo"
                                         class=" p-2 m-2">
            </a>
        </div>

    </div> <!-- logo -->
    <div class="row ">
        <center>
            <h1 class=" p-2 m-2">Final Report</h1>
        </center>
    </div> <!-- headline -->
    <div class="row ">
        <p class="text-muted pt-1 pe-1 ps-3 pb-0 m-2 mb-0">Reported by Laila Ahmed at 2-6-2021 02:38 pm</p>
    </div> <!-- date and time text-mute -->
</div> <!-- end of head-line-rows -->


<div class="report-content">
    <div class="mother-data">
        <div class="p-0 m-0 content-label">
            <h2 class="ps-5 text-capitalize">Mother Data</h2>
        </div>

        <form class="d-flex form-output p-2 m-1">
            <div class="col mb-3 ps-5 p-2 m-1 ">
                <label for="inputText" class="form-label text-capitalize">Mother Name: </label>
                <input type="text" class="report-output " id="inputText" value="{{$report->mother_name_ar}}" disabled>
            </div>
            <div class="col mb-3 ps-5 p-2 m-1 ">
                <label for="inputText" class="form-label text-capitalize">Hospital Name: </label>
                <input type="text" class="report-output " id="inputText" value="{{$report->cpus->hospital_name}}" disabled>
            </div>
        </form>
    </div> <!-- mother data -->

    <div class="final-report">
        <div class="p-0 m-0 content-label">
            <h2 class="ps-5 text-capitalize">final report</h2>
        </div>

        <form class="d-flex form-output p-2 m-1">
            <div class="col mb-3 ps-5 p-2">
                <label for="inputText" class="form-label text-capitalize">Neonatal Eligibility Criteria:</label>
                <input type="text" class="report-output" id="inputText" style="width: 452px;" disabled>
            </div>
        </form>
    </div> <!-- final report -->

    <div class="cbu-data p-0 m-0">
        <div class="p-0 m-0 content-label">
            <h2 class="ps-5 text-capitalize">CBU Data</h2>
        </div>

        <form class="d-flex form-output p-0 m-0">
            <div class="col-6 d-block p-2 m-1">
                <div class="col mb-3 ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Collection Date:</label>
                    <input type="text" class="report-output " id="inputText" style="width: 390px;" disabled>
                </div>
                <div class="col mb-3 ps-5 p-2 ">
                    <label for="inputText" class="form-label text-capitalize">Received to bank date:</label>
                    <input type="text" class="report-output " id="inputText" style="width: 313px;" disabled>
                </div>
                <div class="col mb-3 ps-5 p-2 ">
                    <label for="inputText" class="form-label text-capitalize">Net Weight of Cord Blood Unit:</label>
                    <input type="text" class="report-output " id="inputText" style="width: 220px;" disabled>
                </div>

            </div>
            <div class="col-6 d-block p-2 m-1">
                <div class="col mb-3 ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Collection Time:</label>
                    <input type="text" class="report-output " id="inputText" style="width: 410px;" disabled>
                </div>
                <div class="col mb-3 ps-5 p-2 ">
                    <label for="inputText" class="form-label text-capitalize">Received to Bank Time:</label>
                    <input type="text" class="report-output " id="inputText" style="width: 325px;" disabled>
                </div>
                <div class="col mb-3 ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Actual Volume of cord Blood Unit:</label>
                    <input type="text" class="report-output " id="inputText" style="width: 200px;" disabled>
                </div>

            </div>
        </form>
    </div> <!-- cbu data -->

    <div class="cord-blood p-0 m-0">
        <div class="p-0 m-0 content-label">
            <h2 class="ps-5 text-capitalize">Cord Blood Unit Processing Result</h2>
        </div>

        <form class="d-flex form-output p-0 m-0">
            <div class="row d-block p-2 m-1">
                <div class="col mb-3 ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Pre-processing Total Nucleated Count TNC:&ThickSpace;</label>
                    <input type="text" class="report-output " id="inputText" disabled>
                </div>
                <div class="col mb-3 ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Post-processing Total Nucleated Count TNC:</label>
                    <input type="text" class="report-output " id="inputText" disabled>
                </div>
            </div>
            <div class="row d-block p-2 m-1">
                <div class="col mb-3 ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Pre TNC:&ThickSpace;</label>
                    <input type="text" class="report-output " id="inputText" disabled>
                </div>
                <div class="col mb-3 ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Post TNC:</label>
                    <input type="text" class="report-output " id="inputText" disabled>
                </div>
            </div>
        </form>
    </div> <!--cord-blood -->

    <div class="FC-Pre p-0 m-0">
        <div class="p-0 m-0 content-label">
            <h2 class="ps-5 text-capitalize">Flow Cytometry Pre-Processing Test Results</h2>
        </div>

        <form class=" form-output p-0 m-0">
            <div class="row p-2 m-1">

                <div class="col-6 ">
                    <div class="col mb-3 ps-5 p-2">
                        <label for="inputText" class="form-label text-capitalize">Viability Results</label>
                        <input type="text" class="report-output " id="inputText" style="width: 345px;" disabled>
                    </div>
                    <div class="col mb-3 ps-5 p-2">
                        <label for="inputText" class="form-label text-capitalize">Count of CD34 Positive Cells</label>
                        <input type="text" class="report-output " id="inputText" style="width: 200px;" disabled>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col mb-3 ps-5 p-2 ">
                        <label for="inputText" class="form-label text-capitalize">Count of Viable Cell:</label>
                        <input type="text" class="report-output " id="inputText" style="width: 360px;" disabled>
                    </div>
                    <div class="col mb-3 ps-5 p-2">
                        <label for="inputText" class="form-label text-capitalize">Dilution Factor:</label>
                        <input type="text" class="report-output " id="inputText" style="width: 420px;" disabled>
                    </div>
                </div>
            </div> <!-- row end -->

            <div class="col-12 p-2 m-1 ms-3">
                <div class="col mb-3 ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Average Viable CD34 Positive Cells Percentage: &ThickSpace;</label>
                    <input type="text" class="report-output " id="inputText" style="width: 800px;" disabled>
                </div>
            </div>
            <div class="col-12 p-2 m-1 ms-3">
                <div class="col mb-3 ps-5 p-2 ">
                    <label for="inputText" class="form-label text-capitalize">Average Viable Absolute CD34 Positive Cells Count: &ThickSpace;</label>
                    <input type="text" class="report-output " id="inputText" style="width: 745px;" disabled>
                </div>
            </div>
            <div class="col-12 p-2 m-1 ms-3">
                <div class="col mb-3 ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Average Viable CD34 / CD45 Positive Cells Percentage: &ThickSpace;</label>
                    <input type="text" class="report-output " id="inputText" style="width: 710px;" disabled>
                </div>
            </div>

        </form>
    </div> <!--FC-Pre-->

    <div class="FC-Post p-0 m-0">
        <div class="p-0 m-0 content-label">
            <h2 class="ps-5 text-capitalize">Flow Cytometry Post-Processing Test Results</h2>
        </div>

        <form class=" form-output p-0 m-0">
            <div class="row p-2 m-1">

                <div class="col-6 ">
                    <div class="col mb-3 ps-5 p-2">
                        <label for="inputText" class="form-label text-capitalize">Viability Results</label>
                        <input type="text" class="report-output " id="inputText" style="width: 345px;" disabled>
                    </div>
                    <div class="col mb-3 ps-5 p-2">
                        <label for="inputText" class="form-label text-capitalize">Count of CD34 Positive Cells</label>
                        <input type="text" class="report-output " id="inputText" style="width: 200px;" disabled>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col mb-3 ps-5 p-2">
                        <label for="inputText" class="form-label text-capitalize">Count of Viable Cell:</label>
                        <input type="text" class="report-output " id="inputText" style="width: 360px;" disabled>
                    </div>
                    <div class="col mb-3 ps-5 p-2">
                        <label for="inputText" class="form-label text-capitalize">Dilution Factor:</label>
                        <input type="text" class="report-output " id="inputText" style="width: 420px;" disabled>
                    </div>
                </div>
            </div> <!-- row end -->

            <div class="col-12 p-2 m-1 ms-3">
                <div class="col mb-3 ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Average Viable CD34 Positive Cells Percentage: &ThickSpace;</label>
                    <input type="text" class="report-output " id="inputText" style="width: 800px;" disabled>
                </div>
            </div>
            <div class="col-12 p-2 m-1 ms-3">
                <div class="col mb-3 ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Average Viable Absolute CD34 Positive Cells Count: &ThickSpace;</label>
                    <input type="text" class="report-output " id="inputText" style="width: 745px;" disabled>
                </div>
            </div>
            <div class="col-12 p-2 m-1 ms-3">
                <div class="col mb-3 ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Average Viable CD34 / CD45 Positive Cells Percentage: &ThickSpace;</label>
                    <input type="text" class="report-output " id="inputText" style="width: 710px;" disabled>
                </div>
            </div>

        </form>
    </div> <!--FC-Post-->

    <div class="cryo-details p-0 m-0">
        <div class="p-0 m-0 content-label">
            <h2 class="ps-5 text-capitalize">Cryopreservation Details</h2>
        </div>

        <form class="d-flex form-output p-0 m-0">
            <div class="row d-block p-2 m-1">
                <div class="col mb-3 ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">DMSO Injection Date:  </label>
                    <input type="text" class="report-output " id="inputText" style="width: 300px;" disabled>
                </div>

                <div class="col mb-3 ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Start Freezing Time:</label>
                    <input type="text" class="report-output " id="inputText"  style="width: 320px;" disabled>
                </div>
                <div class="col mb-3 ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">Start Temperature:</label>
                    <input type="text" class="report-output " id="inputText" style="width: 333px;" disabled>
                </div>
            </div>
            <div class="row d-block p-2 m-1">
                <div class="col mb-3 ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">DMSO Injection End Time:</label>
                    <input type="text" class="report-output " id="inputText" style="width: 430px;" disabled>
                </div>
                <div class="col mb-3 ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">End Freezing Time:</label>
                    <input type="text" class="report-output " id="inputText"  style="width: 515px;" disabled>
                </div>
                <div class="col mb-3 ps-5 p-2">
                    <label for="inputText" class="form-label text-capitalize">End-point Temperature:</label>
                    <input type="text" class="report-output " id="inputText" style="width: 460px;" disabled>
                </div>
            </div>
        </form>
    </div> <!-- cryo-details-->
    <p class="sign ">Signature \</p>
    <form class="d-flex hstack gap-2 me-5 m-4 p-4" role="loging">
        <a class="btn ms-auto close m-2" href="report.html">Back</a>

        <button class="btn save m-2">Print</button>
    </form>

</div> <!-- report-content -->
</div> <!-- content -->




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
