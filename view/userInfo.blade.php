	@extends('Contents::header')

	@section('content')

	<div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	           <div class="col-lg-12">
	              <h1 class="page-header">
	                 Users            <small>list of registered users</small>
	                 
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
	        <div class="row tab-search">
	           <div class="col-md-3">
	              <a href='{{ url("/admin/addUser") }}' class="btn btn-success" id="add-user">
	              <i class="glyphicon glyphicon-plus"></i>
	              Add User        </a>
	           </div>
	           
	        </div>
	        <div class="table-responsive top-border-table" id="users-table-wrapper">
	           <table class="table" id="userTable">
	              <thead>
					<th>S.No.</th>
					<th>Full Name</th>
					<th>Email</th>
					<th>Registration Date</th>
					<th>Status</th>
					<th class="text-center">Action</th>
	              </thead>
	              <tbody>
	              	<?php $count=1; ?>
	              	@foreach($info['all_user'] as $row)
	                 <tr>
	                 	<td>{{ $count }}</td>
	                    <td>{{ $row->name }}</td>
	                    <td>{{ $row->email }}</td>
	                    <td>{{ $row->created_at }}</td>
	                    <td>
	                    	@if($row->status == '1')
	                       <span class="label label-success">Active</span>
	                       @else
	                       <span class="label label-danger">Banned</span>
	                       @endif
	                    </td>
	                    <td class="text-center">
	                       <a href='{{ url("/admin/userView/$row->id") }}' class="btn btn-success btn-circle"
	                          title="View User" data-toggle="tooltip" data-placement="top">
	                       <i class="glyphicon glyphicon-eye-open"></i>
	                       </a>
	                       <a href='{{ url("/admin/userEdit/$row->id") }}' class="btn btn-warning btn-circle edit" title="Edit User"
	                          data-toggle="tooltip" data-placement="top">
	                       <i class="glyphicon glyphicon-edit"></i>
	                       </a>
	                       <meta name="token" content="csrf_token()">
	                       <a href='{{ url("/admin/delete/$row->id") }}' class="btn btn-danger btn-circle" title="Delete User" onclick="return confirm('Are you sure that you want to delete this user?')">
	                       <i class="glyphicon glyphicon-trash"></i>
	                       </a>
	                    </td>
	                 </tr>
	                 <?php $count++; ?>
	                 @endforeach
	   	        	</tbody>
	           </table>
	        </div>
	     </div>
	  </div>
	@endsection