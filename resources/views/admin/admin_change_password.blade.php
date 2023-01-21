@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">change Profile Page </h4>

            <form method="post" action="{{ route('update.password') }}" enctype="multipart/form-data">
                @csrf

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                <div class="col-sm-10">
                    <input name="oldpassword" class="form-control" type="password"  id="oldpassword">
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Newpassword</label>
                <div class="col-sm-10">
                    <input name="newpassword" class="form-control" type="password"  id="newpassword">
                </div>
            </div>
            <!-- end row -->

            

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Confrim password</label>
                <div class="col-sm-10">
                    <input name="confirm_password" class="form-control" type="password"  id="confirm_password">
                </div>
            </div>
            <!-- end row -->


            <!-- end row -->
            <input type="submit" class="btn btn-info waves-effect waves-light" value="Change password">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>
@endsection