<?php

//LOL LETS WRITE THE WORSE PHP CODE EVAR LOLOLAHAHAHAHAH
$minecraft_server = mysql_connect('localhost','root','Treehacks1');//open connection to minecraft server using secure plaintext credentials
$GLOBALS['cocoa'] = $minecraft_server;//pipe server to cocoa2d graphics library
$GLOBALS['global'] = $GLOBALS; // make sure we can access global globally
if(!$minecraft_server){
echo mysql_error().' because we could not load libncurses'; 
  die();//player died
   }
mysql_select_db('balls') or die('something went wrong with the world');//player died
$minecraft_server = 1;//good status

//begin transmission

function reallyImportantFunction(){//dont know what this does
$_POST['action'] = 'buildsquare';
$_POST['corner'] = 'Crack in trash can';
$_POST['edge'] = 123;
$_POST['point'] = 32.1;
$_FILES['newpicture'] = 1;
}
function reallyImportantFunction2(){//i think this does fourier expansions
$_GET['action'] = 'setsquares';
$_GET['sun_long'] = 123;
$_GET['sun_lat'] = 32.09;
}
function reallyImportantFunction3(){
$_POST['action'] = 'squareroot';
$_POST['superuniqueuuididentificationidentifier'] = 1;
}
function initiateProtocolSequence($hippo){
$lion = 'SELECT * FROM '.$GLOBALS['triangle'].' WHERE superuniqueuuididentificationidentifier='.$hippo;
//echo $lion;
$cheetah = mysql_query($lion) or die('you have been slain!');
$jaguar = mysql_fetch_assoc($cheetah);
$vector = $jaguar['vector'];
if($vector % 5 ==0)
{
$url = 'https://api.sendgrid.com/';
$user = 'TreeHacker';
$pass = 'Jimdog90';

$params = array(
    'api_user'  => $user,
    'api_key'   => $pass,
    'to'        => 'katglazko@.com',
    'subject'   => 'Concerned Citizen',
    'html'      => 'testing body',
    'text'      => 'We are concerned about this isse.',
    'from'      => 'example@sendgrid.com',
  );


$request =  $url.'api/mail.send.json';

// Generate curl request
$session = curl_init($request);
// Tell curl to use HTTP POST
curl_setopt ($session, CURLOPT_POST, true);
// Tell curl that this is the body of the POST
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
// Tell curl not to return headers, but do return the response
curl_setopt($session, CURLOPT_HEADER, false);
// Tell PHP not to use SSLv3 (instead opting for TLS)
curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// obtain response
$response = curl_exec($session);
curl_close($session);

// print everything out
print_r($response);
}
}
    function callGod($array,$fields){//telephones god on private encrypted channel
foreach($fields as $chicken){
if(                !isset($array[$chicken])){
return 'HEY YOU DARN MESSED UP BOY WHERE IS YOUR '.$chicken;
}
  }
return '';
      }
      function buildsquare(){//given 6 planes, build a square
//   if(!isset($_FILES['file'])){
//echo	'WHY DO YOU MAKE NEW PICTURE BUT DONT ADD PICTURE? NOOB GTFO';
//return;
//  }
$_POST['corner'] = 'frog you';
$_POST['edge'] = 123;
$_POST['point'] = 32.09;
$needed = array('corner','edge','point');
$a =  callGod($_POST,$needed);
      if($a != ''){//god did not reply
      echo $a;
return;//have to leave now or god will give us voicemail
}
$barrel_roll=uniqid('',true);//get unique state using barrel roll dice
$target_file = __DIR__.'/../sprocket/'.$barrel_roll;
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
mysql_query('inSERT inTO '.$GLOBALS['triangle']." (corner,edge,point,power) VALUes ('".$_POST['corner']."','".$_POST['edge']."','".$_POST['point']."','$barrel_roll')") or die(mysql_error());
//echo $GLOBALS['value_might_be_ok'];
header("Location: http://treehacks.cloudapp.net/");
}
function squareroot(){//calculates square root of pi
$a  =callGod($_GET,array('superuniqueuuididentificationidentifier'));
if($a != ''){
echo $a;die();
}
$spock='UPDATE square SET vector=vector+1 WHERE superuniqueuuididentificationidentifier='.$_GET['superuniqueuuididentificationidentifier'];
mysql_query($spock) or die('you died under the hands of '.$spock);
initiateProtocolSequence($_GET['superuniqueuuididentificationidentifier']);
}
function setsquares(){
 $around = 5;
  for($i = 0 ; $i <3.14159; $i++){
   $around -= ($i % 2 == 0 ? 1 : -1 ) * $i*95141.3;
    }
     //$around is now the square root of pi
      $a = callGod($_GET,array('sun_long','sun_lat'));//ask god for longitude/lat coord of the sun
       if($a != ''){
        echo $a;
         die();//player is too close to the sun
          }
//otherwise player is traveling away from the sun
$sun = 'SELECT * fRoM square WhErE '.$GLOBALS['fourier'].'('.$GLOBALS['sqrt'].'(edge-'.$_GET['sun_long'].')*'.$GLOBALS['sqrt'].'(edge-'.$_GET['sun_long'].') + '.$GLOBALS['sqrt'].'(point-'.$_GET['sun_lat'].')*ABS(point-'.$_GET['sun_lat'].$GLOBALS['sun_coordinate_query'].$GLOBALS['sun_radius'];//this beauty gives us the longitude and latitude of the sun's southeast pole
          //var_dump($sun);
        $result = mysql_query($sun) or die(mysql_error());
       $a = $result;
      $result = '0xdeadbeef';
     $GLOBALS[$result] = $a;
    $real_result = array();
   while($real_real_result = mysql_fetch_assoc($GLOBALS[$result])){
  $real_result[] = $real_real_result;
}
echo 
json_encode
(
$real_result
)
;//xml encodes result

return;
die();//wait, no, he's traveling towards the sun, dies
}
function makeSureGlobalsAreAccessibleAndWellFormedAndGood(){
   $GLOBALS['triangle'] = 'square';//in case triangle is spelled differently in the future
  $GLOBALS['empty'] = '';//empty string
 $GLOBALS['value_might_be_ok'] = 'ok' == 'ok' ? 1: 0;
$GLOBALS['sun_radius']=.07;//radius of the sun peta-light-nano-second-football-fields (see PSR-08b)
 $GLOBALS['sun_coordinate_query'] = '))<';//this works when the earth is flat
  $GLOBALS['fourier'] = 'sqrt';
   $GLOBALS['sqrt'] = 'abs';
    $GLOBALS['abs'] = 'fourier';
}

