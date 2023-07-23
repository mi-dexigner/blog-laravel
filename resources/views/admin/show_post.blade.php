@include('admin.head')
    @include('admin.header')
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Show Post</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Show Post            </li>
          </ul>
        </div>

        <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
            @if(session()->has('message'))
              <div class="alert alert-danger">
                {{session()->get('message')}}
              </div>
              @endif
            <div class="table-responsive"> 
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Content</th>
                          <th>Post By</th>
                          <th>Post Status</th>
                          <th>User Type</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($posts as $post)
                        <tr>
                          <th scope="row">2</th>
                          <td>{{$post->title}}</td>
                          <td>{{$post->content}}</td>
                          <td>{{$post->name}}</td>
                          <td>{{$post->post_status}}</td>
                          <td>{{$post->user_type}}</td>
                          <td><img src='postimage/{{$post->image}}' width="80"/></td>
                          <td>
                            <a href="{{url('post_delete',$post->id)}}" onclick="confirmation(event) " class="btn btn-danger btn-sm">Delete</a>|
                            <a href="{{url('post_edit',$post->id)}}" class="btn btn-success btn-sm">Edit</a>
                        </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>

            </div>
        
        </div>
            </div>
        </section>
        
    
    @include('admin.footer')
    
    @include('admin.foot')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function confirmation(e){
          e.preventDefault();
          let urlToRedirect = e.currentTarget.getAttribute('href');  
          swal({
  title: "Are you Sure to delete this",
  text: "You won't be able to revert this delete",
  icon: "warning",
  buttons: true,
  dangerMode:true
}).then((willDelete) => {
  if (willDelete) {
   window.location.href = urlToRedirect;
  } 
});    
        }
    </script>
