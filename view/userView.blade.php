        @extends('Contents::header')
        @section('content')
        <div id="page-wrapper">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                  <h1 class="page-header">
                     AnyLinuxWork Admin
                     <small>User Details</small>
                  </h1>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-5">
                  <div id="edit-user-panel" class="panel panel-default">
                     <div class="panel-heading">
                        Details                
                        <div class="pull-right">
                           <a href="http://192.168.168.151/telkel-vanguard/public/user/1/edit" class="edit"
                              data-toggle="tooltip" data-placement="top" title="Edit User">
                           Edit                    </a>
                        </div>
                     </div>
                     <div class="panel-body panel-profile">
                        <table class="table table-hover table-details">
                           <thead>
                              <tr>
                                 <th colspan="3">Contact Informations</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>Email</td>

                                 <td><a href="mailto:<?php echo $info['user_detail']->email; ?>"><?php echo $info['user_detail']->email; ?></a></td>
                              </tr>
                           </tbody>
                        </table>
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th colspan="3">Additional Informations</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>Name</td>
                                 <td><?php echo $info['user_detail']->name; ?></td>
                              </tr>
                              <tr>
                                 <td>Registration Date</td>
                                 <td><?php echo $info['user_detail']->created_at; ?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        </div>
        @endsection

