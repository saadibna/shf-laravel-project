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
                <h3 class="card-title">Appointment</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="userName"> Name</label>
                    <input type="text" class="form-control" id="userName" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="userName">Email</label>
                    <input type="Email" class="form-control" id="userEmail" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="userName">Phone</label>
                    <input type="phone" class="form-control" id="userPhone" placeholder="Enter number">
                  </div>
                  <div class="form-group">
                    <label for="userName">Date</label>
                    <input type="Date" class="form-control" id="userDate" placeholder="Enter Date">
                  </div>
                  <div class="form-group">
                    <label for="userName">Time</label>
                    <input type="Time" class="form-control" id="userName" placeholder="Enter name">
                  </div>

                  <div>
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>

                 
                </div>
                <!-- /.card-body -->

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