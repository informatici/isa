<html>
<head>
<title>Informatici Senza Frontiere - Aggiornamento Twitter</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$("#t_update").keyup(function()
{
var box=$(this).val();
var main = box.length *100;
var value= (main / 140);
var count= 140 - box.length;

if(box.length <= 140)
{
$('#count').html(count);
$('#bar').animate(
{
"width": value+'%',
}, 1);
}
else
{
alert('Character Limit Exceeded!');

;
}
return false;
});

});
</script>
<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('input[type="text"]').addClass("idleField");
	$('input[type="text"]').focus(function(){
		$(this).removeClass("idleField").addClass("focusField");
        if (this.value == this.defaultValue){
        	this.value = '';
    	}
        if(this.value != this.defaultValue){
	    	this.select();
        }
    });
	$('input[type="password"]').addClass("idleField");
	$('input[type="password"]').focus(function(){
		$(this).removeClass("idleField").addClass("focusField");
        if (this.value == this.defaultValue){
        	this.value = '';
    	}
        if(this.value != this.defaultValue){
	    	this.select();
        }
    });
	$('textarea').addClass("idleField");
	$('textarea').focus(function(){
		$(this).removeClass("idleField").addClass("focusField");
        if (this.value == this.defaultValue){
        	this.value = '';
    	}
        if(this.value != this.defaultValue){
	    	this.select();
        }
    });
    $('input[type="text"]').blur(function(){
    	$(this).removeClass("focusField").addClass("idleField");
        if ($.trim(this.value == '')){
        	this.value = (this.defaultValue ? this.defaultValue : '');
    	}
    });
	$('input[type="password"]').blur(function(){
    	$(this).removeClass("focusField").addClass("idleField");
        if ($.trim(this.value == '')){
        	this.value = (this.defaultValue ? this.defaultValue : '');
    	}
    });
	$('textarea').blur(function(){
    	$(this).removeClass("focusField").addClass("idleField");
        if ($.trim(this.value == '')){
        	this.value = (this.defaultValue ? this.defaultValue : '');
    	}
    });
});

</script>
</head>
<body>
  <h1><span id="header">Informatici Senza Frontiere</span></h1>
 
<div id="quote1"><!--Start Quote1-->
<center><p> Aggiornamento Twitter </p></center>
</div><!--End Quote1-->

<div id="form" align="center"><!--Start Form-->
<form name="form1" method="post" action="tweet.php">
 
  <p><br />
    <label><?php echo $_REQUEST['status'];?></label></p>
	<p><div align="left" id="character-count">
	<div id="count">140</div>
    <div id="barbox"><div id="bar"></div></div>
	</div>
	
        <br />
	<p>
    <textarea name="t_update" cols="50" rows="5" id="t_update" ></textarea>
    
    </p>
  
  <p><br />
      <label>
      <input type="submit" name="Submit" value="Invia">
    </label>
  </p>
</form>
</div><!--End Form-->

<div id="quote2"><!--Start Quote2-->
<center><p><a href="rss.php" target="_blank">Visualizza TimeLine Twitter</a></p></center>
</div><!--End Quote2-->

</body>
</html>