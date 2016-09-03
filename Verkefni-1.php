	Grunnatriði og málskipan - Verkefni 1 - VEF2A3U
	
	1.	Hver er munurinn á echo() og print()
	Lítill, en print tekur einungis eina breytu á meðan echo getur tekið margar, echo er einnig örlítið sneggri.
	
	2.	Hver er munurinn á einföldum gæsalöppum og tvöföldum, sýndu mér kóðadæmi sem sýnir mismunandi niðurstöðu.
	Einföld gæsalöpp skrifar bókstaflega það sem er innan um þær á meðan tvöföld skrifar út með breytum, td.
	
	$dæmi = "Halló heimur";
	
	echo "Skrifaðu $dæmi"; Þetta mun skrifa út: Skrifaðu Halló heimur
	echo 'Skrifaðu $dæmi'; Þetta mun skrifa út: Skrifaðu $dæmi
	
	3.	Hvað er $GLOBALS, hvernig virkar það, komdu með dæmi.
	Breyta sem nær yfir allan kóðann og getur verið sótt hvenar sem er hvar sem hann er, almennt er mælt með því að komast hjá því að nota $GLOBALS, en dæmi:
	
	prufa test() {
	$dæmi = "Halló heimur";
	
	echo '$dæmi með global: ' . $GLOBALS["$dæmi"]; Þetta mun skrifa út: $dæmi með global: Global heimur
	echo '$dæmi án global: ' . $dæmi;			   Þetta mun skrifa út: $dæmi án global: Halló heimur
	}
	
	$dæmi = "Global heimur";
	
	4.	Hvenar myndir þú nota === virkjann fremur en ==, komdu með dæmi
	Þegar ég þyrfti að athuga hvort breyturnar eru ekki bara jafnar, heldur af sömu gerð
	
	("strengur" === "strengur")
	
	5.	printf() er sniðugt af tveimur ástæðum hverjar eru þær? komdu einnig með kóðadæmi.
	Því það getur tekið inn staðgengla breytu og einni nýtt allskyns auka rök til að breyta útskrift.
	
	$number = 123;
	printf("With 2 decimals: %1\$.2f
	<br>With no decimals: %1\$u",$number);
	prentar þá út:
	With 2 decimals: 123.00 (.2f gefur 2 auka tölur, dæmi um auka rök fyrir útskrift)
	With no decimals: 123
	
	6.	Hvað skrifar eftirfarandi kóði?
	$a = 1;
	$b = $a++;
	$c = ++$a;
	echo $a . $b . $c;
	
	313, ef við tökum þetta línu fyrir línu:
	Lína 1: $a = 1; a = 1
	Lína 2: $b = $a++; sem þýðir b er þaða sama og a, en bætir SVO 1 við, sem gerir a = 2 núna
	Lína 3: $c = ++$a; núna er bætt 1 við ÁÐUR sem gerir a að 3 OG c að þrem, því einn bætist við 2 sem eru gildi a og c, sem gefur okkur 313
	
	7.	Gefið er eftirfarandi array:
	$array = array("a","b",array("d","e"),"f");
	
	Hvaða skipun má gefa til að fá fjölda stakanna í $array, að stökunum í innra fylkinu
	meðtöldum?
	
	var_dump($array); birtir allt sem er inní $array'inu
	
	8.	Búðu til nefnt fylki (Associative array) með eftirfarandi borgum og löndum; Japan -Tokyo, Mexico -
	Mexico City, USA - New York City, India - Mumbai, Korea - Seoul, China - Shanghai. Notið foreach til að
	birta Lönd og borgir.
	
	<?php
	$borgir = array("Japan" => "Tokyo", "Mexico" => "Mexico City", "USA" => "New York City", 
				"India" => "Mumbai", "Korea" => "Seoul", "China" => "Shanghai");
	foreach($borgir as $x => $x_value) {
		echo "Höfuðborg " . $x . " er " . $x_value;
		echo "<br>";
	};
	?>
	
	9.	Notaðu echo og list() til að birta á skjá eftrifarandi gildi úr $colors.
	$colors = array("red","blue","green");
	
	<?php
	$colors = array("red","blue","green");

	foreach($colors as $p){
		echo '<li>'.$p.'</li>';
	};
	?>
	
	10.	 Gefið er fylkið $states = array("Texas", "Ohio"); Bættu við aftast New York og bættu við fremst
	California. (notaðu innbyggt php fall til að ná þessu fram)
	
	<?php
	$states = array('Texas','Ohio');

	array_unshift($states, "California"); //array_unishift bætir við fremst

	array_push($states, "New York");	  //array_push bætir við aftast

	print_r($states);

	?>
	
	11.	Notaðu shuffle() fallið á fylkið $states og birtu útkomuna
	
	<?php
	$states = array('Texas','Ohio');

	array_unshift($states, "California");

	array_push($states, "New York");

	shuffle($states);					//Shuffle hrærir upp í fylkinu í hvert skipti sem php'ið er keyrt
	foreach ($states as $states) {
		echo "$states ";
	}
	?>
	
	12.	Birtu í töfluformi (html) eftirfarandi gögn úr fylkinu $products.
	$products = array( array ( “08:10”, “10:30”, “13:15”), array ( “GSÖ2B2U”, “VSH2B2U”,
	“FOR2B2U”), array ( “GUS”, “GJG”, “GRL”) ); 
	
	<?php
	$products = array( array ( "08:10", "10:30", "13:15"), array ( "GSÖ2B2U", "VSH2B2U",
		"FOR2B2U"), array ( "GUS", "GJG", "GRL") );


	 

	echo "<table border=1 cellspacing=1 cellpading=0>";

	foreach ($products as $p) {
		echo "<tr></tr>";
		
		foreach($p as $x){
			echo "<td>". $x . "</td>";
		};
		
	};

	echo "</table>";
	?>
	
	13.	Gefið er eftirfarandi $customers fylki sem geymir önnur fylki (2d array):
		$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
		$customers[] = array("Jesse James", "jesse@example.net", "818-999-9999");
		$customers[] = array("Donald Duck", "donald@example.org", "212-999-9999");
		Notaðu foreach og vprintf() til að birta öll gögnin á eftirfarandi sniði:
		<p>
		Name: Jason Gilmore<br />
		E-mail: jason@example.com <br />
		Phone: 614-999-9999
		</p>
		
	<?php

	$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
	$customers[] = array("Jesse James", "jesse@example.net", "818-999-9999");
	$customers[] = array("Donald Duck", "donald@example.org", "212-999-9999");


	foreach ($customers as $c ){
	
		vprintf("Name: %s </br>"."E-Mail: %s</br>". "Phone: %s</br></br>"  ,$c);
	
	};
	?>
	
	14.	 Hver er útkoman með að nota a) sort() fallið og hinsvegar natcasesort() á $pic?
	$pic = array("pic2.jpg", "PIC10.jpg", "pic20.jpg", "pic1.jpg");
	
	ef við notum bara sort() þá til dæmis verður pic2 í sætinu fyrir ofan pic20, en ef við notum natcasesort() tekur það til íhugunar tveggja stafa tölur, en hitt gerir það ekki, fyrir hinu er 1 og 10 hlið við hlið

		
	15.	Hvað er HTTP, hvað þýðir að það sé stateless (útskýrðu).
	
	HTTP stendur fyrir Hyper-Text Transfer Protocol, það að það sé stateless þýðir að um leið og rofið er við tengingu þá hverfur öll tenging.
	
	16.	 Útskýrðu eftirfarandi URL (samsetningu) útfrá protocol og domains; http://www.tskoli.is
	
	http = Hyper-Text Transfer Protocol, www = World Wide Web, tskoli = nafn vefsíðunnar, .is = segir til um hvar vefsíðan er hýst
	
	17.	Hvað er server-side scripting? Útskýrðu ferlið.
	
	Það þýðir að allt sem gert er og birt er gert server side, ekki notanda/browser side, sem til dæmis JavaScript nýtir sér, þetta þýðir að browserinn fær sent hvað skal birta frá servernum og ekkert
	er gert frá hlið notanda annað en að birta hluti.
	