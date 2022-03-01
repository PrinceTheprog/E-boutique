<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $date = new DateTime('2000-05-26T13:30:20'); /* Friday, May 26, 2000 at 1:30:20 PM */
$date->format("H:i");
/* Returns 13:30 */
$date->format("H i s");
/* Returns 13 30 20 */
$date->format("h:i:s A");
/* Returns 01:30:20 PM */

        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";
        $sql = "SELECT * FROM messages LEFT JOIN users ON users.unique_id = messages.outgoing_msg_id
                WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            $firstMessage = date("d/M/Y");
                print("<p style='text-align: center'>$firstMessage</p>");
            while($row = mysqli_fetch_assoc($query)){
                if($row['outgoing_msg_id'] === $outgoing_id){
                    //<div style="text-align: center">
                    
                    $output .= '
                                <div class="chat outgoing">
                                <div class="details">
                                    
                                    <p>'. $row['msg'] ."<span style= 'font-size: 12px; float: right;margin-top:10px;margin-left:10px'> ". $row['time'] .'</span></p>
                                    <span style="float: right">Vu</span>
                                </div>
                                </div>
                                ';
                
                }else{
                    $output .= '<div class="chat incoming">
                                <img src="php/images/'.$row['img'].'" alt="">
                                <div class="details">
                                    <p>'. $row['msg'] ."<span style= 'font-size: 12px; float: right;margin-top:10px;margin-left:10px'> ". $row['time'] .'</span></p>
                                    <span >Vu</span>
                                </div>
                                
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">Aucun messsage présents. Si vous en envoyer, ils apparaitront.</div>';
        }
        echo $output;
    }else{
        header("location: ../login.php");
    }

?>