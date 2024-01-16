<!DOCTYPE html>
<html>
<head>
<title>FAQ</title>
</head>
<body>
<?php
include('header.php');
?>
<style>
h1{word-spacing:5px; font-weight:800; padding:2px; background-color:pink; color:navy;}
h2{word-spacing:5px;font-weight:700; color:purple;}
h3{word-spacing:5px;font-weight:700;color:green;}
p,ul{word-spacing:5px;font-weight:500;}
table.s {
  border-collapse: collapse;
  border: 1px solid black;
  table-layout: auto;
  width: 100%;
}
table.s,th,td{border:1x solid black;word-spacing:5px;}
.multicolor-text {text-align: center;font-size: 50px;
background: linear-gradient(to left,
pink,
blue,
green,
brown,
purple,
orange,
red);
-webkit-background-clip: text;
color: transparent;}
#blink 
{
font-size: 50px;
font-weight: bolder;
font-family: didot;
color: #1c87c9;
transition: 0.2s;
}
}
</style>

<div id="FAQ" class="tabcontent">
	<center>
     <img src="image\faq.jpg" height="356px" width="666px"><br>
	</center>
	<table style="width:80%;">
    
         <center><div class="tabs">                      
             <button class="tablink" style="font-family:Times New Roman;font-size:18px;" onClick="openFAQ(event, 'AB')" id="defaultOpen2"> Additives in biscuits </button>
             <button class="tablink" style="font-family:Times New Roman;font-size:18px;" onClick="openFAQ(event, 'BB')" > Benefits of Biscuits </button>
             <button class="tablink" style="font-family:Times New Roman;font-size:18px;" onClick="openFAQ(event, 'BQ')" > Biscuits Quality </button>
         </div></center>

	<div id="AB" class="tabcont">
     	<h4>1. List of Food Additives for use in Biscuits?</h4><br>
              <p>
              <ul">
     <li>Sodium fumarate</li></br>
              <li>Potassium malate</li></br>
              <li>Sodium hydroxide</li></br>
              <li>Acetic acid or Lactic acid</li>
              </ul>
              </p>
              </br>
     <h4>2. What are examples of additives?</h4><br>
     <p>
     <ul">
      <li>Preservatives: ascorbic acid, calcium sorbate, and sodium nitrite.</li><br>
      <li>Color additives: fruit and vegetables juices, yellow 5, and beta-carotene.</li><br>
      <li>Flavors and spices:'real' vanilla or 'artificial' vanilla.</li><br>
      <li>Flavor enhancers: MSG and yeast.</li><br>
      <li>Emulsifiers: soy lecithin, mono and diglycerides.</li>
      </ul></p>
     <br>
     <h4>3.          What ingredients do you need to make cream biscuits?</h4><br>
         <p>A cream biscuit recipe definitely is a cookies treasure! This incredible cream biscuit recipe comes together in a snap with just two simple ingredients, self-rising flour and cream.That's it. No buttermilk, no shortening, no butter.Just two ingredients for the most tender, fluffiest biscuits!
        </p>
     <br>
	</div>
	<div id="BB" class="tabcont">
     <h4>1. What are the advantages of good day biscuits?</h4><br>
         <p>                <ul">
                           <li>Plenty of loungers.</li>/<br>
                           <li>Not having too much sodium.</li><br>
                           <li>It has more whole grains.</li><br>
                           <li>It has high baking soda which cites as an aid to food digestion</li>
     <br>              </ul>
              </p>
     <h4>2. Is it healthy to eat biscuits?</h4> <br>
         <p>Most biscuits are consumed with a cup of tea or coffee. But the problem is that biscuits provide more than crunchiness. They contain large amounts of kilojoules, unhealthy fats and highly processed carbohydrates. What's more, they are mostly low in fibre and whole grains.
                           </p>

     <br>
     <h4>3.Is there any healthy Biscuits in India?</h4><br>
         <p>In general oats biscuits for weight loss or multigrain biscuits are good for health in India. There are many best biscuits in India such as Sunfeast Farmlite Digestive High Fibre Biscuits,Diabexy Peanut Cookies Sugar Control for Diabetes etc.,.
         </p>
     <br>
	</div>
	<div id="BQ" class="tabcont">
     <h4>1.Which flour is used to make biscuits?</h4><br>
         <p>The principle ingredient of biscuits is wheat flour. The grain consists of bran (12%), which is the outer husk; endosperm, the white centre (85.5%); and tiny germ (2.5%). Typical biscuit flour is milled to a yield or extraction of 70%-75%.</p>
     <br>
     <h4>2. What are the eight basic steps for quality control of ingredients?</h4><br>
         <p>
         <ul">
                           <li>Establishing specifications for each ingredient based on its chemical composition, nature and technological functionality</li><br>
                           <li>Performing standardized tests and analyzing samples</li><br>
                           <li>Comparing results against a standard or expected property value</li><br>
                           <li>Accepting or rejecting a lot or batch of ingredients received at the bakery upon purchasing</li><br>
                           <li>Communicating results with suppliers</li><br>
                           <li>Implementing corrective actions to close any gaps regarding the quality of a given material</li><br>
                           <li>Improving any condition in a given ingredient that might have the potential to negatively affect the quality of the baked goods</li><br>
                           <li>Recording all out-of-specification incidences for the benefit of monitoring and supplier reviews.</li>
                           </ul>         </p>
     <br>
     <h4>3.How do you manufacture biscuits?</h4><br>
         <p> There are primarily four stages of making the biscuit in a factory-mixing, forming, baking, and cooling.
In the mixing stage, flour, fat, sugar, water and other ingredients are mixed together in the right proportion in large mixers to form the dough. The mixing time is carefully managed to achieve uniform distribution of ingredients and the right dough consistency.
         </p>
     <br></div></table>
	<script>
	function openFAQ(evt, TabName)
	{
	var j, tabcont, tablink;
	tabcont = document.getElementsByClassName("tabcont"); 
	for (j = 0; j < tabcont.length; j++){
        tabcont[j].style.display = "none";}
	tablink = document.getElementsByClassName("tablink");
	for (j = 0; j < tablink.length; j++){
 	tablink[j].className = tablink[j].className.replace(" active", ""); }
	document.getElementById(TabName).style.display = "block";
	evt.currentTarget.className += " active";
	}
	document.getElementById("defaultOpen2").click();
	</script>
</div>
</body>
</html>
