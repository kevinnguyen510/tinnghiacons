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
                            <th colspan="2">Acction</th>
                        </tr>
                    </thead>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->post_id}}</td>
                            <td>{{$post->post_name}}</td>
                            <td>{{$post->authorId}}</td>
                            <td><img src="{{$post->post_image}}" alt="Image" class="img-thumbnail" width="50" height="50"></td>
                            <td>{{$post->post_slug}}</td>
                            <td>
                                <a href="edit-post/{{$post->post_id}}">Update</a>
                            </td>
                            <td>
                                <a href="delete-post/{{$post->post_id}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
              </div>
            </div>
    </div>

@endsection
