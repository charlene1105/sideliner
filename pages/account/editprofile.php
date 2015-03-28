
<div class="col-md-6 col-md-offset-3" style="margin-bottom: 100px">
	<div class="panel panel-default">
    	<div class="panel-body well" style="padding: 30px">
    		<legend>Edit Profile</legend>
		    <form class="form" role="form" id="frmEditProfile">
		    	<div class="row">
		    		<div class="col-md-6">
		    			<div class="input-group">
		    				<span class="input-group-addon">+639</span>
		    				<input class="form-control" name="contactno" placeholder="Contact Number" type="text" id="contactno" autofocus />
		    			</div>
		    		</div>
		    		<div class="col-md-6">
		    			 <input class="form-control" name="email" placeholder="Email Address" type="email" id="email"/>
		    		</div>
		    	</div>
		     
		   
		   
		    <div class="row">
		    	<div class="col-md-8">
		    		 <input class="form-control" name="address" placeholder="Address" type="text" id="address"/>
		    	</div>
		    	<div class="col-md-4">
		    		<input class="form-control" name="zipcode" placeholder="Zipcode" type="text" id="zipcode"/>
		    	</div>
		    </div>

		    <p>Skills (seperated by comma)</p>
		    <textarea name="skills" class="form-control" id="skills"></textarea>
		    <br />
		    <button class="btn btn-lg btn-primary btn-block" type="submit" id="frmSignUpSubmitBtn">
		    	<i class="fa fa-pencil" id="frmSignUpLoading"></i> 
		    	Save Details
		    </button>
		    </form>
		   
    	</div><!-- /.panel-body -->
    </div><!-- /.panel -->
</div>