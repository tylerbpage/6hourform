<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/4648cef356.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            body{
                padding-top: 10px;
                font-family: 'Poppins', sans-serif;
            }

            .contact {
                background: #efedf3;
                padding: 25px 75px 23px 50px;
                max-width: 730px;
                margin: 0 auto;
            }

            .contact__bd {
                color: #79777d;
            }


            @media only screen and (min-width: 768px) {
                .contact {
                    display: flex;
                }

                .contact__bd {
                    width: 50%;
                }
            }

            .contact-information h4 {
                color: #b69af2;
                font-weight: 400;
                text-transform: uppercase;
                font-size: 14px;
                margin: 10px 0px;
            }

            .contact-information__hd {
                margin-bottom: 25px;
                font-weight: bold;
            }

            .contact-information__section__hd {
                color: #413f45;
                text-transform: uppercase;
            }

            .contact-information__section {
                display: flex;
                margin-bottom: 20px;
            }

            .contact-information__section a {
                color: #79777d;

            }

            .contact-information__icon {
                float: left;
                padding-right: 20px;
            }

            .contact-information__section__social {
                list-style-type: none;
                display: inline;
                padding: 0px;
                font-size: 24px;
            }

            .contact-information__section__social li {
                display: inline;
            }

            .contact-information__phone {

            }

            .contact-information__email {

            }

            .contact-form {
                background: #a488f4;
                padding: 30px 25px;
            }

            .contact-form label {
                margin-bottom: 0px;
            }

            .h1, .h2, .h3, h1, h2, h3, h4, h5, h6 {
                margin-top: 0px;
                margin-bottom: 0px;
                color: #000;
            }

            .contact-form__hd {
                margin-bottom: 20px;
                font-weight: bold;
                font-size: 20px;
            }

            .contact-form label {
                text-transform: uppercase;
                color: #7e65ae;
                font-weight: 400;
            }

            .contact-form input, .contact-form textarea {
                background: #6f5ba7;
                border: #6f5ba7;
                color: #fff;
            }

            .contact-form button {
                background: #31284f;
                border: #31284f;
                color: #fff;
                padding: 10px 25px;
                font-size: 14px;
            }

            .fas, .fab {
                color: #b69af2;
            }
        </style>
    </head>
    <body>
        <div class="contact">
            <div class="contact__bd contact-information">
                <h4>Contact Details</h4>
                <h2 class="contact-information__hd">Get in touch</h2>

                <div class="contact-information__section">
                    <div class="contact-information__icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <div class="contact-information__section__hd">
                            ADDRESS
                        </div>
                        <div>
                            LEARNWORLDS LTD
                        </div>
                        <div>
                            <a href="https://goo.gl/maps/2gS9zEoazdhzPo6VA" target="_blank" rel="noopener">71-75, Shelton Street </a>
                        </div>
                        <div>
                            Covent Garden London, WC2H9JQ
                        </div>
                        <div>
                            United Kingdom
                        </div>
                    </div>
                </div>
                <div class="contact-information__section">
                    <div class="contact-information__icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div>
                        <div class="contact-information__section__hd">
                            Phone
                        </div>
                        <div>
                            +18558999555
                        </div>
                    </div>
                </div>
                <div class="contact-information__section">
                    <div class="contact-information__icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <div class="contact-information__section__hd">
                            Email
                        </div>
                        <div>
                            <a href="mailto:hello@learnworlds.com">hello@learnworlds.com</a>
                        </div>
                    </div>
                </div>

                <div class="contact-information__section">
                    <ul class="contact-information__section__social">
                        <li>
                            <a href="https://placekitten.com/200/300">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://placekitten.com/200/300">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://placekitten.com/200/300">
                                <i class="fab fa-youtube-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://placekitten.com/200/300">
                                <i class="fab fa-instagram-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://placekitten.com/200/300">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://placekitten.com/200/300">
                                <i class="fab fa-pinterest-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://placekitten.com/200/300">
                                <i class="fab fa-vimeo-square"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contact__bd contact-form">
                <h3 class="contact-form__hd"> Ready to get started?</h3>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <form action="/form-submit" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea class="form-control" id="message" rows="3"  name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send your message</button>
                </form>
            </div>
        </div>
    </body>
</html>
