<!DOCTYPE html>
<html>
<head>
<title>ADDITIVES</title>
</head>
<?php
include('header.php');
?>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}
/* Style the Emulsifier tab */
.tabforemulsifier {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 900px;
}
/* Style the buttons inside the tab */
.tabforemulsifier button {
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
.tabforemulsifier button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tabforemulsifier button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontentforemulsifier {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 900px;
}
</style>


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
* {box-sizing: border-box}
/* Style the Improver tab */
.tabforimprover {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 750px;
}
/* Style the buttons inside the tab */
.tabforimprover button {
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
.tabforimprover button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tabforimprover button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontentforimprover {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 750px;
}
</style>

<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}
/* Style the Acidity tab */
.tabforacidity {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 1050px;
}
/* Style the buttons inside the tab */
.tabforacidity button {
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
.tabforacidity button:hover {
  background-color: #ddd;
}
/* Create an active/current "tab button" class */
.tabforacidity button.active {
  background-color: #ccc;
}
/* Style the tab content */
.tabcontentforacidity {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 1050px;
}
</style>

<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}
/* Style the Raising agent tab */
.tabforraisingagent {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 900px;
}
/* Style the buttons inside the tab */
.tabforraisingagent button {
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
.tabforraisingagent button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tabforraisingagent button.active {
  background-color: #ccc;
}
/* Style the tab content */
.tabcontentforraisingagent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 900px;
}
</style>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}
/* Style the Synthetic food color tab */
.tabforsfc {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 750px;
}
/* Style the buttons inside the tab */
.tabforsfc button {
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
.tabforsfc button:hover {
  background-color: #ddd;
}
/* Create an active/current "tab button" class */
.tabforsfc button.active {
  background-color: #ccc;
}
/* Style the tab content */
.tabcontentforsfc {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 750px;
}
</style>
</head>
<body>

<div id="ADDITIVES" class="tabcontent">
	<table style="width:100%;">
         <center><div class="taab">                      
             <button class="tablinkAd" style="font-family:Times New Roman;font-size:18px;" onClick="openADDITIVES(event, 'RAISING AGENT')" id="defaultOpen3">RAISING AGENT</button>
             <button class="tablinkAd" style="font-family:Times New Roman;font-size:18px;" onClick="openADDITIVES(event, 'DOUGH CONDITIONER')" >DOUGH CONDITIONER</button>
             <button class="tablinkAd" style="font-family:Times New Roman;font-size:18px;" onClick="openADDITIVES(event, 'ACIDITY REGULATORS')" >ACIDITY REGULATORS</button>
	     <button class="tablinkAd" style="font-family:Times New Roman;font-size:18px;" onClick="openADDITIVES(event, 'GELLING AGENT')" >GELLING AGENT</button>
	     <button class="tablinkAd" style="font-family:Times New Roman;font-size:18px;" onClick="openADDITIVES(event, 'PRESERVATIVE')" >PRESERVATIVE</button>
	     <button class="tablinkAd" style="font-family:Times New Roman;font-size:18px;" onClick="openADDITIVES(event, 'IMPROVER')" >IMPROVER</button>
             <button class="tablinkAd" style="font-family:Times New Roman;font-size:18px;" onClick="openADDITIVES(event, 'EMULSIFIERS')" >EMULSIFIERS</button>
	     <button class="tablinkAd" style="font-family:Times New Roman;font-size:18px;" onClick="openADDITIVES(event, 'SYNTHETIC FOOD COLOURS')" >SYNTHETIC FOOD COLOURS</button>
             <button class="tablinkAd" style="font-family:Times New Roman;font-size:18px;" onClick="openADDITIVES(event, 'SHORT SUMMARY')" >SHORT SUMMARY</button>                       
</div></center></table>
	  <div id="RAISING AGENT" class="tabconten">
<center><h1>RAISING AGENT</h1></center>
<div class="tabforraisingagent">
  <button class="tablinksforraisingagent" onClick="openRaisingagent(event, '503(ii) - Ammonium hydrogen carbonate')" id="defaultOpen7">503(ii) - Ammonium hydrogen carbonate</button>
  <button class="tablinksforraisingagent" onClick="openRaisingagent(event, '500(ii) - Baking soda')">500(ii) - Baking soda</button>
  <button class="tablinksforraisingagent" onClick="openRaisingagent(event, 'INS 450(i) - Sodium acid pyrophosphate')">INS 450(i) - Sodium acid pyrophosphate</button>
  <button class="tablinksforraisingagent" onClick="openRaisingagent(event, '341(i) - Monocalcium phosphate')">341(i) - Monocalcium phosphate</button>
  <p><center><img src="image\ra.jpg" alt="Raising Agent" width="380px" height="250px"></center></p>
</div>

<div id="503(ii) - Ammonium hydrogen carbonate" class="tabcontentforraisingagent">
<center><h2>503(ii) - Ammonium hydrogen carbonate<h2></center>
<center><h3 style="padding: 10px; border: 2px solid red";>OTHER NAMES</h3></center>
<ul style="list-style-type: none;">
<li>Ammonium bicarbonate</li>
<li>Ammonium acid carbonate</li>
<li>Mono ammonium carbonate</li>
<li>Ammonium hydrogen carbonate</li>
<li>Azanium hydrogen carbonate</li>
<li>Carbonic acid monoammonium salt</li>
<li> Hartshorn, Rock ammonia</li>
</ul>
<h3>DESCRIPTION</h3>
<p>It acts as a food additive to preserve and prepare food items, especially baking products. It is also used as a leavening agent.</p>
<p>It is a white crystalline powder and looks like salt. It increases gas volume as well as improves the quality of the dough. It has a stable chemical compound, and you must keep it away from strong bases and acids.</p>
<h3>HEALTH EFFECTS</h3>
<p>It can affect you when breathed in - create irritation in the nose and throat and cause allergies. Coughing, sneezing, and shortness of breath might also be a problem for some people. It leads to nerve weakness and lung allergies.</p>
<h3>CHEMISTRY</h3>
<p>It appears as a white crystalline solid having the odor of ammonia. Soluble in water. It is the bicarbonate salt of the ammonium ion. It is a colorless solid that degrades readily to carbon dioxide, water and ammonia.This raising agent must be used in minimal quantity.</p>
<h3>TOXICITY</h3>
<p>  Not specified</p>
</div>

<div id="500(ii) - Baking soda" class="tabcontentforraisingagent">
<h2><center>500(ii) - Baking soda</center></h2>
<center><h3 style="padding: 10px; border: 2px solid red;">OTHER NAMES</h3> </center>
<table><tr>
<td><center><img src="image\bake.jpg" alt="Baking agent" width="300px" height="150px" ></center>
</td>
<td>
<ul  style="font-size:150%;list-style-type: none;">
<li>Sodium hydrogen carbonate</li>
<li>Sodium bicarbonate</li>
<br/><br/><br/>
</ul></td>
</tr></table>
<h3>DESCRIPTION</h3>
<p>It is one of the most widely used as a raising agent and leavening agent in baked goods.Sodium bicarbonate is a white solid that is crystalline but often appears as a fine powder. It has a slightly salty, alkaline taste resembling that of washing soda. It  is activated when combined with other ingredients, such as water, and then added to a dough or batter.</p>
<h3>HEALTH EFFECTS</h3>
<p>Overdosage of Raising Agent (E 500(ii)) can cause hazards like nausea, abdominal pain, vomiting, and diarrhea. It has high sodium content, and an overload of sodium in the body (hypernatremia) can cause serious problems like seizures and kidney failure.</p>
<h3>CHEMISTRY</h3>
<p>It is a white solid crystalline chemical compound usually in its powder form. This salt is composed of sodium ions and bicarbonate ions. Its molecular formula is NaHCO3. It is a weak base. It is commonly called baking soda and is used in cooking. PH value is about 8.31.This compound is insoluble in ethanol and slightly soluble in methanol and acetone.</p>
<h3>TOXICITY</h3>
<p>Baking soda is considered nontoxic when it is used in cooking and baking. In too large a dose, baking soda is poisonous.</p>
</div>

<div id="INS 450(i) - Sodium acid pyrophosphate" class="tabcontentforraisingagent">
<center><h2>INS 450(i) - Sodium acid pyrophosphate</h2></center>
<center><h3 style="padding: 10px; border: 2px solid red;">OTHER NAMES</h3> </center>
<ul style="list-style-type: none;">
<li>Disodium dihydrogen pyrophosphate</li>
<li>Disodium Pyrophosphate</li>
<li>Disodium Diphosphate</li>
<li>Dihydrogen Diphosphate</li>
<li>Diphosphoric Acid</li>
<li>Pyrophosphoric Acid</li>
</ul>
<h3>DESCRIPTION</h3>
<p>It  is used as a raising and leavening agent in bakery products and also, it maintains the color in processed potatoes and also prevents struvite crystal in canned seafood. It is used as leavening acid which combines with baking soda to release carbon dioxide to improve the texture and volume of baked goods. It  has a slight bitter taste. It is used as a chelating agent to chelate iron to prevent discoloration in processed potatoes.</p>
<h3>HEALTH EFFECTS</h3>
<p>None known when used in foods. High concentrations of phosphates may disturb several metabolic processes as phosphate plays an important role in general metabolism. It may cause allergies.</p>
<h3>CHEMISTRY</h3>
<p>It is  an inorganic compound consisting of sodium cations and pyrophosphate anion.  It is a White crystalline powder or granules and Soluble in water. It is a condensed phosphate, commonly synthesized by the neutralization of phosphoric acid with sodium hydroxide or sodium carbonate at the ratio of 1:1 to produce monosodium phosphate (NaH2PO4), and then heated approximately 250&deg;C to remove the water.</p>
<h3>TOXICITY</h3>
<p>EFSA considered disodium pyrophosphate to be of low acute oral toxicity. 
Maximum Tolerable Daily Intake- 70 mg/kg</p>
</div>
<div id="341(i) - Monocalcium phosphate" class="tabcontentforraisingagent">
<center><h2>341(i) - Monocalcium phosphate</h2></center>
<center><h3 style="padding: 10px; border: 2px solid red;">OTHER NAMES</h3> </center>
<ul style="list-style-type: none;">
<li>Monobasic calcium phosphate</li>
<li>Monocalcium orthophosphate</li>
<li>Phosphoric acid - calcium salt (2:1)</li>
</ul>
<h3>DESCRIPTION</h3>
<p>It is commonly used with sodium bicarbonate as a leavening agent in bakery foods. Its purpose is to react with baking soda to provide aeration and volume by releasing carbon dioxide in the presence of water. It is often combined with slow-acting acids such as sodium acid pyrophosphate, sodium aluminum sulfate and sodium aluminum phosphate in double-acting baking powders.</p>
<h4>HEALTH EFFECTS</h4>
<p>It is considered safe but some people may be allergic or sensitive to it.</p>
<h3>CHEMISTRY</h3>
<p>Monocalcium phosphate is an inorganic compound with the chemical formula Ca(H2PO4)2 . It appears as granular powder or white, deliquescent crystals or granules. It is sparingly soluble in water. The PH value of its solution is around 3 due to the phosphoric acid produced by its hydrolysis in water. </p>
<h3>TOXICITY</h3>
<p>It is nontoxic. Maximum Tolerable Daily Intake -  70 mg/kg</p>
</div>

<script>
function openRaisingagent(evt, RaisingagentName) 
{
  var i, tabcontentforraisingagent, tablinksforraisingagent;
  tabcontentforraisingagent = document.getElementsByClassName("tabcontentforraisingagent");
  for (i = 0; i < tabcontentforraisingagent.length; i++) 
  {
    tabcontentforraisingagent[i].style.display = "none";
  }
  tablinksforraisingagent = document.getElementsByClassName("tablinksforraisingagent");
  for (i = 0; i < tablinksforraisingagent.length; i++) 
  {
    tablinksforraisingagent[i].className = tablinksforraisingagent[i].className.replace(" active", "");
  }
  document.getElementById(RaisingagentName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen7").click();
</script>
</div>

<div id="DOUGH CONDITIONER" class="tabconten">
<center><h1>DOUGH CONDITIONER</h1></center>
<h2>INS223 - Sodium metabisulfite</h2>
<h3>DESCRIPTION</h3>
<p>Sodium metabisulfite exists as white crystals or as white crystalline powder. It is one of the sulfites that can be used as a preservative, antioxidant and bleaching agent in food. It is used as a dough conditioner to enhance the rise and preserve freshness of bread and other baked goods.</p>
<h3>HEALTH EFFECTS</h3>
<ul>
<li>Ingesting high amounts may result in nausea, vomiting, diarrhea, abdominal pains, circulatory disturbance and central nervous system depression. </li>
<li>It causes extreme allergic reactions in some sulfite-sensitive individuals, resulting in bronchial constriction, shortness of breath, wheezing, coughing, rapid swelling of the skin, flushing, tingling sensations, gastrointestinal disturbances and shock.</li>
</ul>
<h3>CHEMISTRY</h3>
<ul>
<li>Na2S2O5 Slowly oxidizes to Na2SO4 (sodium sulfate) and releases sulfur dioxide (SO2) gas if exposed to air and moisture. SO2 is also released by the reaction with acid.</li>
<li>Soluble in water and its water solubility increases with temperature, 54g/100ml at 20&deg;C and 81.7g/100ml at 100&deg;C.</li>
</ul>
<h3>TOXICITY</h3>
<p>Acceptable intake up to 0.7 mg/kg body weight.</p>
</div>

<div id="ACIDITY REGULATORS" class="tabconten">
<center><h1>ACIDITY REGULATORS</h1></center>
<div class="tabforacidity">
  <button class="tablinksforacidity" onClick="openAcidity(event, 'E270-Lactic acid')" id="defaultOpen5">E270-Lactic acid</button>
  <button class="tablinksforacidity" onClick="openAcidity(event, 'E330 - Citric acid')">E330 - Citric acid</button>
  <button class="tablinksforacidity" onClick="openAcidity(event, 'E331(i) -  Monosodium Citrate')">E331(i) -  Monosodium Citrate</button>
</div>
<div id="E270-Lactic acid" class="tabcontentforacidity">
<center><h1>E270 -Lactic acid</h1></center>
<center><h3 style="padding: 10px; border: 2px solid red;">OTHER NAMES</h3> </center>
<ul style="list-style-type: none;"><li>Lactic acid</li>
<li>L-</li>
<li>D- and DL- 270</li>
<li>Milk acid</li>
<li>Propel</li>
<li>2-hydroxypropanoic acid</li></ul>
<h3>DESCRIPTION</h3>
<p>E270 is a colorless, syrupy liquid or white to light yellow solid or powder. It is mainly used as an acidifier, flavoring agent and pH regulator in food and beverages. Found in foods such as sweets, salad dressings, cakes, biscuits, soft drinks, infant formulas, confectionery, pickled foods, tinned fruit and vegetables.</p>
<h3>HEALTH EFFECTS</h3>
<p>Lactic acid is generally regarded as a very safe and effective supplement.There are some possible minor side effects which are burning sensation, dry skin, flushing, irritation, itching, rash and stinging.</p>
<h3>CHEMISTRY</h3>
<p>Lactic acid is hygroscopic and when concentrated by boiling, it condenses to form lactic acid lactate, which on dilution and heating hydrolyses to lactic acid.</p>
<h3>TOXICITY</h3>
<ul style="list-style-type: none;">
<li>Lactic Acid is considered safe by the FDA.</li>
<li>Suggested dosage - Not mentioned. </li>
</ul>
</div>

<div id="E330 - Citric acid" class="tabcontentforacidity">
<center><h1>E330 - Citric acid</h1></center>
<center><img src="image\citric.jpg" alt="Baking agent"></center>
<center><h3 style="padding: 10px; border: 2px solid red;">OTHER NAMES</h3> </center>
<ul style="list-style-type: none;">
<li>2-hydroxy-1,2</li>
<li>3-propanetricarboxylic acid</li>
<li>&beta;-Hydroxytricarballylic acid</li>
</ul>
<h3>DESCRIPTION</h3>
<p>A white or colorless crystalline powder with a strongly acidic taste. It is the most widely used acidulant to give a sour taste in food and beverage, also acts as a preservative, pH buffer, antioxidant and chelating agent.</p>
<h3>ACIDITY REGULATOR</h3>
<p>It is commonly used to add an acidic (sour) taste, enhance flavor and adjust pH to foods and soft drinks.</p>
<h3>HEATH EFFECTS</h3>
<p>Citric acid can cause allergic symptoms such as hives, difficulty in breathing, swelling of face, lips, tongue, or throat.</p>
<h3>CHEMISTRY</h3>
<ul style="list-style-type: none;">
<li>There are two forms of citric acid sold in the market, anhydrous and monohydrate. Monohydrate can turn to anhydrous in the condition of heating above 37 &deg;C.</li>
<li>Anhydrous: has a high solubility in water (592 g/L, 20 &deg;C). </li>
<li>Monohydrate: soluble in water. </li>
</ul>
<h3>TOXICITY</h3>
<p>The maximum level of E330 is "quantum satis", which means there is no specific limit in its uses.</p>
</div>

<div id="E331(i) -  Monosodium Citrate" class="tabcontentforacidity">
<center><h1>E331(i) -  Monosodium Citrate</h1></center>
<center><h3 style="padding: 10px; border: 2px solid red;">OTHER NAMES</h3> </center>
<ul style="list-style-type: none;">
<li>Sodium dihydrogen citrate</li></ul>
<h3>DESCRIPTION</h3>
<p>Crystalline white powder or crystals. It can be used as an acidulant (PH 3.5 to 3.8 of 1 % aqueous solution) or buffering agent in combination with free acidulants. This ingredient is usually added together with citric acid to enhance flavor or adjust the pH by reducing the acidity of foods. </p>
<h3>HEALTH EFFECTS</h3>
<p>Serious side effects of monosodium citrate include numbness, rapid weight gain, cramps, fast or slow heart rate, confusion, mood changes, severe stomach pain, ongoing diarrhea or seizure. </p>
<h3>CHEMISTRY</h3>
<ul style="list-style-type: none;">
<li>As there are three carboxyl groups in the molecule of citric acid, so there can be three types of sodium citrates (mono, di and trisodium citrate) based on the partial or total neutralization of citric acid.</li>
<li>Sodium citrate is the base of citric acid, which is a weak organic acid with three carboxylic acid groups and as a result it dissociates three H+,and with three pKa values, pKa1 = 3.14, pKa2 = 4.77 and pKa3 = 6.39.</li>
<li>Soluble in water (1g/1.5ml, 25&deg;C), insoluble in ethanol. </li>
<li>Has a pH value as 7.5 to 9.0 (5 % aqueous solution). </li>
</ul>
<h3>TOXICITY</h3>
<p>Sodium citrate is generally recognized as safe (GRAS) when used in food with no limitation. </p>
</div>

<script>
function openAcidity(evt, AcidityName) 
{
  var i, tabcontentforacidity, tablinksforacidity;
  tabcontentforacidity = document.getElementsByClassName("tabcontentforacidity");
  for (i = 0; i < tabcontentforacidity.length; i++) 
  {
    tabcontentforacidity[i].style.display = "none";
  }
  tablinksforacidity = document.getElementsByClassName("tablinksforacidity");
  for (i = 0; i < tablinksforacidity.length; i++) 
  {
    tablinksforacidity[i].className = tablinksforacidity[i].className.replace(" active", "");
  }
  document.getElementById(AcidityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen5").click();
</script>
</div>
<div id="GELLING AGENT" class="tabconten">
<center><h1>GELLING AGENT</h1></center>
<center><h2>440-pectin</h2></center>
<h3>OCCURRENCE</h3>
<ul>
<li>Pectin occurs naturally in plants and can be found in the cell walls and in the middle layer of the cell of most vegetables and fruits.</li>
<li>It contributes to the solidification of jam.</li>
<li>The sources for commercial production of pectin mainly come from apple pomace and citrus peel. </li>
<li>Derived pectin are high methoxyl pectin.</li>
<li>Apple  pomace contains around 10% to 20% pectin</li>
<li>Citrus peel contains around 20-30% pectin  of the dry weight. </li>
<li>Food grade pectin is a high-molecular-weight polysaccharide, which is made of two parts: more than 65% galacturonic acid, and 35% of other polysaccharides and some monosaccharides</li>
<p>Three types of pectin:</p>
<li>1. High methoxyl pectin (HMP): DE>50% (typically 55-75%)</li>
<li>2. Low methoxyl pectin (LMP): DE<50% (typically 20% - 40%)</li>
<li>3. Low methoxyl amidated pectin (LMAP): the degree of amidation<25%, 25%<DE<50%</li>
<li>HMP and LMP share the same E number of E450i, while the E number of LMAP is E450ii.</li>
</ul>
<h3>HEALTH EFFECTS</h3>
<ul>
<li>Pectin may reduce the absorption of beta-carotene from foods for 50% .</li>
<li>Individuals allergic to pistachios and cashew nuts may be cross-sensitive to pectin.</li>
<li>Pectin acts as a thickening agent thus, it may cause intestinal problems when present in high concentrations. As a result of its thickening effect, it is also used in diet preparations, where it reduces the feeling of hunger. </li>
<li>It can be fermented in the large intestine, resulting in flatulence.</li>
</ul>
<h3>CHEMISTRY</h3>
<ul>
<li>Pectin is   dissolved in water under suitable conditions. </li>
<li>It is derived from the protopectin found in the middle lamellae of plant cells which  is insoluble, but is converted to soluble pectin as fruit ripens or is heated in an acid medium. </li>
<li>Pectin is a negatively charged colloid in an acid fruit substrate.</li>
<li>Pectin is a linear polymer having galacturonic acid backbone chain in which monomer units I e rhamnose attached via a-(1 ? 4)-glycosidic linkage .</li>
</ul>
<h3>TOXICITY</h3>
<p>The European Food Safety Authority Panel concluded that there is no safety concern for the use of pectin (E 440i) and amidated pectin (E 440ii) as food additives for the general population and that there is no need for a numerical acceptable daily intake (ADI).</p>
</div>

<div id="PRESERVATIVE" class="tabconten">
<center><h1>PRESERVATIVES</h1></center>
<h2>E223-Sodium metabisulphite</h2>
<h3>OCCURRENCE</h3>
<ul>
<li>Sodium metabisulfite can be produced by crystallizing a solution of sodium bisulfite. </li>
<li>Sodium sulfite can be produced by introducing sulfur dioxide into sodium hydroxide.</li>
<li>Sodium bisulfite results from introducing sulfur dioxide into a solution of sodium sulfite </li>
<li>It decreases the growth of bacteria and fungi. Addition of sodium MetaBisulphite  prevents browning and limits spoilage</li>
</ul>
<h3>HEALTH EFFECTS</h3>
<ul>
<li>It  cause side effects such as abdominal pain, diarrhea, hives, low blood pressure and even life-threatening anaphylaxis.</li>
<li>Low  exposure can cause itching and a skin rash.</li>
<li>Repeated exposure may cause bronchitis to develop with coughing, phlegm, and/or shortness of breath.</li>
</ul>
<h3>CHEMISTRY</h3>
<ul>
<li>Sodium metabisulfite is a chemical compound with the formula Na2S2O5. It is also known as sodium pyrosulfite and sodium disulfite. </li>
<li>Na2S2O5 is an ionic compound containing the sodium cation (Na+) and the metabisulfite anion (S2O52-). </li>
<li>It exists as a white or yellowish-white powder</li>
<li>It has pH as 4.6</li>
</ul>
<h3>TOXICITY</h3>
<p>EFSA concluded that the current group ADI of 0.7 mg expressed as Na2S2O5 equivalent/kg bw per day and would be re-evaluated due to the uncertainties and limitations in the database .</p>
</div>
	  
<div id="IMPROVER" class="tabconten">
<center><h1>IMPROVER</h1></center>
<div class="tabforimprover">
  <button class="tablinksforimprover" onClick="openImprover(event, 'Amylase')" id="defaultOpen4">1100-Amylase</button>
  <button class="tablinksforimprover" onClick="openImprover(event, 'Proteolytic enzyme')">101(i)-Proteolytic enzyme</button>
  <button class="tablinksforimprover" onClick="openImprover(event, 'Papain')">1101(ii)-Papain</button>
</div>
<div id="Amylase" class="tabcontentforimprover">
<center><h1>1100 - Amylase</h1></center>
<h3>DESCRIPTION:</h3>
 <ul style="list-style-type: none;"><li>Amylase is an enzyme that is used to turn starches into sugars.</li>
 <li>It is also found in the pancreas and salivary gland and plays an important role in the conversion of dietary starches into glucose for energy in the human body.</li>
 <li>Amylase occurs naturally in yeast and when added to flour breaks down the starch to give a sweet taste, and causes the bread to rise as a result of CO2 production.</li></ul>
<h3>HEALTH EFFECTS:</h3>
The main side effect of this additive is that it can trigger asthma.
<h3>CHEMISTRY:</h3>
   Widely used in breadmaking to break down complex starches found in flour.
<h3>TOXICITY:</h3>
  <ul style="list-style-type: none;"><li>The safety of the production organism must be the prime consideration in assessing the safety of an enzyme preparation intended for use in food (Pariza and Foster, 1983).</li>
  <li>If the organism is non-toxicity and non-pathogenic, then it is assumed that foods or food ingredients produced from the organism, using current Good Manufacturing Practices, are safe to consume (IFBC, 1990).</li></ul>
</div>

<div id="Proteolytic enzyme" class="tabcontentforimprover">
<center><h1>101(i)-proteolytic enzyme</h1></center>
<h3>DESCRIPTION:</h3>
Improver (INS 1101(i)) is an enzyme which is a protease. Improver (INS 1101(i)) is used as a food additive to be used in dough to improve baking functionality.
<h3>HEALTH EFFECTS:</h3>
It can cause allergic reactions. Another side effect that has been reported is stomach upset, including diarrhea, nausea, and vomiting.
<h3>TOXICITY:</h3>
<ul style="list-style-type: none;"><li>It is not completely clear which specific proteases are included in the GSFA, as only the "parent" Protease (INS 1101(i)) is listed. While the Joint FAO/WHO Expert Committee on Food Additives (JECFA) has reviewed 
several proteases, there are only two JECFA specification monographs for proteases that are listed as having 
INS 1101(i): Protease from Aspergillus oryzae, var., and Protease from Streptomyces fradiae.</li>
<li>Of these two, only Protease from Aspergillus oryzae, var. has a JECFA ADI (acceptable daily intake (ADI))</li></ul>
</div>

<div id="Papain" class="tabcontentforimprover">
<center><h1>1101(ii) - Papain:</h1></center>
<h3>DESCRIPTION:</h3>
<ul style="list-style-type: none;"><li>Improver [1101(ii)] is a food additive derived from papain, an enzyme extracted from the raw fruit
<li>Improver [1101(ii)] .It exists as white to light tan powder or liquid</li></ul>
<h3>HEALTH EFFECTS:</h3>
     <ul style="list-style-type: none;"><li>Improver [1101(ii)] may cause allergy in people due to papain.<li>
    <li> The tendency is greatest in people with allergies to latex or kiwi.</li>
   <li> Symptoms can include an itchy mouth,sneezing, watery eyes, nasal congestion, excessive sweating, and diarrhea.</li>
    <li>It may lead to a life-threatening body reaction known as anaphylaxis.</li>
   <li> So we should avoid the consumption of Improver [1101(ii)] as it interferes with these medications.</li>
     <li>It may lead to hypoglycemia which is an abnormally low blood sugar level.</li></ul>
<h3>CHEMISTRY:</h3>
<p>White to light tan amorphous powder or liquids; soluble in water, the solutions being colorless to light yellow and somewhat opalescent. Used as bulking agent, thickener, emulsifier, etc.</p>
<h3>TOXICITY: </h3>
<p>Protease from Aspergillus oryzae, var.Brazil considers that in order to maintain consistency with the current CAC/GL 36-1989, the technological purposes "flour  treatment agent", "flavor  enhancer" and "stabilizer" should  be maintained.</p>
</div>

<script>
function openImprover(evt, ImproverName) 
{
  var i, tabcontentforimprover, tablinksforimprover;
  tabcontentforimprover = document.getElementsByClassName("tabcontentforimprover");
  for (i = 0; i < tabcontentforimprover.length; i++) 
  {
    tabcontentforimprover[i].style.display = "none";
  }
  tablinksforimprover = document.getElementsByClassName("tablinksforimprover");
  for (i = 0; i < tablinksforimprover.length; i++) 
  {
    tablinksforimprover[i].className = tablinksforimprover[i].className.replace(" active", "");
  }
  document.getElementById(ImproverName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen4").click();
</script>
</div>

<div id="EMULSIFIERS" class="tabconten">
<center><h1>EMULSIFIERS</h1></center>
<div class="tabforemulsifier">
  <button class="tablinksforemulsifier" onClick="openemulsifier(event, 'E 322 :SOYA LECITHIN')" id="defaultOpen12">E 322 :SOYA LECITHIN </button>
  <button class="tablinksforemulsifier" onClick="openemulsifier(event, 'E 223 : SODIUM METABISULFITE')">E 223 : SODIUM METABISULFITE</button>
  <button class="tablinksforemulsifier" onClick="openemulsifier(event, 'INS 435')">INS 435</button>
  <button class="tablinksforemulsifier" onClick="openemulsifier(event, 'INS 450(i):SODIUM ACID PYROPHOSPHATE')">INS 450(i):SODIUM ACID PYROPHOSPHATE</button>
  <button class="tablinksforemulsifier" onClick="openemulsifier(event, '472e: DATEM')">472e: DATEM</button>
  <button class="tablinksforemulsifier" onClick="openemulsifier(event, 'E322 from soya  - Soya lecithin')">E322 from soya  - Soya lecithin</button>
  <button class="tablinksforemulsifier" onClick="openemulsifier(event, 'Sodium Stearoyl-2-Lactylate')">Sodium Stearoyl-2-Lactylate</button>
  <button class="tablinksforemulsifier" onClick="openemulsifier(event, 'Di-Acetyl Tartaric Acid Esters of Mono and Diglycerides')">Di-Acetyl Tartaric Acid Esters of Mono and Diglycerides</button>
  <button class="tablinksforemulsifier" onClick="openemulsifier(event, 'E 471 : Mono and Diglycerides of Fatty')">E 471 : Mono and Diglycerides of Fatty</button>
  </div>

<div id="E 322 :SOYA LECITHIN" class="tabcontentforemulsifier">
<center><h1>E 322 :SOYA LECITHIN <h1></center>
<center><h3 style="padding: 10px; border: 2px solid red";>OTHER NAMES</h3></center>
<ul style="list-style-type: none;">
<li>Soya Lecithin</li>
</ul>
<h3>DESCRIPTION</h3>
<p>E322 is a yellow - brown substance which is usually used in liquid form,but also used in granular form.</p>
<ul style="list-style-type: none;">
<li>It is commonly found in foods as an additive, which is used to smooth out the texture of products.</li.
><li>It is a great emulsifying agent, which helps the oil and water stay together in foods. </li>
<li>So it is widely used in salad dressing,spreads,sauces,gravies and nut butters.It is a good antioxidant.</li> 
<li>It is also used as a lubricant and flavour protector.</li>
</ul>
<h3>HEALTH EFFECTS: </h3>
<p>People who are allergic to soy may experience soy lecithin side effects like;diarrhoea,loss of appetite,rashes,dizziness,weight gain, vomiting,low blood pressure and blurred vision. Soy lecithin has phytoestrogens in it, which when ingested frequently, causes cancer.And in men may cause infertility,low sperm count and testosterone imbalance.</p>
<h3>CHEMISTRY: </h3>
<p>Lecithins are composed of phosphoric acid, cholines, esters of glycerol and two fatty acids. It is also called phosphatidylcholine,any of a group of phospholipids ( phosphoglycerides)that are important in cell structure and metabolism.</p>
<h3>TOXICITY: </h3>
<ul style="list-style-type: none;">
<li>E322 has been passed by FSSAI(Food Safety and Standards Authority of India) as a safe food additive. </li>
<li>It may cause allergic reactions in certain cases.</li>
<li>This is not to the lecithin but to the remnants of protein it has been sourced from.</li>
<li>This additive may also be sourced from egg yolks, sunflower oil, cotton seeds. </li>
<li>If a person is allergic to these foods,they may react to lecithin.  </li>
</ul>
</div>

<div id="E 223 : SODIUM METABISULFITE" class="tabcontentforemulsifier">
<center><h1>E 223 : SODIUM METABISULFITE <h1></center>
<center><h3 style="padding: 10px; border: 2px solid red";>OTHER NAMES</h3></center>
<ul style="list-style-type: none;">
<li>Disodium disulfite</li>
<li>Disodium pentaoxodisulphate</li>
<li>Sodium pyrosulfite </li>
<li>Sodium disulfite</li>
</ul>
<h3>OCCURRENCE: </h3>
<ul style="list-style-type: none;">
<li>It is a White crystals or crystalline powder.</li>
<li>It is used as an antioxidant for the fruits and vegetables to prevent food spoilage and protects Vitamin C in them.</li>
<li>It is used as a preservative, which inhibits the oxidase in food and also blocks the normal physiological oxidation process of microorganisms.</li>
</ul>
<h3>HEALTH EFFECTS: </h3>
<p>It may cause asthma-like allergy.It may cause adverse effects such as diarrhoea, vomiting,headaches,nausea,breathing difficulties,irritation in skin,eyes and respiratory tract.</p>
<h3>CHEMISTRY: </h3>
<p>The chemical formula for the Sodium Metabisulfite is Na2S2O5. The molecular weight is 190.11.It is soluble in water,glycerin,slightly soluble in ethanol and insoluble in benzene. </p>
<h3>TOXICITY: </h3>
<p>EFSA concluded that the current group ADI of 0.7 mg expressed as Na2S2O5 equivalent/kg bw per day and would be re-evaluated due to the uncertainties and limitations in the database. </p>
</div>

<div id="INS 435" class="tabcontentforemulsifier">
<center><h1>INS 435 <h1></center>
<center><h3 style="padding: 10px; border: 2px solid red";>OTHER NAMES</h3></center>
<ul style="list-style-type: none;">
<li>Polyoxyethylene (20) sorbitan monostearate </li>
<li>E435</li>
<li>Polysorbate 60</li>
<li>PEG60</li>
<li>Polyoxyethylene Sorbitan Monostearate</li>
</ul>
<h3>DESCRIPTION: </h3>
<p>It is a lemon to orange coloured oily liquid or semi gel.</p>
<h3>OCCURRENCE: </h3>
<ul style="list-style-type: none;">
<li>It is found in a wide range of processed foods.</li>
<li>It is used as an emulsifier to stabilize ingredients in mixture which includes water/water- based liquids and oil together.</li>
</ul>
<h3>HEALTH EFFECTS: </h3>
<p>If the consumption of this in excessive quantities may cause diarrhoea,abdominal bloating and flatulence.It also lead to miscarriage and infertility.</p>
<h3>CHEMISTRY: </h3>
<p>Sorbitol is a sugar alcohol commonly found in fruits.The sorbitol is dehydrated to form sorbitan which is further converted into an ester by adding stearic acid.Ethylene oxide is then added which results in INS 435.</p>
<h3>TOXICITY: </h3>
<p>In high doses,it is likely to cause organ toxicity and cancer. </p>
</div>

<div id="INS 450(i):SODIUM ACID PYROPHOSPHATE" class="tabcontentforemulsifier">
<center><h1>INS 450(i):SODIUM ACID PYROPHOSPHATE<h1></center>
<center><h3 style="padding: 10px; border: 2px solid red";>OTHER NAMES</h3></center>
<ul style="list-style-type: none;">
<li>Disodium diphosphate </li>
<li>Disodium dihydrogen diphosphate</li>
<li>Disodium dihydrogen pyrophosphate</li>
<li>Disodium pyrophosphate</li>
<li>Sodium acid pyrophosphate</li>
</ul>
<h3>DESCRIPTION: </h3>
<p>INS450(i) exists as an odorless white powder.</p>
<h3>OCCURRENCE: </h3>
<ul style="list-style-type: none;">
<li>It is widely used as the leavening agent for baking bread, cookies,muffins,buns( helps it to rise during baking).</li>
<li>It is also used in canned seafood,in order to inhibit the formation of struvite crystals which is occasionally found in canned sea foods. </li>
</ul>
<h3>HEALTH EFFECTS: </h3>
<p>None known when used in foods. High concentrations of phosphates may disturb several metabolic processes as phosphate plays an important role in general metabolism. It is generally considered safe but some people may be allergic or sensitive to it.</p>
<h3>CHEMISTRY: </h3>
<p>It is insoluble in ethanol. If Sodium Acid Pyrophosphate exposed  to the environment it would hydrolyze to sodium orthophosphate. </p>
<h3>TOXICITY: </h3>
<p>In 2019,EFSA considered sodium acid pyrophosphate to be of low acute oral toxicity and there was no concern with respect to genotoxicity and carcinogenicity. Maximum Tolerable Daily Intake- 70 mg/kg.</p>
</div>

<div id="472e: DATEM" class="tabcontentforemulsifier">
<center><h1>472e: DATEM <h1></center>
<center><h3 style="padding: 10px; border: 2px solid red";>OTHER NAMES</h3></center>
<ul style="list-style-type: none;">
<li>Diacetyltartaric and fatty acid esters of glycerol </li>
<li>E472e </li>
<li>Diacetyltartaric acid esters of mono - and diglycerides (DATEM) </li>
<li>Mixed acetic acid and tartaric acid esters of mono and diglycerides of fatty acids </li>
<li>Mixed Glycerol Esters of Diacetyltartaric Acid.</li>
</ul>
<h3>DESCRIPTION: </h3>
<p>It exists as an ivory or yellow powder or granular solid.</p>
<h3>OCCURRENCE: </h3>
<ul style="list-style-type: none;">
<li>It is mainly used as a dough conditioner for baked products, especially for yeast - leavened products, bread,rusks.</li>
<li>It improves the texture and reduces the hardness in fat-reduced biscuits without the loss of taste. </li>
<li>It acts as an emulsifier ( helps to prevent oil and water mixture from separating into layers) when added to foods.</li> 
</ul>
<h3>HEALTH EFFECTS: </h3>
<p>None known.</p>
<h3>TOXICITY: </h3>
<p>Its safety as a food additive has been approved by FDA (Food and Drug Administration), EFSA ( European Food Safety Authority) and JECFA ( Joint FAO/WHO Expert Committee On Food). </p>
</div>

<div id="E322 from soya  - Soya lecithin" class="tabcontentforemulsifier">
<center><h1>E322 from soya  - Soya lecithin<h1></center>
<h3>DESCRIPTION: </h3>
<p>Emulsifier (322) is a yellow-brown substance that is a mixture of phospholipids and other non-phospholipid  compounds that are derived from soybean oil during its processing. </p>
<h3>OCCURRENCE: </h3>
<p>This is a mix of ammonium salts of phosphorylated glycerides. It is usually sourced from a mixture of plant oils and glycerol or made synthetically.</p>
<h3>HEALTH EFFECTS: </h3>
<p>It may lead to difficulty breathing vertigo, increased sweating salivation nausea and vomiting digestive disorder heart and joint pain.</p>
<h3>CHEMISTRY: </h3>
<p>Among lecithins,phosphatidylcholine is hydrolysed in choline in the cytidine-5-diphosphate-choline pathway in all cells of the body. The content of choline that can theoretically be released from phosphatidylcholine containing two linoleate groups is 13.2%.</p>
<h3>TOXICITY: </h3>	
<p>Lecithins (E 322) is an authorised food additive in the European Union (EU) according to Annex II and Annex III to Regulation (EC) No 1333/2008 on food additives, and have been previously evaluated by the Joint FAO/WHO Expert Committee on Food Additives (JECFA) in 1973 (JECFA, 1974a,b) and by the Scientific Committee on Food (SCF) in 1982 (SCF, 1982).</p>
</div>

<div id="Sodium Stearoyl-2-Lactylate" class="tabcontentforemulsifier">
<center><h1>Sodium Stearoyl-2-Lactylate<h1></center>
<h3>DESCRIPTION: </h3>
<p>It is a FDA approved food additive used to improve the mix tolerance and volume of processed foods. It is one type of a commercially available lactylate. SSL is non-toxic, biodegradable, and typically manufactured using biorenewable feedstocks.</p>
<h3>OCCURRENCE: </h3>	
<p>Sodium stearoyl lactylate is manufactured by the reaction of lactic acid and stearic acid and conversion to sodium salts.</p>
<h3>HEALTH EFFECTS: </h3>
<p>Swelling , mucus production , muscle spasms, hives rash formation once the allergen is ingested or comes in contact with the person</p>
<h3>CHEMISTRY: </h3>
<p>Chemical formula: C24H43NaO6</p>
<h3>APPEARANCE: </h3>
<p>A white or cream-colored powder with a caramel odor.</p>
<h3>TOXICITY: </h3>
<p>Not Known.</p>
</div>

<div id="Di-Acetyl Tartaric Acid Esters of Mono and Diglycerides" class="tabcontentforemulsifier">
<center><h1>Di-Acetyl Tartaric Acid Esters of Mono and Diglycerides</h1></center>
<h3>DESCRIPTION: </h3>
<p>Diacetyl tartaric acid esters of mono- and diglycerides of fatty acids, or simply DATEM, is an emulsifier used in breadmaking to strengthen the dough structure so that it can successfully expand during proofing and baking.</p>	
<h3>OCCURRENCE:</h3>
<p> Due to its anionic nature, DATEM also has the capacity to interact with gluten proteins, promoting protein aggregation.</p>
<h3>CHEMISTRY:</h3>
<ul style="list-style-type: none;">
<li>The esterification of mono- and diglycerides with tartaric and acetic acids in the presence of acetic acid anhydride.</li>
<li>The reaction of diacetyl tartaric acid in the presence of acetic acid with mono- and diglycerides. First, the diacetyl tartaric acid is produced from the reaction of diacetyl tartaric acid with acetic acid. The acetic acid generated in this reaction has to be removed by distillation. The final reaction with monoglycerides is possible once acetic acid is removed.</li>
</ul>
<h3>TOXICITY: </h3>
<ul style="list-style-type: none;">
<li>DATEM is a controlled food additive under the E-number 472. It holds a GRAS status by the FDA.</li>
<li>In the EU, DATEM (E472e) is authorized as a food additive (EC-Regulation, No. 1333/2008).</li>
</ul>
</div>

<div id="E 471 : Mono and Diglycerides of Fatty" class="tabcontentforemulsifier">
<center><h1>E 471 : Mono and Diglycerides of Fatty</h1></center>
<h3>DESCRIPTION: </h3>
<p>Mono- and diglycerides of fatty acids (E471) refers to a naturally occurring class of food additive composed of diglycerides and monoglycerides. This mixture is also sometimes referred to as partial glycerides.</p>
<h3>OCCURRENCE: </h3>
<p>Mono- and diglycerides are emulsifiers, which means they help oil and water to blend. Small quantities are often added to packaged and frozen foods to improve texture and stability, prevent oil from separating, and extend shelf life.</p>
<h3>CHEMISTRY: </h3>
<ul style="list-style-type: none;">
<li>Mono- and diglycerides are sourced through a chemical reaction that begins with a triglyceride-containing animal fat or vegetable oil. With the addition of heat and an alkaline catalyst, triglycerides rearrange into mono- and diglycerides. The result is a substance that contains a random mixture of mono-, di-, and triglycerides.</li>
<li>Next, mono- and diglycerides are separated through distillation. They may undergo further processing before they are added to your food.</li>
</ul>
<h3>TOXICITY: </h3>
<ul style="list-style-type: none;">
<li>Since 2013, the U.S. Food and Drug Administration (FDA) has been taking steps to remove artificial trans fat from all foods. This includes a ban, announced in 2015, on partially hydrogenated oils (PHOs). PHOs are the most ubiquitous source of trans fat in food. Food manufacturers have until 2018 to remove all trans fat from their products.</li> 
<li>Mono- and diglycerides contain small amounts of trans fat. They're classified as emulsifiers and not lipids, so the FDA ban doesn't apply to them. As trans fat is phased out, food companies may turn to mono- and diglycerides as low-cost alternatives.</li>
</ul>
</div>

<script>
function openemulsifier(evt, emulsifierName) 
{
  var i, tabcontentforemulsifier, tablinksforemulsifier;
  tabcontentforemulsifier = document.getElementsByClassName("tabcontentforemulsifier");
  for (i = 0; i < tabcontentforemulsifier.length; i++) 
  {
    tabcontentforemulsifier[i].style.display = "none";
  }
  tablinksforemulsifier = document.getElementsByClassName("tablinksforemulsifier");
  for (i = 0; i < tablinksforemulsifier.length; i++) 
  {
    tablinksforemulsifier[i].className = tablinksforemulsifier[i].className.replace(" active", "");
  }
  document.getElementById(emulsifierName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen12").click();
</script>
</div>

<div id="SYNTHETIC FOOD COLOURS" class="tabconten">
<center><h1>SYNTHETIC FOOD COLOURS</h1></center>
<div class="tabforsfc">
  <button class="tablinksforsfc" onClick="openSfc(event, 'Brilliant Blue FCF')" id="defaultOpen11">E133-BRILLIANT BLUE FCF</button>
  <button class="tablinksforsfc" onClick="openSfc(event, 'TARTRAZINE')">INS102-TARTRAZINE</button>
  <button class="tablinksforsfc" onClick="openSfc(event, 'SUNSET YELLOW FCF')">E110-SUNSET YELLOW FCF</button>
  <button class="tablinksforsfc" onClick="openSfc(event, 'RED NO.3')">E127 RED NO.3</button>
</div>
<div id="Brilliant Blue FCF" class="tabcontentforsfc">
<center><h1>E133 - BRILLIANT BLUE FCF</h1></center>
<h3>DESCRIPTION:</h3>
It is a synthetic organic compound used primarily as a blue colorant for processed foods.
<h3>OCCURRENCE :</h3>
It is one of the oldest FDA-approved color additives and is generally considered nontoxic and safe.
<h3>HEALTH EFFECTS:</h3>
    E122 is thought by some to worsen asthma and to cause allergic reactions in individuals allergic to aspirin (related info - aspirin in the news). When taken in combination with benzoates, E122 is also suspected of inducing hyperactivity in children. Individuals with intolerance to salicylates may find that they are intolerant to E122, due to the colouring being an azo dye.
<h3>CHEMISTRY:</h3>
    Brilliant Blue FCF -Blue 1- is an organic compound classified as a triarylmethane dye and a blue azo dye, reflecting its chemical structure. Known under various commercial names, it is a colorant for foods and other substances. It is denoted by the E number E133 and has a color index of 42090. It has the appearance of a blue powder. It is soluble in water, and the solution has a maximum absorption at about 628 nanometers.
<h3>TOXICITY:</h3>
Its ADI authorised by FAO / WHO committed is 6 mg/kg.
</div>

<div id="TARTRAZINE" class="tabcontentforsfc">
<center><h1>INS102 - TARTRAZINE</h1></center>
<h3>DESCRIPTION:</h3>
Widely used yellow/orange colour.
<h3>OCCURRENCE:</h3>
    Tartrazine-E102(41%) was the most used synthetic food colour among both confectioneries and beverages.Products containing tartrazine commonly include processed commercial foods that have an artificial yellow or green color, or that consumers expect to be brown or creamy looking. It has been frequently used in the bright yellow coloring of imitation lemon filling in baked goods.
<h2>HEALTH EFFECTS:</h2>
<ul style="list-style-type: none;"><li>Consumers said , tartrazine may cause symptoms similar to an allergic reaction, including hives and swelling, but the reaction is not considered a true allergy.</li>
<li>Tartrazine was also thought to be associated with the onset of asthma attacks, but recent scientific evidence indicated that tartrazine is an unlikely cause of asthma symptoms.</li></ul>
<h3>CHEMISTRY:</h3>
<ul style="list-style-type: none;"><li>Tartrazine is water-soluble and has a maximum absorbance in an aqueous solution at 425 nm.</li>
    <li>It is one of the oldest known members of the pyrazolone family of dyes.</li></ul>
<h3>TOXICITY:</h3>
Its ADI authorised by FAO / WHO committed is 7.5mg/kg.
</div>

<div id="SUNSET YELLOW FCF" class="tabcontentforsfc">
<center><h1>E110 - SUNSET YELLOW FCF</h1></center>
<h3>DESCRIPTION:</h3>
Reddish-yellow to reddish-brown powder or solid.
<h3>OCCURENCE:</h3>
<ul style="list-style-type: none;"><li>E110 is a food additive approved by the European Union (EU).</li>
<li>It is used as a synthetic colouring agent in food and drink products.</li>
<li>The common names for E110 are sunset yellow FCF and orange yellow S.</li>
<li>E110 is a yellow, synthetic coal tar food colouring that is highly soluble in water.</li>
<li>It is a synthetic azo dye and is generally used in fermented foods that require treatment by heat.</li></ul>
<h3>HEALTH EFFECTS:</h3>
     <ul style="list-style-type: none;"><li>The E110 colorant itself may lead to allergic reactions, especially in people with aspirin intolerance.</li>
              <li>Other side effects of E110 may include nausea, hives (rash), nasal congestion, rhinitis (runny nose), kidney swelling and chromosomal damage.</li>
              <li>The E110 food additive is often a cause of indigestion, vomiting, stomach pain and food rejection.</li></ul>
<h3>CHEMISTRY:</h3>
<ul style="list-style-type: none;"><li>It is an organic compound.Decomposes without melting when heated to 390 &deg;C.</li>
<li>Slightly soluble in ethanol; reddish-orange solution in concentrated sulfuric acid, changing to yellow in dilution.</li>
<li>Sunset Yellow FCF consists essentially of disodium 2-hydroxy-1-(4-sulfonatophenyl azo) naphthalene-6-sulfonate and subsidiary colouring matters together with sodium chloride and/or sodium sulphate as the principal uncoloured components.</li>
<li>Sunset Yellow FCF is manufactured by diazotizing 4-aminobenzenesulfonic acid using hydrochloric acid and sodium nitrite or sulphuric acid and sodium nitrite.</li>
<li>The diazo compound is coupled with 6-hydroxy-2-naphthalene-sulphonic acid.</li>
<li>The dye is isolated as the sodium salt and dried.; Sunset Yellow FCF is described as the sodium salt.</li>
<li>Calcium and potassium salt are also permitted.</li></ul>
<h3>TOXICITY:</h3>
<p>Not given.</p>
</div>

<div id="RED NO.3" class="tabcontentforsfc">
<center><h1>E127 RED NO.3</h1></center>
<h3>OCCURENCE:</h3>
    <ul style="list-style-type: none;">
	      <li>It is a pink dye.</li>
	      <li>Erythrosine is commonly used in sweets such as some candies and popsicles, and even more widely used in cake-decorating gels.</li>
              <li>It is also used to color pistachio shells.E127 is a food additive approved by the European Union (EU).</li>
              <li>It is used as a synthetic colouring agent in food and drink products, as well as photography.</li>
              <li>The common name for E127 is erythrosine.</li>
              <li>E127 is a pink / red colouring that contains iodine and is highly soluble in water.</li>
              <li>It can also be used in dentistry, as a plaque disclosing agent, and in photography, as a printing ink.</li>
<h2>HEALTH EFFECTS:</h2>
<ul style="list-style-type: none;"><li>Increased hyperactivity has been reported in a few cases, as well as a possible connection with mutagenicity.</li>
<li>Erythrosine causes an increased photosensitivity in people with sensitivity to sunlight.</li>
<li>In high concentrations erythrosine interferes with iodine metabolism.</li>
<li>However, these concentrations cannot be reached through the consumption of food.</li></ul>
<h3>CHEMISTRY:</h3>
          <ul style="list-style-type: none;"><li>It is the disodium salt of 2,4,5,7-tetraiodofluorescein.</li>
              <li>Its maximum absorbance is at 530 nm in an aqueous solution, and it is subject to photodegradation.</li>
              <li>Water, sodium chloride and/or sodium sulphate are the principal uncoloured components.</li>
              <li>Erythrosine is manufactured by iodination of fluorescein, the condensation product of resorcinol and phthalic anhydride; Erythrosine is described as the sodium salt.</li>
              <li>Calcium and potassium salt are also permitted.</li></ul>
<h3>TOXICITY:</h3>
<p>Not given.</p>
</div> 

<script>
function openSfc(evt, SfcName)
{
  var i, tabcontentforsfc, tablinksforsfc;
  tabcontentforsfc = document.getElementsByClassName("tabcontentforsfc");
  for (i = 0; i < tabcontentforsfc.length; i++)
  {
    tabcontentforsfc[i].style.display = "none";
  }
  tablinksforsfc = document.getElementsByClassName("tablinksforsfc");
  for (i = 0; i < tablinksforsfc.length; i++)
  {
    tablinksforsfc[i].className = tablinksforsfc[i].className.replace(" active", "");
  }
  document.getElementById(SfcName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen11").click();
</script>
	  </div>

<div id="SHORT SUMMARY" class="tabconten">
<center>
<h1>SHORT SUMMARY OF THE CONETENT</h1>
<video controls="controls" width="800" height="500">
<source src="video/summary.mp4" type="video/mp4">
<source src="video/summary.ogg" type="video/ogg">
</video>
</center>
</div>
	
	</table>
	<script>
	function openADDITIVES(evt, TabName)
	{
	var a, tabconten, tablinkAd;
	tabconten = document.getElementsByClassName("tabconten"); 
	for (a = 0; a < tabconten.length; a++){
        tabconten[a].style.display = "none";}
	tablinkAd = document.getElementsByClassName("tablinkAd");
	for (a = 0; a < tablinkAd.length; a++){
 	tablinkAd[a].className = tablinkAd[a].className.replace(" active", ""); }
	document.getElementById(TabName).style.display = "block";
	evt.currentTarget.className += " active";
	}
	document.getElementById("defaultOpen3").click();
	</script>
</div>
</body>