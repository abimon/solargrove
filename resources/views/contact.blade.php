@extends('layouts.app',['title'=>'Contact Us'])
@section('content')
<div>
   <div class="container-fluid">
      <h2 style="font-size: 40px;color: #1f1f1f;line-height: 45px;font-weight: bold;padding: 0; text-align:center;">Contact Us</h2>
   <div class="container row">
      <div class="col-md-6 p-5">
         <div class="row mb-2">
            <div class="col-2"><i class="fa fa-phone fa-2x"></i></div>
            <div class="col-10">+254 725 074 661</div>
         </div>
         <div class="row mb-2">
            <div class="col-2"><i class="fa fa-envelope fa-2x"></i></div>
            <div class="col-10">info@solargrove.co.ke</div>
         </div>
         <div class="row mb-2">
            <div class="col-2"><i class="fa fa-whatsapp fa-2x"></i></div>
            <div class="col-10">+254 725 074 661</div>
         </div>

      </div>
      <div class="col-md-6 p-5">
         <!-- <div class="map_main">
               <div class="map-responsive">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d469.8597063962861!2d37.02026592935084!3d-1.0947608427374402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2ske!4v1730456914212!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
            </div> -->
         <form action="/contactform" method='post' class="main_form">
            @csrf
            <div class="card p-2">
               <div class="mb-2">
                  <input class="form-control" placeholder="Name" type="type" name="name">
               </div>
               <div class="mb-2">
                  <input class="form-control" placeholder="Email" type="type" name="email">
               </div>
               <div class="mb-2">
                  <input class="form-control" placeholder="Phone Number" type="type" name="contact">
               </div>
               <div class="mb-2">
                  <textarea class="form-control" placeholder="Message goes here..." type="type" name="message"></textarea>
               </div>
               <div class="modal-footer">
                  <button class="btn btn-primary" type="submit">Send</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
</div>
@endsection