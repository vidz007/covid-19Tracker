<!DOCTYPE html>
<html>

<head>
    <title> </title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body onload="fetch()">
    <nav class="navbar navbar-expand-lg nav_style p-3">
        <a class="navbar-brand pl-5" href="#">COVID-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5 text-capitalize">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutid">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sympid">Symptoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#preventid">prevention</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactid">Contact</a>
                </li>
            </ul>

        </div>
    </nav>
    <div class="main_header">
        <div class="row w-100 h-100">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="images/1.png" width="300" height="300">
                </div>

            </div>
            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                <div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1>Let's Stay Safe And Fight Together Against Cor<span class="corona_ani"> <img src="images/virus.png" width="100" height="100"> </span>na Virus</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- **********************latest updates*********************-->

    <section class="corona_update container-fluid">
        <div class="mb-3">
            <h3 class="text-uppercase text-center">COVID-19 LIVE UPDATES OF THE WORLD</h3>

        </div>
            <div class="table-responsive">
                <table class=" table table-bordered table-striped text-center" id="tbval">
                    <tr>
                        <th>Country</th>
                        <th>TotalConfimed</th>
                        <th>TotalRecovered</th>
                        <th>TotalDeaths</th>
                        <th>NewConfirmed</th>
                        <th>NewRecovered</th>
                        <th>NewDeaths</th>
                    </tr>
                    
                </table>

            </div>
        </div>

    </section>
    <!--*************about************ -->
    <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>About COVID-19</h1>
        </div>
        <div>
            <div class="row pt-5">
                <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
                    <img src="images/about.png" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>What is COVID-19 (Corona-Virus) </h2>
                    <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment. Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
                    <p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV). A novel coronavirus (nCoV) is a new strain that has not been previously identified in humans.</p>
                </div>
            </div>

        </div>
    </div>

    <!--*****************************corona symptoms******************************* -->
    <div class="container-fluid pt-5 pb-5" id="sympid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>Coronavirus symptoms</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/coughh.png" class="img-fluid" width="120" height="120">
                        <figcaption> cough </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/nosee.png" class="img-fluid" width="120" height="120">
                        <figcaption> runnynose </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/fever.png" class="img-fluid" width="120" height="120">
                        <figcaption> fever </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/colddd.png" class="img-fluid" width="120" height="120">
                        <figcaption> cold </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/tiredd.png" class="img-fluid" width="120" height="120">
                        <figcaption> tiredness </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/bd.png" class="img-fluid" width="120" height="120">
                        <figcaption> difficulty breathing (severe cases) </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <!--*****************************corona prevention******************************* -->
    <div class="container-fluid sub_section pt-5 pb-5" id="preventid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>6 Steps Prevention Against Coronavirus</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/hand.png" class="img-fluid" width="90" height="90">
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Wash your hands often – with soap and water, for at least 20 seconds. Alternatively, you can also use hand sanitizer, but it must contain at least 60% alcohol </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/mask.png" class="img-fluid" width="90" height="90">
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Wear a face mask – wear a face mask if think you may be sick or when around other people to reduce the risk of catching the disease. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/distance.png" class="img-fluid" width="90" height="90">
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Put distance between yourself and others – Take extra measures to put distance between yourself and others. Avoid close contact with people who are sick. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/home.png" class="img-fluid" width="90" height="90">
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay home if you’re sick – stay home if your sick, except to get medical care. If you think you may have been possibly infected, self-quarantine for 14 days and monitor any symptoms.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/news.png" class="img-fluid" width="90" height="90">
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay updated by watching or reading the current updates of COVID-19 by watching TV, reading newspaper or using social media. Follow the recommended practices. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/care.png" class="img-fluid" width="90" height="90">
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>If you have serve any of the symptoms like cold, cough, headache, fever or breathing problem then please call your local health care provider.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!--*******************************contact******************************************** -->
    <div class="container-fluid  pt-5 pb-5" id="contactid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>Contact Us ASAP</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <form>


                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
                    </div>


                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label>Select Symptoms</label> <br>
                        <div class="custom-control custom-checkbox
         custom-control-inline text-capitalize">
                            <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
                            <label class="custom-control-label" for="customcheckbox1">Cold</label>
                        </div>
                        <div class="custom-control custom-checkbox
         custom-control-inline text-capitalize">
                            <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
                            <label class="custom-control-label" for="customcheckbox2">fever</label>
                        </div>
                        <div class="custom-control custom-checkbox
         custom-control-inline text-capitalize">
                            <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
                            <label class="custom-control-label" for="customcheckbox3">difficulty in breathing</label>
                        </div>
                        <div class="custom-control custom-checkbox
         custom-control-inline text-capitalize">
                            <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
                            <label class="custom-control-label" for="customcheckbox4">weakness and headache</label>
                        </div>


                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">How Are You Feeling?</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!--***********top curser******** -->
    <div class="container scrolltop float-right-pr-5">
        <i class="fa fa-arrow-up" onClick="topFunction()" id="myBtn"> </i>

    </div>

    <!--*****************************Footer********************* -->

    <footer class="mt-5">
        <div class="footer_style text-white text-center container-fluid">
            <p>copyright © 2020-2021 Vidhi Shrivastava </p>
        </div>
    </footer>

    <script type="text/javascript"> 
    mybutton = document.getElementById("myBtn");
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop >100) {
    mybutton.style.display = "block";
    } else {
    mybutton.style.display = "none";
    }
    }
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
    
    function fetch(){
        $.get("https://api.covid19api.com/summary",
            function (data){
                //console.log(data['Countries'].length)
                var tbval = document.getElementById('tbval');
                for(var i=1;i<(data['Countries'].length);i++){
                var x = tbval.insertRow();
                x.insertCell(0);
                tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                tbval.rows[i].cells[0].style.background = '#7a4a91';
                tbval.rows[i].cells[0].style.color = '#fff';

                x.insertCell(1);
                tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                tbval.rows[i].cells[1].style.background = '#4bb7d8';

                x.insertCell(2);
                tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                tbval.rows[i].cells[2].style.background = '#4bb7d8';

                x.insertCell(3);
                tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                tbval.rows[i].cells[3].style.background = '#f36e23';

                x.insertCell(4);
                tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                tbval.rows[i].cells[4].style.background = '#4bb7d8';

                x.insertCell(5);
                tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                tbval.rows[i].cells[5].style.background = '#9cc850';

                x.insertCell(6);
                tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                tbval.rows[i].cells[6].style.background = '#f36e23';

                } 
            }
        );
    }


 </script>


</body>

</html>