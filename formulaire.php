<head>
  <link rel="stylesheet" href="css/normalize.css">
	<link href="css/foundation.css" rel="stylesheet">
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/traitement.js"></script>
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.abide.js"></script>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$save=false;
$form = $_GET['form']; 
if(!is_null($_GET['save'])){
$save="disabled";

}
$setDoc = array('number' => $form);
try {
  // open connection to MongoDB server
  $conn = new MongoClient('mongodb://arni360:divine@ds051007.mongolab.com:51007/formulaire');


 
   // select a database
   $db = $conn->formulaire;


   $collection = $db->formulaire;

   $cursor = $collection->find($setDoc);
   $list =  array();
   $i=0;
  
   // iterate cursor to display title of documents
   foreach ($cursor as $document) {
    
   	foreach ($document as $x=>$x_value) {
     $list[$i]=$x_value;
      $i= $i+1;
  }

   }


   //pdcheck
   $pdcheck_selected_radio = $list[4];

  if ($pdcheck_selected_radio == 'Yes') {

  $yes_pdcheck = 'checked';
  $no_pdcheck = 'unchecked';
  }
else if ($pdcheck_selected_radio == 'No') {

$no_pdcheck = 'checked';
 $yes_pdcheck = 'unchecked';

}


 //q21b
   $q21b_selected_radio = $list[19];

  if ($q21b_selected_radio == 'Rationnal') {

  $yes_q21b = 'checked';
  $no_q21b = 'unchecked';
  }
else if ($q21b_selected_radio == 'Intuitive') {

$no_q21b = 'checked';
 $yes_q21b = 'unchecked';

}

//q22b
   $q22b_selected_radio = $list[23];

  if ($q22b_selected_radio == 'Rationnal') {

  $yes_q22b = 'checked';
  $no_q22b = 'unchecked';
  }
else if ($q22b_selected_radio == 'Intuitive') {

$no_q22b = 'checked';
 $yes_q22b = 'unchecked';

}

//q23b
   $q23b_selected_radio = $list[27];

  if ($q23b_selected_radio == 'Rationnal') {

  $yes_q23b = 'checked';
  $no_q23b = 'unchecked';
  }
else if ($q23b_selected_radio == 'Intuitive') {

$no_q23b = 'checked';
 $yes_q23b = 'unchecked';

}
//q24b
   $q24b_selected_radio = $list[31];

  if ($q24b_selected_radio == 'Rationnal') {

  $yes_q24b = 'checked';
  $no_q24b = 'unchecked';
  }
else if ($q24b_selected_radio == 'Intuitive') {

$no_q24b = 'checked';
 $yes_q24b = 'unchecked';

}
//q25b
   $q25b_selected_radio = $list[35];

  if ($q25b_selected_radio == 'Rationnal') {

  $yes_q25b = 'checked';
  $no_q25b = 'unchecked';
  }
else if ($q25b_selected_radio == 'Intuitive') {

$no_q25b = 'checked';
 $yes_q25b = 'unchecked';

}
//q26b
   $q26b_selected_radio = $list[39];

  if ($q26b_selected_radio == 'Rationnal') {

  $yes_q26b = 'checked';
  $no_q26b = 'unchecked';
  }
else if ($q26b_selected_radio == 'Intuitive') {

$no_q26b = 'checked';
 $yes_q26b = 'unchecked';

}
//q27b
   $q27b_selected_radio = $list[43];

  if ($q27b_selected_radio == 'Rationnal') {

  $yes_q27b = 'checked';
  $no_q27b = 'unchecked';
  }
else if ($q27b_selected_radio == 'Intuitive') {

$no_q27b = 'checked';
 $yes_q27b = 'unchecked';

}
//q28b
   $q28b_selected_radio = $list[47];

  if ($q28b_selected_radio == 'Rationnal') {

  $yes_q28b = 'checked';
  $no_q28b = 'unchecked';
  }
else if ($q28b_selected_radio == 'Intuitive') {

$no_q28b = 'checked';
 $yes_q28b = 'unchecked';

}
//q29b
   $q29b_selected_radio = $list[51];

  if ($q29b_selected_radio == 'Rationnal') {

  $yes_q29b = 'checked';
  $no_q29b = 'unchecked';
  }
else if ($q29b_selected_radio == 'Intuitive') {

$no_q29b = 'checked';
 $yes_q29b = 'unchecked';

}
//q30b
   $q30b_selected_radio = $list[56];
  if ($q30b_selected_radio == 'Rationnal') {

  $yes_q30b = 'checked';
  $no_q30b = 'unchecked';
  }
else if ($q30b_selected_radio == 'Intuitive') {

$no_q30b = 'checked';
 $yes_q30b = 'unchecked';

}



  // disconnect from server
  $conn->close();
} catch (MongoConnectionException $e) {
  die('Error connecting to MongoDB server');
} catch (MongoException $e) {
  die('Error: ' . $e->getMessage());
}

