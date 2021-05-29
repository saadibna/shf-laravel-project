@extends('admin.index')


@section('content')
<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Testimonials</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.form.testimonials')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Client Name</label>
                    <input name="name" type="text" class="form-control" id="clientName" placeholder="Enter Client Name">
                  </div>

                  <div class="form-group">
                    <label for="designation">Client Designation</label>
                    <input name="designation" type="text" class="form-control" id="designation" placeholder="Enter Client Designation">
                  </div>

                  <div>
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="comment">Client Comment</label>
                        <textarea name="comment" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Upload Image</label>
                    <div class="input-group">
                      {{--<div class="custom-file">--}}
                        {{--<input type="file" class="custom-file-input" id="exampleInputFile">--}}
                        {{--<label class="custom-file-label" for="exampleInputFile">Upload Image</label>--}}
                      {{--</div>--}}

                      {{--<div class="input-group-append">--}}
                        {{--<span class="input-group-text">Upload</span>--}}
                      {{--</div>--}}
                    </div>

                    <input type="file" id="myFile" name="image">

                  </div>

                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>
@endsection

