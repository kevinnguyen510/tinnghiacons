@EXTENDS('layout.main')

@section('content')

    <!-- DataTales Example -->
    <div CLASS="card shadow mb-4">
        <div CLASS="card-header py-3">
          <h6 CLASS="m-0 font-weight-bold text-primary">List Posts</h6>
        </div>
            <div CLASS="card-body">
              <div CLASS="table-responsive">
                <table CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Post Id</th>
                            <th>Title Post</th>
                            <th>Author</th>
                            <th>Image</th>
                            <th>Slug</th>
                        </tr>
                    </thead>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->post_id}}</td>
                            <td>{{$post->post_name}}</td>
                            <td>{{$post->authorId}}</td>
                            <td><img src="{{$post->post_image}}" alt="Image" class="img-thumbnail"></td>
                            <td>{{$post->post_slug}}</td>
                        </tr>
                    @endforeach
                </table>
              </div>
            </div>
    </div>

@endsection
