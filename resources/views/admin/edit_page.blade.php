@include('admin.head')
    @include('admin.header')
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Edit Post</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Edit Post            </li>
          </ul>
        </div>

        <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-7">
              @if(session()->has('message'))
              <div class="alert alert-success">
                {{session()->get('message')}}
              </div>
              @endif
            <form action="{{url('update_post',$post->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
                      <div class="form-group">
                        <label class="form-control-label">Title</label>
                        <input type="text" placeholder="Title" class="form-control" name="title" value="{{$post->title}}">
                      </div>
                      <div class="form-group">       
                        <label class="form-control-label">Content</label>
                        <textarea placeholder="Content" class="form-control" name="content">{{$post->content}}</textarea>
                      </div>
                      <div class="form-group">       
                        <label class="form-control-label">Image</label>
                        <img src='{{asset("postimage")}}/{{$post->image}}' width="80"/><br/>
                        <input type="file" name="image" class="form-control">
                      </div>
                      <div class="form-group">       
                        <input type="submit" value="Update Post" class="btn btn-primary">
                      </div>
                    </form>

            </div>
        
        </div>
            </div>
        </section>
        
    
    @include('admin.footer')
    @include('admin.foot')