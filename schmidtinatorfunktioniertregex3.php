<html><head>   <link rel='stylesheet' href='style.css' >  <link rel='stylesheet' href='../style.php' >
	  <meta charset="UTF-8">
  <meta name="description" content="Arno Schmidt Etym Generator">
  <meta name="keywords" content="HTML, CSS,PHP,Arno Schmidt Etym Generator, schmidtisator, arnoschmidtisator, arnoschmidtinator,arnoschmidtator, verlispeln, verlispelung, etym, etyms, zettels traum, erotik">
  <meta name="author" content="Klaus Vulvv">
  	<meta name="title" content="Arschmidtisator">
  	<title>Arschmidtisator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--style>/* class frac wichtig fuer Schmidtinator oder Brueche */
	/*span.frac {
	display: inline-block;
	text-align: center;
	
}
    span.frac > sup {
	display: block;
	border-bottom: 1px solid;
	font: inherit;
	
}
    span.frac > span {
	display: none;
}
span.frac > sub {
	display: block;
	font: inherit;
}
/* Class uml fuer uebereinandergestellte Umlaute oe etc. Bruch ohne Bruchstrich.*/
	span.uml {
	display: inline-block;
	text-align: center;
	vertical-align:-5px;
}
span.uml > sup {
	display: block;
	font: inherit;
	position: relative; top: 10px;
}
span.uml > span {
	display: none;
}
span.uml > sub {
	display: block;
	font: inherit; 
	vertical-align:5px;
	
}

/* Zettels Traum css style, unwichtig.*/
#box {
  width:65%;
line-height: 1.5;
outline: #fff5ee solid 10px;
border: #000 solid 2px;
 margin: 0px auto;
    //margin-top: 10em; auto;
  padding: 15px;
  text-align: center;
  background-color: #fff5ee;
  float: left;
  // border: 1px solid blue; 
  // border-width:5px;
  //  border-spacing: -15px;
  //  border-margin:15px;
}
#box.right {
	position:static;
width:25%;
line-height: 1.5;
 margin: 0px auto;
    //margin-top: 10em; auto;
  padding: 15px;
  float: right;
  overflow: true;
  background-color: #fff5ee;
border:none;
outline: none;
line-height: 0.7;
text-align: justify;
}
#box.footer{
}
body {
  margin: 20px;
  text-align: center;  /* nur fuer alte Browser */
  background-color: #29220a;//#e6e6fa;
  font-family: monospaced;
}
hr.new1 {
  border-top: 3px solid darkgrey;
  width:20%;
}
.brl
{
padding: 8px;
border-right: 5px solid #f00;
border-left: 5px solid #f00;
} 
*/</style -->

</head>
	<body>
 <!-- Link your php/css file -->
   <!--link rel="stylesheet" href="style.php" media="screen"-->
   	
<!--span class="frac"-->
	<div id="box">
		<hr class="new1">
		<h4> <span style='vertical-align:-15px;'><span class='frac'><sup>Ar</sup><span> / </span><sub>&numero;</sub></span></span> Schmid&nbsp;<span style='vertical-align:-15px;'><span class='frac'><sup>ator</sup><span> / </span><sub>&nbsp;Tina</sub></span></span>&nbsp;&nbsp;<span style='vertical-align:-15px;'><span class='frac'><sup>00</sup><span> / </span><sub>2.</sub></span></span></h4>
		<hr class="new1">
	<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<!-- onclick="this.value=''" // ggf einfuegen unten -->
<Textarea  onfocus="this.value=null;"  id="str"type="text" name="str" rows="6" cols="35" style="background-color:#29220a; color:#fff5ee;"
placeholder="Ich fl / l ausche P ul / ol lis / ice
The T w / o ilit of the G od / ut s.!!!!!!
A / B 
aaa / bbb 
ccc / ddd">Ich fl / l ausche P ul / ol lis / ice.
The T w / o ilit of the G od / ut s !!! / ???
A / B 
aaa / bbb 
ccc / ddd</textarea><br>

<input type="radio" name="brch" value="frac" checked="true">&nbsp;Stahlberg
<input type="radio" name="brch" value="uml">&nbsp;Haffmans
<!--input type="radio" name="gender" value="other">Other-->
<br>
	
