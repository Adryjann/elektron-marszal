<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Log in</title>




        <link href="{{asset ('css/styles.css')}}" rel="stylesheet" />
        <style>
            #ma{
                width: 50%;
                margin: auto;
                margin-top: 10vh;
                border: 1px solid gray;
                padding: 15px;

            }
            h1{
                text-align: center;
            }
         </style>
    </head>
    <body>
        <section class="page-section masthead" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj nową realizację</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form action={{ route('store-niemcy') }} method="POST"  id="contactForm" name="sentMessage" enctype="multipart/form-data" novalidate="novalidate">
                            {{ csrf_field() }}
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Nazwa</label>
                                    <input class="form-control" name="nazwa" id="nazwa" type="text" placeholder="Nazwa" required="required" data-validation-required-message="Wpisz numer faktury" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label for="przykladowaTextarea">Przykładowa textarea</label>
                                    <textarea class="form-control" name="opis" id="opis" type="text" placeholder="Opis" required="required" data-validation-required-message="Dodaj opis" rows="3"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Zdjęcie</label>
                                    <input class="form-control" name="zdjecie[]" multiple="multiple" id="total" type="file" placeholder="Zdjęcie" required="required" data-validation-required-message="Wstaw zdjęcie" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>


                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Dodaj</button></div>
                        </form>
                    </div>
                </div>
                <p>Można dodawać od 1-5 zdjęć</p>
            </div>
        </section>
    </body>







</html>
