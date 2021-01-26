<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Applied Macros system">
    <meta name="description" content="Save Homeland Foundation, is an Initiative of The Sensitisation Against Environmental Hazard, Domestic Violence And Crime. Her Community Oriented Policing Services (COPS) has been introduced  to help law enforcement agencies implement and enhance community policing. ">
    <meta name="keywords" content="homeland foundation, homeland security, homeland, community policing, security, police, secure, community, crime, fight crime, rape, cultism, corruption, kidnapping">
    <title>Save Homeland Foundation - Your Neighbourhood watch</title>
    <link rel="icon" href="images/homeland_foundation_logo.png" type="image/png" size="32X32">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-5.12.1-web/css/all.css">
    
</head>
<body onload="displayHelp()">
        <!-- Top header -->
        <div class="topHeader" id="topHeader">
            <section class="socialLinks">
                <a target="_blank" href="https://facebook.com/homelandfoundation" title="Follow us on facebook"><i class="fab fa-facebook" style="color:#747171;"></i></a>
                <a target="_blank" href="https://twitter.com/homelandfoundationr" title="Follow us on twitter"><i class="fab fa-twitter" style="color:#747171;"></i></a>
                <a target="_blank" href="https://instagram.com/homelandfoundation" title="Follow us on instagram"><i class="fab fa-instagram" style="color:#747171;"></i></a>
            </section>
            <section class="callLinks">
                <p><i class="fas fa-phone-alt" style="color:#747171;"></i>052293650</p>
                
                <p><i class="fab fa-whatsapp" style="color:#747171;"></i>07035038500</p>

            </section>
        </div>
        <!-- main header with navigation -->
        <header id="mainHeader">
            <div class="logo_title">
                <a href="index.php" title="save homeland security foundation">
                    <img src="images/homeland_foundation_logo.png" alt="Homeland Foundation">
                    <h1>
                        <div class="title">Homeland Foundation</div>
                        <div class="tagline">Your neighbourhood watch</div>
                    </h1>
                </a>
            </div>
            <!-- navigation -->
            <nav id="navigation">
                <ul>
                    <li><a href="about.php" title="who we are">About</a></li>
                    <li><a href="services.php" title="What we do">services</a></li>
                    <li><a href="javascript:void(0);" title="All our work">Events<i class="fas fa-sort-down"></i></a>
                        <ul>
                            <li><a href="event_gallery.php" title="Photos of our recent events">Event gallery</a></li>
                            <li><a href="event_media.php" title="Recent videos">Event media</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.php" title="Trending topics">Blog</a></li>
                    <li><a href="contact_us.php" title="Contact us">Contact</a></li>
                </ul>
            </nav>
            <div class="menu-icon" onclick="displayMenu()"><a href="javascript:void(0);"><i class="fas fa-bars" style="color:#fff"></i></a></div>
            
        </header>
        <!--banner slides-->
        <section id="banner">
            <div class="slides">
                <div class="slide" id="slide1">
                    <div class="slideImg">
                        <img src="images/homeland_community_security.jpg">
                    </div>
                    <div class="slider animate">
                        <h2>Advancing neighbourhood Security</h2>
                        <p>We keep watch, so you dont have to. Securing you, your family and property is our priority.</p>
                        <div class="buttons">
                            <button><a href="about.php">Learn more</a></button>
                            <button><a onclick="displayComplainBox()" href="javascript:void(0);">Complaints</a></button>
                        </div>
                    </div>
                </div>
                <div class="slide" id="slide2">
                    <div class="slideImg">
                        <img src="images/homeland_5.jpg">
                    </div>
                    <div class="slider">
                        <h2>Community Policing</h2>
                        <p>Your neighbourhood watch. We keep watch so you dont have to.</p>
                        <div div class="buttons">
                            <button><a href="services.php">Learn more</a></button>
                            <button><a href="#" class="join">Volunteer</a></button>
                        </div>
                    </div>
                </div>
                <div class="slide" id="slide3">
                    <div class="slideImg">
                        <img src="images/environmental_hazard.jpg" alt="environmental_hazard">
                    </div>
                    <div class="slider">
                        <h2>Environmental hazard control</h2>
                        <p>We help control and manage environmental hazards of any kind. Just make a call</p>
                        <button><a href="services.php">Learn more</a></button>
                    </div>
                </div>
                <div class="slide" id="slide4">
                    <div class="slideImg">
                        <img src="images/domestic_violence.jpg" alt="domestic violence">
                    </div>
                    <div class="slider">
                        <h2>Fight against Domestic Violence</h2>
                        <p>Make the call, and we will make it stop</p>
                        <button><a href="services.php">Learn more</a></button>
                    </div>
                </div>
            </div>
        </section>
        <!--Featured addon services-->
        <section class="addons">
            <div class="addonfeat">
                <section class="addonsFeatures">
                    <i class="fas fa-shipping-fast"></i>
                    <div class="addonsNote">
                        <h3>We are timely</h3>
                        <p>We always respond swiftly to incidents</p>
                    </div>
                </section>
                <section class="addonsFeatures">
                    <i class="far fa-money-bill-alt"></i>
                    <div class="addonsNote">
                        <h3>We are Non profit</h3>
                        <p>We do not charge the community</p>
                    </div>
                </section>
                <section class="addonsFeatures" onclick="displayComplainBox()">
                    <i class="fas fa-headset"></i>
                    <div class="addonsNote">
                        <h3>24/7 online support</h3>
                        <p>We are here to help you</p>
                    </div>
                </section>
            </div>
        </section>
        <main>
        <!-- About us -->
        <section id="whoWeAre">
            <h2>Get to know us</h2>
            <hr size="5">
            <div class="aboutUs">
                <div class="aboutUsText">
                    <p>Save Homeland foundation, also known as Homeland security Nigeria is a Sensitization against environmental Hazard, Domestic Violence and Crime Initiative. <br><br>It is a way for law enforcement and the citizens to work together not only for disaster preparedness but for all hazards and encourage citizens to volunteer in their communities to encourage community policing which is our Community Oriented Policing Services (COPS) introduced to help law enforcement agencies implement and enhance community policing.</p>
                    <button><a href="about.html">Read more</a></button>
                </div>
                <img src="images/homeland_7.jpg" alt="Save homeland foundation">
            </div>
        </section>
        <!--Service section-->
        <section id="ourServices">
            <h2>Featured Services</h2>
            <p>We are dedicated to offering quality community security to your neighbourhood. Take a glance at our featured services</p>
            <hr size="5">
            <div class="serviceList">
                <div class="services">
                    <div class="service" id="cakeService">
                        <img class="servImg" src="images/community-security.jpg" alt="Neighbourhood security">
                        <div class="servSlideImg">
                            <img src="images/homeland_2.jpg" alt="Neighbourhood security">
                        </div>
                        <h3>Your neighbourhood watchmen</h3>
                    </div>
                    <button class="serviceBtn"><a href="services.html" title="Neighbourhood watch">Community Policing</a></button>
                </div>
                <div class="services">
                    <div class="service" id="beddingService">
                        <img class="servImg" src="images/environmental_hazard2.jpg" alt="Controlling environmental hazards">
                        <div class="servSlideImg">
                            <img src="images/environmental_hazard.jpg" alt="Controlling environmental hazards">
                        </div>
                        <h3>Preventing Environmental Hazards</h3>
                    </div>
                    <button class="serviceBtn"><a href="services.html" title="Environmental hazard control">Environmental Hazard</a></button>
                </div>
                <div class="services">
                    <div class="service" id="eventService">
                        <img class="servImg" src="images/domestic_violence2.jpg" alt="fighting domestic violence">
                        <div class="servSlideImg">
                            <img src="images/domestic_violence.jpg" alt="fighting domestic violence">
                        </div>
                        <h3>Fight against domestic violence</h3>
                    </div>
                    <button class="serviceBtn"><a href="events.html" title="Events planning and decor">Domestic Violence</a></button>
                </div>
            </div>
        </section>
        <section id="callToAction">
            <div class="callToActionImg">
                <img src="images/local-crime.jpg" alt="say no to crime">
            </div>
            <div class="takeAction">
                <h3>Say no to crime</h3>
                <p>Are you suspecting a crime in your area?.<br>Are you experiencing unrest in your local area?<br>We are closer to you than you think<br><br>Give us a call or click the button below for a swift response</p>
                <div div class="buttons">
                    <a href="javascript:void(0);" onclick="displayComplainBox()"><button>Report an incident</button></a>
                    <a href="#" class="join"><button>Join us</button></a>
                </div>
            </div>
        </section>
        <!-- Upcoming events -->
        <section id="upComingEvents">
            <h2>Upcoming Events</h2>
            <hr size="5" style="background-color:rgb(29, 128, 111);">
            <div class="event_content">
                <div class="event_photo">
                    <img src="images/team_member.jpg" alt="neighbour hood watch">
                </div>
                <div class="event_text">
                    <h3>Benefits of Community Policing</h3>
                    <p>Community policing is seen as an effective way to promote public safety and to enhance the quality of life in a community. <br><br>
                    Implementing community policing changes the structure of policing and how it is managed. Community policing helps build up and strengthen the community. It also links the police and the community together. The partnership that develops over time can ultimately help the police find the underlying causes of crime within the neighborhood. By getting the community involved, the police have more resources available to them to help in crime prevention.<br><br>
                    We invite you to join us as we give more insight on community policing and its benefits</p>
                    <button class="join"><a href="#" title="Become a member">Join us today</a></button>
                    <button><a href="contact_us.php" title="Learn more">Learn more</a></button>
                </div>
            </div>
        </section>
        <!-- Recent events -->
        <section id="recentWork">
            <h2>Recent Events</h2>
            <hr size="5">
            <p>Have a glance at our recent events and other media tips</p>
            <div class="recentjobs">
                <figure>
                    <img src="images/homeland_1.jpg" alt="events">
                </figure>
                <figure>
                    
                        <img src="images/homeland_2.jpg">
                    
                </figure>
                <figure>
                    <video controls>
                        <source src="images/edo_vigilante.mp4">
                    </video>
                </figure>
                <figure>
                    <img src="images/homeland_3.jpg" alt="events">
                </figure>
                <figure>
                    <img src="images/homeland_5.jpg" alt="events">
                </figure>
                <figure>
                    <img src="images/homeland_4.jpg" alt="events">
                </figure>
                <figure>
                    
                        <img src="images/homeland_6.jpg">
                
                </figure>
                <figure>
                    <img src="images/homeland_7.jpg" alt="events">
                </figure>
                
            </div>
            <button><a href="event_gallery.php" title="See more photos of our events">View more</a></button>
        </section>
        <!-- Daily deals -->
        <!-- <section id="dailyDeal">
            <h2>Deal of the day</h2>
            <hr size="5">
            <div class="deal_of_today">
                <div class="deal_banner">
                    <img src="images/daily_deals.png" alt="deal of the day">
                </div>
                <div class="the_deal">
                    <a href="daily_deals.html">
                        <div class="deal_product">
                            <div class="deal_image">
                                <img src="images/loui_vuiton_sheet.jpg" alt="Louis vuiton bedsheet deal">
                            </div>
                            <div class="deal_details">
                                <p>Classic Loui Vuiton Bed sheet</p>
                                <p><s>N10,000</s> N5,000</p>
                                <p>50% Off</p>
                                <button>Order Now</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section> -->
        <!-- Client testimonies -->
        <!-- <section id="testimonial">
            <h2>Testimonies from the neighbourhood</h2>
            <hr size="5">
            <div class="testimonialSlide">
                <div class="testimoniesSlide">
                    <div class="testimonies">
                        <p><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem tenetur corporis in similique magnam. Ab soluta dolore aut alias voluptatum praesentium, autem exercitationem? Sed aliquid explicabo odit excepturi accusamus quibusdam.</q></p>
                        <p class="testifiers">Nosa Gobadia<br><span>Ugbowo, Benin city</span></p>
                    </div>
                    <div class="testimonies">
                        <p><q>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod quia, nemo accusamus accusantium reprehenderit laborum ipsa at porro quaerat odit incidunt facilis fuga quas quasi tenetur! Eaque, fugit. Illum, asperiores!</q></p>
                        <p class="testifiers">Amanda Nosakhare<br><span>Ekenwa barracks, Benin city</span></p>
                    </div>
                    <div class="testimonies">
                        <p><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque commodi obcaecati, cumque officia blanditiis eius at cum velit nemo, suscipit nesciunt a tempore inventore ad?</q></p>
                        <p class="testifiers">Julius Igbinosa<br><span>New Benin, Benin city</span></p>
                    </div>
                    <div class="testimonies">
                        <p><q>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio a iure atque! Voluptatibus iure laboriosam repellendus rerum voluptatum, recusandae expedita?</q></p>
                        <p class="testifiers">Mercy Agbonifo<br><span>MM Why, Benin city</span></p>
                    </div>
                </div>
            </div>
        </section> -->
        <section id="trends">
            <h2>Safety Tips and Thoughts</h2>
            <hr size="5">
            <div class="trendPosts">
                <article><a href="edo_vigilante_declare_war_on_cultist.php">
                    <figure>
                        <img src="images/homeland_3.jpg" alt="Edo vigilante declares war on cultists">
                        <figcaption>
                            <span style="background-color:red">Cultism</span>
                            <h3>Edo Vigilante Declares war on Cultists</h3>
                            <p>Edo State Vigilante network in Benin City has declared war on all cult activities as cult gang war reignites in Benin City....</p>
                        </figcaption>
                    </figure></a>
                </article>
                <article><a href="police_arrest_3_brothers_for_kidnapping.php">
                    <figure>
                        <img src="images/nigeria-police-arrest-kidnappers.jpg" alt="benefits of anti-cultism">
                        <figcaption>
                            <span style="background-color:blue">Crime & Kidnapping</span>
                            <h3>Police arrest brothers for kidnapping</h3>
                            <p>Police operatives attached to the Intelligence Response Unit of the NIgeria Police Force have arrested three (3) suspects namely; Johnson Emmanuel - 38years......</p>
                        </figcaption>
                    </figure></a>
                </article>
                <article><a href="how_to_prevent_hazards.php">
                    <figure>
                        <img src="images/hazards.jpg" alt="Preventing hazards">
                        <figcaption>
                            <span style="background-color:rgb(59, 163, 204)">Environment</span>
                            <h3>How to prevent hazards</h3>
                            <p>Environmental hazards of various types has destroyed most of nature and render people homeless. Here are some tips to avoid Hazards</p>
                        </figcaption>
                    </figure></a>
                </article>
            </div>
        </section>
    </main>
    <footer>
        <section class="mainFooter">
            <section class="mainFooter1">
                <div class="contactAddress">
                    <h3>For more info or to report an incident</h3>
                    <div class="address">
                        <i class="fas fa-home" style="color:rgb(29, 128, 111); font-size: 2.5em;"></i>
                        <div class="addtext">
                            <h4>Head office:</h4>
                            <p>360 Housing Complex Road  Ekpan, Effurun, <br> Delta state</p>
                        </div>
                    </div>
                    <div class="address phone">
                        <i class="fas fa-phone-volume" style="color:rgb(29, 128, 111); font-size: 2.5em;"></i>
                        <div class="addtext">
                            <h4>Call us:</h4>
                            <p>052293650<br>07035038500</p>
                        </div>
                    </div>
                    <div class="address email">
                        <i class="fas fa-envelope-open-text" style="color:rgb(29, 128, 111);; font-size: 2.5em;"></i>
                        <div class="addtext">
                            <h4>Email:</h4>
                            <p>contact@homelandfoundation.org <br>report@homelandfoundation.org</p>
                        </div>
                    </div>
                </div>
                <div class="subscribe_category">
                    <div class="subscribe">
                        <h3>Please subscribe to our newsletter</h3>
                        <form id="subscribe" method="post" action="subscribe.php">
                            <input type="email" id="email" name="email" placeholder="enter your email">
                            <input type="submit" id="submit" value="Subscribe">
                        </form>
                    </div>
                    <div class="category">
                        <h3>Links</h3>
                        <div class="categories">
                            <li><a href="#">Community Policing</a></li>
                            <li><a href="#">Anti Cultism</a></li>
                            <li><a href="#">Environmental Hazard</a></li>
                            <li><a href="#">Domestic Violence</a></li>
                            <li><a onclick="displayComplainBox()" href="#">Report Incident</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="blog.html">Blog</a></li>
                        </div>
                    </div>
                </div>
                <div class="socialMedia_workHours">
                    <div class="socialMedia">
                        <h3>Follow us on social media</h3>
                        <div class="socialLinks">
                            <a target="_blank" href="https://facebook.com/homelandfoundation" title="Homeland foundation on facebook"><img src="images/facebook_icon.png"></a>
                            <a target="_blank" href="https://twitter.com/homelandfoundation" title="Homeland foundation on twitter"><img src="images/twitter_icon.png"></a>
                            <a target="_blank" href="https://instagram.com/homelandfoundation" title="Homeland foundation on instagram"><img src="images/instagram_icon.png"></a>
                        </div>
                    </div>
                    <div class="workingHours">
                        <h3>Working hours</h3>
                        <div class="hours">
                            <p>Mondays to Fridays: Availabe 24hours</p><br>
                            <p>Saturdays: 9:00am - 5:00pm</p>
                        </div>
                    </div>    
                </div>
            </section>
        </section>
        <section class="secondaryFooter">
            <p>&copy; <?php echo date("Y");?> Homeland foundation. All Rights Reserved. Powered by <a target="_blank" href="https://appliedmacros.com">Applied Macros system</a></p>
        </section>
    </footer>
    <div class="help" id="help">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=2348157985866"><i class="fab fa-whatsapp"></i> Connect with us here</a>
    </div>
    <div class="toTop">
        <a href="#topHeader"><i class="fas fa-arrow-up" style="color:#fff;" size="10"></i></a>
    </div>
    <div id="complainBox">
        <p id="closeComplain"><i class="fas fa-window-close"></i></p>
        <div class="clear"></div>
        <div class="complaintBox">
            <h3>Report a crime</h3>
            <form method="POST" action="report_crime.php">
                <input type="text" name="full_name" placeholder="Your Full Name (Not mandatory)"><br>
                <select name="victim_location" required>
                    <option value="" selected>Select your location</option>
                    <option value="New Benin">New Benin market</option>
                    <option value="Ring road">Ring road</option>
                    <option value="Ugbowo">Ugbowo</option>
                    <option value="Ekenwa">Ekenwa</option>
                    <option value="GRA">GRA</option>
                    <option value="Uselu">Uselu</option>
                    <option value="Aduwawa">Aduwawa</option>
                    <option value="Sapele road">Sapele road</option>
                </select><br>
                <select name="incident" required>
                    <option value="" selected>Select incident</option>
                    <option value="Armed robbery">Armed robbery</option>
                    <option value="Rape">Rape</option>
                    <option value="Kidnapping">Kidnapping</option>
                    <option value="Cultism">Cultist activity</option>
                    <option value="Suspects">Suspects</option>
                    <option value="Crime in progress">Crime in progress</option>
                </select><br>
                <textarea name="victim_message" placeholder="Give us a detailed information of the incident" required></textarea>
                <div class="btns">
                    <button type="submit">Submit report</button>
                    <button id="donate">Suport us</button>
                </div>
            </form>
        </div>
    </div>
    <div id="orderNow">
        <a onclick="displayComplainBox()" href="javascript:void(0);"><i class="fas fa-user-ninja"></i> Report case</a>
    </div>
    <div id="memberForm">
        <div class="cover">
            <h3>Kindly fill the application form below</h3>
            <hr>
            <div id="closeForm"><i class="fas fa-window-close"></i></div>
            <form method="POST" enctype="multipart/form-data">
                <h4>Personal Details</h4>
                <div class="info">
                    <div class="data">
                        <label for="surName">Surname</label><br>
                        <input type="text" id="surName" name="surname" required placeholder="Asuelimen">
                    </div>
                    <div class="data">
                        <label for="firstName">First Name</label><br>
                        <input type="text" id="firstName" name="first_name" required placeholder="Daniel">
                    </div>
                </div>
                <div class="info">
                    <div class="data">
                        <label for="otherName">Other Names</label><br>
                        <input type="text" id="otherName" name="other_names" required placeholder="Osas">
                    </div>
                    <div class="data">
                        <label for="usualName">Usual Name(Name mosty called)</label><br>
                        <input type="text" id="usualName" name="usual_name" required placeholder="danibiz">
                    </div>
                </div>
                <div class="info">
                    <div class="data">
                        <label for="dob">Date of Birth</label><br>
                        <input type="date" id="dob" name="birth_date" required>
                    </div>
                    <div class="data">
                        <label for="phone">Phone Number</label><br>
                        <input type="tel" id="phone" name="phone_number" required placeholder="08012345678">
                    </div>
                </div>
                <div class="info">
                    <div class="data">
                        <label for="resAddress">Residential Address</label><br>
                        <input type="text" id="resAddress" name="residential_address" required placeholder="24 agbonifo street">
                    </div>
                    <div class="data">
                        <label for="permAddress">Permanent Home Address</label><br>
                        <input type="text" id="phone" name="permanent_address" required placeholder="15 agbomomba road, benin city">
                    </div>
                </div>
                <div class="info">
                    <div class="data">
                        <label for="email">Email Address(If any)</label><br>
                        <input type="email" id="email" name="email" placeholder="osas@example.com">
                    </div>
                    <div class="data">
                        <label for="passport">Upload Passport Photograph</label><br>
                        <input type="file" id="passport" name="passport" required>
                    </div>
                </div>
                <div class="info">
                    <div class="data">
                        <label for="healthIssue">Any Health issues</label><br>
                        <select name="health_issue" id="healthIssue" required>
                            <option value="" selected>Any Health Issues</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <h4>Next of Kin Details</h4>
                <div class="info">
                    <div class="data">
                        <label for="nextName">next of Kin Name</label>
                        <input type="text" id="nextName" name="next_of_kin_name" required placeholder="Joseph Asuelimhen">
                    </div>
                    <div class="data">
                        <label for="nextAddress">Next of Kin Address</label><br>
                        <input type="text" id="nextAddress" name="next_of_kin_address" required placeholder="15 agbomomba road, benin city">
                    </div>
                </div>
                <div class="info">
                    <div class="data">
                        <label for="nextPhone">next of Kin Phone</label><br>
                        <input type="tel" id="nextPhone" name="next_of_kin_phone" required placeholder="07012345678">
                    </div>
                    
                </div>
                <h4>Declaration</h4>
                <div class="info" id="declaration">
                    <div class="data" id="declare">
                        <p>I </p>
                        <input type="text" required> <p>confirm that the above information is true</p>
                    </div>
                </div>
                <h4>Guarantor Details</h4>
                <div class="info">
                    <div class="data">
                        <label for="gaurantorName">Gaurantor Name</label><br>
                        <input type="text" id="gaurantorName" name="gaurantor_name" required placeholder="Idemudia Joseph">
                    </div>
                    <div class="data">
                        <label for="gaurantorAdd">Gaurantor Address</label><br>
                        <input type="text" id="gaurantorAdd" name="gaurantor_address" required placeholder="32 ikpoba slope, benin city">
                    </div>
                </div>
                <div class="info">
                    <div class="data">
                        <label for="gaurantorPhone">Gaurantor Phone</label><br>
                        <input type="tel" id="gaurantorPhone" name="gaurantor_phone" required placeholder="09012345678">
                    </div>
                    <div class="data">
                        <label for="gaurantorFoto">Gaurantor Passport</label><br>
                        <input type="file" id="gaurantorFoto" name="gaurantor_photo">
                    </div>
                </div>
                <button type="submit" name="apply" id="apply">Submit Application</button>
            </form>
        </div>
    </div>
    <div id="donation">
        
        <div class="donate_details">
            <h3>Kindly Support the team!</h3>
            <p>Your donations are highly aprreciated. You can send your donations to the account details below:</p>
            <p><span>Name:</span> Homeland Foundation<br>
            <span>Bank: </span>Ecobank<br>
            <span>Acct No.: </span>1234567890</p>

            <button id="close_donate">Close</button>
            <div class="clear"></div>
        </div>
    </div>
    <?php
        /* if(isset($_SESSION['success'])){
            echo "<div class='success'>
                <p>" . $_SESSION['success'] ."</p>
                
            </div>";
        } */
        /* if(isset($_SESSION['error'])){
            echo "<div class='error'>
                <p>" . $_SESSION['error'] ."</p>
            </div>";
        } */
    ?>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    
</body>
</html>