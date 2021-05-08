@extends('layouts')

@section('title')
    Contact
@endsection

@section('content')
    <div class="container py-3 bg-white">
        <h1 class="text-center py-2">Contact Us</h1>
        <div class="row py-2">
            <div class="col-md-6 col-12">
                <form action="mailto:valentin7galit@gmail.com" method="post" enctype="text/plain">
                    <div class="form-group row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="col-6">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                    </div>
                    <input type="text" class="form-control w-100" placeholder="Subject" name="subject"><br>
                    <textarea name="message" rows="4" cols="35" placeholder="Message" class="form-control w-100"></textarea><br>
                    <!-- reCAPTCHA -->
                    <div class="g-recaptcha" data-sitekey="your_site_key"></div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <div class="col-md-4 col-3">
                        <h4>Address</h4>
                        <p></p><br>
                        <h4>Phone</h4>
                        <p></p>
                        <h4>Email</h4>
                        <p></p>
                        <h4>Find us on</h4>
                    </div>
                    <div class="col-md-8 col-9">
                        <p class="padd-text">Republic of Moldova, Chisinau, st. Dacia 38<br><span>Monday - Friday: 09:00 - 18:00</span></p>
                        <p class="padd-text">+373 68297577</p>
                        <p class="padd-text">valentin7galit@gmail.com</p>
                        <p class="padd-text">
                            <a href="https://www.facebook.com/" target="blanck" class="text-decor">
                                <i class="fab fa-facebook-f h3"></i>
                                <span class="text-dark">Facebook</span>
                            </a>
                        </p>
                        <p class="padd-text">
                            <a href="https://www.instagram.com/" target="blanck" class="text-decor">
                                <i class="fab fa-instagram h3"></i>
                                <span class="text-dark">Instagram</span>
                            </a>
                        </p>
                        <p class="padd-text">
                            <a href="https://twitter.com/" target="blanck" class="text-decor">
                                <i class="fab fa-twitter h3"></i>
                                <span class="text-dark">Twitter</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Maps -->
        <div class="py-2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21769.00870744716!2d28.843138862475588!3d46.99849713887916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd05e9e1003ec974a!2sDevelopmentAid%20Head%20Office!5e0!3m2!1sen!2s!4v1618853579520!5m2!1sen!2s" class="w-100" height="450" style="border: 0;" loading="lazy"></iframe>
        </div>
    </div>
@endsection