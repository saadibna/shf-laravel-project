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

                <h3 class="card-title">Add Case Study</h3>

                <h3 class="card-title">Add Testimonials</h3>

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">

                    <label for="caseName">Clint Name</label>
                    <input type="text" class="form-control" id="caseName" placeholder="Enter clint Name">
                  </div>

                  <div class="form-group">
                    <label for="lawyerName">Clint Designation</label>
                    <input type="text" class="form-control" id="lawyerName" placeholder="clint designation">

                    <label for="clientName">Client Name</label>
                    <input type="text" class="form-control" id="clientName" placeholder="Enter Client Name">
                  </div>

                  <div class="form-group">
                    <label for="designation">Client Designation</label>
                    <input type="text" class="form-control" id="designation" placeholder="Enter Client Designation">

                  </div>

                  <div>
                      <!-- textarea -->
                      <div class="form-group">

                        <label>Clint Comment</label>

                        <label>Client Comment</label>

                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>


                  <div class="form-group">
                    <div class="form-group">

                    <label for="exampleInputFile">Upload Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Upload Image</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
               

                  

                
                <!-- /.card-body -->
                


                </div>

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