<input type="submit" src="button.png" value="Sp &uuml; / ie len ! -- > -.- ),">&mdash;
</form>
<button onclick="document.getElementById('str').value = ''">Entleeren ! </button>
<!--script>
/*
    function myFunction() {
        console.log("hello");
    }
*/
</script-->

<?php
 # require_once("./style.php");
global $str, $pattern, $sing;
$str = "Ich fl / l ausche P ul / ol lis / ice <br>
The T wi / oi lit of the G od / ut s !!! / ???<br>
A / B <br>
aaa / bbb <br>
ccc / ddd";
$pattern = "#([a-zA-ZüöäÜÖÄß]{1,3}) / ([a-zA-ZüöäÜÖÄß]{1,3})#i";
$str = $_GET["str"];
$brch=$_GET["brch"];
if ($brch == "frac"){
$sing ="<span style='vertical-align:-14px;'><span class='frac'><sup>$1</sup><span> / </span><sub>$2</sub></span></span>";
Echo "<br>";}
if ($brch == "uml") {$sing ="<span style='vertical-align:-08px;'><span class='$brch'><sup>$1</sup><span> / </span><sub>$2</sub></span></span>";
Echo "<br>";}
echo nl2br(preg_replace($pattern, $sing, $str));
Echo "<br>";
Echo "<hr class='new1'>";
Echo "Ihre Eingabe zum Korrigieren und Kopieren: <br><br><div name ='obo' id='obo'>".nl2br($str);
echo "<br></div>";
/*echo $pattern;
echo "<div class='frac'>".$sing."</div>";*/
htmlspecialchars($_SERVER["PHP_SELF"]);

?>
<script>
function copy_text_fun() {
    //getting text from P tag
    var copyText = document.getElementById("obo");  
    // creating textarea of html
    var input = document.createElement("textarea");
    //adding p tag text to textarea 
    input.value = copyText.textContent;
    document.body.appendChild(input);
    input.select();
    document.execCommand("Copy");
    // removing textarea after copy
    input.remove();
    alert("Nochmal ! : " + input.value);
}
    </script>

<!--p id="copy_txt">hi</p--->
<button  onclick="copy_text_fun()" >Machs 
Nochmal ! </button>


<!--script>
/* function myFunctionRaw() {
  var copyText = document.getElementById("obo");
 //copyText = copyText.textContent;
  copyText.select();
//  if (copyText = null){copyText = "nichts!";}else{
  //copyText.setSelectionRange(0, 99999)
  document.execCommand("Copy");
  alert(copyText.value);
// }
}*/
</script-->

<!--button onclick="myFunctionRaw()">Nochmal  2 ! ;</button--><br/><hr class='new1'><!--/span-->
</div>

<div id='box' style="margin-top:40px;border:none;outline:none;"">
<?php echo "In html f&uuml;r Sie: <textarea name='grll' id='grll' style='background-color:#fff5ee;'>".nl2br(preg_replace($pattern, $sing, $str))."</textarea> mit <a href='style.css'>style.css</a>";
Echo "<br>";?>
	<script>
function myFunction() {
  var copyText = document.getElementById("grll");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Etymgeroell nach Hause getragen ! : " + copyText.value);
}
</script>

<button onclick="myFunction()">schwarz auf wei&szlig;</button><br/>
	<?php
