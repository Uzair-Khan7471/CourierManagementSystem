<?php include('header.php');

include('admin/header/connection.php');
$branch_q="select * from branch";
$res_branch=mysqli_query($con,$branch_q);

$branch_qq="select * from branch ";
$res_branch2=mysqli_query($con,$branch_qq);




$pri_kg="select * from constraints where constraint_name='KG'";
$res_kg=mysqli_query($con,$pri_kg);
$data_kg=mysqli_fetch_assoc($res_kg);
$kg=$data_kg['price'];


$pri_km="select * from constraints where constraint_name='KM'";
$res_km=mysqli_query($con,$pri_km);
$data_km=mysqli_fetch_assoc($res_km);
$km=$data_km['price'];



?>


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Shipment Rates</h2>
              <p>Manage orders, automate shipping with rules, organize packing with pick lists and packing slips, track shipments, and notify recipients — in one easy-to-use platform.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container text-align-center">
          <ol class="justify-content-center">
            <li><a href="index.php">Home</a></li>
            <li><a href="shipmentrate.php">Shipment Rates</a></li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->
 <div class="container">
 <div class="row mt-5 mx-5 pb-5 border-bottom border-primary" id="detail_of_parcel">
<div class="col-xl-6 col-sm-12">
<h6 class="mb-2">choose nearest branch</h6>
                                <div class="form-floating mb-4">
                                    <select class="form-control" name="pick_citys" id="pick_city" onchange="pick()" >
                                    <option value="" selected disabled>Choose Branch</option>
                                        <?php while($data1=mysqli_fetch_assoc($res_branch)){ ?>
                 <option value='<?php echo $data1['branch_id'];?>  <?php echo $data1['lattitude'];?> <?php echo $data1['longitude'];?>'><?php echo $data1['area'];?></option>
                   
                   <?php } ?>
                   <input type="hidden"  name="" id="pick_lat" placeholder="idd" >
                   <input type="hidden"  name="" id="pick_long" placeholder="idd" >
                                    </select>
                                    <label for="floatingSelect">Select branch</label>
                                </div> 


                                <h6 class="mb-2">choose Delever branch</h6>
                                <div class="form-floating mb-4">
                                    <select class="form-control" name="drop_citys" id="drop_city" onchange="drop()">
                                    <option value="" selected disabled>Choose Branch</option>
                                      <?php while($data1=mysqli_fetch_assoc($res_branch2)){ ?>
                                    
                                        <option value='<?php echo $data1['branch_id'];?> <?php echo $data1['lattitude'];?> <?php echo $data1['longitude'];?>'><?php echo $data1['area'];?></option>
                   
                   <?php } ?>
                   <input type="hidden" name="" id="drop_lat" placeholder="idd" >
                   <input type="hidden"  name="" id="drop_long" placeholder="idd" >
                                    </select>
                                    <label for="floatingSelect">Select branch</label>
                                </div> 
                             

<input type="hidden" name="" id="kg" value="<?php echo $kg ?>">
<input type="hidden" name="" id="km" value="<?php echo $km ?>">
<input type="hidden" name="" id="distance" >
<div class="row">
<div class="col-sm-12 col-xl-6 mb-4">
      <h6 class="mb-2">Height</h6>
      <input type="tel" class="form-control"  placeholder="In Inches" name="height">
      </div>
<div class="col-sm-12 col-xl-6 mb-4">
<h6 class="mb-2">Weight</h6>
<input type="tel" class="form-control" id="user_weight" placeholder="In Kg" name="weight">
</div>
</div>
<div class="row">
<div class="col-sm-12 col-xl-6 mb-4">
<h6 class="mb-2">Length</h6>
<input type="tel" class="form-control"  placeholder="In Inches" name="length">
</div>
<div class="col-sm-12 col-xl-6 mb-4">
<h6 class="mb-2">Width</h6>
<input type="tel" class="form-control"  placeholder="In cm" name="width">
</div>
</div>
<div class="col-xl-12 col-sm-12  mb-4">
<h6 class="mb-2">Price</h6>
<input type="tel" disabled class="form-control" name="price" placeholder="0.00 PKR" id="res">
</div>
<center>
<div class="col-sm-12 col-xl-4 btn-group align-items-end  ">
<button type="button"  name="add-iem_btn" class="btn btn-primary" onclick="xyz()">check price</button>
</div> 
</center>
</div>

<div class="col-xl-6 col-sm-12  mt-sm-2">
  <img src="assets/img/maximum_parcel_dimensions_measurements.png" alt="" srcset="" class="w-100">
</div>
</div>
<div class="container mt-3 mb-3 text-center">
<a href="form.php"><button type="submit" class="btn btn-primary btn-lg"  name="save_btn" style="background-color:#0d42ff; color:#fff;border:1px solid #0d42ff">Booking</button></a>

</form>
</div>
</div>

 </div>
 <script>
 var Settlement = [];
Settlement.deg2rad = function(deg)
{
	return (deg * Math.PI) / 180.0;
}
Settlement.rad2deg = function(angle) {
  // (angle / Math.PI * 180)
  return angle * 57.29577951308232; 
}

function pick(){
    var str=document.getElementById("pick_city").value;
    id=str.trim().split(/\s+/);
    document.getElementById("pick_lat").value=id[1]
    document.getElementById("pick_long").value=id[2]
}
function drop(){
    var str=document.getElementById("drop_city").value;
    id=str.trim().split(/\s+/);
    document.getElementById("drop_lat").value=id[1]
    document.getElementById("drop_long").value=id[2]
}







function xyz(){
    latitudeFrom = document.getElementById("pick_lat").value;
longitudeFrom = document.getElementById("pick_long").value;
latitudeTo = document.getElementById("drop_lat").value;
longitudeTo = document.getElementById("drop_long").value;
//Calculate distance of two longitude and latitude;
theta = longitudeFrom - longitudeTo;
dist = Math.sin(Settlement.deg2rad(latitudeFrom)) * Math.sin(Settlement.deg2rad(latitudeTo)) + Math.cos(Settlement.deg2rad(latitudeFrom)) * Math.cos(Settlement.deg2rad(latitudeTo)) * Math.cos(Settlement.deg2rad(theta));
dist = Math.acos(dist);
dist = Settlement.rad2deg(dist);
miles = dist * 60 * 1.1515;
console.log(distance = miles * 1.609344+' km');
total=distance = miles * 1.609344
document.getElementById("distance").value=total
//kg 
//km
//weight
var weight_user= document.getElementById("user_weight").value;
var kilometer= document.getElementById("km").value;
var kilogram= document.getElementById("kg").value;
var final_weight=weight_user*kilogram
var final_lenght=total*kilometer
var final_price=final_weight+final_lenght
document.getElementById("res").value=final_price
}

</script> 
<?php include('footer.php')?>