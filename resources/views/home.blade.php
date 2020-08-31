@EXTENDS('layout.main')

@section('content')

    <!-- DataTales Example -->
    <div CLASS="card shadow mb-4">
        <div CLASS="card-header py-3">
          <h6 CLASS="m-0 font-weight-bold text-primary">Welcome Back!</h6>
        </div>
            <div CLASS="card-body">
              <h3>Say hi,<?=Auth::user()->name?></h3>
            </div>
    </div>

@endsection