$filepath ="ator.txt";
$myfile = fopen($filepath, "a+") or die("Unable to open file!");
$ator = nl2br(preg_replace($pattern, $sing, $str));
/*fwrite($myfile, substr("Name: ".$_GET["name"]." "."<br>",0,36));*/
if ($ator ==NULL OR $str=="Ich fl / l ausche P ul / ol lis / ice.
The T w / o ilit of the G od / ut s !!! / ???
A / B 
aaa / bbb 
ccc / ddd"){echo "piep";}
else {
fwrite($myfile, $ator."<br>");
/*
* fwrite($myfile, substr("b,<br>  ".$_GET["md2"]."<br>",0,105));*/
fwrite($myfile,date('y/m/d, H')."&nbsp;Uhr<br>");}

fclose($myfile);
unset($str);
?>
	</div>
<div id='box' class='right' style="overflow:true;"><p><u><b>An&shy;lei&shy;tung :</b></u> Ge&shy;ben Sie Ihr&shy;en Schmidt&shy;etym&shy;bruch zu ein&shy;em bis drei Zei&shy;chen, mit Leer&shy;zei&shy;chen ab&shy;ge&shy;setzt, ge&shy;tren&shy;nt mit ei&shy;nem Schr&auml;g&shy;strich<pre><code>"&#9;&nbsp;/&nbsp; &#9;"

"&nbsp;&nbsp;aa&nbsp;/&nbsp;bbb&nbsp;&nbsp;"</code></pre>, die&shy;sen mit Leer&shy;zei&shy;chen ( Pau&shy;sen ) { Spa&shy;ce , gro&shy;&szlig;e l&auml;ng&shy;ste Tast&shy;e } um&shy;schlos&shy;sen, ein. O&shy;hne f&uuml;h&shy;ren&shy;de Leer&shy;zei&shy;chen geht es auch, mit ggf. un&shy;ge&shy;wol&shy;ltem Er&shy;geb&shy;nis. Kon&shy;trol&shy;lieren Sie das Er&shy;geb&shy;nis! Sie k&ouml;n&shy;nen den html out&shy;put e&shy;di&shy;tie&shy;ren und noch mal ein&shy;f&uuml;&shy;gen, dann kom&shy;men Sie zu h&ouml;h&shy;er&shy;en Le&shy;vels. Z.B. aus ei&shy;nem <pre><code>&lt;sub&gt;v&lt;/sub&gt;</code></pre>  mach&shy;en Sie <pre><code>&lt;sub&gt; v / f &lt;/sub&gt;</code></pre>. Um&shy;lau&shy;te und sz wer&shy;den of&shy;fen&shy;sicht&shy;lich als zwei Zei&shy;chen in&shy;ter&shy;pre&shy;tiert. L&auml;n&shy;ge&shy;re Aus&shy;dr&uuml;k&shy;ke in ( Drei&shy;er- ) grup&shy;pen um&shy;wan&shy;deln: <pre>Z.B. 3 + 3 + 2.</pre> Sonst&shy;ige Zahl&shy;en oder Zeich&shy;en sind nicht zu&shy;ge&shy;las&shy;sen. Das Pro&shy;gramm be&shy;nutzt Reg&shy;ex und css. Der Re&shy;gex&shy;aus&shy;druck k&ouml;n&shy;nte um wei&shy;te&shy;re Zeich&shy;en er&shy;g&auml;nzt wer&shy;den. Wir schrei&shy;ben die Ein&shy;ga&shy;be mit ( <a href="./ator.txt">hier</a> oder <a href="./deepspace.htm.php">mit Stil</a>).
Vorsicht: Suchtgefahr.</p></div>
<div style="clear:both;"></div>
   <div style="align:left;text-align:center;position:static;">
<p style="color:#fff5ee;">The t<span style='vertical-align:-10px;'><span class='frac'><sup>wi</sup><span> / </span><sub>oi</sub></span></span>lit of the G<span style='vertical-align:-10px;'><span class='frac'><sup>od</sup><span> / </span><sub>ut</sub></span></span>s.</p>
   

<p style="color:#fff5ee;align:center;">&copy; <span style='vertical-align:-10px;'><span class='frac'><sup>Kl</sup><span> / </span><sub>R</sub></span></span>a<span style='vertical-align:-10px;'><span class='frac'><sup>u</sup><span> / </span><sub>i</sub></span></span>s&nbsp;<span style='vertical-align:-10px;'><span class='frac'><sup>Wul</sup><span> / </span><sub>Vul</sub></span><span class='frac'><sup>ff</sup><span> / </span><sub>v</sub></span></span>&#9;2009&mdash;<?php 
echo date("Y");
?>.</p>
<p style="color:#fff5ee;align:center;">&copy; <a href="https://www.matheretter.de/wiki/bruch-schreiben">matheretter.de</a></p></div>	

</body>
</html>
