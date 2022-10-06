<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Portfolio Yoga Hendriansyah</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/favicon.ico">
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="../../assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/vendor/slick.css">
    <link rel="stylesheet" href="../../assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="../../assets/css/vendor/aos.css">
    <link rel="stylesheet" href="../../assets/css/plugins/feature.css">
    <!-- Style css -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    @vite('resources/js/app.js')

    {{-- google recaptcha --}}
    {{-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> --}}

    @stack('script')
</head>

<body class="template-color-2 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">

    <div class="main-page-wrapper">
        <div class="rn-header-image-area">
            <div class="bg_image--9 bg_image h-100 w-20">
            </div>
        </div>
        <div class="rn-content-wrapper">
            <div class="container">

                @include('layout.header')

                <div class="row mt--40 tab-content-wrapper">

                    @include('layout.sidebar')

                    <div class="col-lg-10">
                        <div class="tab-area">
                            <div class="d-flex align-items-start">
                                <div class="tab-content" id="v-pills-tabContent">

                                    {{-- @include('components.about') --}}
                                    <x-about></x-about>

                                    {{-- @include('components.resume') --}}
                                    <x-resume></x-resume>

                                    {{-- @include('components.portfolio') --}}
                                    <x-portfolio></x-portfolio>

                                    {{-- @include('components.certificate') --}}
                                    <x-certificate></x-certificate>

                                    {{-- @include('components.contact') --}}
                                    <x-contact></x-contact>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Area -->
    @include('components.footer')
    <!-- End Footer Area -->

    <!-- Modal Portfolio Body area Start -->
    @include('components.modal.portfolio')
    <!-- End Modal Portfolio area -->

    <!-- Modal Blog Body area Start -->
    @include('components.modal.certificate')
    <!-- End Modal Blog area -->

    <!-- Back to  top Start -->
    <div class="backto-top">
        <div>
            <i data-feather="arrow-up"></i>
        </div>
    </div>
    <!-- Back to top end -->

    <!-- JS ============================================ -->
    <script src="../../assets/js/vendor/jquery.js"></script>
    <script src="../../assets/js/vendor/modernizer.min.js"></script>
    <script src="../../assets/js/vendor/feather.min.js"></script>
    <script src="../../assets/js/vendor/slick.min.js"></script>
    <script src="../../assets/js/vendor/bootstrap.js"></script>
    <script src="../../assets/js/vendor/text-type.js"></script>
    <script src="../../assets/js/vendor/wow.js"></script>
    <script src="../../assets/js/vendor/aos.js"></script>
    <script src="../../assets/js/vendor/particles.js"></script>
    <!-- main JS -->
    <script src="../../assets/js/main.js"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    {{-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script> --}}
    {{-- <script src="https://www.google.com/recaptcha/api.js?render=explicit" async defer></script> --}}

    <script src="https://www.google.com/recaptcha/api.js"
        async defer>
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

         // $('#contact_form').validate({
         //     rules: {
         //         captcha: {
         //             required: true,
         //         },
         //         phone: {
         //             required: true,
         //             number: true
         //         },

         //     },
         //     messages: {
         //         captcha: {
         //             required: 'wew'
         //         },
         //         phone: {
         //             required: 'wew',
         //             number: 'wewwe'
         //         },
         //     }
         // });


        //  function verifyCallback(response) {
        //     if (response != null) {
        //        $("#example1").show();
        //     }
        //  };

        //  grecaptcha.render('example1', {
        //      'sitekey': '6Le2NTEhAAAAAEEYz8kF2RfP2m6Zlgf_kEt9ey-g',
        //      'callback' : verifyCallback,
        //      'type':'image'
        //  });

         $("#contact_form").on('submit', function(e) {
            e.preventDefault();

            var datas = $('#contact_form').serialize();

            // var _token = $("input[name='_token']").val();
            // var name = $("#contact-name").val();
            // var phone = $("#contact-phone").val();
            // var email = $("#contact-email").val();
            // var subject = $("#subject").val();
            // var message = $("#contact-message").val();

            $.ajax({
               url: '/sendemail',
               type: 'post',
               data: datas,
            //    data: {
            //        _token: _token,
            //        name: name,
            //        phone: phone,
            //        email: email,
            //        subject: subject,
            //        message: message,
            //    },
               prosessData: false,
               dataType: 'json',
               contenType: false,
               success: function(data) {
                  console.log(data);
                  $('#contact_form')[0].reset();
                  swal("Thank you for contacting me", "I will reply soon", "success");
               },
               error: function(response) {
                  $('#nameErrorMsg').text(response.responseJSON.errors.name);
                  $('#phoneErrorMsg').text(response.responseJSON.errors.phone);
                  $('#emailErrorMsg').text(response.responseJSON.errors.email);
                  $('#subjectErrorMsg').text(response.responseJSON.errors.subject);
                  $('#contactErrorMsg').text(response.responseJSON.errors.message);
                  $('#captchaErrorMsg').text('Please check reCAPTCHA');
               },
            });
         });
      });
    </script>
</body>

</html>
