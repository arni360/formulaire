<?php
$form = $_GET['form']; 
echo "The form is sent <Br> You'll be redirected after 3sec";
 $conn = new MongoClient('mongodb://arni360:divine@ds051007.mongolab.com:51007/formulaire');

header( "refresh:3;url=formulaire.php?form=".$form."&save=true" );
 
 $db = $conn->formulaire;


   $collection = $db->formulaire;

   $query = array( 'number' => $form);
   $request = array(
	'$set' => array( 'name' => $_POST["name"] ));
   //UPDATE NAME
   $collection->update( $query, $request );


   //array drawing
   $draw=array();
  if(isset($_POST["drawing"])){
  	
	$first= explode("_",$_POST["drawing"])[0];
		$draw[0]=intval($first);
		$compt=1;
	for ($i = 1; $i <= 4; $i++) {
		if($compt==$first){

			$compt=$compt+1;
		}
    $draw[$i]=$compt;
    $compt=$compt+1;
}

  }
	$request = array(
	'$set' => array( 'drawing' =>$draw ));
	 //UPDATE DRAWING
   $collection->update( $query, $request );

   

   $request = array(
	'$set' => array( 'pdcheck' =>$_POST["prod_distri"] ));
   //UPDATE PORD DISTRi
   $collection->update( $query, $request );



//Q1->20
for($i=1;$i<=20;$i++){


 $request = array(
   '$set' => array( 'q'.($i) =>$_POST["q".($i)] ));
   //UPDATE PORD DISTRi
   $collection->update( $query, $request );

}
//Q21a->30a




function dai($nom,$col,$que)
{
    //array drawing
   $list=array();

  if(isset($_POST[$nom])){
   
   $first= explode("_",$_POST[$nom])[0];
      $list[0]=$first;
   switch($first){

      case "Domination":
      $list[1]="Adaptation";
      $list[2]="Innovation";
      break;
      case "Adaptation":
       $list[1]="Domination";
      $list[2]="Innovation";
      break;
      case "Innovation":

      $list[1]="Domination";
      $list[2]="Adaptation";
      break;

   }
}

$request = array(
   '$set' => array( $nom =>$list ));
    //UPDATE DRAWING
    $col->update( $que, $request );
  }


 dai("q21a",$collection,$query);
 dai("q22a",$collection,$query);
 dai("q23a",$collection,$query);
 dai("q24a",$collection,$query);
 dai("q25a",$collection,$query);
 dai("q26a",$collection,$query);
 dai("q27a",$collection,$query);
 dai("q28a",$collection,$query);
 dai("q29a",$collection,$query);
 dai("q30a",$collection,$query);



//Q21b->30b
// $request = array(
//   '$set' => array( 'q21b' =>$_POST["q21b"] ));
   //UPDATE PORD DISTRi
 //  $collection->update( $query, $request );

for($i=1;$i<=10;$i++){


 $request = array(
   '$set' => array( 'q'.(20+$i).'b' =>$_POST["q".(20+$i)."b"] ));
   //UPDATE PORD DISTRi
   $collection->update( $query, $request );


$request = array(
   '$set' => array( 'q'.(20+$i).'c' =>$_POST["q".(20+$i)."c"] ));
   //UPDATE PORD DISTRi
   $collection->update( $query, $request );


$request = array(
   '$set' => array( 'q'.(20+$i).'d' =>$_POST["q".(20+$i)."d"] ));
   //UPDATE PORD DISTRi
   $collection->update( $query, $request );


}

$request = array(
   '$set' => array( 'q31a' =>$_POST["q31a"] ));
   //UPDATE PORD DISTRi
   $collection->update( $query, $request );
$request = array(
   '$set' => array( 'q31b' =>$_POST["q31b"] ));
   //UPDATE PORD DISTRi
   $collection->update( $query, $request );

//Q1->20
for($i=32;$i<=35;$i++){


 $request = array(
   '$set' => array( 'q'.($i) =>$_POST["q".($i)] ));
   //UPDATE PORD DISTRi
   $collection->update( $query, $request );

}
?>