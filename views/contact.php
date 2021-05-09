    <?php 
    if(isset($_POST['first_name'],$_POST['message'])){
     
      
      $obj=(object)$_POST;
     
       $user->addMessage($obj);

    }
    ?>
    <div id="reservation" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Contacts </h2>
     
            <div class="row">
                <div class="col-md-6">
                    <form class="form form-table" method="post" >
                        <div class="form-group">
                            <h4>Fill in the fields (all fields are required)</h4>
                        </div>

                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="Name"> 
                            Name</label>
                            <input class="form-control hint" type="text" id="first_name1" name="first_name" placeholder="First name" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="Фамилия">Surname</label>
                            <input class="form-control hint" type="text" id="last_name1" name="last_name" placeholder="Surname" required="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="Емайл">Email</label>
                            <input class="form-control hint" type="email" id="email1" name="email" placeholder="Email@domain.com" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="phone1">Telephone</label>
                            <input class="form-control hint" type="text" id="phone1" name="phone" placeholder="Telephone" required="">
                          </div>
                        </div>
                   
                        <div class="row">
                  
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                          <textarea class="form-control hint" placeholder="Your message..." name="message"></textarea>
                          </div>
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
                    <p>Dhaka, Bangladesh </p>

                    <h3><i class="fa fa-mobile fa-fw"></i>Contacts</h3>
                    <p>Email: <a href="#">bdfoods@gmail.com</a></p>
                    <p>Phone: +88012512541</p>

                </div><!-- col-md-6 -->
            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->

    </div><!-- #reservation -->
