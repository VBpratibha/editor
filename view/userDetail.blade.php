 @extends('Contents::header')
<div id="page-wrapper">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">
               Telkel Admin
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
                  <div class="image">
                     <img alt="image" class="img-circle" src="http://192.168.168.151/telkel-vanguard/public/upload/users/c3734a846de218d9c4107d6622edb213.png">
                  </div>
                  <div class="name"><strong>Telkel Admin </strong></div>
                  <div class="icons">
                  </div>
                  <br>
                  <table class="table table-hover table-details">
                     <thead>
                        <tr>
                           <th colspan="3">Contact Informations</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Email</td>
                           <td><a href="mailto:chris.telkel.ca@gmail.com">chris.telkel.ca@gmail.com</a></td>
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
                           <td>Birth</td>
                           <td>-</td>
                        </tr>
                        <tr>
                           <td>Address</td>
                           <td>Canada</td>
                        </tr>
                        <tr>
                           <td>Last Logged In'</td>
                           <td>3 minutes ago</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="col-lg-8 col-md-7">
            <div class="panel panel-default">
               <div class="panel-heading">
                  Latest Activity                
                  <div class="pull-right">
                     <a href="http://192.168.168.151/telkel-vanguard/public/activity/user/1/log" class="edit"
                        data-toggle="tooltip" data-placement="top" title="Complete Activity Log">
                     View All                    </a>
                  </div>
               </div>
               <div class="panel-body">
                  <table class="table user-activity">
                     <thead>
                        <tr>
                           <th>Action</th>
                           <th>Date</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Logged in.</td>
                           <td>2016-10-21 00:58:38</td>
                        </tr>
                        <tr>
                           <td>Logged in.</td>
                           <td>2016-10-21 00:43:09</td>
                        </tr>
                        <tr>
                           <td>Updated role permissions.</td>
                           <td>2016-10-21 00:23:42</td>
                        </tr>
                        <tr>
                           <td>Logged in.</td>
                           <td>2016-10-21 00:22:55</td>
                        </tr>
                        <tr>
                           <td>Logged in.</td>
                           <td>2016-10-20 07:30:19</td>
                        </tr>
                        <tr>
                           <td>Logged out.</td>
                           <td>2016-10-20 01:36:10</td>
                        </tr>
                        <tr>
                           <td>Logged in.</td>
                           <td>2016-10-20 01:34:57</td>
                        </tr>
                        <tr>
                           <td>Logged in.</td>
                           <td>2016-10-20 00:44:27</td>
                        </tr>
                        <tr>
                           <td>Logged in.</td>
                           <td>2016-10-20 00:25:08</td>
                        </tr>
                        <tr>
                           <td>Logged out.</td>
                           <td>2016-10-19 08:35:13</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

