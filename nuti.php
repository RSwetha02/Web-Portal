<!DOCTYPE html>
<html>
<head>
<title>NUTRITION FACTS</title>
</head>
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

<style>

body {font-family: "Lato", sans-serif;}
/* Style the Nutrition tab */
.tabfornutrition {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 1750px;
}

/* Style the buttons inside the tab */
.tabfornutrition button {
  box-sizing: border-box;
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}
/* Change background color of buttons on hover */
.tabfornutrition button:hover {
  background-color: #ddd;
}
/* Create an active/current "tab button" class */
.tabfornutrition button.active {
  background-color: #ccc;
}
/* Style the tab content */
.tabcontentfornutrition {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 1750px;
}
</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style the tab content */
.tabcontent {

padding: 6px 12px;
border: 1px solid #ccc;
border-top: none;
}
</style>
</head>
<body>
<div id="container_new">
<div id="newheader">

</div>

<div id="NUTRITION FACTS" class="tabcontent">
<center>
     <table>
         <tr>
         <td><img src="image\kn.jpg" height="123px" width="175px"></td>
         <td style="font-family:Times New Roman;font-size:40px;font-weight:bold;color:#174f90">NUTRITIONAL FACTS</td></tr></table></center>
 <div class="tabfornutrition">
  <button class="tablinksfornutrition" onClick="opennutrition(event, 'CARBOHYDRATES')" id="defaultOpen10">CARBOHYDRATES</button>
  <button class="tablinksfornutrition" onClick="opennutrition(event, 'FATS')">FATS</button>
  <button class="tablinksfornutrition" onClick="opennutrition(event, 'SUGAR')">SUGAR</button>
  <button class="tablinksfornutrition" onClick="opennutrition(event, 'ENERGY')">ENERGY</button>
  <button class="tablinksfornutrition" onClick="opennutrition(event, 'DIETARY FIBRE')">DIETARY FIBER</button>
  <button class="tablinksfornutrition" onClick="opennutrition(event, 'SATURATED FATTY ACIDS')">SATURATED FATTY ACIDS</button>
  <button class="tablinksfornutrition" onClick="opennutrition(event, 'MONOUNSATURATED FATTY ACIDS')">MONO UNSATURATED FATTY ACIDS</button>
  <button class="tablinksfornutrition" onClick="opennutrition(event, 'POLYUNSATURATED FATTY ACIDS')">POLY UNSATURATED FATTY ACIDS</button>
  <button class="tablinksfornutrition" onClick="opennutrition(event, 'TRANS FATTY ACIDS')">TRANS FATTY ACIDS</button>
  </div>

