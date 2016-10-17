<?php 
//Check for POST
if (isset($_REQUEST['email'])){
//All your inputs
$expecting = array('checkbox1','checkbox2','checkbox3','checkbox4' ,'checkbox5');

//Start building your email
$email_content = '';
foreach($expecting as $input){
    //Is checkbox?
    if(substr($input,0,8)=='checkbox'){
        $email_content .= ucfirst($input).':'.(isset($_POST[$input]) && $_POST[$input] == 'on' ? 'True' : 'False'.'<br />');

    }else{
        $email_content .= ucfirst($input).':'.(!empty($_POST[$input]) ? $_POST[$input] : 'Unknown').'<br />';
    }
}
print_r($email_content);


if(mail('skullkid2802@gmail.com',  'packing list', wordwrap($email_content))){
   //mail sent
}else{
   //mail failed 2 send
}

}
?>