$url="envoi.php?form=".$form;
?>
</head>
<FORM method="POST" action="<?php echo $url ?>" accept-charset="ISO-8859-1" data-abides>


<TABLE BORDER=0>

   
      
    
  </br>
 <div class="row">
  <p style="text-indent: 5em;">Introduction :
        </p>
    <div class="large-6 columns">
      <label >Name of the company ?
        <input type="text" name="name"  id="name" placeholder="Name" value= "<?php echo $list[2] ?>" <?PHP print  $save; ?> />
      </label>
    </div>
    <div class="large-6 columns">
      <label>Based on the drawing, which stage best defines your project status?
        <select name="drawing"  <?PHP print  $save; ?>>
    <OPTION VALUE="<?php echo $list[1][0] ?>"><?php echo $list[1][0] ?></OPTION>
		<OPTION VALUE="<?php echo $list[1][1] ?>"><?php echo $list[1][1] ?></OPTION>
		<OPTION VALUE="<?php echo $list[1][2] ?>"><?php echo $list[1][2] ?></OPTION>
		<OPTION VALUE="<?php echo $list[1][3] ?>"><?php echo $list[1][3] ?></OPTION>
		<OPTION VALUE="<?php echo $list[1][4] ?>"><?php echo $list[1][4] ?></OPTION>
        </select>
      </label>
   
  </div>
  </div>
  </br>
  <div class="row">
  <div class="large-12 columns">
      <label>Is the production and distribution of a a physical good part of the activity we will analyze together?</label>
      <input type="radio" name="prod_distri" value="Yes" id="prod_distri_Yes" <?PHP print  $yes_pdcheck; ?>  <?PHP print  $save; ?>><label for="pokemonRed">Yes</label>
      <input type="radio" name="prod_distri" value="No" id="prod_distri_No" <?PHP print  $no_pdcheck; ?>  <?PHP print  $save; ?>><label for="pokemonBlue">No</label>
    </div>
  </div>
</TABLE>
</br>
 
        </br>
<TABLE BORDER=0>
<div class="row">
  <p style="text-indent: 5em;">Business Footprint :
        </p>
    <div class="large-12 columns">
      <label>Q1: In one sentence, describe your service and the market need it fulfills
        <textarea placeholder="Description" name="q1"   <?PHP print  $save; ?>><?php echo $list[5] ?></textarea>
      </label>
    </div>
  </div>
  </br>
<div class="row">
    <div class="large-12 columns">
      <label>Q2: In one sentence, formulate your vision, i.e. the Why you really want to offer this?
        <textarea placeholder="Description" name="q2"  <?PHP print  $save; ?>><?php echo $list[16] ?></textarea>
      </label>
    </div>
  </div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q3: Unique value propositions - write one sentence you would like your users to think about you; and another sentence you woud like your clients to think about you
        <textarea placeholder="Description" name="q3" <?PHP print  $save; ?>><?php echo $list[54] ?></textarea>
      </label>
    </div>
  </div>
  </br>
  <div class="row">
    <div class="large-12 columns">
      <label>Q4: What are the next milestones to grow your project, and when should they be completed?
        <textarea placeholder="Description" name="q4" <?PHP print  $save; ?>><?php echo $list[65] ?></textarea>
      </label>
    </div>
  </div>
  </br>
  <div class="row">
    <div class="large-12 columns">
      <label>Q5: Quality wised, which criteria is key to the success of your project?
        <textarea placeholder="Description"  name="q5" <?PHP print  $save; ?>><?php echo $list[66] ?></textarea>
      </label>
    </div>
  </div>
  </br>
  <div class="row">
    <div class="large-12 columns">
      <label>Q6: How many monthly active users do you have today and what is the growth over the past 3 months? How many monthly active clients do you have today and what is the growth over the past 3 months?
        <textarea placeholder="Description" name="q6"  <?PHP print  $save; ?>><?php echo $list[67] ?></textarea>
      </label>
    </div>
  </div>
  </br>
  <div class="row">
    <div class="large-12 columns">
      <label>Q7: How can you reduce your efforts (human, financial or technical) while still satisfying your users, customers, investors and your team?
        <textarea placeholder="Description" name="q7" <?PHP print  $save; ?>><?php echo $list[68] ?></textarea>
      </label>
    </div>
  </div>
  </br>
  <div class="row">
    <div class="large-12 columns">
      <label>Q8: What aspects of your project are you ready to change to improve, and which one will you never change?
        <textarea placeholder="Description" name="q8" <?PHP print  $save; ?>><?php echo $list[69] ?></textarea>
      </label>
    </div>
  </div>
  </br>
  <div class="row">
    <div class="large-12 columns">
      <label>Q9: Why is your team the best to deliver your mission? What do you miss (if anything)?
        <textarea placeholder="Description" name="q9" <?PHP print  $save; ?>><?php echo $list[70] ?></textarea>
      </label>
    </div>
  </div>
  </br>
  <div class="row">
    <div class="large-12 columns">
      <label>Q10: Looking at your finance, do you have what it takes to achieve your objectives? Otherwise, what do you need to do what?
        <textarea placeholder="Description" name="q10" <?PHP print  $save; ?>><?php echo $list[6] ?></textarea>
      </label>
    </div>
  </div>
