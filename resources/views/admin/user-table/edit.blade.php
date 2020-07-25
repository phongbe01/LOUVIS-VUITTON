@extends('admin.index')
@section('content')
    <div class="col-lg-12 container">
        <div>
            <h1>User</h1>
        </div>
        <div class="form-group">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <input name="_method" type="hidden" value="put">
                <table class="table">

                    <div class="form-group">
                        <label class="col-form-label" for="cus_name">Name</label>
                        <input class="input-group-text" type="text" name="name" value="{{$user->name}}"><br>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="price">Email</label>
                        <input class="input-group-text" type="email" name="email" value="{{$user->email}}"><br>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </table>

            </form>

        </div>
    </div>
@endsection
