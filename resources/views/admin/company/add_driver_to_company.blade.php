@extends('layouts.app')

@section('content')

<div id="page-content">
  <div id='wrap'>
    <div id="page-heading" class="page-bottom">
      <h1>Add New Driver</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info">
            <div class="panel-body">
              <form action="{{ ('../add_driver_to_company') }}" method="POST" id="wizard" class="form-horizontal">
                {{ csrf_field() }}
                <fieldset title="1">
                  <legend style="display:none">Add New Driver</legend>
                  <div class="form-group">
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="col-md-4">
                          <input type="hidden" name="company_id" value="{{ $company->id }}">
                          <div class="form-group">
                            <label for="fieldname" class="col-md-12 control-label">Name*</label>
                            <div class="col-md-12">
                              <input id="fieldname" class="form-control" name="name" minlength="4" type="text" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="fieldname" class="col-md-12 control-label">License</label>
                            <div class="col-md-12">
                              <input id="fieldname" class="form-control" name="license" minlength="4" type="text" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="fieldname" class="col-md-12 control-label">Email*</label>
                            <div class="col-md-12">
                              <input id="fieldname" class="form-control" name="email" type="text" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="fieldname" class="col-md-12 control-label">Phone Number*</label>
                              <div class="col-md-12">
                                <input id="fieldaddress" class="form-control" name="phonenumber" type="text" required>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="fieldname" class="col-md-12 control-label">Address</label>
                              <div class="col-md-12">
                                <input id="fieldemail" class="form-control" type="text" name="address" >
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="fieldname" class="col-md-12 control-label">Joining Date</label>
                              <div class="col-md-12">
                                <input id="fieldemail" class="form-control" type="text" name="joiningdate"  id="datepicker1" >
                              </div>
                            </div>
                          </div>
                      </div>

                    </div>
                  </div>
                </fieldset>
                <input type="submit" class="finish btn-success btn" value="Submit" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- container -->
  </div> <!--wrap -->
</div> <!-- page-content -->
@endsection
