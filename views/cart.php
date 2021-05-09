<?php if(isset($_GET['action'])&&($_GET['action']=="empty")){
session_unset();
header("location:index.php?page=cart");
} 
if(isset($_POST['name'],$_POST['adress'],$_POST['phone'])) {
  $ordered_food=$_SESSION['foods'];
  $sum=$_SESSION['sum'];
  $order=new stdClass();
  $order->name=$_POST['name'];
  $order->adress=$_POST['adress'];
  $order->price=$sum;
  $order->phone=$_POST['phone'];
  $order->foods=$ordered_food;

 $user->addOrder($order);

}
?>
<div id="reservation" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Cart </h2>
            <div class="row">
            <?php if(!empty($_SESSION['foods'])){ ?>
              <center><button data-toggle="modal" data-target="#confirmModal" class="btn-lg btn-success" >Order Now! </button></center><br/> <?php } ?>
              <table class="table table-bordered">
              <thead>
              <th>Food</th>
              <th>Photo</th>
              <th>Quantity</th>
              <th>Price&nbsp;&nbsp;&nbsp; <?= $_SESSION['sum'] ?> BDT</th>

              </thead>
              <tbody>
              <?php foreach($_SESSION['foods'] as $f){ ?>
                <tr>
                <td><?=$f->name ?></td>
                 <td><center><img  height="50" width="50" src="foods/<?php echo $f->image; ?>"></center></td>
                  <td><?=$f->quantity ?></td>
                   <td><?=$f->price ?> tk</td>
                   </tr>
                   <?php } ?>

              </tbody>
                
              </table>  
                 <center><a href="index.php?page=cart&action=empty"><button  class="btn-lg btn-danger" >Empty the cart </button></a></center>
            </div>
     
            
            <!-- /.services --> 
        </div>
        <!-- /.container -->

    </div>
 <div class="modal fade " id="confirmModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
       <form method="post">
      <div class="modal-header active">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirm the order</h4>
      </div>
      <div class="modal-body">
     
      <div class="form-group">
          <label> Име :</label>
          <input type="text" name="name" placeholder="Име" class="form-control" required >
      </div>
      <div class="form-group">
          <label> Address :</label>
          <input type="text" name="adress"placeholder="Address" class="form-control" required >
      </div>
      <div class="form-group">
          <label> Phone (format: xxxxxxxxxx):</label>
          <input name="phone" type="tel" placeholder="Phone" pattern="^\d{4}\d{3}\d{3}$" class="form-control" required>
      </div>
       <div class="form-group">
      <textarea style="width:100%; " rows="7" onclick="this.focus();this.select()" readonly="readonly">
      
      І. TERMS AND DEFINITIONS:

Service / s are the services provided by the owner for product presentation, delivery and promotions.
Website is a separate place in the global Internet network, accessible through its unified address (URL) via HTTP, HTTPS or other standardized protocol and containing files, programs, text, sound, picture, image or other materials.and resources.

User is any person who uses the services provided by the complainant



Malicious and incorrect actions are actions or omissions that violate Internet ethics or cause harm to persons connected to the Internet or associated networks, sending unsolicited mail (SPAM, JUNK MAIL), channel overflow (FLOOD), gaining access to resources with foreign rights and passwords, using vulnerabilities in the systems for their own benefit or obtaining information (HACK), performing actions that may qualify as industrial espionage or sabotage, or inducing the installation of viruses or remote control systems, disrupting the normal operation of other Internet users and associated networks, performing any actions that may be qualify as a crime or administrative violation under Bulgarian law or under the law of another country.

Delivery - delivery of an order, packaging in a form suitable for transportation and transportation of the order to an address provided by the customer.
A website within the meaning of these General Terms and Conditions means an integral and separate part of a website.
"Accidental event" means an unforeseen or unforeseeable circumstance of an extraordinary nature at the time of the conclusion of the contract, which makes the provision of the services objectively impossible;


ІІ. PROTECTION OF PERSONAL DATA

2.1 The owner does not collect personal data about the visitors of the site beyond the technologically necessary identification information, which the sites automatically collect while you are in them, as well as the minimum necessary information for making deliveries. The owner does not use and will not use, provide, sell or rent any part of this automatically collected technological information under any circumstances and at any cost.
2.2 By accepting these general terms and conditions, visitors and users of the site agree to use this technologically necessary identification information, which the sites automatically collect, as well as the information voluntarily provided by them about name and delivery address, telephone number and feedback email. .
2.3 The use of "cookies" as identification when visiting sites is a small amount of information that the web server sends to the web browser and which allows the server to collect feedback from the browser. More information on the use of cookies can be found at http://www.cookiecentral.com.
2.3 The holder does not store any data about your credit or debit cards in any way. Online payments are made by referring to an online payment module operated by epay.bg, which module processes the online payment and submits the status back to the Holder for a successful payment.



III. RIGHTS AND OBLIGATIONS OF THE PARTIES


