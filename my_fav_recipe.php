<!--Please Use full screen while running webpage-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Milkshake prepration</title>
	<h1 style="text-align:center;background-color: mistyrose;">How to Make a Milkshake</h1>

	<style >

body{


	padding-top: 10px;
	padding-left: 300px;
	padding-right: 300px;
	padding-bottom: 10px;
}

title{
	font-family: clean sans-serif;
}

p{

	font-family: Arial , sans-serif;
}
dl{

font-family: Arial , sans-serif;	
}
ul{
	font-family: Arial , sans-serif;
}

</style>
</head>
<body >
<hr><br>

<p >These milkshakes are thick, creamy, and so addictive that you’ll be trying to drink every last drop. They're the perfect treat for any time of the year, so here’s How to Make a Milkshake. You only need two ingredients and you can customize it however you’d like with as many toppings as you’d like! </p>

<img src="https://preppykitchen.com/wp-content/uploads/2021/04/Milkshake-Feature.jpg" height="400" width="650" >

<p>Making a milkshake is super simple, you really only need two ingredients but do you know the perfect ratio? It can be a little disappointing to drink a milkshake that is closer to the consistency of a juice or a milkshake that’s so thick you can’t get it through the straw.</p>
<br>
<h3>The Ingredients You Need</h3>

<ul>
<li>Ice cream</li>

<li>Milk</li>

<li>Toppings</li>
</ul>

<img src="https://www.tasteofhome.com/wp-content/uploads/2020/03/Rhubarb-Crumble-Ice-Cream_EXPS_FT20_207116_F_0206_1.jpg?fit=1024,1024" height="250" width="400">


<p><b>Ice cream – </b>full-fat ice cream will yield the creamiest and smoothest milkshake. Low-fat ice cream just isn’t the same! Choose the highest quality ice cream you’re able to find in stores.</p>

<br>
<img src="https://static.toiimg.com/thumb/msid-114346974,width-1280,height-720,resizemode-4/114346974.jpg" width="400" height="250">


<p><b>Milk –</b> use whatever milk you have at home. Just keep in mind that the higher the fat percentage of your milk, the creamier your milkshake will be. I use whole milk.</p>

<br>

<img src="https://img77.uenicdn.com/image/upload/v1695998612/business/eaa6a600-cc2e-4e14-9ae7-bea9ab1e2ac5/pic-of-all-toppingsjpg.jpg" width="400" height="250">


<p><b>Toppings –</b> take your pick on your toppings. I love adding whipped cream, sprinkles, and a cherry.</p>

<br>
<h3><ins>How To Make a Milkshake</h3></ins>

<dl>

<dt><b>Step1:</dt></b>
<dd>-Add the ice cream to the blender.</dd>
<br>
<dt><b>Step2:</dt></b>
<dd>-Add the milk to the blender. </dd>
<br><br>
<dt><b>Step3:</dt></b>
<dd>-Blend on low until smooth.</dd>
<br><br>
<dt><b>Step4:</dt></b>
<dd>-Pour into a cup and garnish with whipped cream.</dd>
<br><br>
<dt><b>Step5:</dt></b>
<dd>-Add some sprinkles.</dd>
<br><br>
<dt><b>Step6:</dt></b>
<dd>-And add a cherry if desired.</dd>

<br><br><br>
<h2>PRO TIPS FOR MAKING THIS RECIPE</h2>

<ul>
<li>To make this milkshake even creamier, you can try using heavy cream in place of milk.</li><br>
<li>When purchasing ice cream, make sure you buy real 100% dairy ice cream. There are ice creams that are labeled as “frozen desserts” as they’re made with vegetable oils. </li><br>
<li>To easily scoop your ice cream, let your ice cream sit at room temperature for around 5 minutes so it can soften enough to scoop.</li><br>
<li>If you find the milkshake a little too thick for your liking, add in additional milk a couple of splashes at a time.</li><br>
<li>To help your drink stay cold longer, you can place your glasses in the freezer beforehand.</li><br>
<li>Don’t have a can of whipped cream on hand? Try making your own homemade whipped cream.</li><br>
<li>Don’t add ice to this. Ice will water down your drink</li>


</ul>

<br><br>

<form method="post" action="">
	<input placeholder="Name" type="text" name="Name1">

<select name="Rating">
	<option value="1star">1 star</option>
	<option value="2star">2 star</option>
	<option value="3star">3 star</option>
	<option value="4star">4 star</option>
	<option value="5star">5 star</option>
</select>
<br>
<br>
<input type="text" placeholder="Leave a comment" name="comment">
<input type="submit" name="submit" value="comment">


</form>



<br>



<?php 
$a=$_POST['Name1'];
echo $a.":<br>";

$i=$_POST['Rating'];

switch ($i) {
	case '1star':
		echo "1 star Rating";
		break;
	
	case '2star':
		echo "2 star Rating";
		break;

		case '3star':
		echo "3 star Rating";
		break;

		case '4star':
		echo "4 star Rating";
		break;

		case '5star':
		echo "5star Rating";
		break;

		default:
		
		break;
}



$j=$_POST['comment'];

echo "<br>".$j;

 ?>

 








<hr>

</dl>

</body>
<address>
Contact US:
 <a href="https://www.gmail.com/" target="_blank" rel="noopenernoreferrer">recipe@hmail.com</a><br>

Visit US at:
www.kitchen_recipe.com<br>
Box 564,Disneyland,<br>
Usa

 </address>


<p><b>Follow US</p></b>

<a href="https://www.facebook.com/" target="_blank" rel="noopenernoreferrer">@Facebook</a> 
&nbsp;&nbsp;
<a href="https://www.instagram.com/" target="_blank" rel="noopenernoreferrer">@instagram</a>
&nbsp;&nbsp;
<a href="https://x.com/" target="_blank" rel="noopenernoreferrer">@Twitter</a>

<hr>
<footer style="text-align: center;margin-top:40px ;">
   <p>COPYRIGHT &copy;&nbsp;2025 This website created by "Raheem"</p>

</footer>
</html>

