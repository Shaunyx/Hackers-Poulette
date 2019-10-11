<?php
/*Methode et condition ici*/
$_Lastname = $_POST['lastname'];
$_Firstname = $_POST['firstname'];
$_bio = $_POST['bio'];
$_age = $_POST['age'];
$_gender = $_POST['Gender'];
$_Email = $_POST['email'];


/* verifier chaque élément avec des filtre */
 function CleanUp($element){

 return ctype_alpha($element);
}

 // check le string sans "balise" ou autres éléments de HTML

function sanitized_Check($String){
    $comment = "<h1>Nice, a Poulette is safe! Amazing !</h1>";
    $notSanitizedComment = "<h1>wrong, a Poulette is dead by your fault !<i>that's a joke</i></h1>";
    // Sanitize et print le commentaire en string
    if ($sanitizedComment = filter_var($comment, FILTER_SANITIZE_STRING)){
        echo $sanitizedComment;
    } else {
        echo $notSanitizedComment;
    }
}





function YesOrNope(){


}

function Check_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = filter_var($_POST,FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  return $data;
}

?>  

<section class="container">
    <section class="form-row">
        <section class="form offset-1 col-10">
        <h1>Contact Us</h1>

        

        <form class="needs-validation" method="post" action="" novalidate>
            <section class="form-row ">
                <section class="User col-6 md-4 mb-1">
                <!---last name & first name--->
                    <label for="validationDefault01">First name<span class="required">*</span></label>
                    <input type="text" class="form-control shadow p-1 mb-5 bg-white rounded"  value="" id="validationDefault01" placeholder="First name" name="firstname" required>
                    <section class="valid-feedback">
                        Kot kot okaaaaay!
                    </section>
                    <section class="invalid-feedback">
                        not not okaaaaaay!   
                    </section>
                </section>
                <section class="User col-6 md-4 mb-3">
                    <label for="validationDefault02">Last name<span class="required">*</span></label>
                    <input type="text" class="form-control shadow p-1 mb-5 bg-white rounded" value="" id="validationDefault02" placeholder="Last name" name="lastname" required>
                    <section class="valid-feedback">
                        Kot kot okaaaaay!
                    </section>
                    <section class="invalid-feedback">
                        not not okaaaaaay!   
                    </section>
                </section>

              <!--- Email -->
                <section class="email  col-12">
                    <label for="validationDefault03">Email<span class="required">*</span></label>
                    <input class="form-control shadow p-1 mb-5 bg-white rounded" value=""id="validationDefault03" type="text"  placeholder="name@example.com" name="email" required>
                    <section class="valid-feedback">
                        Kot kot okaaaaay!
                    </section>
                    <section class="invalid-feedback">
                        not not okaaaaaay!   
                    </section>
                </section> 
            </section>
              <!--- gender--->
              <section class="form-row">
                <section class="col-12 md-12 mb-3">
                    <label for="validationDefault04">Gender<span class="required">*</span></label>
                        <select class="form-control shadow p-1 mb-5 bg-white rounded" name="Gender" id ="validationDefault04" required>
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
                <label for="validationDefault05">City<span class="required">*</span></label>
                <input type="text" class="form-control shadow p-1 mb-5 bg-white rounded" name="validationDefault05" id="validationDefault05" placeholder="City" required>
                <section class="valid-feedback">
                        Kot kot okaaaaay!
                    </section>
                    <section class="invalid-feedback">
                        not not okaaaaaay!   
                    </section>
              </section>
              <section class="col-6 md-3 mb-3">
                <label for="validationDefault06">State</label>
                <select class="form-control shadow p-1 mb-5 bg-white rounded" name="validationDefault06" id ="validationDefault06" >
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
                    <label for ="validationDefault07">Un probleme ?</label>
                    <select class="form-control shadow p-1 mb-5 bg-white rounded" name="validationDefault07" id ="validationDefault07">
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
                <section class="Area  form-group col-6">
                    <textarea for="validationDefault08" name="bio" class="form-control shadow p-1 mb-5 bg-white rounded" id="validationDefault08" rows="3" max-lenght="50" cols="30" placeholder="Ecrivez ici ..."></textarea>
                </section>
            </section>
            </section>
            <section class="form-group">
              <section class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">Done ?</label><span class="required">*</span></label>
              </section>
            </section>
            <section class="form-group">
              <section class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">Really ?</label><span class="required">*</span></label>
              </section>
            </section>
            <section class="form-group">
              <section class="form-check3">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" required>
                <label class="form-check-label" for="invalidCheck3">ARE YOU SURE ?<span class="required">*</span></label>
              </section>
            </section>
            <button class="btn " type="submit">Submit</button>
        </form>


        <form id="myformid" action="/myformaction">
            <!-- H o n e y p o t -->

            <label class="ohnohoney" for="validationDefault01"></label>
            <input class="ohnohoney" autocomplete="off" type="text" id="validationDefault01" name="validationDefault01" placeholder="First name">
           
            <label class="ohnohoney" for="validationDefault02"></label>
            <input class="ohnohoney" autocomplete="off" type="text" id="validationDefault02" name="validationDefault02" placeholder="Last name">
           
            <label class="ohnohoney" for="validationDefault03"></label>
            <input class="ohnohoney" autocomplete="off" type="text" id="validationDefault03" name="validationDefault03" placeholder="name@example.com">
            
            <textarea class="ohnohoney" for="validationDefault08"></textarea>
            <input class="ohnohoney" autocomplete="off" type="text" id="validationDefault08" name="validationDefault08" placeholder="Ecrivez ici ...">
        </form>


        <script>
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>

