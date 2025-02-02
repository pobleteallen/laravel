@extends('templates.template')

@section('content')
<body>
    <!-- sidebar menu -->
    <div class="ui vertical very thin inverted sidebar menu">
        <a href="#header" class="item">Home</a>
        <a href="#services" class="item">Services</a>
        <a href="#feedbacks" class="item">Feedbacks</a>
        <a href="#aboutus" class="item">About us</a>
        <a href="#contactus" class="item">Contact us</a>
        <a href="dashboard" class="item">Extra</a>
    </div>

    <!-- fixed menu -->
    <div id="fixed-menu" class="ui inverted large fixed menu"> 
        <div class="ui container">
            <a class="mobile item"><i class="circular inverted large sidebar icon"></i></a> 
            <div class="item header"><img src="img/gap-logo.png"></div>
            <a href="#header" class="item">Home</a>
            <a href="#services" class="item">Services</a>
            <a href="#feedbacks" class="item">Feedbacks</a>
            <a href="#aboutus" class="item">About us</a>
            <a href="#contactus" class="item">Contact us</a>
            <a href="dashboard" class="item">Extra</a>  
        </div>
    </div>

    <!-- HEADER/BANNER/MENU -->
    <div id="header" class="ui inverted vertical segment">
        <!-- navigate site button  -->
        <i id="navigate-site" class="link huge inverted angle double down icon" 
        style="position: absolute; bottom: 1%; left: 50%; transform: translate(-50%, -1%); z-index: 5;"></i>
        <div class="ui container">
            <div class="ui vertical segment">
                <img id="logo" class="ui centered small image" src="img/gap-logo.png">
                <h3 class="ui inverted centered header">
                    SECURITY SERVICES<br><span style="margin-left: -8.5rem">FOR YOUR&nbsp<li>BUSINESS</li><li>BUILDING</li><li>HOME</li></span>
                </h3>
            </div>
        </div>
    </div>

    <!-- OUR SERVICES -->
    <div id="services" class="ui vertical segment">
       <h2 class="ui text container horizontal divider">our services</h2>
       <div class="ui hidden divider"></div>
        <div class="ui stackable three column grid container">               
            <div class="column">
                <h4 class="ui icon center aligned header">
                    <i class="massive circular inverted blue home icon"></i>
                    <div class="ui hidden divider"></div>
                    <div class="content">HOME SECURITY</div>
                </h4>
                <p>Dolore cuml dia sed in lacus ut eniascet inger es sitet amet
                 eismod ictor ut ligulate ameti dapib ticdu nt mtsent dolor lte comme.Dolore cuml dia sed in lacus ut eniascet inger es sitet amet
                 eismod ictor ut ligulate ameti dapib ticdu nt mtsent dolor lte comme
                </p>
            </div>

            <div class="column">
                <h4 class="ui icon center aligned header">
                    <i class="massive circular inverted blue briefcase icon"></i>
                    <div class="ui hidden divider"></div>
                    <div class="content">BUSINESS SECURITY</div>
                </h4>
                <p>Dolore cuml dia sed in lacus ut eniascet inger es sitet amet
                 eismod ictor ut ligulate ameti dapib ticdu nt mtsent dolor lte comme.Dolore cuml dia sed in lacus ut eniascet inger es sitet amet
                 eismod ictor ut ligulate ameti dapib ticdu nt mtsent dolor lte comme
                </p>
            </div>

            <div class="column">
                <h4 class="ui icon center aligned header">
                    <i class="massive circular inverted blue building icon"></i>
                    <div class="ui hidden divider"></div>
                    <div class="content">BUILDING SECURITY</div>
                </h4>
                <p>Dolore cuml dia sed in lacus ut eniascet inger es sitet amet
                 eismod ictor ut ligulate ameti dapib ticdu nt mtsent dolor lte comme.Dolore cuml dia sed in lacus ut eniascet inger es sitet amet
                 eismod ictor ut ligulate ameti dapib ticdu nt mtsent dolor lte comme
                </p>
            </div>
        </div> 
    </div>

    <!-- FEEDBACKS -->
    <div id="feedbacks" class="ui inverted vertical segment">  
        <div class="ui text container">
            <h2 class="ui inverted horizontal divider">feedback</h2>
            <div class="testimonial-holder">
                <div id="testimonial" class="ui testi vertical segment">
                    <h3 class="ui inverted icon center aligned header">   
                        <img class="ui small circular image" src="img/testi-pic.jpg">
                        <div class="content">
                            Allen Poblete
                            <div class="sub header">Mall Director</div>
                        </div>
                    </h3>
                    <p style="color: white">
                        <i class="inverted quote left icon"></i>1Dolore cuml dia sed in lacus ut eniascet inger es sitet amet
                         eismod ictor ut ligulate ameti dapib ticdu nt mtsent dolor lte comme. Mes cumldi sed inertio. 
                         Lacus ut eniascet ingerto aliiqt sit amet eism odictor ipsum commete.<i class="inverted quote right icon"></i>
                    </p>
                </div>

                <div id="testimonial" class="ui testi vertical segment">
                    <h3 class="ui inverted icon center aligned header">   
                        <img class="ui small circular image" src="img/testi-pic.jpg">
                        <div class="content">
                            Allen Poblete
                            <div class="sub header">Mall Director</div>
                        </div>
                    </h3>
                    <p style="color: white">
                        <i class="inverted quote left icon"></i>Maecenas fermentum nulla purus, ac commodo ipsum pretium at. 
                        Etiam vitae luctus metus. Mauris nunc nisl, elementum eu molestie eget, ultricies sit amet libero. 
                        Suspendisse et tempus odio. Morbi vel aliquam nulla, tristique laoreet risus.<i class="inverted quote right icon"></i>
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- ABOUT US -->
    <div id="aboutus" class="ui vertical segment">         
        <div class="ui text container">
            <h2 class="ui horizontal divider">about us</h2>
            <div class="ui hidden divider"></div>
            <p align="center">Dolore cuml dia sed in lacus ut eniascet inger es sitet amet
             eismod ictor ut ligulate ameti dapib ticdu nt mtsent dolor lte comme. Mes cumldi sed inertio. 
             Lacus ut eniascet ingerto aliiqt sit amet eism odictor ipsum commete.
            </p>
        </div>
    </div>

    <!-- CONTACT US -->
    <div id="contactus" class="ui inverted vertical segment">

        <div class="ui text container">
            <h2 class="ui inverted horizontal divider">Contact Us</h2>
            <div class="ui hidden divider"></div>
            <div class="ui hidden divider"></div>
            <div class="ui hidden divider"></div>
            <p>Dolore cuml dia sed in lacus ut eniascet inger es sitet amet
                 eismod ictor ut ligulate ameti dapib ticdu nt mtsent dolor lte comme.Dolore cuml dia sed in lacus ut eniascet inger es sitet amet
                 eismod ictor ut ligulate ameti dapib ticdu nt mtsent dolor lte comme
            </p>
            <div class="ui hidden divider"></div>
            <form class="ui large form">
                <div class="two fields">
                    <div class="grouped fields">
                        <div class="field">
                            <input type="text" name="name" placeholder="Full Name">
                        </div>
                        <div class="field">
                            <input type="text" name="name" placeholder="Email Address">
                        </div>
                        <div class="field">
                            <input type="text" name="name" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="field">
                        <textarea style="margin-top: .4rem;" rows="6" placeholder="Message"></textarea>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</body>
@endsection