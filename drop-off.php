<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">


<HEAD>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="logos/gea-horizontal.svg">
<link rel="preload" as="image" href="webp/build-blue-450px.webp">
<link rel="preload" as="image" href="webp/blue-ode-750px.webp">



_END;?>

<?php require_once ("meta/drop-off-$lang.php");?>

<?php require_once ("header.php");?>




<STYLE>


	
@media screen and (max-width: 700px) { 
	.splash-content-block {
		text-align: left;
		height: 73vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
       
		background: url(svgs/brik-market-banner2.svg) bottom;
        background-color: #2A91DA;
		
    	background-repeat: no-repeat;
		background-size: cover;
		margin-top: 45px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;
	position: relative;

	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
		text-align: left;
		height: 60vh;
		padding: 50px 7% 50px 7%;
		z-index: 5;
		position: relative;
		
        
		background: url(svgs/brik-market-banner2.svg) bottom;
        background-color: #2A91DA;
		
    	background-repeat: no-repeat;
		margin: -3px 0 -20px 0;
		display: flex;
 		 flex-wrap: wrap;
 		 box-sizing: border-box;
		  flex-direction: row;
		  width: 100%;
		  background-size: cover;

	position: relative;


}
}


@media screen and (min-width: 700px) { 
.splash-image {
  z-index: 5;
  position: relative;
  text-align: center;
  flex: 35%;
	padding: 0px;
	box-sizing: border-box;
	margin: auto;
}
}


@media screen and (min-width: 700px) { 
.splash-box {
  z-index: 5;
  position: relative;
  flex: 65%;
	padding: 10px 30px 0px 0px;
	box-sizing: border-box;
	text-align: right;
    margin: auto;
}
}



@media screen and (max-width: 700px) { 
.splash-image {
  z-index: 5;
  position: relative;
  text-align: left;
  flex: 25%;
  width: 250px;
	padding: 0px;
	box-sizing: border-box;
	margin: 0px 0px 0px 10px;
}
}



@media screen and (max-width: 700px) { 
.splash-box {
	position: relative;
    flex: 100%;
	padding: 10px 10px 0px 0px;
	box-sizing: border-box;
	text-align: right;
    margin: auto;
}
}



.splash-heading { 
    /*font-family: 'Mulish', Arial, Helvetica, sans-serif;*/
    font-family: Arvo, serif;
  color: white;
  font-weight: 500;
  text-shadow: 0 0 8px black;

}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 3.0em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 4em;
      line-height: 1.3;
      margin: 40px 0 10px;
  }
}


.splash-sub {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: #fff;
  /*text-shadow: 0px 0px 10px #fff;*/
  margin: 15px 0;
  text-shadow: 0 0 7px black;
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.9em;
		line-height: 1.3;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 2.5em;
		line-height: 1.3;
		font-weight: 400;
  }
}


#splash-bar {
	margin-top: -50px;
	width: 100%;
	
	height:80px;	
	
	position: relative;
	z-index: 0;

box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
    background-color: #2A91DA;

	-webkit-transform: skewY(-3deg);
  -moz-transform: skewY(-3deg);
  -ms-transform: skewY(-3deg);
  -o-transform: skewY(-3deg);
  transform: skewY(-3deg);
	margin-bottom: 40px;

}

hr {border: gray;
border-style: dashed;
border-width: 1px;
margin-top: 31px;
margin-bottom: 31px;}
	
</style>	

</head>
							  
											  
<BODY id="full-page">

	<div id="load-background">

<!-- MENU BAR-->	
         
		<?php include 'menu-bar.php';?>

<!--PAGE BANNER-->

	
<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading">The Brik Market</div>
	    <div class="splash-sub">Drop off, sell, trade, buy ecobricks or offer your space as a community exchange hub.</div>
	</div>
	<div class="splash-image"><img src="webp/brikmarket-400px.webp?v1.1" style="width: 80%">
    </div>	
</div>
<div id="splash-bar"></div>
<!--<div id="header-bar2"></div>-->


<!-- PAGE CONTENT-->