<div id="CARBOHYDRATES" class="tabcontentfornutrition">
<center><h1>CARBOHYDRATES</h1></center>
<img src="image\carbohydrates.jpg"  width="890" height="350">
<p> Carbohydrates are one of the three macronutrients. They are also known as saccharides or carbs. It provides energy for the body </p><br>
<p> Each gram of carbohydrates provides 4 calories. The body breaks down the carbohydrates into glucose, which is the primary source for the brain and muscles.
</p><br>
<p>The Food and Drug Administration recommends that people get 275g of carbohydrate each day in a 2000 calorie diet.</p><br>
<h2>CARBOHYDRATE IN FOODS OCCURS IN VARIOUS FORMS, INCLUDING THE FOLLOWING:</h2>
<h3>DIETARY FIBER :</h3>
<ul style="list-style-type: none;"><li> It is a type of carbohydrate that the body cannot  easily digest. It is naturally found in vegetables and fruits, nuts,beans and whole grains.</li></ul>
<h3>TOTAL SUGAR</h3>
<ul style="list-style-type: none;"><li>  It is a type of carbohydrate, where the body easily digests and absorbs the sugars.</li>
<li>It includes sugars that occur normally in foods such as dairy products.</li>
<li>It also includes added sugars which are commonly found in baked goods,desserts, and sweets.</li></ul>
<h3>SUGAR ALCOHOLS</h3>
<ul style="list-style-type: none;><li> It is a type of carbohydrate, where the body does not get fully absorbed.</li>
<li>They have fewer calories than sugar and have a sweet taste.</li>
<li>They are added to foods as reduced calorie sweeteners, such as in chewing gum, baked goods and sweets.</li></ul>
<h3>CHEMISTRY</h3>
<ul style="list-style-type: none;">
<li> The chemical structure of carbohydrates contain carbon,hydrogen and oxygen atoms.</li>
<li>Carbohydrates can combine to form polymers or chains,to create different types of carbohydrates.</li>
<li>It can be monosaccharides, disaccharides or polysaccharides.</li>
<li>Monosaccharides and Disaccharides are simple carbohydrates which are sugars,consists of one or two molecules.</li></ul>
<h2>Monosaccharides:</h2>
<ul style="list-style-type: none;><li>They are single units of sugars.</li>
<li>GLUCOSE is the body's main source of energy.</li>
<li>GALACTOSE, which is mostly found in milk and dairy products.</li>
<li>FRUCTOSE, which is modestly found in fruits and vegetables.</li></ul>
<h2>Disaccharides:</h2>
<ul><li> They are two sugars molecules joined together.</li>
<li>LACTOSE,which is made up of glucose and galactose and mostly found in milk.</li>
<li>SUCROSE,which is made up of glucose and fructose.</li></ul>
<h2>Polysaccharides:</h2>
<ul style="list-style-type: none;">
<li>They are chain sources of many sugars. They can consist of hundreds or thousands of monosaccharides.</li>
<li>GLYCOGEN, which stores energy in the liver and muscles.</li>
<li>STARCHES, which are mostly found in potatoes, rice, and wheat.</li>
<li>CELLULOSE, is one of the main structural components of plants.</li>
</ul>
<h3>CARBOHYDRATES IN BISCUITS: </h3>
<ul style="list-style-type: none;"><li>Carbohydrates are the most abundant macronutrient in biscuits with flour as the main ingredient.</li>
<li>Most biscuits are made with refined wheat flour.</li>
<li>For one biscuit (45 grams) the carbohydrates = 19.3 g which is provided by USDA.</li></ul>
</div>

<div id="FATS" class="tabcontentfornutrition">
<center><h1>FATS</h1></center>
<img src="image\fats.jpg" alt="Italian Trulli" width="870" height="350">
<p>Fats are important macronutrients. It is essential for several body functions. It is an energy source and it also protects the skeleton and nerves. Fats have 9 calories per gram.</p>
<h2>Saturated Fats:</h2>
<p>They are solid at room temperature and also called solid fats. The basic carbon structure for these fatty acids is saturated with hydrogen atoms. The American Heart Association(AHA) recommend that people eat no more than 13 grams of saturated fat per day. A high intake of saturated fat may raise the level of low density lipoprotein(LDL) Cholesterol in the body. This leads to cardiovascular disease and stroke. Animal meat and meat products,dairy products(except that are fat free),Processed foods(including baked goods, snack foods),and some vegetable oils.</p>
<h2>Unsaturated Fats:</h2>
<p>There are two types of unsaturated fats;monounsaturated fats and polyunsaturated fats.</p>
<h3>Monounsaturated fats</h3>
<ul style="list-style-type: none;">
<li>Monounsaturated fat molecules are not saturated with hydrogen atoms.</li>
<li>Each fat molecule has bonded with one hydrogen atom.</li>
<li>It may lower the  low density lipoprotein(LDL) or bad cholesterol in the body and maintain healthful levels of high density lipoprotein(HDL) or good cholesterol.</li>
<li>Some of the sources of monounsaturated fats are,Olives and olive oil ,nuts and nut butters,avocados.</li></ul>
<h3>Polyunsaturated fats</h3>
<ul style="list-style-type: none;">
<li>A number of spaces around the polyunsaturated fat molecule are not saturated with hydrogen atoms.</li>
<li>Nutritionists report that polyunsaturated fats are good for health,especially from fish,known as omega-3 polyunsaturated  fatty acids.</li>
<li>The Office Of Dietary Statistics  says that omega 3 fatty acids help to keep the heart healthy and improves brain,joint,and eye health.</li>
<li>It als helps to reduce the triglycerides in the blood.</li> 
<li>Some sources of polyunsaturated fats are oily fish such as sardines,mackerel,trout,salmon and herring and nuts,soybean,sunflower oil and grapeseed.</li></ul>
<h2>Fats in Biscuits:</h2>
<p>The fat content in a biscuit varies depending on the recipe. According to the USDA,one standard biscuit has 8.5 grams of total fat. Most of the fat in the biscuit comes from saturated fat with 5.3 grams per serving. For health and wellness,no more than 10% of your total calories should come from saturated fat. One biscuit provides nearly 25% of the daily recommendation.</p>
</div>

