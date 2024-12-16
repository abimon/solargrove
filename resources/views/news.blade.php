@extends('layouts.app',['title'=>'About Us'])
@section('content')
<div class="News mt-2 mb-4">
   <div class="container-fluid">
      <div class="row d_flex">
         <div class="col-md-8 pad_left0">
            <div id="testimon" class="carousel slide banner_testimonial" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#testimon" data-slide-to="0" class="active"></li>
                  <li data-target="#testimon" data-slide-to="1"></li>
                  <li data-target="#testimon" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  @foreach ($articles as $article)
                  <div class="carousel-item {{$key==0?'active':''}}">
                     <div class="container">
                        <div class="carousel-caption relative">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="text_humai">
                                    <i><img src="/storage/images/articles/{{$article->path}}" alt="#" /></i>
                                    <span>{{$article->title}}</span>
                                    <div style="overflow:hidden;"><?php echo html_entity_decode($article->content) ?></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
               <a class="carousel-control-prev" href="#testimon" role="button" data-slide="prev">
                  <i class="fa fa-angle-left" aria-hidden="true"></i>
                  <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#testimon" role="button" data-slide="next">
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                  <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
         <div class="col-md-4 ">
            <div class="titlepage">
               <h2>TECH News</h2>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection