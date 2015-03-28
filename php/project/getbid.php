<?php  
session_start();
include_once('../dbconfig.php');
$prjctno = $_GET['prjctno'];
$sql1 = "SELECT p.userno, u.username FROM Projects p, Users u WHERE prjctno = '$prjctno' AND u.userno = p.userno";
$res = mysql_query($sql1,$conn);
$usr= mysql_fetch_object($res);
$sql = "SELECT b.bidno, b.biddate, b.bidprice, b.estworkday, b.userno, b.prjctno, u.username 
		FROM Bids b, Users u WHERE prjctno = '$prjctno' AND u.userno = b.userno ORDER BY b.biddate DESC";
$bids = mysql_query($sql,$conn);
while ($row = mysql_fetch_object($bids)) {
	echo '<li class="list-group-item">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="bidderName" id="' . $row->userno .'">
                                <p id="bidder">'. $row->username .'</p>
                                <img src="img/user.png" class="img-circle img-responsive" style="backgroud-color: #8A8A8A">
                            </div>
                        </div><!-- col Username and Picture -->
                        <div class="col-md-2">
                            <span data-livestamp="' . $row->biddate.  '" id="biddateposted"></span>
                        </div><!-- col Bid date -->
                        <div class="col-md-4">
                            
                        </div><!-- Offset -->
                        <div class="col-md-3 col-md-offset-1">
                            <h4 class="text-center"><strong> ' . $row->bidprice . ' in  ' . $row->estworkday . ' day(s)</strong></h4>
                            <button class="btn btn-primary btn-block bidderName" id="' . $row->userno .'">View Profile</button>';

    if($usr->username == $_SESSION['user']) {
        echo '<button class="btn btn-primary btn-block hireBidder" id="' . $row->username .'">Hire Bidder</button>
                        </div>
                    </div>
            </li>';
    } else {
        echo '  </div>
                    </div>
            </li>';
    }
}

?>