<div id="SUGAR" class="tabcontentfornutrition">
<center><h1>SUGARS</h1></center>
<p> Simple sugars are monosaccharides, containing only one saccharide, while complex sugars contain two, making them disaccharides. </p>
<p>Each disaccharide is composed of a carbon ring of three to seven carbons, bonded to hydrogen, oxygen, and/or other carbon groups.  A list of common sugars is shown below.
</p>
<table><tr><td>
<img src="image\sugar.jpg" alt="Flowers in Chania" width="350" height="280">
</td>
<td>
<br/>
<table class="s" style="width:100%">
<tr>
<th bgcolor=" yellow">NAME</th>
<th bgcolor="yellow">CHEMICAL FORMULA</th>
</tr>
<tr>
<b><td>Glucose</td></b>
<td>C6H12O6(monosaccharides)</td></tr>
<td>Fructose</td>
<td>C6H12O6(monosaccharides)</td></tr>
<td>Galactose</td>
<td>C6H12O6(monosaccharides)</td></tr>
<td>Lactose</td>
<td>C12H22O11(disaccharide: glucose + galactose)</td>
</tr>
<td>Sucrose</td>
<td>C12H22O11 (disaccharide: glucose + fructose)</td></tr>
<td>Maltose</td>
<td>C12H22O11(disaccharide: glucose + glucose)</td></tr>
</td></tr></table>
<p> Glucose, fructose, and galactose are isomers, meaning that they share thesame chemical formula, but not the same molecular structure.  These different structures produce different levels of "sweetness" when eaten, as they bond to taste receptors on the tongue differently according to their structures.  Lactose, sucrose, and maltose are also isomers.</p>
<p>Maximum amount of sugars have to in all biscuits is 2.2 g per 100g
  &beta;-D-fructofuranosyl a-D-glucopyranoside is the chemical for sugar.</p>
<br/></td></tr></table>
  <h2>What type of sugar is in biscuits?</h2>
  <p> It is a disaccharide composed of two monosaccharides, a molecule of glucose joined to a molecule of fructose. Sugar is used in biscuit formulations in a granulated or powder form.
<ul style="list-style-type: none;"><li>Powdered sugar 60 &mu;m</li>
<li>Caster sugar 150-450 &mu;m</li>
<li>Granulated sugar 250-1050 &mu;m</li></ul>
<h2>Role of sugars in biscuits:</h2>
<ul style="list-style-type: none;"><li>Sugar is used in biscuit formulations in a granulated or powder form.</li>
<li>Sugar gives sweetness, but it is also important in developing the texture of the biscuit.</li>
<li>Dissolved sugar tends to inhibit starch gelatinisation and gluten formation and creates a biscuit with a more tender texture.</li></ul>
<h2>Substitute for sugar in biscuits:</h2>
<ul style="list-style-type: none;"><li>Honey</li>
<li>Molasses</li>
<li>Maple syrup</li>
<li>Fruit concentrates</li></ul>
<h2>Having more sugar content presented biscuits may cause:</h2>
<ul style="list-style-type: none;"><li>Obesity</li>
<li>Cardiovascular disease</li>
<li>Diabetes</li>
<li>Non-alcoholic fatty liver disease (NAFLD)</li></ul>
<p>Some recipes call for white sugar, some for brown, and some for a mixture of both.  White sugar is cane or beet sugar that has been heavily refined, removing the molasses and leaving pure sucrose crystals.  Brown sugar, traditionally, was unrefined cane sugar: sugar straight out of the plant.  </p>
<p> Now, both brown and white sugar are refined.  Brown sugar is created by adding a syrup, or liquid sugar, to refined sugar to give it a darker color and more moisture.</p>
<p> Most syrups are also made from sucrose, though many include inverted sucrose, which has been decomposed back into glucose and fructose. </p>
<p> This helps prevent recrystallization of the syrup.  Dark brown sugar contains a higher proportion of syrup than light brown sugar, and some brown sugars may include coloring or flavoring agents.</p>
<h2>Chemical Reactions:</h2>
<p> During baking sugar, amino acids, peptides and proteins go through a process known as the Maillard Reaction. These reactions result in browning and produce a wonderful smell associated with baked goods. The higher the sugar content, the darker golden brown the surface appears.</p>
</form>
</div>

