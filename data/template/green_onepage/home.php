<?php $this->load->view($config['site_template'].'/head_home');?>     
	   <!--===== Preloader ====-->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>

        
        <div id="home"></div>
         <!--=====****************** INTRO SECTION ****************************=====-->
        <div class="intro-section" id="intro-bg">
        
        <?php $this->load->view($config['site_template'].'/nav');?>
        <?php $this->load->view($config['site_template'].'/banner');?>
         
        </div>
        <!--=====***************** END INTRO SECTION ***********************=====-->
        
        
<?php $tmpData = x6cms_modellist('page',0,'default',7,0);?>
<?php foreach($tmpData as $item):?>
<li>
[<a href="<?=$item['categoryurl']?>"><?=$item['categoryname']?></a>]
<a href="<?=$item['url']?>" style="<?=$item['color']?><?=$item['isbold']?>"><?=$item['title']?></a>
</li>
<?php endforeach;?>
<?php unset($tempData,$item);?>

        <!--=====************** ABOUT SECTION ***************=====-->
        <section id="aboutus" class="about-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="wow fadeInUp col-md-3 col-sm-12 col-xs-12 animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="author-image">
                            <img src="images/author.jpg" alt="Author Image"> <!--=== author image ===-->
                            <h2>David willey</h2>
                        </div>
                        <div class="social-icon"> <!--=== author social icons ===-->
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        
                    </div>
                    <div class="wow fadeInUp col-md-9 col-sm-12 col-xs-12 animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="about-author">
                           <h3>Hello there !</h3>
                            <p>I am a professional <strong>Web Developer</strong>. I have more than 5 years working experiencs in <strong>Web design, Web development and Graphic design.</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.</p>
                            <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!--=====*********** END ABOUT SECTION **************=====-->
        
        
        
        <!--======**************** SERVICES SECTION ******************=======-->
        <section id="services" class="services-section section-padding">
            <div class="container">
               <div class="row">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="section-title">
                       <h2>services</h2>
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                       </div>
                   </div>
               </div>
                <div class="row">
                    <div class="wow fadeIn col-md-3 col-sm-6 col-xs-12 animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="single-services text-center">
                            <div class="servise-icon">
                                <i class="fa fa-html5"></i>
                            </div>
                            <h4>web design</h4>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</p>
                        </div>
                    </div>
                    <div class="wow fadeIn col-md-3 col-sm-6 col-xs-12 animated" data-wow-duration="1.5" data-wow-delay="0.8s">
                        <div class="single-services text-center">
                            <div class="servise-icon">
                                <i class="fa fa-code"></i>
                            </div>
                            <h4>web development</h4>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</p>
                        </div>
                    </div>
                    <div class="wow fadeIn col-md-3 col-sm-6 col-xs-12 animated" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="single-services text-center">
                            <div class="servise-icon">
                                <i class="fa fa-pencil-square-o"></i>
                            </div>
                            <h4>graphic design</h4>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</p>
                        </div>
                    </div>
                    <div class="wow fadeIn col-md-3 col-sm-6 col-xs-12 animated" data-wow-duration="1.5s" data-wow-delay="1.6s">
                        <div class="single-services text-center">
                            <div class="servise-icon">
                                <i class="fa fa-tablet"></i>
                            </div>
                            <h4>app development</h4>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--======*************** END SERVICES SECTION ****************=======-->
        
        
        
        <!--======*************** FACTS ****************=======-->
         <div class="facts">
            <div class="container">
                <div class="row">     
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="single-fact">
                          <h3>240</h3>
                          <p>Happy clients</p>
                      </div>
                    </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="single-fact">
                              <h3>459</h3>
                              <p>Awesome ideas</p>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="single-fact">
                              <h3>346</h3>
                              <p>Projects completed</p>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="single-fact">
                              <h3>13</h3>
                              <p>Awards won</p>
                          </div>
                      </div>
                </div> 
             </div>
            </div>
        
         <!--======*************** END FACTS ****************=======-->
        
        
        
        <!--======********** PORTFOLIO SECTION *********======-->
        <section id="portfolio" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="section-title">
                       <h2>portfolio</h2>
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                       </div>
                   </div>
            </div>

            <div class="row no-gutter">
                <div class="wow fadeInUp col-xs-12 col-sm-4 col-md-3 animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/item1.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                               <div class="table-cell">
                                   <h3>Project Title</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available</p>
                                    <a class="preview" href="images/portfolio/item1.jpg"><i class="fa fa-search-plus"></i></a>
                               </div>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="wow fadeInUp col-xs-12 col-sm-4 col-md-3 animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/item2.jpg" alt="">
                       <div class="overlay">
                            <div class="recent-work-inner">
                                <div class="table-cell">
                                   <h3>Project Title</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available</p>
                                    <a class="preview" href="images/portfolio/item2.jpg"><i class="fa fa-search-plus"></i></a>
                               </div>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="wow fadeInUp col-xs-12 col-sm-4 col-md-3 animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/item3.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                               <div class="table-cell">
                                   <h3>Project Title</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available</p>
                                    <a class="preview" href="images/portfolio/item3.jpg"><i class="fa fa-search-plus"></i></a>
                               </div>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="wow fadeInUp col-xs-12 col-sm-4 col-md-3 animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/item4.jpg" alt="">
                       <div class="overlay">
                            <div class="recent-work-inner">
                                <div class="table-cell">
                                   <h3>Project Title</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available</p>
                                    <a class="preview" href="images/portfolio/item4.jpg"><i class="fa fa-search-plus"></i></a>
                               </div>
                            </div> 
                        </div>
                    </div>
                </div>   
                
                <div class="wow fadeInUp col-xs-12 col-sm-4 col-md-3 animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/item5.jpg" alt="">
                       <div class="overlay">
                            <div class="recent-work-inner">
                                <div class="table-cell">
                                   <h3>Project Title</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available</p>
                                    <a class="preview" href="images/portfolio/item5.jpg"><i class="fa fa-search-plus"></i></a>
                               </div>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="wow fadeInUp col-xs-12 col-sm-4 col-md-3 animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/item6.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <div class="table-cell">
                                   <h3>Project Title</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available</p>
                                    <a class="preview" href="images/portfolio/item6.jpg"><i class="fa fa-search-plus"></i></a>
                               </div>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="wow fadeInUp col-xs-12 col-sm-4 col-md-3 animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/item7.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <div class="table-cell">
                                   <h3>Project Title</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available</p>
                                    <a class="preview" href="images/portfolio/item7.jpg"><i class="fa fa-search-plus"></i></a>
                               </div>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="wow fadeInUp col-xs-12 col-sm-4 col-md-3 animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/item8.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <div class="table-cell">
                                  <h3>Project Title</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available</p>
                                    <a class="preview" href="images/portfolio/item8.jpg"><i class="fa fa-search-plus"></i></a>
                               </div>
                            </div> 
                        </div>
                    </div>
                </div>   
            </div><!--/.row-->
        </div><!--/.container-->
    </section>
    <!--======************ END PORTFOLIO SECTION **************======-->
      
      
        
        <!--======******************** CONTACT INFO SECTION **********************======-->
        <section id="contact-info" class="contact-info-section section-padding">
            <div class="container">
             
             <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="section-title">
                       <h2>Contact</h2>
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                       </div>
                   </div>
            </div>
              
                <div class="row">
                    <div class="wow fadeIn col-md-8 col-sm-12 col-xs-12 animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                          <div class="contact-form">
                           
                            <form id="contact" name="contact" method="post">  
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <input type="text" name="name" id="name" size="30" value="" placeholder="Your Name" required/>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <input type="text" name="email" id="email" size="30" value="" placeholder="Your Email Address" required/>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <textarea name="message" id="message" placeholder="Your Massage" required></textarea>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <input id="submit" type="submit" name="submit" value="Send" /> 
                                    </div>
                                </div> 
                            </form>

                            <div id="success">
                              <span>
                                Your message was sent succssfully! I will be in touch as soon as I can.
                              </span>
                            </div>

                            <div id="error">
                              <span>
                                Something went wrong, try refreshing and submitting the form again.
                              </span>
                            </div>
                            
                          </div>
                    </div>
                    <div class="wow fadeIn col-md-4 col-sm-12 col-xs-12 animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="full-adress">
                        <h3>More Info</h3>
                        <p class="phone">Phone: <a href="tel:+444123456">+44 4123456</a></p>
                        <p class="mail">Email: <a href="mailto:willey@yourdomain.com">willey@yourdomain.com</a></p>
                        <p class="adress">Bak-One Company<br>12345 Hollywood Bvld Street<br> Los Angeles, California</p>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!--======**************** END CONTACT INFO SECTION ********************======-->
  
        
<?php $this->load->view($config['site_template'].'/foot_home');?> 