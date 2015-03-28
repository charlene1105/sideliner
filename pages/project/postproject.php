<?php 
$months = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
?>
<div class="col-md-offset-3 col-md-6" style="margin-bottom: 200px">
	<form action="#" class="form" id="frmPostProject">
		<legend>Post Project</legend>
	
		<div class="form-group">
			<label for="">
				<strong>What type of work do you require?</strong>
			</label>
			<select name="category" id="projectCategory" class="form-control" required="required">
				<option value="Web & Software Development">Web & Software Development</option>
				<option value="Mobile App Development">Mobile App Development</option>
				<option value="Writing">Writing</option>
				<option value="Digital Arts/Graphics Design/Photography">Digital Arts/Graphics Design/Photography</option>
				<option value="Sales & Marketing">Sales & Marketing</option>
				<option value="Data Entry">Data Entry</option>
			</select>
		</div><!-- form grp Category -->
		
		<div class="form-group">
			<label for="">
				<strong>Project Title</strong>
			</label>
			<input type="text" name="title" id="input" class="form-control" placeholder="Name/Title of the project" required>
		</div><!-- form grp project title -->
		
		<div class="form-group">
			<label for="">
				<strong>Skills Required (separated by comma)</strong>
			</label>
			<input type="text" name="skills" id="input" class="form-control" placeholder="Skills required to finish the project" required>
		</div><!-- form group skills -->

		<div class="form-group">
			<label for="">
				<strong>Project Description</strong>
			</label>
			<textarea name="prjctdesc" id="" class="form-control" placeholder="Tell something about the project here" required></textarea>
		</div><!-- form grp project desc -->

		<div class="form-group">
			<label for="">
				<strong>Project Budget</strong>
			</label>
			<div class="row">
				<div class="col-md-6">
					<div class="input-group">
						<span class="input-group-addon">₱</span>
						<input type="text" name="minbudget" id="input" class="form-control" placeholder="Min Budget" required>
					</div><!-- input grp min budget -->
				</div><!-- col min budget -->
				<div class="col-md-6">
					<div class="input-group">
						<span class="input-group-addon">₱</span>
						<input type="text" name="maxbudget" id="input" class="form-control" placeholder="Max Budget" required>
					</div><!-- input grp max budget -->
				</div><!-- col max budget -->
			</div><!-- row project budget -->
		</div><!-- form grp project budget -->

		<div class="form-group">
			<label for="">
				<strong>Project Deadline</strong>
			</label>
			<div class="row">
				<div class="col-md-4">
						<select class="form-control" name="month">
				                <?php foreach ($months as $monthno => $monthname): ?>
				                	<option value="<?= $monthno + 1 ?>"><?= $monthname ?></option>
				                <?php endforeach ?>
				        </select>
				</div><!-- col month -->
				<div class="col-md-4">
						<select class="form-control" name="day">
			                <?php for($day = 1; $day <= 31; $day++): ?>
			                	<option value="<?= $day ?>"><?= $day ?></option>
			                <?php endfor ?>
			            </select>
				</div><!-- col day -->
				<div class="col-md-4">
						<select class="form-control" name="year">
			                <?php for($year = 2015; $year <= 2019; $year++): ?>
			                	<option value="<?= $year ?>"><?= $year ?></option>
			                <?php endfor ?>
			            </select>
				</div><!-- col year -->
			</div><!-- row project deadline -->
		</div><!-- form grp project deadline -->
	
		<button class="btn btn-lg btn-primary btn-block" type="submit" id="frmPostProjectSubmitBtn">
		<i class="fa fa-list" id="frmPostProjectLoading"></i> Post Project</button>
	</form>
</div>