</TABLE>
</br>

        </br>
<TABLE BORDER=0>
<div class="row">
  <p style="text-indent: 5em;">Market environment analysis :
        </p>
    <div class="large-12 columns">
      <label>Q11: From an economic and competitive stand point, what is the main strength of the market in which you operate?
        <textarea placeholder="Description" name="q11" <?PHP print  $save; ?>><?php echo $list[7] ?></textarea>
      </label>
    </div>
  </div>
  </br>
<div class="row">
    <div class="large-12 columns">
      <label>Q12: From an economic and competitive stand point, what is the main weakness of the market in which you operate?
        <textarea placeholder="Description" name="q12" <?PHP print  $save; ?>><?php echo $list[8] ?></textarea>
      </label>
    </div>
  </div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q13: What is the main strength of the social and user experience trends in your market environment?
        <textarea placeholder="Description" name="q13" <?PHP print  $save; ?>><?php echo $list[9] ?></textarea>
      </label>
    </div>
  </div>
  </br>
  <div class="row">
    <div class="large-12 columns">
      <label>Q14: What is the main weakness of the social and user experience trends in your market environment?
        <textarea placeholder="Description" name="q14" <?PHP print  $save; ?>><?php echo $list[10] ?></textarea>
      </label>
    </div>
  </div>
  </br>
  <div class="row">
    <div class="large-12 columns">
      <label>Q15: What is the main strength of your legal and political market environment?
        <textarea placeholder="Description" name="q15" <?PHP print  $save; ?>><?php echo $list[11] ?></textarea>
      </label>
    </div>
  </div>
  </br>
  <div class="row">
    <div class="large-12 columns">
      <label>Q16: What is the main weakness of your legal and political market environment?
        <textarea placeholder="Description " name="q16" <?PHP print  $save; ?>><?php echo $list[12] ?></textarea>
      </label>
    </div>
  </div>
  </br>
  <div class="row">
    <div class="large-12 columns">
      <label>Q17: What is the main strength of the technology & system environment in your market?
        <textarea placeholder="Description" name="q17" <?PHP print  $save; ?>><?php echo $list[13] ?></textarea>
      </label>
    </div>
  </div>
  </br>
  <div class="row">
    <div class="large-12 columns">
      <label>Q18: What is the main weakness of the technology & system environment in your market?
        <textarea placeholder="Description" name="q18" <?PHP print  $save; ?>><?php echo $list[14] ?></textarea>
      </label>
    </div>
  </div>
  </br>
  <div class="row">
    <div class="large-12 columns">
      <label>Q19: Based on the list of strengths you identified, what is your main success factor?
        <textarea placeholder="Description" name="q19" <?PHP print  $save; ?>><?php echo $list[15] ?></textarea>
      </label>
    </div>
  </div>
  </br>
  <div class="row">
    <div class="large-12 columns">
      <label>Q20: Based on the list of weaknesses you identified, what is your main risk?
        <textarea placeholder="Description" name="q20" <?PHP print  $save; ?>><?php echo $list[17] ?></textarea>
      </label>
    </div>
  </div>
  </br>
</TABLE>




        </br>