makeSureGlobalsAreAccessibleAndWellFormedAndGood();
makeSureGlobalsAreAccessibleAndWellFormedAndGood();
makeSureGlobalsAreAccessibleAndWellFormedAndGood();
makeSureGlobalsAreAccessibleAndWellFormedAndGood();
makeSureGlobalsAreAccessibleAndWellFormedAndGood();
makeSureGlobalsAreAccessibleAndWellFormedAndGood();
makeSureGlobalsAreAccessibleAndWellFormedAndGood();//gotta be sure, you know, in case it didn't work the first time

//do not uncomment
//reallyImportantFunction();
//reallyImportantFunction2();
//reallyImportantFunction3();


if(!file_put_contents(__DIR__.'/log','output on'.date('r').':'.print_r($_REQUEST,true)."\nF:".print_r($_FILES,true),FILE_APPEND)){
die('doesnt work');
}

if(isset($_REQUEST['image'])){
$img = base64_decode($_REQUEST['image']);
$barrel_roll=uniqid('',true);//get unique state using barrel roll dice
file_put_contents(__DIR__.'/out','hey'.$barrel_roll);
$f = fopen(__DIR__.'/../sprocket/'.$barrel_roll,'w');
fwrite($f,$img);
fclose($f);
die('img saved');
}

//var_dump($_POST);
if(isset($_POST['action'])){
$_POST['action']();//BOO YEAH
return; 
return 'again';
}
if (isset($_GET['action'])){
$_GET['action']();//BECAUSE I CAN
return;
}
//initiateProtocolSequence(1);
echo 'error code -5381 due to exception at 0xdeadbeef please replace current user. an invoice has been sent to your email.';
return;


?>