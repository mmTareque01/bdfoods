    <?php 
    if(isset($_POST['first_name'],$_POST['last_name'],$_POST['reservation_date'],$_POST['people_number'])){
$_POST['reservation_date']=$_POST['reservation_date']." ".$_POST['reservation_time'];


     
      
      $obj=(object)$_POST;


     
       $user->addReservation($obj);

    }
    ?>
    <div id="reservation" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Reservation</h2>
     
            <div class="row">
                <div class="col-md-6">
                    <form class="form form-table" method="post" >
                        <div class="form-group">
                            <h4>Reservation (To reserve a table please fill in all fields.)</h4>
                        </div>

                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="first_name1"> 
                            Name:</label>
		<span>Name</span>
                            <input class="form-control hint" type="text" id="first_name1" name="first_name" placeholder="Name" required="">
			
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="last_name1">Surname:</label>
		<span>Surname</span>
                            <input class="form-control hint" type="text" id="last_name1" name="last_name" placeholder="Surname" required="">
					
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="email">Email</label>
<span>Date of reservation</span>	
                            <input class="form-control hint" type="date" id="email1" name="reservation_date"  required="">
					
                          </div>
				   
				<div class="col-md-6 col-lg-6 form-group">
					<span>Booking time</span>
				<input class="form-control hint" type="time" name="reservation_time" required/>
					
			</div>
    				 <div class="col-lg-6 col-md-6 form-group">
	<span>Number of guests</span>
                      <input type="number" class="form-control hint" placeholder="Number of guests" min="1" name="people_number">
						
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="phone1">Telephone</label>
	<span>Telephone</span>	
                            <input class="form-control hint" type="text" id="phone1" name="phone" placeholder="Telephone" required="">
					
                          </div>
                        </div>
                   
                       
                        <div class="row">
                     
                        </div><br/>
                        <div class="row">

                          <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-danger btn-lg">Send!</button>
                          </div>
                        </div>
                      </form>
                </div><!-- col-md-6 -->
                <div class="col-md-5 col-md-offset-1">
                    
              

                    <h3><i class="fa fa-map-marker fa-fw"></i>Where to find us</h3>
                    <p>Dhaka,Bangladesh </p>

                    <h3><i class="fa fa-mobile fa-fw"></i>Contacts</h3>
                    <p>Email: <a href="">bdfoods@gmail.com</a></p>
                    <p>Phone: +88000000000</p>

                </div><!-- col-md-6 -->
            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->

    </div><!-- #reservation -->