<TABLE BORDER=0>
<div class="row">
  <p style="text-indent: 5em;">Strategies and actions :
        </p>
    <div class="large-12 columns">
      <label>Q21a: Which of the following best describes the market your project fits in ? : 
        <abbr title="llittle to no differentiation between services, everyone trying to be the best in what they do, and the price might well be the main decision factor"><b>Domination</b></abbr> , 
        <abbr title="differentiation through short term competitive advantage that requirest the launch of new features regularly, but no real disruption"><b>Adaptation</b></abbr> 
        , <abbr title="there is a market opportunity and a proper timing for a disruption that will meet client expectations"><b>Innovation</b></abbr> .
        <select <?PHP print  $save; ?> name="q21a">
          <OPTION VALUE="<?php echo $list[18][0] ?>"><?php echo $list[18][0] ?></OPTION>
          <OPTION VALUE="<?php echo $list[18][1] ?>"><?php echo $list[18][1] ?></OPTION>
          <OPTION VALUE="<?php echo $list[18][2] ?>"><?php echo $list[18][2] ?></OPTION>
        </select>
      </label>
   </div>
  </div>
</br>
<div class="row">
  <div class="large-12 columns">
      <label>Q21b: Is your previous answer based on facts (rational) or intuition only (intuitive)?</label>
      <input type="radio" name="q21b" value="Rationnal" id="q21br"  <?PHP print  $yes_q21b; ?> <?PHP print  $save; ?>><label for="Rationnal">Rationnal</label>
      <input type="radio" name="q21b" value="Intuitive" id="q21bi" <?PHP print  $no_q21b; ?>  <?PHP print  $save; ?>><label for="Intuitive">Intuitive</label>
    </div>
    </div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q21c: If any...What action should you execute now to better understand your market?
        <textarea placeholder="Description" name="q21c" <?PHP print  $save; ?>><?php echo $list[20] ?></textarea>
      </label>
    </div>
  </div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q21d: When should this action be complete?
         <input type="date" name="q21d"  id="date" placeholder="yyyy-mm-dd" value= "<?php echo $list[21] ?>" <?PHP print  $save; ?> />
      </label>
    </div>

  </div>
</br>

<div class="row">
    <div class="large-12 columns">
      <label>Q22a: What best describes your product/service strategy ? : 
        <abbr title=" do things better, i.e optimize process for the greater quality at the lowest price"><b>Domination</b></abbr> , 
        <abbr title="you need to adjust your service offerings due to a change in your organization or on the market"><b>Adaptation</b></abbr> 
        , <abbr title="you need to create or co-create a new product/service to fulfill a market opportunity that none esle is fulfilling"><b>Innovation</b></abbr> .
        <select <?PHP print  $save; ?> name="q22a">
          <OPTION VALUE="<?php echo $list[22][0] ?>"><?php echo $list[22][0] ?></OPTION>
          <OPTION VALUE="<?php echo $list[22][1] ?>"><?php echo $list[22][1] ?></OPTION>
          <OPTION VALUE="<?php echo $list[22][2] ?>"><?php echo $list[22][2] ?></OPTION>
        </select>
      </label>
   
  </div>
 </div>
</br>
<div class="row">
  <div class="large-12 columns">
      <label>Q22b: Is your previous answer based on facts (rational) or intuition only (intuitive)?</label>
      <input type="radio" name="q22b" value="Rationnal" id="q22br" <?PHP print  $save; ?>  <?PHP print  $yes_q22b; ?>><label for="Rationnal">Rationnal</label>
      <input type="radio" name="q22b" value="Intuitive" id="q22bi" <?PHP print  $save; ?>  <?PHP print  $no_q22b; ?>><label for="Intuitive">Intuitive</label>
    </div>
</div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q22c: If any...What action should you execute now to be aligned with your product strategy?
        <textarea placeholder="Description" name="q22c"<?PHP print  $save; ?>><?php echo $list[24] ?></textarea>
      </label>
    </div>
</div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q22d: When should this action be complete?
         <input type="date" name="q22d"  id="date" placeholder="yyyy-mm-dd" value= "<?php echo $list[25] ?>" <?PHP print  $save; ?>/>
      </label>
    </div>
  </div>
</div>
</br>
<div class="row">

    <div class="large-12 columns">
      <label>Q23a: What best describes your monetization and sales strategy?:
        <abbr title=" focusing on optimizing existing approaches and processes based on current practices in this sector"><b>Domination</b></abbr> , 
        <abbr title="you must adjust the approach to the changing needs of the market"><b>Adaptation</b></abbr> 
        , <abbr title=" you need to create a new approach, breaking with current industry practices"><b>Innovation</b></abbr> .
        <select <?PHP print  $save; ?> name="q23a">
        <OPTION VALUE="<?php echo $list[26][0] ?>"><?php echo $list[26][0] ?></OPTION>
          <OPTION VALUE="<?php echo $list[26][1] ?>"><?php echo $list[26][1] ?></OPTION>
          <OPTION VALUE="<?php echo $list[26][2] ?>"><?php echo $list[26][2] ?></OPTION>
        </select>
      </label>
   
  </div>
