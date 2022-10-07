<div class="tab-pane fade" id="v-pills-python" role="tabpanel" aria-labelledby="v-pills-python-tabs">
    <!-- Start Contact section -->
    <div class="rn-contact-area" id="contacts">
        <div class="container">
            <div class="row">

                {{-- <div class="alert alert-danger print-error-msg">
                    <ul></ul>
                </div> --}}

                <div class="col-lg-5">
                    <div class="contact-about-area">
                        <div class="thumbnail">
                            <img src="../../assets/images/123.jpg" alt="contact-img">
                        </div>
                        <div class="title-area">
                            <h4 class="title">Yoga Hendriansyah</h4>
                            <span>Fullstack Web Developer</span>
                        </div>
                        <div class="description">
                            <p>I am available for freelance work and fulltime. Connect with me
                                via Whatsapp or Call in to my account.
                            </p>
                            <span class="phone">Phone: <a href="tel:01941043264">+628-13-8181-9011</a></span>
                            <span class="mail">Email: <a
                                    href="mailto:yogahendriansyah@gmail.com">yogahendriansyah@gmail.com</a></span>
                        </div>
                        <div class="social-area">
                            <div class="name">FIND WITH ME</div>
                            <div class="social-icone">
                                <a href="https://www.facebook.com/yoga.hendriansyah" target="_blank">
                                    <i data-feather="facebook"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/yoga-hendriansyah-9126741ab/" target="_blank">
                                    <i data-feather="linkedin"></i>
                                </a>
                                <a href="https://www.instagram.com/yogaansyah/" target="_blank">
                                    <i data-feather="instagram"></i>
                                </a>
                                <a href="https://wa.link/rkq16z" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-message-circle">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos-delay="600" class="col-lg-7 contact-input">
                    <div class="contact-form-wrapper ml--0">
                        <div class="introduce">


                            {{-- <form class="rnt-contact-form rwt-dynamic-form row" id="contact-form" method="POST"
                                action="{{ url('/sendemail') }}"> --}}
                                <form class="rnt-contact-form rwt-dynamic-form row" id="contact_form">
                                    @csrf
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-name">Your Name</label>
                                            <input {{--
                                                class="form-control form-control-lg @error('title') is-invalid @enderror"
                                                name="name" id="contact-name" type="text"> --}}
                                            class="form-control form-control-lg"
                                            name="name" id="contact-name" type="text">
                                            <span class="text-danger" id="nameErrorMsg"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-phone">Phone
                                                Number</label>
                                            <input class="form-control" name="phone" id="contact-phone" type="number">
                                            <span class="text-danger" id="phoneErrorMsg"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-email">Email</label>
                                            <input class="form-control form-control-sm" id="contact-email" name="email"
                                                type="email">
                                            <span class="text-danger" id="emailErrorMsg"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">subject</label>
                                            <input class="form-control form-control-sm" id="subject" name="subject"
                                                type="text">
                                            <span class="text-danger" id="subjectErrorMsg"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-message">Your
                                                Message</label>
                                            <textarea name="message" id="contact-message" cols="30"
                                                rows="10"></textarea>
                                            <span class="text-danger" id="contactErrorMsg"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-5">
                                        <div class="form-group ">
                                            <div class="g-recaptcha" data-sitekey="6Le2NTEhAAAAAEEYz8kF2RfP2m6Zlgf_kEt9ey-g"></div>


                                            <div class="text-danger" id="captchaErrorMsg" name='captch1'></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" id="submitform" class="rn-btn">
                                            <span>SEND MESSAGE</span>
                                            <i data-feather="arrow-right"></i>
                                        </button>
                                    </div>

                                </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contuct section -->
</div>
