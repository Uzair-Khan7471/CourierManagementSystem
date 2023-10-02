<?php
include('admin/header/connection.php');
if(isset($_POST['brown'])){
    $x=$_POST['qq'];
$query = "SELECT * FROM booking  join branch on booking.deliver_branch_id_fk=branch.branch_id join status_table on booking.status_id_FK=status_table.status_id join parcel_information on booking.booking_id=parcel_information.booking_id_fk join parcel_type on parcel_information.type_id_fk =parcel_type.type_id WHERE tracking_id='$x'";
$result = mysqli_query($con,$query);


$html = 
'<table>
<tr><th>SENDER NAME</th>
<th>RECIEVER NAME</th>
<th>TRACKING ID</th>
<th>Status</th>
<th>SENDER EMAIL</th>
<th>SENDER CONTACT</th>
<th>SENDER ADDRESS</th>

<th>RECIEVER EMAIL</th>
<th>RECIEVER CONTACT</th>
<th>RECIEVER ADDRESS</th>
<th>WIDTH</th>
<th>WEIGHT</th>

<th>LENGHT</th>
<th>HEIGHT</th>
<th>PRICE</th>
<th>DATE </th>
<th>RECIEVER NEAREST BRANCH </th>






</tr>
';

while($data=mysqli_fetch_assoc($result)) { 

    $html.= 
    '
    <tr><td>'.$data['sender_name'].'</td>
    <td>'.$data['reciever_name'].'</td>
    <td>'.$data['tracking_id'].'</td>
    <td>'.$data['status_name'].'</td>
    <td>'.$data['sender_email'].'</td>
    <td>'.$data['sender_contact'].'</td>
    <td>'.$data['sender_address'].'</td>
    <td>'.$data['reciever_email'].'</td>
    <td>'.$data['reciever_contact'].'</td>
    <td>'.$data['reciever_address'].'</td>
    <td>'.$data['width'].'</td>
    <td>'.$data['weight'].'</td>
    <td>'.$data['lenght'].'</td>
    <td>'.$data['height'].'</td>
    <td>'.$data['price'].'</td>
    <td>'.$data['date'].'</td>
    <td>'.$data['area'].'</td>
 
    </tr>
    ';

}
$html.= '</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=report.xls');
    
    echo $html;
}
?>