</div>
</br>
<div class="row">
  <div class="large-12 columns">
      <label>Q23b: Is your previous answer based on facts (rational) or intuition only (intuitive)?</label>
      <input type="radio" name="q23b" value="Rationnal" id="q23br"  <?PHP print  $save;?>  <?PHP print  $yes_q23b; ?> ><label for="Rationnal">Rationnal</label>
      <input type="radio" name="q23b" value="Intuitive" id="q23bi" <?PHP print  $save;?>  <?PHP print  $no_q23b; ?>><label for="Intuitive" >Intuitive</label>
    </div>
</div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q23c: If any...What action should you execute now to be aligned with your monetization and sales strategy?
        <textarea placeholder="Description" name="q23c" <?PHP print  $save; ?>><?php echo $list[28] ?></textarea>
      </label>
    </div>
</div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q23d: When should this action be complete?
         <input type="date" name="q23d"  id="date" placeholder="yyyy-mm-dd" value= "<?php echo $list[29] ?>" <?PHP print  $save; ?> />
      </label>
    </div>
  </div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q24a: What best describes you pricing strategy? :
        <abbr title="the cheapest price to crush others"><b>Domination</b></abbr> , 
        <abbr title="you need to make little changes to adjust to the market"><b>Adaptation</b></abbr> 
        , <abbr title="you need to create a new pricing scheme"><b>Innovation</b></abbr> .
        <select <?PHP print  $save; ?> name="q24a">
          <OPTION VALUE="<?php echo $list[30][0] ?>"><?php echo $list[30][0] ?></OPTION>
          <OPTION VALUE="<?php echo $list[30][1] ?>"><?php echo $list[30][1] ?></OPTION>
          <OPTION VALUE="<?php echo $list[30][2] ?>"><?php echo $list[30][2] ?></OPTION>
        </select>
      </label>
   
  </div>
</div>
</br>
<div class="row">
  <div class="large-12 columns">
      <label>Q24b: Is your previous answer based on facts (rational) or intuition only (intuitive)?</label>
      <input type="radio" name="q24b" value="Rationnal" id="q24br" <?PHP print  $save; ?>  <?PHP print  $yes_q24b; ?>><label for="Rationnal">Rationnal</label>
      <input type="radio" name="q24b" value="Intuitive" id="q24bi" <?PHP print  $save; ?>  <?PHP print  $no_q24b; ?>><label for="Intuitive">Intuitive</label>
    </div>
</div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q24c: If any...What action should you execute now to be aligned with your pricing strategy?
        <textarea placeholder="Description" name="q24c" <?PHP print  $save; ?>><?php echo $list[32] ?></textarea>
      </label>
    </div>
</div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q24d: When should this action be complete?
         <input type="date" name="q24d"  id="date" placeholder="yyyy-mm-dd"  value= "<?php echo $list[33] ?>" <?PHP print  $save; ?> />
      </label>
    </div>
  </div>
</br>
<div class="row">

    <div class="large-12 columns">
      <label>25a: What best describes your technology and systems strategy? :
        <abbr title="to fully exploit existing technologies and systems"><b>Domination</b></abbr> , 
        <abbr title="to use existing solutions to build new technologies or systems"><b>Adaptation</b></abbr> 
        , <abbr title="to created a brand new technology or system"><b>Innovation</b></abbr> .
        <select <?PHP print  $save; ?> name="q25a">
         <OPTION VALUE="<?php echo $list[34][0] ?>"><?php echo $list[34][0] ?></OPTION>
          <OPTION VALUE="<?php echo $list[34][1] ?>"><?php echo $list[34][1] ?></OPTION>
          <OPTION VALUE="<?php echo $list[34][2] ?>"><?php echo $list[34][2] ?></OPTION>
        </select>
      </label>
   
  </div>
