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
<nav class="navbar navbar-expand-lg ps-3 navbar-light fixed-top"
     style="background: linear-gradient(to right,#0EB0BA, #3080ab);">

    <div class="container-fluid">
        <a class="navbar-brand ms-5 ps-5" href="#"><img src="images/White logo - no background.png" alt="STEMA"
                                                        width="100px"></a>

        <div class="collapse navbar-collapse ms-5 ps-5" id="navbarSupportedContent">
            <form style="width:100% " action="{{route('pending')}}" method="get">
            <input name="name" type="text" placeholder="Search" id="search">




            <button style="border-style: none;background-color: inherit"><i class="fas fa-search"
               style="border-radius: 100%; border:0EB0BA 2px solid; padding:10px;color: white;background-color:#0EB0BA; margin: 10px;"></i></button>
            </form>
        </div>


        <div class="d-flex" >
            <div style="color: white;" >
                <h5>Laila Ahmed</h5>
                <p>Nurse</p>
            </div>
            <div>
                <img src="images/nurse.svg" alt="nurse" style="margin-right:50px; margin-left: 20px;" >
            </div>

        </div>

    </div>
    </div>

</nav>

<section style="margin-top:10%;">
    <div>
        <h2 style="color: #0EB0BA;margin-left:5%;">Pending Files</h2>
    </div>
    <div class="container">
        <div class="row">

            <table class="table table-striped"style="text-align:center;">
                <thead>
                <tr>
                    <button  class="headline">No.<th scope="col"></th></button>
                    <button  class="headline">File name<th scope="col"></th></button>
                    <button  class="headline" style="margin-left:15%;">Created By<th scope="col"></th></button>
                    <button  class="headline" style="margin-left:13%;">Last modified<th scope="col"></th></button>

                </tr>
                </thead>
                <tbody>
                <?php $i=1 ?>
                @foreach($pendings as $pending)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td class="filename">{{$pending->mother_name_ar}}</td>
{{--                    <td class="gry">{{$pending->nurse->name}}</td>--}}
                    <td class="gry">Mona</td>
                    <td class="gry">{{\Carbon\Carbon::parse($pending->created_at)->diffForHumans() }} </td>



                </tr>
                    <?php $i++ ?>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>
    <!-- modal -->
    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">


                <div class="modal-body text-center">

                    <form action="#">
                        <h5>Are you sure you want to delete this user</h5>
                        <div class="mybtn">
                            <button type="button" class="cancel" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="delete">Delete</button>
                        </div>



                    </form>
                </div>


            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!--modal  -->

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
