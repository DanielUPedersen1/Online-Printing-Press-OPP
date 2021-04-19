<div class="footer-top widget-category">
				<div class="container">
					<div class="row">
						
				        <div class="col-md-3 col-sm-6 col-xs-12">
							<h3 class="sv-footer-header">quick links</h3>
							<ul>
								<li>
									<a href="index.php">
										Home
									</a>
								</li>
								<li>
									<a href="aboutus.php">
										About Us
									</a>
								</li>
								<li>
									<a href="stationary.php">
										Stationary
									</a>
								</li>
								<li>
									<a href="forms.php">
										Forms
									</a>
								</li>
								
							</ul>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
                       <h3 class="sv-footer-header">&nbsp;</h3>
                       <ul>
								<li>
									<a href="login.php">
										Login
									</a>
								</li>
								
								<li>
									<a href="books.php">
										Books
									</a>
								</li>
								<li>
									<a href="feed-back.php">
										Feedback
									</a>
								</li>
								<li>
									<a href="contact.php">
										Contact us
									</a>
								</li>
							</ul>
                        </div>
						<div class="col-md-6 col-sm-6 col-xs-12">
                      <?php 
                            require('db_connect.php'); 
                            require('valid.php');
                        ?>
                       <form class="sv-contact-form" name="feedback_form" id="feedback_form" action="feedback_insert.php"  method="post" enctype="multipart/form-data">
                        <center><h4 style="color:white" align="">FEEDBACK</h4></center>    
						<table border="0" align="center">                       
                        <tr>
                        <td><label style="color:white">Name &nbsp;</label></td>
                        <td style="padding:2px;"><input type="text" name="feedback_name" id="feedback_name" class="form-control" required  placeholder="FEEDBACK"></td>
                        <br>
                        </tr>
                            
                        <tr>
                        <td><label style="color:white">Subject &nbsp;</label></td>
                        <td style="padding:2px;"><input type="text" name="feedback_subject" id="feedback_subject" class="form-control" required></td>
                        </tr>
                
                        <tr>
                        <td><label style="color:white">Description &nbsp;</label></td>
                            <td style="padding:2px;"><textarea name="feedback_description" id="feedback_description"  class="form-control" required> </textarea></td>
                        </tr> 
                        
                        <tr>
                        <td style="padding:2px;" colspan="2" align="center"><button type="submit" class="btn btn-primary">Submit</button></td>
                        </tr>
                        
						</table>
                 
                </form>
                       
                        </div>
					</div>	
				</div>
			</div>
				
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12 vcenter col-sm-6 col-xs-12 sv-copyright">
						<center>
							<p>&copy; 2018 - Government Printing Press Developed By Priyanka Ganachari and Ruksar</p>
							</center>
						</div>
						
					</div>
				</div>
			</div>