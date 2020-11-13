@extends('layouts.Master')
@section('title', 'Contact')
    
@section('content')

<section class="contact" style="margin-bottom: 14%">
<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container b-5">
      <h2 class="display-4 mb">CONTACT</h2>
      <p class="lead">
      <img class="card-img-top" src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201909/contact-details-3381225_1280.jpeg?524JGkJvIBQ1imnKfpn2djsEHFX06JK7&size=770:433" alt="Card image cap"><br> 
      <a href="https://mail.google.com/"> Email : eputrinauli@gmail.com </a> <br>
      <a href="https://www.instagram.com/"> Instagram : @evitapns </a> <br>
      <a href="https://line.me/id/"> Line : evitapns. </a> <br>
      <a href="https://www.whatsapp.com/"> WhatsApp : 0878xxxxxxxx </a> <br>
      <a href="https://www.youtube.com/"> Youtube Channel : -- soon -- </a>
      </p>
    </div>
  </div>
</section>

<form action="/send" method="post">
                    @csrf
                    <div class="form-group user-name">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" class="form-control"required="required" name="name" placeholder="Name"></br>
                    </div>
                    <div class="form-group user-email">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" class="form-control"required="required" name="email" placeholder="Email"></br>
                    </div>
                    <div class="form-group user-phone">
                        <label for="phone" class="sr-only">Website</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Phone"></br>
                    </div>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6"><br><br>
                    <div class="form-group user-message">
                        <label for="message" class="sr-only">Message</label>
                        <textarea class="form-control testt"required="required" name="message" placeholder="Write Message"></textarea>
                    </div>
                    </div><!-- /.col-md-6 -->
                    <button type="submit" class="btn btn-primary btn-radiuszan"><i class="fa fa-paper-plane" aria-hidden="true"></i>send
                </button><br><br>
                </form>
@endsection