</div>
</br>
<div class="row">
  <div class="large-12 columns">
      <label>25b: Is your previous answer based on facts (rational) or intuition only (intuitive)?</label>
      <input type="radio" name="q25b" value="Rationnal" id="q25br" <?PHP print  $save; ?> <?PHP print  $yes_q25b; ?>><label for="Rationnal">Rationnal</label>
      <input type="radio" name="q25b" value="Intuitive" id="q25bi" <?PHP print  $save; ?> <?PHP print  $no_q25b; ?>><label for="Intuitive">Intuitive</label>
    </div>
</div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>25c: If any...What action should you execute now to be aligned with your technology and systems strategy?
        <textarea placeholder="Description" name="q25c"><?php echo $list[36] ?></textarea>
      </label>
    </div>
</div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>25d: When should this action be complete?
         <input type="date" name="q25d"  id="date" placeholder="yyyy-mm-dd" value= "<?php echo $list[37] ?>" <?PHP print  $save; ?> />
      </label>
    </div>
  </div>
</br>
<div class="row">

    <div class="large-12 columns">
      <label>Q26a: Thinking about your operations as a "production" center, what best describes your production strategy?:
        <abbr title="to optimize all processes to improve your quality level or reduce costs as much as possible"><b>Domination</b></abbr> , 
        <abbr title=" adjust your production center to a change you noticed in your environment"><b>Adaptation</b></abbr> 
        , <abbr title="create a new production process or solution to answer a specific demand in your environment"><b>Innovation</b></abbr> .
        <select <?PHP print  $save; ?> name="q26a">
          <OPTION VALUE="<?php echo $list[38][0] ?>"><?php echo $list[38][0] ?></OPTION>
          <OPTION VALUE="<?php echo $list[38][1] ?>"><?php echo $list[38][1] ?></OPTION>
          <OPTION VALUE="<?php echo $list[38][2] ?>"><?php echo $list[38][2] ?></OPTION>
        </select>
      </label>
   
  </div>
</div>
</br>
<div class="row">
  <div class="large-12 columns">
      <label>Q26b: Is your previous answer based on facts (rational) or intuition only (intuitive)?</label>
      <input type="radio" name="q26b" value="Rationnal" id="q26br" <?PHP print  $save; ?> <?PHP print  $yes_q26b; ?>><label for="Rationnal">Rationnal</label>
      <input type="radio" name="q26b" value="Intuitive" id="q26bi" <?PHP print  $save; ?> <?PHP print  $no_q26b; ?>><label for="Intuitive">Intuitive</label>
    </div>
</div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q26c: If any...What action should you execute now to be aligned with your production strategy?
        <textarea placeholder="Description" name="q26c" <?PHP print  $save; ?>><?php echo $list[40] ?></textarea>
      </label>
    </div>
</div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q26d: When should this action be complete?
         <input type="date" name="q26d"  id="date" placeholder="yyyy-mm-dd"  value= "<?php echo $list[41] ?>" <?PHP print  $save; ?>/>
      </label>
    </div>
  </div>
</br>

<div class="row">

    <div class="large-12 columns">
      <label>Q27a: Think of your distribution strategy as the channels that you use to distribute what you produced (internet, mobile networks, tv networks, etc), what best describes your distribution strategy? :
        <abbr title="optimization of existing distribution channels"><b>Domination</b></abbr> , 
        <abbr title="you need to adjust to fit into certain distribution channels"><b>Adaptation</b></abbr> 
        , <abbr title="you need to create a new distribution channel"><b>Innovation</b></abbr> .
        <select <?PHP print  $save; ?> name="q27a">
          <OPTION VALUE="<?php echo $list[42][0] ?>"><?php echo $list[42][0] ?></OPTION>
          <OPTION VALUE="<?php echo $list[42][1] ?>"><?php echo $list[42][1] ?></OPTION>
          <OPTION VALUE="<?php echo $list[42][2] ?>"><?php echo $list[42][2] ?></OPTION>
        </select>
      </label>
   
  </div>
</div>
</br>
<div class="row">
  <div class="large-12 columns">
      <label>Q27b: Is your previous answer based on facts (rational) or intuition only (intuitive)?</label>
      <input type="radio" name="q27b" value="Rationnal" id="q27br" <?PHP print  $save; ?> <?PHP print  $yes_q27b; ?>><label for="Rationnal">Rationnal</label>
      <input type="radio" name="q27b" value="Intuitive" id="q27bi" <?PHP print  $save; ?> <?PHP print  $no_q27b; ?>><label for="Intuitive">Intuitive</label>
    </div>
</div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q27c: If any...What action should you execute now to be aligned with your distribution strategy?
        <textarea placeholder="Description" name="q27c" <?PHP print  $save; ?>><?php echo $list[44] ?></textarea>
      </label>
    </div>
