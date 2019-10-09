<?php
/*Methode et condition ici*/
$_name = $_POST['name'];
$_bio = $_POST['bio'];
$_age = $_POST['age'];

/*if(isset($_age) && isset($_name) && isset($_bio)){
	$_name = Check_input($_name);
	$_bio = Check_input($_bio);
	}else{

	}
if (!filter_var($_age, FILTER_VALIDATE_INT) === false) {
	echo("Integer is valid");
} else {
	echo("Integer is not valid");
}


function Check_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = filter_var($_POST,FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  return $data;
}*/

?>  
<div class="container">
    <div class="row">
        <div class="form offset-1 col-10">
        <form method="post" action="form2.php">

<!--Name and Lastname-->
            <div class="row">
                <div class="User col-5">
                    <label  for="Lastname">Lastname</label>
                    <input id="Lastname" type="text" name="lastname">
                </div>
                <div class="User col-5">
                    <label  for="Firstname">Firstname</label>
                    <input id="Firstname" type="text" name="firstname">
                </div>
            </div>



<!--email-->
            <div class="row">
                <div class="email offset-1 col-5">
                    <label for="Email">Email</label>
                    <input id="Email" type="text" name="email">
                </div>
            </div>


<!--Gender-->
            <div class="row">
                <div class="gender  col-5">    
                    <input type="radio" name="Gender" value="male">Male
                    <input type="radio" name="Gender" value="female">Female
                    <input type="radio" name="Gender" value="no-binary">No-binary
                </div>
            </div>
            <br/>





<!--countries-->
            <div class="row">
                <div class="country  col-5">
                    <label for ="Country">country ?</label>
                    <br/>
                    <select id ="Country">
                    <?php
                    $countries = array('BE'=>'Belgium','EN'=>'England','FR'=>'France','MA'=>'Madrid','IND'=>'India');

	                foreach ($countries as $key => $value)
                    {
                    echo "<option value='$key'>$value</option>";
		            $i++;
                    } 
	                ?> 
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="topics offset-1  col-5">
                    <label for ="Topics"></label>
                    <select id ="Topics">
                        <?php

                        $Topics = array('Prob'=>'Problems ?','Sugg'=>'Suggestion ?','Love'=>'Love to share ?');

                        foreach ($Topics as $key => $value)
                        {
                        echo "<option value='$key'>$value</option>";
                        $i++;
                        } 
                        ?>
                    </select>
                </div>

                <div class="Area  col-5">
                <textarea name="bio"  id="" rows="3"  cols="30" form="usrform">Your bio here</textarea>
                </div>
            </div>
            <br/>

            

<!--button-->
            <div class="row">
                <div class="button offset-3 col-5">
                <input type="submit" value="Submit">                </div>
            </div>
        </form>
        </div>
    </div>
</div>

<!--Formulaire ici-->