<div id="ENERGY" class="tabcontentfornutrition">
<center><h1>ENERGY</center></h1>
    <br><br> <p>      Energy is the capacity to do work. Energy must be supplied regularly to meet the needs of the body's survival. The body needs energy for maintaining body temperature, metabolic activity, supporting growth, for physical work, to maintain constant body weight and good health.Through the process of digestion, we convert the food we eat to energy. This food energy is calculated as Calories (C) or kilocalories (kcal) or Joules (J).</p><br>

<h3>Energy yielding food factors</h3>
<ul style="list-style-type: none;"><li>1.carbohydrates </li>
<li>2.Fats </li>
	<li>3.Proteins </li><br>
       <p> Within the body, these are oxidized in the cells. The process is one of continuous utilization of O2 and production of CO2 H2O and heat.</p><br>

<h3>Energy intake per day</h3>
       <p> Indian Council of Medical Research (ICMR) recommends per-person per-day calorie norms of 2400 kcal for rural areas and 2100 kcal for urban areas, while Food and Agriculture Organization (FAO) uses a common minimum required calorie norm of 1800 kcal per-person per-day for both rural and urban population</p>

</div>

<div id="DIETARY FIBRE" class="tabcontentfornutrition">
<center><h1>DIETARY FIBER</h1><img src="image\Dietary-Fiber.jpg" alt="Italian Trulli" width="900" height="250"></center>
<p><ul style="list-style-type: none;"
><li>Dietary fiber is known as roughage or bulk.</li>
<li>It includes the parts of plant foods our body can't digest or absorb.</li>
<li>Unlike other components such as fat,protein and carbohydrate ,fiber isn't digested by the body.</li>
<li>Instead it passes through the stomach, small intestine and colon and out of the body.</li></ul>
<h2>Fiber is commonly classified as.</h2>
<h3>Soluble fiber :</h3>
<p>It dissolves in water to form a gel-like material.</p>
<p>Source : Oats, peas, beans, apples, citrus fruits, carrots, barley and psyllium.</p>
<h3>Insoluble fiber :</h3>
<p>It does not dissolve in water.</p>
<p>Source : Whole-wheat flour, wheat bran, nuts, beans and vegetables such as cauliflower, green beans and potatoes.</p>
<h2>Health Benefits :</h2>
 <ul style="list-style-type: none;"><li>Lowering blood cholesterol - helps lowering the total blood cholesterol levels by lowering low-density lipoprotein, or "bad," cholesterol levels.</li>
 <li>Aids in achieving healthy weight</li>
 <li>Stabilizing glucose - which is important for diabetic conditions. </li>
 <li>Helps in bowel movements ,so it can be of benefit for those who struggle with constipation or irregular stools.</li>
 <li>Reducing our risk of other conditions (such as heart disease and some cancers).</li>
 <li>Increasing dietary fiber intake is associated with reduced risk of dying from cardiovascular disease and all cancers.</li>
 <li>High fiber keeps the digestive system healthy.</li></ul>
<h2>Side effects :</h2>
<ul style="list-style-type: none;">
<li>Eating more than 70 g of fiber a day can cause side effects and some may experience these after just 40 g.</li>
<li>High consumption of fiber can cause nutrient deficiencies, because it can interfere with the body's ability to absorb essential nutrients.</li></ul>
<h2>Fiber daily recommendations for adults by Institute of Medicine</h2>
<table class="s">
<tr>
<th bgcolor="cyan">Adults</th>
<th bgcolor="cyan">Age 50 and younger</th>
<th bgcolor="cyan">Age 51 and older</th>
</tr>
<tr>
<td align="center">Men</td>
<td align="center">38 grams</td>
<td align="center">30 grams</td>
</tr>
<tr>
<td align="center">Women</td>
<td align="center">28 grams</td>
<td align="center">21 grams</td>
</tr></table>
</div>