</div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q27d: When should this action be complete?
         <input type="date" name="q27d"  id="date" placeholder="yyyy-mm-dd" value= "<?php echo $list[45] ?>" <?PHP print  $save; ?> />
      </label>
    </div>
  </div>
</br>

<div class="row">

    <div class="large-12 columns">
      <label>Q28a: What best describes your communication and promotion strategy? : 
        <abbr title="optimize your visibility through existing means and channels"><b>Domination</b></abbr> , 
        <abbr title="you need to create a brand new communication and promotion plan "><b>Adaptation</b></abbr> 
        , <abbr title="to created a brand new technology or system"><b>Innovation</b></abbr> .
        <select <?PHP print  $save; ?> name="q28a">
          <OPTION VALUE="<?php echo $list[46][0] ?>"><?php echo $list[46][0] ?></OPTION>
          <OPTION VALUE="<?php echo $list[46][1] ?>"><?php echo $list[46][1] ?></OPTION>
          <OPTION VALUE="<?php echo $list[46][2] ?>"><?php echo $list[46][2] ?></OPTION>
        </select>
      </label>
   
  </div>
</div>
</br>
<div class="row">
  <div class="large-12 columns">
      <label>Q28b: Is your previous answer based on facts (rational) or intuition only (intuitive)?</label>
      <input type="radio" name="q28b" value="Rationnal" id="q28br" <?PHP print  $save; ?>  <?PHP print  $yes_q28b; ?>><label for="Rationnal">Rationnal</label>
      <input type="radio" name="q28b" value="Intuitive" id="q28bi" <?PHP print  $save; ?>  <?PHP print  $no_q28b; ?>><label for="Intuitive">Intuitive</label>
    </div>
</div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q28c: If any...What action should you execute now to be aligned with your communication strategy?
        <textarea placeholder="Description" name="q28c" <?PHP print  $save; ?>><?php echo $list[48] ?></textarea>
      </label>
    </div>
</div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q28d: When should this action be complete?
         <input type="date" name="q28d"  id="date" placeholder="yyyy-mm-dd"  value= "<?php echo $list[49] ?>" <?PHP print  $save; ?>/>
      </label>
    </div>
  </div>
</br>

<div class="row">

    <div class="large-12 columns">
      <label>Q29a: Thinking of managing human resources and skills inside and outside your organization, what best describes your HR and organization strategy? :
        <abbr title="maintain or raise the level of excellence and cooperation of your team in order to produce the best product as possible"><b>Domination</b></abbr> , 
        <abbr title="establish alliances on the market to better adapt to market expectations"><b>Adaptation</b></abbr> 
        , <abbr title=" set-up a collaboration process and culture to co-create solutions, involving other organizations, users or clients."><b>Innovation</b></abbr> .
        <select <?PHP print  $save; ?> name="q29a">
         <OPTION VALUE="<?php echo $list[50][0] ?>"><?php echo $list[50][0] ?></OPTION>
          <OPTION VALUE="<?php echo $list[50][1] ?>"><?php echo $list[50][1] ?></OPTION>
          <OPTION VALUE="<?php echo $list[50][2] ?>"><?php echo $list[50][2] ?></OPTION>
        </select>
      </label>
   
  </div>
</div>
</br>
<div class="row">
  <div class="large-12 columns">
      <label>Q29b: Is your previous answer based on facts (rational) or intuition only (intuitive)?</label>
      <input type="radio" name="q29b" value="Rationnal" id="q29br" <?PHP print  $save; ?> <?PHP print  $yes_q29b; ?>><label for="Rationnal">Rationnal</label>
      <input type="radio" name="q29b" value="Intuitive" id="q29bi" <?PHP print  $save; ?> <?PHP print  $no_q29b; ?>><label for="Intuitive">Intuitive</label>
    </div>
</div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q29c: If any...What action should you execute now to be aligned with your HR and organization strategy?
        <textarea placeholder="Description" name="q29c" <?PHP print  $save; ?>><?php echo $list[52] ?></textarea>
      </label>
    </div>
</div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q29d: When should this action be complete?
         <input type="date" name="q29d"  id="date" placeholder="yyyy-mm-dd" value= "<?php echo $list[53] ?>" <?PHP print  $save; ?> />
      </label>
    </div>
  </div>
</br>

