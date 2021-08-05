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
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Modyfikuj realizacje</h2>
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
                        <form action={{ route('update', ['id'=>$realizacja->id]) }} method="POST" enctype="multipart/form-data"  id="contactForm" name="sentMessage" novalidate="novalidate">
                            {{ csrf_field() }}
                            @method('PUT')
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Nazwa</label>
                                    <input value = "{{$realizacja->nazwa}}"class="form-control" name="nazwa" id="nazwa" type="text" placeholder="Nazwa" required="required" data-validation-required-message="Wpisz numer faktury" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">

                                    <textarea class="form-control" name="opis" id="opis" type="text" placeholder="Opis" required="required" data-validation-required-message="Dodaj opis" rows="3">{{$realizacja->opis}}</textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nazwa</th>


                                  </tr>
                                </thead>
                                <tbody>

                            <div class="control-group">
                                @for ($i=0; $i<5; $i++)
                                <tr>

                                    @if ($i==0)
                                    <td><img src="{{asset('storage/app/public/image/')}}/{{$realizacja->zdjecie1}}" class="admin-photo">
                                    <td><input  value = {{$realizacja->zdjecie1}}class="form-control" name="zdjecie1"  id="total" type="file" placeholder="Zdjęcie" required="required" data-validation-required-message="Wstaw zdjęcie" /></td>
                                    <p class="help-block text-danger"></p></td>
                                    @endif
                                    @if ($i==1)
                                    <td> <img src="{{asset('storage/app/public/image/')}}/{{$realizacja->zdjecie2}}" class="admin-photo"/>
                                        <td>  <input  value = {{$realizacja->zdjecie2}}class="form-control" name="zdjecie2" id="total" type="file" placeholder="Zdjęcie" required="required" data-validation-required-message="Wstaw zdjęcie" /></td>
                                    <p class="help-block text-danger"></p></td>
                                    @endif
                                    @if ($i==2)
                                    <td> <img src="{{asset('storage/app/public/image/')}}/{{$realizacja->zdjecie3}}" class="admin-photo"/>
                                        <td>   <input  value = {{$realizacja->zdjecie3}}class="form-control" name="zdjecie3" id="total" type="file" placeholder="Zdjęcie" required="required" data-validation-required-message="Wstaw zdjęcie" /></td>
                                    <p class="help-block text-danger"></p></td>
                                    @endif
                                    @if ($i==3)
                                    <td>  <img src="{{asset('storage/app/public/image/')}}/{{$realizacja->zdjecie4}}" class="admin-photo"/>
                                        <td>  <input  value = {{$realizacja->zdjecie4}}class="form-control" name="zdjecie4" id="total" type="file" placeholder="Zdjęcie" required="required" data-validation-required-message="Wstaw zdjęcie" /></td>
                                    <p class="help-block text-danger"></p></td>
                                    @endif
                                    @if ($i==4)
                                    <td>   <img src="{{asset('storage/app/public/image/')}}/{{$realizacja->zdjecie5}}" class="admin-photo"/>
                                        <td>  <input  value = {{$realizacja->zdjecie5}}class="form-control" alt="dodaj zdjęcie" name="zdjecie5" id="total" type="file" placeholder="Zdjęcie" required="required" data-validation-required-message="Wstaw zdjęcie" /></td>
                                    <p class="help-block text-danger"></p></td>
                                    @endif

                                </tr>
                                @endfor
                            </div>

                            <br />
                            <div id="success"></div>
                            <td><div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Zmień</button></div></td>
                        </tbody>
                        </form>
                    </div>
                </div>