<a name="top"></a>

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				<p>Introducing a new service to facilitate the trade of ecobricks among ecobrickers, projects, businesses and communities.</p>
    
			</div>
			
			
			<div class="page-paragraph">
                        <p>Connecting ecobrick makers, builders, project leaders and investors in plastic sequestration our new Brik Market enables the exchange of authenticated sequestered plastic.  Post your ecobricks for pickup.  Share your service of receiving ecobricks.  Ask for ecobricks for a project.</p>

                        <p>The Brik Market is part of <a href="/gobrik">GoBrik platform</a> and connects to the <a href="brikcoins.php">Brikcoin manual blockchain</a>.  The market is maintained by the <a href="about.php">Global Ecobrick Alliance</a> pursuing its mission of accelerating <a href="transition.php">petro-capital and plastic transition</a>.</p>

                      
							
            </div>	
			<a name="DROP"></a>
            <div class="reg-content-block" id="block1">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Dropping Off Ecobricks</h4>
                    <h5>Use the Brik Market to find community hubs and projects that are taking ecobricks.</h5>   
                    <br>
                    </div>

                    <button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
                </div>

                <div id="preclosed1">

                <br>
                <p>Ecobricks are ideal for making small scale projects at home.  However, should you have more ecobricks than you need, you can make an offer to drop them off in your community.  Often ecobrickers are in need of many ecobricks for a particular project.  The Brik Market is a way to connect supply and demand.</p>
                
                
                 
                </div>
                </div>

            <a name="HUBS"></a>
            <div class="reg-content-block" id="block10">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Ecobrick Community Hubs</h4>
                    <h5>Register to receive payment for collecting, storing and distrubuting ecobricks for community projects.</h5>   
                    <br>
                    </div>

                    <button onclick="preclosed10()" class="block-toggle" id="block-toggle-show10">+</button>
                </div>

                <div id="preclosed10">
        <br>

            <img src="photos/eco-brick-storage-1000px.jpg" width="100%" alt="An example of an eco brick storage depot to prepare for building" loading="lazy">

            <br>
            <p>Some ecobrickers offer the service of collecting, storing and distributing ecobricks to community projects.  This involves costs to them that they defer by charging for the service of collecting ecobricks or serving as drop-off centers.</p>
            <p>We refer to these locations as "Ecobrick Community Hubs".  They include cafes, zero-waste shops, restaurant and community centers that are helping accelerate plastic transition in their area.  Paying their requested 'hub fee' is a way to support their valuable service.</p>

           

            

            <br>

                <h5>ℹ️ Learn about ecobrick storage: <a href="/how">How to make an ecobrick</a></h5>

         </div>
        </div>

                
                
            <a name="PRICING"></a>
			<div class="reg-content-block" id="block3">
				<div class="opener-header">
					<div class="opener-header-text">
						<h4>Pricing Ecobricked Plastic</h4>
						<h5>On the Brik Market We a use a system of pricing per Kg of authenticated ecobricked plastic.</h5><br>
					</div>
					<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
				</div>

				<div id="preclosed3">

                <img src="https://cdn.ecobricks.org/wp-content/uploads/2020/04/2020-Manual-Blockchain.svg.png" width="90%" loading="lazy" alt="eco brik authentification process">
            
					<p>On the Brik Market, only ecobricks that have been logged and authenticated on the GoBrik system are eligible for exchange.  This system ensures that only high quality ecobricks that have been indipendently validated to meet GEA standards are being exchanged.</p>  . 

                    <p>In order to provide a consistent means of pricing ecobricks across their various sizes and shapes, we cost then per kg of AES plastic.</p>
                    
				</div>
			</div>





             <br>
             <div class="page-paragraph-reg">
                 
                 <div class="row">
                
                      <div class="main2">
                         <h4>Start Exchanging</h4>
                        
                         <p>Starting perusing the Brik Market today!  You'll need your GoBrik account to take or post offers, but that's ok, its easy and free to create one</p>
                        
                        
                    
                    </div></p>

                    <div class="side2">
                        <br><img src="webp/albo-offer-350px.webp" width="100%" alt="eco brick being bought with a brikcoin by a bird" loading="lazy" alt="eco brick being bought with a brikcoin by a bird.">
                    </div>
                </div>
                <p>Sign up button coming soon.</p><br>
					<br>
            </div>
            


        </div>
	

		<div class="side">
	
        <div id="side-module-desktop-mobile">
					<img src="webp/gea-logo-400px.webp" width="90%" alt="The Global Eco Brick Alliance">
					<h4>Global Ecobrick Alliance</h4>
					<h5>The GEA is dedicated to accelerating plastic transition.  	We preside over the GoBrik platform and the Brikcoin blockchain.</h5><br>
                    <a class="module-btn" href="about.php">Learn More</a>
					
				</div>

            <div id="side-module-desktop-mobile">
                <img src="webp/brikcoins-450px.webp" width="100%" loading="lazy" alt="eco brik brikcoin blockchain">
                <h4>Brikcoin Blockchain</h4>
                <h5>The Brikmarket makes use of authenticated ecobrick sequestered plastic that has been validated on our chain.</h5><br>
                <a class="module-btn" href="brikcoins.php">Learn More</a>
            </div>

			<div id="side-module-desktop-mobile">
				<img src="webp/earthhome-400px.webp" width="100%" loading="lazy" alt="eco brik and earth building can make regenerative structures">
				<h4>Plastic Transition</h4>
				<h5>Using ecobricks as a means of community barter and exchange is another way to go local and accelerate petro-capital transition.</h5><br>
				<a class="module-btn" href="transition.php">Learn More</a>
			</div>


		

		</div>

	</div>
</div>





	<!--FOOTER STARTS HERE-->


	<?php include 'footer.php'; ?>


	<!--FOOTER ENDS HERE-->

	


<!-- CUSTOM PAGE SCRIPTS-->
<script src="accordion-scripts.js?v2" defer></script> 

</div>
</body>
</html>
