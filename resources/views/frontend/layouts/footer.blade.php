<footer class="footer__one bg1-color">
    <div class="footer__topone pt-120 pb-120">
        <div class="container">
            <div class="row g-4 justify-content-between">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-6">
                    <div class="footer__onewidget">
                        <span class="display-five n0-color mb-5 mb-md-8">
                            <span class="p1-color">
                                Let’s
                            </span> Work Together
                        </span>
                        <p class="n0-color mb-5 mb-md-8">
                            Explore LeForum's dynamic courses, where excellence meets opportunity. Elevate your personal and professional growth with top-tier education.
                        </p>
                        <ul class="social-area d-flex gap-3 gap-xl-4">
                             <li>
                                <a href="{{ $facebook }}" target="_blank" class="d-center">
                                    <i class="ti ti-brand-facebook fw_400 fs-five"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $instagram }}" target="_blank" class="d-center">
                                    <i class="ti ti-brand-instagram fw_400 fs-five"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $whatsapp }}" target="_blank" class="d-center">
                                    <i class="fab fa-whatsapp fw_400 fs-five"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $youtube }}" target="_blank" class="d-center">
                                    <i class="fab fa-youtube fw_400 fs-five"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- <div class="col-xxl-3  col-xl-3 col-lg-3 col-md-4 col-sm-4" data-aos="zoom-out" data-aos-duration="1600">


                </div> -->

                <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                    <div class="footer__onewidget__link">
                        <h4 class="n0-color mb-5 mb-md-8">
                            Contact Us
                        </h4>
                        <ul class="widget__contactone ">
                            <li class="d-flex gap-3 gap-xl-5 mb-4 mb-xl-6">
                                <span class="icon cmn__social d-center">
                                    <i class="ti ti-phone fs-five fw_400"></i>
                                </span>
                                <a href="#" class="p1hover">
                                    +97433651797

                                </a>
                            </li>
                            <li class="d-flex gap-3 gap-xl-5 mb-4 mb-xl-6">
                                <span class="icon cmn__social d-center">
                                    <i class="ti ti-mail-opened fs-five fw_400"></i>
                                </span>
                                <a href="#0" class="p1hover new_widget">
                                    info@leforuminternational.com

                                </a>
                            </li>

                        </ul>
                    </div>
                </div> -->


                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                    <div class="footer__onewidget__link">
                        <h4 class="n0-color mb-5 mb-md-8">
                            Contact Us
                        </h4>
                        <ul class="widget__contactone">
                            <li class="d-flex align-items-center gap-3 gap-xl-5 mb-4 mb-xl-6">
                                <span class="icon cmn__social d-center">
                                    <i class="ti ti-phone fs-five fw_400"></i>
                                </span>
                                <a href="{{ $phone_number }}" class="p1hover">
                                    +97433651797
                                </a>
                            </li>
                            <li class="d-flex align-items-center gap-3 gap-xl-5 mb-4 mb-xl-6">
                                <span class="icon cmn__social d-center">
                                    <i class="ti ti-mail-opened fs-five fw_400"></i>
                                </span>
                                <a href="{{ $mail_id }}" class="p1hover new_widget email-link">
                                    info@leforuminternational.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <div class="footer__bottomone">
        <div class="container">
            <div class="footer__bottomone__content bt-dash d-grid justify-content-center text-center  py-6 py-lg-10 d-md-flex align-items-center justify-content-lg-between gap-2 gap-md-15">
                <p class="fs-seven n0-color">
                    © 2024 Le Forum | Powered by <a href="https://howincloud.com/" class="link-hover-dark-primary font-weight-semibold" target="_blank"><span style="font-size: 16px; font-weight: bolder; color: white">Howin </span><span style="font-size: 13px; font-weight: 600; color: white" >CLOUD</span></a>
                </p>
                 <ul class="terms__one d-flex justify-content-center align-items-center gap-4 gap-lg-6">
                    <!-- <li>
                        <a href="#" class="fs-seven n0-color p1hover">
                            Terms & Conditions
                        </a>
                    </li> -->
                    <li>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<style>
    body .summer-note span,
    body .summer-note p,
    body .summer-note li,
    body .summer-note label {
        color: black !important;
    }

    body .summer-note a {
        color: blue !important;
    }


    .summer-note li{
        list-style: disc !important;
    }
</style>

<!-- ==== js dependencies start ==== -->
<script src="{{ asset('frontstyles/assets/js/plugins/plugins.js') }}"></script>
<script src="{{ asset('frontstyles/assets/js/plugins/plugin-custom.js') }}"></script>
<script src="{{ asset('frontstyles/assets/js/apexcharts.js') }}"></script>
<script src="{{ asset('frontstyles/assets/js/plugins/aos.js') }}"></script>
<script src="{{ asset('frontstyles/assets/js/main.js') }}"></script>


<script>
    function showCustomAlert(message) {
        const alertBox = document.getElementById('custom-alert');
        const alertMessage = document.getElementById('custom-alert-message');
        alertMessage.textContent = message;
        alertBox.style.display = 'block';

        setTimeout(function() {
            alertBox.style.display = 'none';
        }, 3000); // Hide after 5 seconds
    }

    function validateForm() {
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let phone = document.getElementById('phone').value;
        let subject = document.getElementById('subject').value;

        if (!name || !email || !phone || !subject) {
            alert("All fields are required!");
            return false;
        }
        return true;
    }
</script>

</body>



</html>
