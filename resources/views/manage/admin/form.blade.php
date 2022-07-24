@extends('layouts.be.app')

@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <ol class="breadcrumb">
                <li>
                    <h3 style="font-size: 16px !important;">
                        <a href="{{ route('admin.index')}}">Admin</a>
                    </h3>
                </li>
                <li class="active">
                    <h3 style="font-size: 16px !important;">
                        {{ ($admin) ? 'Edit' : 'Add' }} Data Admin
                    </h3>
                </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session('status'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        <h3 class="text-danger">
                            Gagal
                        </h3>
                        {{ session('status') }}
                    </div>
                    @endif
                    <form id="formAdmin" class="form m-t-20" action="{{ route('admin.edit',$admin->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Nama<span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="text" name="name" id="name" class="form-control" value="{{ (old('name') ? old('name') : ((isset($admin)) ? $admin->name : '')) }}" placeholder="Masukkan Nama" required data-validation-required-message="This field is required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Username<span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="text" name="username" id="username" class="form-control" value="{{ (old('username') ? old('username') : ((isset($admin)) ? $admin->username : '')) }}" placeholder="Masukkan Username" required data-validation-required-message="This field is required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email<span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="email" name="email" id="email" class="form-control" @if($admin) ? disabled : ''@endif value="{{ (old('email') ? old('email') : ((isset($admin)) ? $admin->email : '')) }}" placeholder="Masukkan Email" required data-validation-required-message="This field is required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Password<span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="password" name="password" id="password" class="form-control" @if($admin) ? disabled : ''@endif value="{{ (old('password') ? old('password') : ((isset($admin)) ? $admin->password : '')) }}" placeholder="Masukkan Password" required data-validation-required-message="This field is required">
                            </div>
                        </div>
                        <div class="text-xs-right">
                            <hr>
                            <button type="submit" class="btn btn-info">Submit</button>
                            <a href="{{route('admin.index')}}"><button type="button" class="btn btn-outline-secondary">Cancel</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#formAdmin").submit( function(e) {
                var messageLength = CKEDITOR.instances['post_content'].getData().replace(/<[^>]*>/gi, '').length;
                if( !messageLength ) {
                    alert( 'Please fill Content' );
                    e.preventDefault();
                    $("form").find('[type=submit]').removeAttr("disabled");
                }

            });
        });

        $('.datetimepicker').datetimepicker({
            format:'YYYY-MM-DD HH:mm:ss',
            });

        $('.dp').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });

        $(function() {
            CKEDITOR.replace('post_content');
        });
    </script>
@endpush
