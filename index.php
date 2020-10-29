<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safetywell Marketing</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4a96885088.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v8.0'
        });
      };

      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
      attribution=setup_tool
      page_id="102271914846636"
theme_color="#0A7CFF">
    </div>

    <footer class="bg-light text-dark pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">About Us</h5>
                    <hr class="mb-4">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga cupiditate consequatur, possimus culpa modi numquam quasi veritatis nihil accusamus. Tempore suscipit blanditiis beatae eveniet nam adipisci expedita illo necessitatibus ullam!</p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">Let Us Help</h5>
                    <hr class="mb-4">
                    <p>
                        <a href="#" class="text-dark" style="text-decoration:none">Your Account</a>
                    </p>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration:none">Your Orders</a>
                    </p>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration:none">Manage Your Content And Devices</a>
                    </p>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration:none">Help</a>
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">Make Money</h5>
                    <hr class="mb-4">
                    <p>
                        <a href="#" class="text-dark" style="text-decoration:none">Sell Products on Our Website</a>
                    </p>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration:none">Advertise Your Products</a>
                    </p>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration:none">Become An Affiliate</a>
                    </p>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration:none">Self-Publish</a>
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">Contact Us</h5>
                    <hr class="mb-4">
                    <p>
                        <li class="fas fa-home mr-3"></li>Unit 21 Technopark Square Laguna Technopark Gate 3 Barangay Malamig Biñan Laguna Philippines 4024
                    </p>
                    <p>
                        <li class="fas fa-envelope mr-3"></li>hello@safetywellmarketing.net
                    </p>
                    <p>
                        <li class="fas fa-phone mr-3"></li>02 959 5255 - 049 559 6345- 0917 888 9022 - 09338161098
                    </p>
                    <!-- <p>
                        <li class="fas fa-print mr-3"></li>+63944841715
                    </p> -->
                </div>
            </div>
                <hr class="mb-4">

                <div class="row d-flex justify-content-center">
                    <div>
                        <p>
                            © Copyright 2020 All Rights Reserved By: 
                            <a href="#" style="text-decoration: none;">
                                <strong class="text-info"> Safetywell Marketing Incorporated</strong>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="text-center">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="text-dark"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-dark"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-dark"><i class="fab fa-google-plus"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/watch?v=wjCvHzwRkcE&feature=youtu.be" class="text-dark"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>
</body>
</html>