<html>
<head>
<title>The jQuery Structure</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
   <script type="text/javascript">
       jQuery(document).ready(function(){

   //jQuery(".test").hide() ;
   $(".test").text("Satu..");
   $(".test").html("<b>Hello world!</b>");
    $("p").append(" <b>Appended text</b>.");
	$("p").css("background-color","yellow");
	 $("p").css({"background-color":"yellow","font-size":"200%"});
//	$(".test").remove();


}); 
   </script>   
</head>

<body>
<p class="test"> satyam Soni </p>
<p>satyam kondhiya</p>





</body>
</html>


 