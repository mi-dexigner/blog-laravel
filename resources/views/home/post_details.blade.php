@include('home.head')
      <!-- header section start -->
      <div class="header_section">
      @include('home.homeheader')
         
      </div>
      <!-- header section end -->
      <div class="mt-5 pt-5" style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                <figure>
                <img src="{{asset('postimage')}}/{{$post->image}}" alt="{{$post->title}}">
                </figure>
                <article >
                    <h2>{{$post->title}}</h2>
                    <div>{{$post->content}}</div>
                </article>
            </div>
        </div>
      </div>
      
      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
      @include('home.footerBottom')
      
      <!-- copyright section end -->
      <!-- Javascript files-->
      @include('home.foot')