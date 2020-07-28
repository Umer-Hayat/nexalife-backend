<?php  
require_once 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html>
<style type="text/css">
	.label{
		font-weight: bold;
	}
</style>
<body>

<?php
session_start();
  extract($_SESSION);

$body = '
<table>
	<tr>
		<td class="label">Name:</td>
		<td>'. $life2_name .'</td>
	</tr>
	<tr>
		<td class="label">Gender:</td>
		<td>' . $life2_gender . '</td>
	</tr>
	<tr>
		<td class="label">Date Of Birth:</td>
		<td>' . $life2_date . '</td>
	</tr>
	<tr>
		<td class="label">Postal Code:</td>
		<td>' . $life2_postal_code . '</td>
	</tr>
	<tr>
		<td class="label">Are You Smoker:</td>
		<td>' . $is_smoker . '</td>
	</tr>
	<tr>
		<td class="label">Do Exercise:</td>
		<td>' . $do_exercise . '</td>
	</tr>
	<tr>
		<td class="label">Do Practise:</td>
		<td>' . $do_practise . '</td>
	</tr>
	<tr>
		<td class="label">Insurace:</td>
		<td>' . $insurace . '</td>
	</tr>
	<tr>
		<td class="label">Insurance Type:</td>
		<td>' . $type . '</td>
	</tr>
	<tr>
		<td class="label">Insurance Price:</td>
		<td>' . $price . '</td>
	</tr>
	<tr>
		<td class="label">Contractor Name:</td>
		<td>' . $cont_name . '</td>
	</tr>
	<tr>
		<td class="label">Contractor Last Name:</td>
		<td>' . $cont_last_name . '</td>
	</tr>
	<tr>
		<td class="label">Contractor Mother Name:</td>
		<td>' . $m_last_name . '</td>
	</tr>
	<tr>
		<td class="label">Contractor Email:</td>
		<td>' . $mail . '</td>
	</tr>
	<tr>
		<td class="label">Contractor Celluler:</td>
		<td>' . $celular . '</td>
	</tr>
	<tr>
		<td class="label">Contractor RFC No:</td>
		<td>' . $rfc . '</td>
	</tr>
	<tr>
		<td class="label">Contractor nationallity:</td>
		<td>' . $nationality . '</td>
	</tr>
	<tr>
		<td class="label">Contractor Sex:</td>
		<td>' . $sex . '</td>
	</tr>
	<tr>
		<td class="label">Contractor Profession:</td>
		<td>' . $profession . '</td>
	</tr>
	<tr>
		<td class="label">Contractor Street No:</td>
		<td>' . $street . '</td>
	</tr>
	<tr>
		<td class="label">Contractor No_Ext:</td>
		<td>' . $no_ext . '</td>
	</tr>
	<tr>
		<td class="label">Contractor Interior:</td>
		<td>' . $interior . '</td>
	</tr>
	<tr>
		<td class="label">Contractor Suburb:</td>
		<td>' . $suburb . '</td>
	</tr>
	<tr>
		<td class="label">Contractor Postal Code:</td>
		<td>' . $postal . '</td>
	</tr>
	<tr>
		<td class="label">Contractor state:</td>
		<td>' . $state . '</td>
	</tr>
	<tr>
		<td class="label">Contractor country:</td>
		<td>' . $country . '</td>
	</tr>
</table>';
// echo $message;
try{
		$transprt = (new Swift_SmtpTransport('smtp.gmail.com',465,'ssl'))->setUsername('student.information.school@gmail.com')->setPassword('phpprojectA7');
		$transprt->setStreamOptions([
        'ssl' => ['allow_self_signed' => true, 'verify_peer' => false, 'verify_peer_name' => false]
          ]);
        $mailer = new Swift_Mailer($transprt);
       
        $message = (new Swift_Message("Student Information System-Password Reset"))->setFrom('student.information.school@gmail.com')->setTo('umerhayat520@gmail.com')->setBody($body,'text/html');
        $result = $mailer->send($message);
        if ($result) {
        	echo "An email is on its way check your inbox";
        }
        else
        {
        	echo "Email is not sent";
        }
    }catch(Exception $e){
    	echo $e;
    }
?>

<!-- 	<tr>
		<td class="label">Name:</td>
		<td><?php //echo $exp_name; ?></td>
	</tr>
	<tr>
		<td class="label">Gender:</td>
		<td><?php //echo $exp_gender; ?></td>
	</tr>
	<tr>
		<td class="label">Year:</td>
		<td><?php //echo $exp_year; ?></td>
	</tr>
	<tr>
		<td class="label">Postal Code:</td>
		<td><?php //echo $exp_postal_code; ?></td>
	</tr>
	<tr>
		<td class="label">Solo Name:</td>
		<td><?php //echo $soloname; ?></td>
	</tr>
	<tr>
		<td class="label">Solo Age:</td>
		<td><?php //echo $soloage; ?></td>
	</tr>
	<tr>
		<td class="label">Sending Using:</td>
		<td><?php //echo $sendusing; ?></td>
	</tr> -->
</body>
</html>