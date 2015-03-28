<div class="col-md-10 col-md-offset-1">
<div class="row">
    <div class="col-md-6">
    <button type="button" class="btn btn-primary" id="backToProject"><i class="fa fa-arrow-circle-left"></i> Back to Project List</button>
        <h3 id="prjcttitle">Android App for our Restaurant Business</h3>
        <p><span id="postedby"></span> <span data-livestamp="" id="dateposted"></span></p>
        <p><strong>Project Deadline: </strong> <span id="deadlinedate"></span></p>
        <p><strong>Project Price: </strong> <span id="minbudget"></span> - <span id="maxbudget"></span></p>
        
        <p><strong>Project Description: </strong></p>
        <p id="prjctdesc">android app for our new restaurant</p>

        <p><strong>Skills Required: </strong></p>
        <p id="skills">android, java, photoshop</p>
    </div>
  <div class="col-md-offset-2 col-md-4" style="margin-top: 0px;">
    <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Place Bid</h3>      
                </div><!-- Panel Heading -->
                <div class="panel-body">
                    <form role="form" id="frmPlaceBid">
                        <label>Paid to you: </label>
                            <div class="input-group">
                                <span class="input-group-addon">₱</span>
                                <input type="text" name="bidprice" id="bidprice" class="form-control" placeholder="" required>
                            </div><!-- Input grp  -->
                        <label>Work for: </label>
                            <div class="input-group">
                                <input type="text" name="estworkday" id="estworkday" class="form-control" placeholder="" required>
                                <span class="input-group-addon">Days</span>
                            </div><!-- Input grp  -->
                            <br/>
                        <button class="btn btn-primary btn-block" type="submit" id="frmPlaceBidSubmitBtn">
                         Place Bid</button>
                    </form>
                </div><!-- Panel body -->
    </div><!-- panel -->  
 
                      
 </div>
  
   
</div><!-- /. Row Project Info -->
<div class="row">
    <div class="panel panel-default widget">
        <div class="panel-heading">
            <h3 class="panel-title">
                <div class="row">
                        <div class="col-md-2">
                            <p>Sideliner Bidders</p>
                        
                        </div><!-- col Username and Picture -->
                        <div class="col-md-2">
                            
                        </div><!-- col Bid date -->
                        <div class="col-md-4">
                            
                        </div><!-- Offset -->
                        <div class="col-md-3 col-md-offset-1">
                            <p>Bid (Php)</p>
                        </div>
                    </div>
            </h3>
            <!-- <span class="label label-info">
                78
            </span> -->
        </div><!-- Panel heading -->
        <div class="panel-body">
            <ul class="list-group" id="projectBidList">
                
            </ul>
        </div><!-- /. Panel body -->
    </div><!-- /. Panel Widget --> 
</div><!-- /. Row Panel -->

</div><!-- /. col main content -->