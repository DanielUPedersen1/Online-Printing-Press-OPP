<div class="container">
				<div class="sv-top-header">
					<div class="header-toggle">
						<button type="button" class="h-toggle">
							<i class="fa fa-map-marker"></i>
						</button>
					</div>
					<div class="row">
						<div id="header-wrap" class="h-close">	
							<div class="sv-top-left col-md-8 col-sm-8 col-xs-12">
								<ul>
									<li class="email"><a href="mailto:rukasarbanupatil13@gmail.com">priynkasg1998@gmail.com</a></li>
									<li class="tel"><a href="tel:+91-7406985299">+91-7406985299</a></li>
									<li class="address">Goa Road Police Headquarters, Sadhankeri Dharwad 580008.</li>
								</ul>
							</div>
							<div class="sv-top-right col-md-4 col-sm-4 col-xs-12">
							
							<?php 
                                    error_reporting(0);
                                    session_start();   
                                        
                                    include('db_connect.php');
                                   
                                    $uname=$_SESSION["govtuser"];
                                    $sq="SELECT * FROM GOVT_USER WHERE govt_user_username='$uname'";
                                    $result=mysqli_query($conn,$sq);
                                    $row=mysqli_fetch_array($result);
                                    $govt_user_id=$row["govt_user_id"];
                                
                                    $totals=0;    
                                
                                    $sql="SELECT * FROM order_details od, govt_user gu, product_details pd where od.govt_user_id=gu.govt_user_id and od.product_details_id=pd.product_details_id and gu.govt_user_id='$govt_user_id'  and od.order_details_status='cartinsert' ";
					                $result=mysqli_query($conn,$sql);					               
                                   /* $data =array();*/
                                        
                                if(mysqli_num_rows($result)>0)
                                {
                                    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                       $totals++; 
                                    }
                                    
                                }
                                ?>
								<ul>
									<li class="sv-cart"><a href="cart.php" style="font-size:15px;"><i class="fa fa-shopping-cart" ></i> </a>&nbsp;<sup><b style="font-size:15px;"><?php echo $totals; ?></b></sup> </li>
									<li class="sv-login"><a href="profile.php">Profile</a></li>
									<!--<li class="sv-login"><a href="changepassword.php">ChangePassword</a></li>-->
									<li class="sv-login"><a href="logout.php">Signout</a></li>
									
									<!--<li class="sv-wishlist"><a>wishlist</a></li>-->
									
								</ul>
							</div>
							
						</div>
					</div>
				</div>
				<!--<div class="sv-bottom-header">
					<div class="row">
						<div class="logo col-md-3 col-sm-12 col-xs-12 vcenter">
							<a href="index.html">
								<img src="images/logo.png" alt="logo">
							</a>
						</div>
						<div class="search col-md-6 col-sm-12 col-xs-12 vcenter">
							<form role="search">
								<div class="sv-search-wrap">
									<select name="select">
										<option>All Categories</option>
										<optgroup label="option">
											<option value="">Option 1</option>
											<option value="">Option 2</option>
											<option value="">Option 3</option>
											<option value="">Option 4</option>
											<option value="">Option 5</option>
										</optgroup>
									</select>	
								</div>
								<div class="sv-search-form">
									<input type="text" placeholder="search entire store here">
									<button type="submit" id="searchsubmit">
										<i class="fa fa-search"></i>
									</button>
								</div>
							</form>
						</div>
						<div class="shopping-cart col-md-3 col-sm-12 col-xs-12 vcenter">
							<a href="#">
								<div class="header-icon">
									<i class="fa fa-shopping-bag"></i>
								</div>
								<div class="text-holder">
				                   <span class="name-text">Shopping Cart</span>
				                   <span class="amount">$0.00</span> <span class="count">0 items</span>
				               </div>
							</a>
						</div>	
					</div>
				</div>-->
			</div>