3.1 The owner has the right to change the design, form, technology and services provided by the sites without prior notice to users.
3.2 The holder has the right at its discretion to delete some of the services it offers or to restrict access to them, for all or certain users.
3.3 In the event of non-performance of contractual relations, malicious actions, obscene comments and other actions incompatible with moral and good commercial practice, the holder has the right to delete, limit and / or close the information of any user and without the right to review.
3.4 The owner has the right to seek liability and sanctions related to the services he provides if he has received notification of a breach on the site from the authorized bodies under Bulgarian law or in cases where a user violates contractual relations, performs malicious acts, makes obscene comments and / or perform other actions incompatible with morality and good commercial practice.
3.5 The owner is obliged to notify the law enforcement authorities of violations of public morals and Bulgarian law, including the publication of pornographic materials and photos, insults, unsolicited advertising, infringement of copyright and related rights, violation of freedom and individual rights, discrimination , endangering the life or health of the public and users of the sites.
3.6 The Holder has the right to lease space for advertisers on its websites and to display, display, send, perform, upload their advertisements and any advertising materials for its own purposes or for the purposes of the clients it serves.
3.7. The holder has the right to generate and send to the e-mail address specified by the user synthesized information about the news in the offered services in the form of an e-newsletter, weekly menu or current promotions.
3.8 By accepting these general terms and conditions, the Holder receives the right to send messages to the consumer within the meaning of Art. 6 of the Electronic Commerce Act, ensuring the clear and unambiguous recognition of the commercial message as unsolicited.
3.9 The holder is obliged to provide the user in a clear and unambiguous way the opportunity to refuse to receive the messages under item 3.7 and item 3.8.
3.10 The user has the right to use free of charge the services provided by the sites for non-commercial purposes, 
3.11 The user has the right to access the services on-line, subject to the conditions and requirements for access.
3.12 The User's right of access does not include the right to copy or reproduce information, materials and resources, as well as to use intellectual property, unless it is a small amount of information intended for personal use, provided that unduly prejudice the legitimate interests of authors or other holders of intellectual property rights and in the event that the copying or reproduction is carried out for non-commercial purposes.           
3.14 The User has the right to indicate an e-mail address to which he wants to receive synthesized information about the news published on the Owner's website in the form of an e-newsletter.            
3.15 The User has the right to refuse, by means provided by the Holder to receive the messages under item 3.7 and item 3.8, as the refusal to receive the messages deprives the user of the opportunity to participate in promotional offers requiring the sending of vouchers and / or feedback.3.16 The User is obliged to notify in advance in an appropriate manner the Holder in case the e-mail address used during registration is in the register of e-mail addresses of legal entities that do not wish to receive unsolicited commercial communications.

IV. FOOD DELIVERIES AND PROMOTIONAL PROMOTIONS

The minimum value of the order must be BDT 100.
4.1. The owner provides the service - food delivery to home and office, within the city of Sofia.
4.2 Acceptance of purchase orders is done online - through the site or through another means of communication, mobile or web-based application, provided for contact on the site www.pizzadonvito.com
4.2 Deliveries are made by authorized employees of the respective restaurant DON VITO
4.3. The delivery of the ordered items is done to the exact address (block, entrance, floor and apartment) specified by the user, as well as with a phone number for feedback.
4.4. The delivery of the ordered items is made to the front door (in the presence of security in the residential building, with a locked entrance, with a non-working elevator or a working one, but with a chip or a card) of the block or office. With free access and a working elevator, the supplier could reach the door of the apartment or office.
4.5. The delivery of the ordered items is done within about 60 minutes from the acceptance of the order. In cases of force majeure (bad weather conditions, road accidents, etc.), the order time may be indefinite or the order may be canceled by the holder.
4.6. The order, subject of delivery, is transported and delivered properly packaged and within a reasonable time, depending on the time zone and the load of the restaurants DON VITO.
4.7. The registration on the site www.pizzadonvito.com entitles the users to participate in the promotional campaigns conducted by the Holder.




V. LIMITATION OF LIABILITY
5.1. The provision of services and access to the resources of the sites does not include the provision of computer equipment and connectivity for the transmission of information packages between the user and the website, necessary to access the resources of the website. The owner is not responsible for any interference or technical problems due to accidental events and those related to the use of services due to the operation of computer equipment by the user (hardware or software problem, internet connection problem, etc.).
5.2 The owner is not responsible for malicious and incorrect actions by third parties.
5.3 The sole responsibility for the content of advertising materials lies with the advertisers. Advertisements and other third-party materials on the sites should be made in accordance with applicable national and Community legislation in the field of protection of industrial property, copyright, competition, consumers and comply with the rules of good commercial practice and good manners.


VI. EFFECT, PUBLICATION AND CHANGE OF THE GENERAL TERMS




6.1. Links to the General Terms and Conditions are located in the usual way at the bottom of the Owner's websites.
6.2. By submitting a request from a user and receiving a response for loading, regardless of the geographical location of the user, including by indirect loading, by using a hyperlink ("electronic link" within the meaning of the E-Commerce Act), banner and / or other appropriate means , according to the technology used, to him from another website, as well as with voluntary registration, the user makes an electronic statement within the meaning of the Electronic Document and Electronic Signature Act, declaring that he wishes to use the services provided by the Holder, that he is familiar with these General conditions, as in the relationship between him and the Holder they have the force of a contract to be observed.
6.3. The General Terms and Conditions are in force for the parties from the execution of the electronic statement by the user until the moment of termination of the use of the Holder's services by leaving the respective site, and at each new entry a new contract is concluded.
6.4. In case of amendments and / or additions to the General Terms and Conditions, the owner notifies the users in an appropriate manner about the changes made - by publishing in a prominent place on its website a notice of the changes and / or additions to the General Terms and Conditions and the text of the changes. 7 days before the entry into force of the amendments and / or additions.
6.6. The General Terms and Conditions shall enter into force on the date of their publication and last update



VII. DISPUTES

All disputes arising out of or relating to these General Terms and Conditions, including disputes arising out of or relating to their interpretation, invalidity, performance or termination, as well as disputes concerning the filling of gaps in them or their adaptation to new circumstances, will be resolved through negotiations, and in case of non-agreement - in court






</textarea>
     
      </ul>
      </div>
      <div class="form-group">  
      <input type="checkbox" class="" required="required" > Agree to the rules
      </div>
     
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" value="Confirm">
      </div>

      </form>
    </div><!-- /.modal-content -->
    
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

