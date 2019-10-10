<?php
/*Methode et condition ici*/
$_Lastname = $_POST['lastname'];
$_Firstname = $_POST['firstname'];
$_bio = $_POST['bio'];
$_age = $_POST['age'];
$_gender = $_POST['Gender'];
$_Email = $_POST['email'];


/* verifier chaque élément avec des filtre */
 function CleanUp($string){

 return $string;
}



 /* verifie si il y a input ou non*/


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

<section class="container">
    <section class="form-row">
        <section class="form offset-1 col-10">
        <h1>Formulaire</h1>

        <form method="post" action="">
            <section class="form-row">
                <section class="col-6 md-4 mb-3">
                <!---last name & first name--->
                    <label for="validationDefault01">First name<span class="required">*</span></label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="First name" name="firstname" required>
                </section>
                <section class="col-6 md-4 mb-3">
                    <label for="validationDefault02">Last name</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" name="lastname" required>
                </section>

              <!--- Email -->
                <section class="email  col-12">
                    <label for="Email">Email<span class="required">*</span></label>
                    <input class="form-control" id="Email" type="text" name="email" placeholder="name@example.com" name="email" required>
                </section>
            </section>
              <!--- gender--->
              <section class="form-row">
                <section class="col-12 md-12 mb-3">
                    <label for="Gender">Gender</label>
                        <select class="form-control" name="Gender" id ="Gendre">
                            <option  selected>choose ...</option>
                            <?php
                                $Topics = array('male'=>'male ','female'=>'female ','binary'=>'no-binary');
                                foreach ($Topics as $key => $value)
                                {
                                echo "<option value='$key'>$value</option>";
                                } 
                            ?>
                        </select>
                    </section>
                </section>
            </section>
            </section>



            <!--- city & state --->
            <section class="form-row">
              <section class="offset-1 col-4 md-3 mb-3">
                <label for="validationDefault03">City</label>
                <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
              </section>
              <section class="col-6 md-3 mb-3">
                <label for="validationDefault04">State</label>
                <select class="form-control" name="validationDefault04" id ="Country" >
                    <option  selected>choose ...</option>
                    <?php
                    $countries = array('BE'=>'Belgium','EN'=>'England','FR'=>'France','MA'=>'Madrid','IND'=>'India');

	                foreach ($countries as $key => $value)
                    {
                    echo "<option value='$key'>$value</option>";
                    } 
	                ?> 
                    </select>
              </section>
                <section class="offset-1 col-4 md-3 mb-3">
                    <label for ="Topics">Un probleme ?</label>
                    <select class="form-control" id ="Topics">
                        <option  selected>choose ...</option>
                        <?php
                            $Topics = array('Prob'=>'Problems ','Sugg'=>'Suggestion ','Love'=>'Love to share ');
                        foreach ($Topics as $key => $value)
                        {
                        echo "<option value='$key'>$value</option>";
                        } 
                        ?>
                    </select>
                </section>
                <section class="Area form-group col-6">
                    <textarea name="bio" class="form-control" id="" rows="3" max-lenght="50" cols="30" placeholder="Ecrivez ici ..."></textarea>
                </section>
            </section>
            </section>
            <section class="form-group">
              <section class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Done ?
                </label>
              </section>
            </section>
            <section class="form-group">
              <section class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                  Really ?
                </label>
              </section>
            </section>
            <section class="form-group">
              <section class="form-check3">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" required>
                <label class="form-check-label" for="invalidCheck3">
                  ARE YOU SURE ?
                </label>
              </section>
            </section>
            <button class="btn " type="submit">Submit</button>
        </form>