      @extends('Contents::header')

      @section('content')
      <div id="page-wrapper">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                  <h1 class="page-header">
                     Create New User            <small>User Details</small>
                  </h1>
               </div>
            </div>
            <div id="msg-info" class="alert alert-info" style="display:none;">
               <i class="fa fa-info-circle"></i> 
               <span id="info-text"></span>
               <button type="button" class="close" aria-hidden="true">&times;</button>
            </div>
            <div id="msg-warning" class="alert alert-warning" style="display:none;">
               <i class="fa fa-exclamation-triangle"></i> 
               <span id="warning-text"></span>
               <button type="button" class="close" aria-hidden="true">&times;</button>
            </div>
            <div id="msg-success" class="alert alert-success" style="display:none;">
               <i class="fa fa-check"></i> 
               <span id="msg-text"></span>
               <button type="button" class="close" aria-hidden="true">&times;</button>
            </div>
            <div id="msg-error" class="alert alert-danger" style="display:none;">
               <i class="fa fa-close"></i> 
               <span id="error-text"></span>
               <button type="button" class="close" aria-hidden="true">&times;</button>
            </div>
            <form method="POST" action='{{ url("/admin/addUser") }}' id="userAdd">
              <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                <div class="panel panel-default">
                  <div class="panel-heading">User Details</div>
                  <div class="panel-body">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{!! old('name') !!}">
                              <p style="color:red">{!! $errors->first('name') !!}</p>
                           </div>
                           <div class="form-group">
                              <label for="email">Email</label>
                              <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{!! old('email') !!}">
                              <p style="color:red">{!! $errors->first('email') !!}</p>
                           </div>
                           <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="">
                              <p style="color:red">{!! $errors->first('password') !!}</p>
                           </div>
                           <div class="form-group">
                              <label for="cpassword">Confirm Password</label>
                              <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" value="">
                              <p style="color:red">{!! $errors->first('cpassword') !!}</p>
                           </div>
                           <div class="form-group">
                              <label for="status">Status</label>
                              <select class="form-control" id="status" ="" name="status">
                                <option value="1" selected="selected">Active</option>
                                <option value="0" >Banned</option>
                              </select>
                           </div>                                       
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="btn btn-primary" id="update-details-btn">
                          <i class="fa fa-refresh"></i>
                          Create User         </button>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
      @endsection