<div id="SATURATED FATTY ACIDS" class="tabcontentfornutrition">
<h1 style="text-align:center;">SATURATED FATTY ACIDS</h1>
<p>It is a type of fatty acid that lacks unsaturated linkages between carbon atoms. 
Due to the lack of double bonds, this type of fatty acid can no longer absorb any more hydrogen, it is saturated.</p> 
<ul style="list-style-type: none;">
<li>Saturated fatty acids are most commonly found in animal fats.  </li>
<li>It includes the 12-carbon containing fatty acid, lauric acid, the 14-carbon myristic acid, the 16-carbon palmitic acid, the 18-carbon stearic acid, the 20-carbon arachidic acid, the 22-carbon behenic acid, the 24-carbon lignoceric acid.</li>
<li>Dietary sources of saturated fats are butter, coconut oil, meat, peanut, butter and cheese. </li>
<li>In the human diet the most consumed saturated fatty acids are myristic, palmitic and stearic acids.</li>
</ul>
<h2>SIDE EFFECTS</h2>
<ul style="list-style-type: none;">
<li>Too much consumption of saturated fat is associated with heart diseases and atherosclerosis.</li>
<li>The saturated fats increase low-density lipoprotein (LDL)and very low-density lipoproteins (VLDL) and (HDL).</li>
<li>HDL is heart-protective. Having low levels of this beneficial cholesterol is associated with an increased risk of heart disease and cardiovascular complications.</li></ul>
<h2>CONSUMPTION LEVEL</h2>
<p>Recommended consumption is not more than 10% of the total calories per day.</p>
</div>

<div id="MONOUNSATURATED FATTY ACIDS" class="tabcontentfornutrition">
<h1 style="text-align:center;">MONO UNSATURATED FATTY ACIDS</h1>
<h3><b>Source : </b></h3>
<ul style="list-style-type: none;"
><li>Olive oil is enriched in MUFA</li></ul>
<h3><b>Recommended value per day : </b></h3>
<ul style="list-style-type: none;">
<li>For a 2,000 calorie diet, that is a total of 140 to 200 calories, or 16 to 22 grams a day. Keep total fat consumption to no more than 25% to 30% of your daily calories.</li></ul>
<h3><b>Benifits: </b></h3>
<ul style="list-style-type: none;"><li>Consuming monounsaturated fatty acids may help lower your risk of heart disease by improving your risk factors.</li>
<li> MUFAs may lower your total and low-density lipoprotein (LDL) cholesterol levels but maintain your high-density lipoprotein (HDL) cholesterol level.</li>
</ul>
</div>

<div id="POLYUNSATURATED FATTY ACIDS" class="tabcontentfornutrition">
<h1 style="text-align:center;">POLY UNSATURATED FATTY ACIDS</h1>
<p>Polyunsaturated fat is a type of dietary fat. It is one of the healthy fats, along with monounsaturated fat. Polyunsaturated fat is found in plant and animal foods, such as salmon, vegetable oils, and some nuts and seeds. 
Eating moderate amounts of polyunsaturated (and monounsaturated) fat in place of saturated and trans fats can benefit your health.</br>
Polyunsaturated fat is different than saturated fat and trans fat.</p></br>
<p> Polyunsaturated fats can help lower your LDL (bad) cholesterol. Cholesterol is a soft, waxy substance that can cause clogged or blocked arteries (blood vessels). 
Having low LDL cholesterol reduces your risk for heart disease.</br>
Polyunsaturated fats include omega-3 and omega-6 fats.
These are essential fatty acids that the body needs for brain function and cell growth. Our bodies do not make essential fatty acids, 
so you can only get them from food.</p> 
<h3>Omega-3 fatty acids are good for your heart in several ways. </h3>
<ul style="list-style-type: none;">
<li>Reduce triglycerides, a type of fat in your blood.  </li>
<li>Reduce the risk of developing an irregular heartbeat (arrhythmia).</li>
<li>Slow the buildup of plaque, a substance comprising fat, cholesterol, and calcium, which can harden and clog your arteries. </li>
<li>Slightly lower your blood pressure.</li>
</ul>
<h3>Omega-6 fatty acids may help:</h3>
<ul style="list-style-type: none;"
>
<li>Control your blood sugar.</li>
<li>Reduce your risk for diabetes.</li>
<li>Lower your blood pressure.</li>
</ul>
<h2>How much should you eat?</h2>
<p>Our body needs some fat for energy and other functions. Polyunsaturated fats are a healthy choice. </br>
The 2015-2020 Dietary Guidelines for Americans recommends getting no more than 10% of your total daily calories from saturated fat (found in red meat, butter, cheese, and whole-fat dairy products) 
and trans fats (found in processed foods).</br>. Keep total fat consumption to no more than 25% to 30% of your daily calories. 
This includes monounsaturated and polyunsaturated fats.</p>
<h3>Side effects</h3>
<p>Consuming natural polyunsaturated fats in healthful foods does not typically carry any risk, unless the person has an allergic reaction to the food.
Side effects, including:-
<ul style="list-style-type: none;">
<li>nausea</li>
<li>diarrhea</li>
<li>heartburn</li>
<li>bad breath</li>
</ul>
</div>

