<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('WebImg/Icon.ico') }}">
        <title>😄Company Home Pages</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/model.css') }}" rel="stylesheet">
        <script src="{{ asset('js/model.js') }}" defer></script>
        <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
        <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        
        <div class="flex-center position-ref">
            <div class="top-left links">
                <a href="{{ url('/')}}">Final Year Project</a>
            </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/CompanyChart')}}">Company Chart</a>

                        <a href="{{ url('/UserManual')}}">User Manual</a>

                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/JobList') }}">Job Apply</a>

                        <a href="{{ url('/UserManual')}}">User Manual</a>

                        <a href="{{ url('/CompanyChart')}}">Company Chart</a>

                        <a href="{{ route('login') }}">Login</a>
                    @endauth
                </div>
            @endif
        </div>

        <br><br>

        <!-- Header with full-height image -->
        <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home" style="background-image: url('{{ asset('slideshow/macbook - Copy.jpg')}}');margin-top: 16px;">
            <div class="w3-display-left w3-text-white" style="padding:48px">
                <span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
                <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
                <span class="w3-large">Stop wasting valuable time with projects that just isn't you.</span>
                <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>
            </div>
            <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
                <a href="https://www.facebook.com/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
                <a href="https://www.instagram.com/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
                <a href="https://www.snapchat.com/"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
                <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
                <a href="https://www.twitter.com/"><i class="fa fa-twitter w3-hover-opacity"></i></a>
                <a href="https://www.linkedin.com/"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
            </div>
        </header>

        <!-- About Section -->
        <div class="w3-container" style="padding:128px 16px" id="about">
            <h3 class="w3-center">ABOUT THE COMPANY</h3>
            <p class="w3-center w3-large">Key features of our company</p>
            <div class="w3-row-padding w3-center" style="margin-top:64px">
                <div class="w3-quarter">
                    <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
                    <p class="w3-large">Responsive</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
                <div class="w3-quarter">
                    <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
                    <p class="w3-large">Passion</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
                <div class="w3-quarter">
                    <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
                    <p class="w3-large">Design</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
                <div class="w3-quarter">
                    <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
                    <p class="w3-large">Support</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
            </div>
        </div>

        <!-- Promo Section - "We know design" -->
        <div class="w3-container w3-light-grey" style="padding:128px 16px">
            <div class="w3-row-padding">
                <div class="w3-col m6">
                    <h3>We know design.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
                    <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
                </div>
                <div class="w3-col m6">
                    <img class="w3-image w3-round-large" src="{{ asset('slideshow/phone_buildings.jpg')}}" alt="Buildings" width="700" height="394">
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <div class="w3-container" style="padding:128px 16px" id="team">
            <h3 style="padding-left: 20px;">OUR TEAM</h3>
            <p class="w3-large" style="padding-left: 20px;">The ones who runs this project</p>
            <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
                <div class="w3-col l3 m6 w3-margin-bottom">
                    <div class="w3-card">
                        <img src="{{ asset('slideshow/ZeroTwo.jpg')}}" alt="Mike" style="width:100%">
                        <div class="w3-container">
                            <h3>William</h3>
                            <p class="w3-opacity">Web Designer</p>
                            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                            <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                        </div>
                    </div>
                </div>
                <div class="w3-col l3 m6 w3-margin-bottom">
                    <div class="w3-card">
                        <img src="{{ asset('slideshow/unnamed.jpg')}}" alt="Dan" style="width:100%">
                        <div class="w3-container">
                            <h3>Jing Zhi</h3>
                            <p class="w3-opacity">Designer</p>
                            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                            <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Promo Section "Statistics" -->
        <div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
            <div class="w3-quarter">
                <span class="w3-xxlarge">14+</span>
                <br>Partners
            </div>
            <div class="w3-quarter">
                <span class="w3-xxlarge">55+</span>
                <br>Projects Done
            </div>
            <div class="w3-quarter">
                <span class="w3-xxlarge">89+</span>
                <br>Happy Clients
            </div>
            <div class="w3-quarter">
                <span class="w3-xxlarge">150+</span>
                <br>Meetings
            </div>
        </div>

        <!-- Work Section -->
        <div class="w3-container" style="padding:128px 16px" id="work">
            <h3 class="w3-center">OUR WORK</h3>
            <p class="w3-center w3-large">What we've done for people</p>

            <div class="w3-row-padding" style="margin-top:64px">
                <div class="w3-col l3 m6">
                    <img src="{{ asset('slideshow/tech_mic.jpg')}}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
                </div>
                <div class="w3-col l3 m6">
                    <img src="{{ asset('slideshow/tech_phone.jpg')}}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A phone">
                </div>
                <div class="w3-col l3 m6">
                    <img src="{{ asset('slideshow/download.jpg')}}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A drone">
                </div>
                <div class="w3-col l3 m6">
                    <img src="{{ asset('slideshow/tech_sound.jpg')}}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Soundbox">
                </div>
            </div>

            <div class="w3-row-padding w3-section">
                <div class="w3-col l3 m6">
                    <img src="{{ asset('slideshow/download (4).jpg')}}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
                </div>
                <div class="w3-col l3 m6">
                    <img src="{{ asset('slideshow/tech_camera.jpg')}}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
                </div>
                <div class="w3-col l3 m6">
                    <img src="{{ asset('slideshow/download (1).jpg')}}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
                </div>
                <div class="w3-col l3 m6">
                    <img src="{{ asset('slideshow/download (3).jpg')}}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
                </div>
            </div>
        </div>

        <!-- Modal for full size images on click-->
        <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
            <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
            <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
                <img id="img01" class="w3-image">
                <p id="caption" class="w3-opacity w3-large"></p>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="w3-container w3-light-grey w3-padding-64">
            <div class="w3-row-padding">
                <div class="w3-col m6">
                    <h3>Our Skills.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore.</p>
                </div>
                <div class="w3-col m6">
                    <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Lavavel</p>
                    <div class="w3-grey">
                        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
                    </div>
                    <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
                    <div class="w3-grey">
                        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
                    </div>
                    <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Java</p>
                    <div class="w3-grey">
                        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="w3-container" style="padding:128px 16px" id="contact">
            <h3 class="w3-center">CONTACT</h3>
            <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
            <div style="margin-top:48px">
                <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Malaysia</p>
                <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +6018-9653248</p>
                <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: example@example.com</p>
                <br>
                <form action="/action_page.php" target="_blank">
                    <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
                    <p>
                        <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
                    </p>
                </form>
                <!-- Image of location/map -->
                <img src="{{ asset('slideshow/map.jpg')}}" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
            </div>
        </div>

        <!-- Footer -->
        <footer class="w3-center w3-black w3-padding-64">
            <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
            <div class="w3-xlarge w3-section">
                <a href="https://www.facebook.com/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
                <a href="https://www.instagram.com/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
                <a href="https://www.snapchat.com/"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
                <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
                <a href="https://www.twitter.com/"><i class="fa fa-twitter w3-hover-opacity"></i></a>
                <a href="https://www.linkedin.com/"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
            </div>
            <p>Powered by <a href="" title="W3.CSS" target="_blank" class="w3-hover-text-green">WILLIAM AND JING ZHI</a></p>
        </footer>

        <script>
            // Modal Image Gallery
            function onClick(element) {
                document.getElementById("img01").src = element.src;
                document.getElementById("modal01").style.display = "block";
                var captionText = document.getElementById("caption");
                captionText.innerHTML = element.alt;
            }


            // Toggle between showing and hiding the sidebar when clicking the menu icon
            var mySidebar = document.getElementById("mySidebar");

            function w3_open() {
                if (mySidebar.style.display === 'block') {
                    mySidebar.style.display = 'none';
                } else {
                    mySidebar.style.display = 'block';
                }
            }

            // Close the sidebar with the close button
            function w3_close() {
                mySidebar.style.display = "none";
            }
        </script>
        
        <div>
            <div class="model-position">
                <a onclick="document.getElementById('id01').style.display = 'block';">
                    <model-viewer id="model" src="{{ asset('model/RobotExpressive.glb') }}" alt="A 3D model of an astronaut" animation-name="none" style="width: 100px; height: 120px;" autoplay></model-viewer>
                </a>
            </div>
            <div id="id01" class="modal">
                <div class="modal-content animate">
                    <div class="modalcontainer">
                        <label for="Search"><b>Search Somethings</b></label>
                        <input type="text" id="keyword" placeholder="like Email, Job Salary Calculate and so....."> @guest
                        <input type="hidden" id="userid" value="0"> @else
                        <input type="hidden" id="userid" value="{{ Auth::user()->id }}"> @endguest
                        <button type="button" onclick="loading()">Search</button>
                        <div>
                            <p style="text-decoration: underline;">Recommended Option</p>
                            <!-- No Login -->
                            @guest
                            <a onclick="Loginrobot()" class="button3" style="color: #fff;">Login</a>
                            <a onclick="Manualrobot()" class="button3" style="color: #fff;">User Manual</a>
                            <a onclick="Homerobot()" class="button3" style="color: #fff;">Home Pages</a>
                            <!-- After Login -->
                            @else
                            <a onclick="dashboardrobot()" class="button3" style="color: #fff;">Dashboard</a>
                            <a onclick="createProjectrobot()" class="button3" style="color: #fff;">Create Project</a>
                            <a onclick="Manualrobot()" class="button3" style="color: #fff;">User Manual</a>
                            <a onclick="leaverobot()" class="button3" style="color: #fff;">Apply for Vacation</a>
                            <a onclick="salaryrobot()" class="button3" style="color: #fff;">Salary</a>
                            <a onclick="emailrobot()" class="button3" style="color: #fff;">Email</a> @endguest
                        </div>
                    </div>
                </div>
            </div>
                <div id="id04" class="modal">
                    <div class="modal-content animate">
                        <div class="modalcontainer">
                            <model-viewer id="model" src="{{ asset( 'model/RobotExpressive.glb') }}" alt="A 3D model of an astronaut" animation-name="Running" style="width: 400px; height: 400px;margin-left: 25px;" autoplay></model-viewer>
                            <p style="margin-left: 180px; font-size: 25px;">Loading...</p>
                        </div>
                    </div>
                </div>
                <div id="id02" class="modal">
                    <div class="modal-content animate">
                        <div class="modalcontainer">
                            <label for="result"><b>Result</b></label>
                            <p>Nothings, Maybe You can try the botton at the below.😁</p>
                        </div>
                    </div>
                </div>
        </div>
    </body>
</html>
