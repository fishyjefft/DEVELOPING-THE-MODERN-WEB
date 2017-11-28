<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<?php 
	include('Header.php');
?>
  
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
		
			<div class="intro-heading text-uppercase">"A MODERN MULTIPLAYER MASTERPIECE"<small><br />- DESTRUCTIOD</small></div>
          <h6><div class="intro-lead-in">JOIN THE BATTLE. BRING YOUR FRIENDS. </div><h6>
          
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">Services we provide.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">E-Commerce</h4>
            <p class="text-muted">We provide some bundles for hero and also limited arcana which contain gem which change their original color to other color based on the gem.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Game Details</h4>
            <p class="text-muted">The most-played game on Steam.
			Every day, millions of players worldwide enter battle as one of over a hundred Dota heroes. And no matter if it's their 10th hour of play or 1,000th, there's always something new to discover. With regular updates that ensure a constant evolution of gameplay, features, and heroes, Dota 2 has truly taken on a life of its own.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Web Security</h4>
            <p class="text-muted">There is a face to face trade or you might ask for a middle man for completeing the trade. Also, customer details would not leak to outsider.</p>
          </div>
        </div>
      </div>
    </section>
	
	<p align="center"><img src = "gif/dota.gif" alt = "dota" width = "200px" height= "125px"> </p>
	 

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
            <h3 class="section-subheading text-muted">Characteristic of DotA 2</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/heroes.png" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Heroes</h4>
              <p class="text-muted">Characters</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/skills.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Skills</h4>
              <p class="text-muted">Reaction</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/map.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Maps</h4>
              <p class="text-muted">Objective</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/items.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Items</h4>
              <p class="text-muted">Build</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/midas.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Gold and experience</h4>
              <p class="text-muted">Currency</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/icefrog.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Ice Frog</h4>
              <p class="text-muted">Developer</p>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	<!-- GIF -->
		<p align="center"> <img src = "gif/dota 2.gif" alt = "dota 2" width = "200px" height= "200px"> </p>
		
    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">What is DotA 2.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2003</h4>
                    <h4 class="subheading">Born of DotA</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Defense of the Ancients (DotA) is a multiplayer online battle arena mod for the video game Warcraft III: Reign of Chaos and its expansion, Warcraft III: The Frozen Throne. 
					<br />Designers : Eul , Steve Feak , IceFrog </p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2009-2013</h4>
                    <h4 class="subheading">From DotA to DotA 2</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">American video game developer Valve Corporation acquired the intellectual property rights to DotA in 2009 to develop a stand-alone sequel, Dota 2, which released in July 2013.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2013</h4>
                    <h4 class="subheading">Release of DotA 2</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">The title was formally announced on October 13, 2010; and was released as a Free to Play game on July 9th, 2013 for Windows, and July 18th, 2013 for Mac OS and Linux. It is the successor to the very popular Warcraft 3 mod, Defense of the Ancients, which was based on the Aeon of Strife map for StarCraft.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>August 1, 2011 </h4>
                    <h4 class="subheading">The International (TI)</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">The International (TI) is an annual Dota 2 eSports tournament hosted by Valve Corporation, the game's developer. The first tournament took place in Cologne, Germany at Gamescom in 2011 and was held shortly after the public reveal of Dota 2, with a total prize pot of $1.6 million.Valve announced the first edition of The International on August 1, 2011. 16 teams were invited to compete in the tournament, which would also serve as the first public viewing of Dota 2, and it was streamed online with commentary in four languages; English, Chinese, German, and Russian. </p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Stay Calm
                    <br>And
                    <br>Play DotA 2</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
	
	<!-- GIF -->
		<p align="center"> <img src = "gif/invoker.gif" alt = "invoker" width = "200px" height= "200px"> </p>
		
    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
         
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/11.jpg" alt="">
              <h4>S.M.D Choon</h4>
              <p class="text-muted">Lead Designer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/kachun_9997/?hl=en" class ="btn-instagram">
                    <i class="fa fa-instagram fa-fw"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/chooi.kachun.79?fref=ts">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/22.jpg" alt="">
              <h4>L.I.C Fishy</h4>
              <p class="text-muted">Lead Marketer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/fishyjefft/?hl=en" class ="btn-instagram">
                    <i class="fa fa-instagram fa-fw"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/fishyjefft">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/33.jpg" alt="">
              <h4>I.D.G.A.F Bread </h4>
              <p class="text-muted">Lead Developer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                 <a href="#" class ="btn-instagram">
                    <i class="fa fa-instagram fa-fw"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/chuah.j.jie?fref=ts">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted"></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="https://dota2.gamepedia.com/Windranger">
              <img class="img-fluid d-block mx-auto" src="img/logos/wr.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="https://dota2.gamepedia.com/Invoker">
              <img class="img-fluid d-block mx-auto" src="img/logos/invo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="https://dota2.gamepedia.com/Earthshaker">
              <img class="img-fluid d-block mx-auto" src="img/logos/es.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="https://dota2.gamepedia.com/Phantom_Assassin">
              <img class="img-fluid d-block mx-auto" src="img/logos/pa.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Sign up -->
    <section id="signup">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Sign Up</h2>
            <h3 class="section-subheading text-muted">Fishy - 0161234567  Choon - 0163216547  Bread - 0164563217</h3>
			<h4 class="section-heading text-uppercase">
			<?php 
				$url = "htttp://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			
				
				if (strpos($url, 'error=uid') !== false) {
					print "Username Existed!";
					
				}
				
				
				
				 if (strpos($url, 'error=cfmpwd') !== false) {
					print "Your confirmed password does not match the original password"; 
				}
				
				 
				
				
				
				?>
		</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form action="signup.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="uid" type="text" placeholder="User Name *" name="uid" required data-validation-required-message="Please enter your User name."value="<?php if (isset ($_POST['uid'])) {print htmlspecialchars($_POST['uid']); } ?>"/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" name="email" required data-validation-required-message="Please enter your email address."value="<?php if (isset ($_POST['email'])) {print htmlspecialchars($_POST['email']); } ?>"/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="pwd" type="password" placeholder="Password *"name="pwd" required data-validation-required-message="Please enter your password."value="<?php if (isset ($_POST['pwd'])) {print htmlspecialchars($_POST['pwd']); } ?>"/>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="cfmpwd" type="password" placeholder="Confirm Password *" name="cfmpwd" required data-validation-required-message="Please Confirm your password."value="<?php if (isset ($_POST['cfmpwd'])) {print htmlspecialchars($_POST['cfmpwd']); } ?>"/>
                    <p class="help-block text-danger"></p>
                  </div>
				   <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" name="phone" required data-validation-required-message="Please enter your phone number."value="<?php if (isset ($_POST['phone'])) {print htmlspecialchars($_POST['phone']); } ?>"/>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="Submit" class="btn btn-primary btn-xl text-uppercase" type="submit">Submit</button>
				  	<!-- GIF -->
						<p align="right"> <img src = "gif/pa.gif" alt = "dota 2" width = "200px" height= "200px"> </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; GuanYingMaDotA2 2017</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Heroes</h2>
                  <p class="item-intro text-muted">DotA 2</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/heroes.png" alt="">
                  <p>Heroes are each unique characters within Dota 2. At the start of each game, two teams of five are randomly assigned to Radiant and Dire, then sides take turns selecting a Hero from the Hero Pool. Each player controls a single Hero and any units that Hero controls, such as summoned units like Eidolons. The selection of these 10 heroes is commonly referred to as that match's draft.
					Heroes will gain experience when enemy units are killed nearby. They start the game at level one, and as they earn experience, they eventually level up, and each level grants more increases to the hero's attributes and an ability point to spend on upgrading abilities or more attribute bonuses.
					In addition to a Hero's spells, each hero has a melee or ranged attack which does an amount of damage based on the primary attribute: strength, agility, or intelligence.
					Dota 2 has currently implemented 113 Heroes. 112 of these heroes were based on heroes from DotA Allstars, and after porting all the original heroes, 1 more original hero has been added.</p>
					
					

						<table class="table" align="center" >
					<thead> 
						<tr>
							<th> ID </th>
							<th> Hero </th>
							<th> Name </th>
							<th> Description </th>
							
							
						</tr>
					</thead>
				<?php 
	
					include('dbh.php');
						
							$query = 'select heroID, file, hero, description_of_hero from hero;';
							$result = $conn->query($query);
							$data = array();
							$hero_data = false;
						
							if($result->num_rows > 0)
							{
								$hero_data = true;
									
								while($row = $result->fetch_assoc())
								{
									$data[] = $row;
								}
							}
							else
							{
								$hero_data = false;
							}
						
						$result->close();
						$conn->close();

						?>
 
					<tbody>
							<?php
									
									if($hero_data == true)
									{
										foreach($data as $row)
										{
											echo '<tr>';
											$i=0;
											
											foreach($row as $col)
											{
												switch($i)
												{
													case 0:
													case 2:
													case 3:
														echo '<td>'.$col.'</td>';
														break;
													
													case 1:
														echo '<td><a href="Modal_Includes/Images/'.$col.'"><img src="Modal_Includes/Images/'.$col.'" width="200" height="200" alt="" align="center" /></a></td>';
														break;
												}
												
												$i++;
											}
											
											echo '</tr>';
										}
									}
									else
									{
										echo '<tr><td colspan="4" class="text-center">No Data</td></tr>';
									}
										
									?>
								</tbody>


								</table>
								<?php
								
								if($isAdmin == true)
								{
									echo '<button type="button" data-toggle="modal" data-target="#add_some_data">Add item</button>';
								}
									
									?>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Skills</h2>
                  <p class="item-intro text-muted">Merge of various hero skills</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/skills.jpg" alt="">
                  <p>There is a level-up system in dota 2 which will provide you 1 skills point for each level-up. Different hero contain different skills and effect which can let players to explore various type of combo and play type.</p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Map</h2>
                  <p class="item-intro text-muted">DotA 2</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/map.jpg" alt="">
                  <p>The Map is the playing field for all Dota 2 matches. It is comprised of two sides, one for the Radiant faction, and one for the Dire faction. To win, players must destroy the opposing side's Ancient, an important building at the center of each team's base. The map is represented in the interface by the minimap. It is also important to note that the game only contains one map by default, however, custom games can feature new, community created maps.</p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Items</h2>
                  <p class="item-intro text-muted">DotA 2</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/items.jpg" alt="">
                  <p>Items are used to give Heroes additional various abilities, attack modifiers, bonus attributes, as well as secondary stats such as armor, attack speed, or improved regeneration of health or mana. Items are sold at Shops, which can be found at the base, the side-lanes, or the more secluded Secret Shops. More powerful items can be constructed by combining weaker items in fixed combinations which require a specific set of items to be in the inventory together. Items take up space in the Hero's inventory, courier's inventory, or stash, all of which have 6 slots for storage and an additional 3 backup space where items are muted and can be switched with the main inventory items with the activation delay of 6 seconds.</p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Gold and Exp</h2>
                  <p class="item-intro text-muted">DotA 2</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/midas.jpg" alt="">
                  <p>Gold is granted periodically, but is largely accumulated by killing hostile units, such as creeps, towers, or enemy Heroes. Depending on what unit you kill, gold may be rewarded solely to the killer (such as creep bounty), or distributed to the killer's team (such as towers, barracks, couriers and Roshan).</p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Ice Frog</h2>
                  <p class="item-intro text-muted">DotA 2</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/icefrog.jpg" alt="">
                  <p>IceFrog is the lead developer for both Dota 2 and the original Defense of the Ancients. To date, he has remained pseudonymous, and other than revealing that he was 25 years old in early 2009, characteristics such as his physical description and real name are unknown. IceFrog speaks English and Chinese, which he learned in order to better communicate with Dota's large fanbase in China.</p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	


	
	<!-- Background Music -->
	<embed name="BGM" src="bgm.mp3" width="0" height="0">
	<?php require_once ('Modal_Includes/Modal_Interface.php'); ?>
									

	
  </body>

</html>