<div id="TRANS FATTY ACIDS" class="tabcontentfornutrition">
<h1 style="text-align:center;">TRANS FATTY ACIDS</h1>
<p> Trans fat is a type of dietary fat. Of all the fats, trans fat is the worst for your health. 
Too much trans fat in your diet increases your risk for heart disease and other health problems.</br>
Trans fats are made when food makers turn liquid oils into solid fats, like shortening or margarine.
Trans fats can be found in many fried, "fast" packaged, or processed foods.
</p>
<h2>How Trans Fats Affect our  Health?</h2>
<p> Our body does not need or benefit from trans fats. 
Eating these fats increases your risk for health problems.
<h3>Cardiovascular disease risk:-</h3>
<ul style="list-style-type: none;">
<li>Trans fats raise your LDL (bad) cholesterol.</li>
<li>They also lower your HDL (good) cholesterol.</li>
<li>High LDL along with low HDL levels can cause cholesterol to build up in your arteries (blood vessels). 
This increases your risk for heart disease and stroke.</li>
</ul>
<h3>Weight gain and diabetes risk:-</h3>
<ul style="list-style-type: none;">
<li>Many high-fat foods such as baked goods and fried foods have a lot of trans fat.</li>
<li>Eating too much trans fat can cause you to gain weight. It may also increase your risk for type 2 diabetes. Staying at a healthy weight can reduce your risk for diabetes, heart disease, and other health problems.</li>
</ul>
<h2>How much you can eat?</h2>
<p>Here are recommendations from the 2015-2020 Dietary Guidelines for Americans and the American Heart Association:-</p>
<ul style="list-style-type: none;">
<li>You should get no more than 25% to 30% of your daily calories from fats.</li>
<li> You should limit trans fat to less than 1% of your daily calories. For someone with a 2,000 calorie a day diet, this is about 20 calories or 2 grams per day.</li>
</ul>
<h2>Side Effects:-</h2>
<ul style="list-style-type: none;"><li>Trans fats increase the risk of heart disease, the leading killer of adults.</li> 
<li>The more trans fats eaten, the greater the risk of heart and blood vessel disease, stroke and type 2 diabetes.</li>
<li>Trans fats also have an unhealthy effect on cholesterol levels.</li>
</ul>
</div>

<script>
function opennutrition(evt, nutritionName) 
{
  var i, tabcontentfornutrition, tablinksfornutrition;
  tabcontentfornutrition = document.getElementsByClassName("tabcontentfornutrition");
  for (i = 0; i < tabcontentfornutrition.length; i++) 
  {
    tabcontentfornutrition[i].style.display = "none";
  }
  tablinksfornutrition = document.getElementsByClassName("tablinksfornutrition");
  for (i = 0; i < tablinksfornutrition.length; i++) 
  {
    tablinksfornutrition[i].className = tablinksfornutrition[i].className.replace(" active", "");
  }
  document.getElementById(nutritionName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen10").click();
</script>
</div>
</body>