<div class="row">

    <div class="large-12 columns">
      <label>Q30a: What best describes your financial strategy? : 
        <abbr title="maintain or optimize existing funding sources, or your financial management process"><b>Domination</b></abbr> , 
        <abbr title="apply change in your funding source or process"><b>Adaptation</b></abbr> 
        , <abbr title=" create a new funding source or a new solution to resolve a financial or accounting problem"><b>Innovation</b></abbr> .
        <select <?PHP print  $save; ?> name="q30a">
          <OPTION VALUE="<?php echo $list[55][0] ?>"><?php echo $list[55][0] ?></OPTION>
          <OPTION VALUE="<?php echo $list[55][1] ?>"><?php echo $list[55][1] ?></OPTION>
          <OPTION VALUE="<?php echo $list[55][2] ?>"><?php echo $list[55][2] ?></OPTION>
        </select>
      </label>
   
  </div>
</div>
</br>
<div class="row">
  <div class="large-12 columns">
      <label>Q30b: Is your previous answer based on facts (rational) or intuition only (intuitive)?</label>
      <input type="radio" name="q30b" value="Rationnal" id="q30br" <?PHP print  $save; ?> <?PHP print  $yes_q30b; ?>><label for="Rationnal">Rationnal</label>
      <input type="radio" name="q30b" value="Intuitive" id="q30bi" <?PHP print  $save; ?> <?PHP print  $no_q30b; ?>><label for="Intuitive">Intuitive</label>
    </div>
</div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q30c: If any...What action should you execute now to be aligned with your finance strategy?
        <textarea placeholder="Description" name="q30c" <?PHP print  $save; ?>><?php echo $list[57] ?></textarea>
      </label>
    </div>
</div>
</br>
<div class="row">
    <div class="large-12 columns">
      <label>Q30d: When should this action be complete?
         <input type="date" name="q30d"  id="date" placeholder="yyyy-mm-dd" value= "<?php echo $list[58] ?>" <?PHP print  $save; ?> />
      </label>
    </div>
  </div>
</br>
</TABLE>
<TABLE BORDER=0>
  
    
  </br>
<div class="row">
  <p style="text-indent: 5em;">Financial data :
        </p>
<div class="large-6 columns">
      <label >Q31a: Define in one word the "data/content" you need to produce to generate users
        <input type="text" name="q31a" value= "<?php echo $list[59] ?>" id="q31a" placeholder="Word" <?PHP print  $save; ?> />
      </label>
    </div>
<div class="large-6 columns">
      <label >Q31b: How many of those "data/content" do you need to produce over the next 12 months?
        <input type="number" name="q31b" value= "<?php echo $list[60] ?>" id="q31b" placeholder="0" <?PHP print  $save; ?> />
      </label>
    </div>
     </div>
   </br>
<div class="row">
<div class="large-6 columns">
      <label >Q32: How many unique users do you need to capture over the next 12 months?
        <input type="number" name="q32" value= "<?php echo $list[61] ?>"  id="q32" placeholder="0" <?PHP print  $save; ?> />
      </label>
    </div>
<div class="large-6 columns">
      <label >Q33: How many paying clients do you need to capture over the next 12 months?
       <input type="number" name="q33" value= "<?php echo $list[62] ?>" id="q33" placeholder="0" <?PHP print  $save; ?> />
      </label>
    </div>
    </div>
   </br>
    <div class="row">
<div class="large-6 columns">
      <label >Q34: How many revenues will you generate with your clients over the next 12 months?
        <input type="number" name="q34" value= "<?php echo $list[63] ?>"  id="q34" placeholder="0" <?PHP print  $save; ?> />
    </div>
    <br style="line-height:21px;">
<div class="large-6 columns">
      <label >Q35: How much money will you spend over the next 12 months?
   
        <input type="number" name="q35" value= "<?php echo $list[64] ?>" id="q35" placeholder="0" <?PHP print  $save; ?> />
      </label>
    </div>
    </div>
   </br>
   </br> 
   </br>
    <div class="row">

   <?php
   if(!$save){
    echo '<div class="large-12 columns">';
 echo '<button type="submit" style="margin-left:47%; margin-right:47%;">Save</button>';
 echo "</div>";
}
else{
   echo '<div class="large-6 columns">';
echo '<button type="button" onClick="formulaire('.$form.')" style="margin-left:47%; margin-right:47%;">Edit</button>';
 echo "</div>";
 echo '<div class="large-6 columns">';
echo '<button type="button" onClick="formulaire('.$form.')" style="margin-left:47%; margin-right:47%;">Print</button>';
echo "</div>";
}
  ?>
   </div>
</TABLE>

<script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</FORM>
