<?php 
$months = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
?>
<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
    	<div class="panel-body well">
    		<legend>Sign up for a Sideliner Account!</legend>
		    <form class="form" role="form" id="frmSignUp">
		    <div class="row">
		        <div class="col-xs-6 col-md-6">
		            <input class="form-control" name="fname" placeholder="First Name" type="text" required autofocus />
		        </div>
		        <div class="col-xs-6 col-md-6">
		            <input class="form-control" name="lname" placeholder="Last Name" type="text" required />
		        </div>
		    </div><!-- /.row name -->
		    
		    <div class="row">
		        <div class="col-xs-4 col-md-4">
		            <select class="form-control" name="month">
		                <?php foreach ($months as $monthno => $monthname): ?>
		                	<option value="<?= $monthno + 1 ?>"><?= $monthname ?></option>
		                <?php endforeach ?>
		            </select>
		        </div>
		        <div class="col-xs-4 col-md-4">
		            <select class="form-control" name="day">
		                <?php for($day = 1; $day <= 31; $day++): ?>
		                	<option value="<?= $day ?>"><?= $day ?></option>
		                <?php endfor ?>
		            </select>
		        </div>
		        <div class="col-xs-4 col-md-4">
		            <select class="form-control" name="year">
		                <?php for($year = 1950; $year <= 2000; $year++): ?>
		                	<option value="<?= $year ?>"><?= $year ?></option>
		                <?php endfor ?>
		            </select>
		        </div>
		    </div><!-- /.row bday -->

		    <input class="form-control" name="email" placeholder="Email Address" type="email" required/>
		    <input class="form-control" name="username" placeholder="Username" type="username" required />
		    <input class="form-control" name="password" placeholder="Password" type="password"  required/>
		    <br />
		    <button class="btn btn-lg btn-primary btn-block" type="submit" id="frmSignUpSubmitBtn">
		    	<i class="fa fa-user-plus" id="frmSignUpLoading"></i> 
		    	Sign up
		    </button>
		    </form>
		   
    	</div><!-- /.panel-body -->
    </div><!-- /.panel -->
</div><!-- /.column -->
