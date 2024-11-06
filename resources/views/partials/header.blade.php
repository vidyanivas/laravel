<!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


      <!-- pre loader area start -->
      <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <div class="object" id="object_four"></div>
               <div class="object" id="object_three"></div>
               <div class="object" id="object_two"></div>
               <div class="object" id="object_one"></div>
            </div>
         </div>
      </div>
      <!-- pre loader area end -->

      <!-- back to top start -->
      <div class="back-to-top-wrapper">
         <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>               
         </button>
      </div>
      <!-- back to top end -->

      <!-- search popup start -->
      <div class="search__popup">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="search__wrapper">
                     <div class="search__top d-flex justify-content-between align-items-center">
                        <div class="search__logo">
                           <a href="home-main.html">
                              <img src="{{ asset('assets/img/logo/footer-logo2.png') }}" alt="logo">
                           </a>
                        </div>
                        <div class="search__close">
                           <button type="button" class="search__close-btn search-close-btn">
                              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                                 
                           </button>
                        </div>
                     </div>
                     <div class="search__form">
                        <form action="#">
                           <div class="search__input">
                              <input class="search-input-field" type="text" placeholder="Type here to search...">
                              <span class="search-focus-border"></span>
                              <button type="submit">
                                 <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg> 
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="search-popup-overlay"></div>
      <!-- search popup end -->

      <!-- header area start -->
         <header class="tp-header-2-area tp-header-height p-relative">
            <div class="tp-header-top tp-header-space d-none d-xl-block">
               <div class="container-fluid">
                  <div class="row align-items-center">
                     <div class="col-xxl-6 col-xl-8">
                        <div class="tp-header-top-info">
                           <ul>
                              <li>
                                 <a href="https://www.google.com/maps/@36.0758266,-79.4558848,17z" target="_blank"><span><i class="fa-sharp fa-solid fa-location-dot"></i></span>K-305 Ajnara Home Sec16B, Noida Extension</a>
                              </li>
                              <li>
                                 <a href="#"><span><i class="fa-solid fa-envelope"></i></span><span class="__cf_email__" data-cfemail="">info@synalgo.com</span></a>
                              </li>                              
                           </ul>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-xl-4">
                        <div class="tp-header-top-right d-flex justify-content-end align-items-center">
                           <div class="header-call">
                              <a href="tel:01310-069824"><i class="fa-solid fa-phone"></i> +91 9999656954</a>
                           </div>
                           <div class="header-social d-xxl-block d-none">
                              <a href="#"><i class="fa-brands fa-facebook"></i></a>
							  <a href="#"><i class="fa-brands fa-instagram"></i></a>
                              <a href="#"><i class="fa-brands fa-twitter"></i></a>
                              <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="header-sticky" class="tp-header-2-bottom header__sticky p-relative">
               <div class="tp-header-2-bottom-inner p-relative" data-background="{{ asset('assets/img/hero/hero-2/header-bg.png') }}">
                  <div class="container-fluid gx-0">
                     <div class="row gx-0 align-items-center">
                        <div class="col-xxl-2 col-xl-2 col-lg-10 col-md-6">
                        <div class="tp-header-2-main-left d-flex align-items-center justify-content-xl-center justify-content-xxl-end p-relative">
                           <div class="tp-header-2-logo">
                              <a href="index.php">
                                 <img src="{{ asset('assets/img/logo/G-home-2-logo.png') }}" alt="">
                              </a>
                              <img class="logo-shape" src="{{ asset('assets/img/hero/hero-2/logo-shape.png') }}" alt="">
                           </div>
                        </div>
                        </div>
                        <div class="col-xxl-6 col-xl-7 d-none d-xl-block">
                           <div class="tp-main-menu-2-area d-flex align-items-center">
                              <div class="tp-main-menu">
                                 <nav id="tp-mobile-menu">
								 
                                    <ul>
                                       <li><a href="index.php">Home</a></li>
                                       <li class="has-dropdown">
									   <a href="about-us.php">About</a>
											<ul class="submenu">
											 <li><a href="#"> Company Overview </a></li>
                                             <li><a href="#"> Industries Exposure </a></li>
                                             <li><a href="#"> Career </a></li>
											 <li><a href="#"> News & Events </a></li>
											 <li><a href="blog.php">Blog</a></li>
                                          </ul>
									   </li>
                                       <li class="has-dropdown">
										   <a href="service.php">Services</a>										   
										   <ul class="submenu mega-submenu">
											  <li class="mega-menu-content">
											     <div class="row">
												    <div class="col-lg-4 sepration">
													  <ul>
													  <li class="mega-menu-title"><p>Enterprise Software Services</p></li>
													  <li><a href="#"> Digital Engineering </a></li>
													  <li><a href="#"> Enterprise Architecture </a></li>
													  <li><a href="#"> Cloud Applications Development </a></li>
													  <li><a href="#"> Software Development </a></li>
													  <li><a href="#"> Web Applications </a></li>
													  <li><a href="#"> Mobile Applications </a></li>
													  </ul>
													</div>
													  <div class="col-lg-4 sepration">
													  <ul>
													    <li class="mega-menu-title"><span class=" icon"></span><p>Digital Transformation</p></li>
													    <li><a href="#"> Data Analytics </a></li>
													    <li><a href="#"> Blockchain & IoT </a></li>
														<li><a href="#"> Power BI </a></li>
													    <li><a href="#"> Process Automation </a></li>
													  </ul>
													</div>
													<div class="col-lg-4">
													  <ul>
													  <li class="mega-menu-title"><span class=" icon"></span><p>ERP Solutions</p></li>
														<li><a href="#"> Financial ERP </a></li>
														<li><a href="#"> Manufacturing ERP </a></li>
														<li><a href="#"> Retail ERP </a></li>
														<li><a href="#"> Healthcare ERP </a></li>
														<li><a href="#"> School/College ERP </a></li>													   
														<li><a href="#"> Hybrid ERP </a></li>
													  </ul>
													</div>																									
												 </div>
												 <br>
											  <div class="row">
												    <div class="col-lg-4 sepration">
													  <ul>
														  <li class="mega-menu-title"><span class=" icon"></span><p> E-Governance Solutions </p></li>
														  <li><a href="#"> E-Governance Platforms Development </a></li>
														  <li><a href="#"> Single Window Solution & Dashboards </a></li>													  
													  </ul>
													</div>
													  
													<div class="col-lg-4 sepration">
													  <ul>
													  <li class="mega-menu-title"><span class=" icon"></span><p>CRM</p></li>
													  <li><a href="#"> Salesforce Solutions </a></li>
													  <li><a href="#"> Salesforce Services </a></li>
													  <li><a href="#"> Salesforce Practices </a></li>
													  <li><a href="#"> Salesforce Accelerators </a></li>
													  </ul>
													</div>
													 <div class="col-lg-4">
													  <ul>
														<li class="mega-menu-title"><span class=" icon"></span><p>Degital Marketing</p></li>
														  <li><a href="#"> SEO Services </a></li>
														  <li><a href="#"> SMM/SMO Service </a></li>
														  <li><a href="#"> PPC(Pay Per Click) Service </a></li>
														  <li><a href="#"> Reputation Management </a></li>														 
													  </ul>
													</div>	
													
												 </div>
											  </li>
                                          </ul>
                                       </li>
                                       <li class="has-dropdown">
                                          <a href="#">Technologies</a>
                                          <!--<ul class="submenu">
                                             <li><a href="about-us.html">Microsoft</a></li>
                                             <li><a href="portfolio.html">PHP</a></li>
                                             <li><a href="portfolio-details.html">Java</a></li>
                                             <li><a href="team.html">AWS</a></li>
                                             <li><a href="team-details.html">Devops</a></li>
											 <li><a href="team-details.html">Oracle / SQL</a></li>
											 <li><a href="team-details.html">Android / Ios</a></li>
											 <li><a href="team-details.html">Python</a></li>
                                          </ul>-->
										  <ul class="submenu mega-submenu">
											 <li class="mega-menu-content">
												<div class="row">
												 <div class="col-lg-2 sepration">
													  <ul>
													  <li class="mega-menu-title"><p>Open Source</p></li>
													  <li><a href="#"> PHP </a></li>
													  <li><a href="#"> Laravel </a></li>
													  <li><a href="#"> Magento </a></li>
													  <li><a href="#"> WordPress </a></li>
													  <li><a href="#"> Dropal </a></li>
													  <li><a href="#"> CodeIgniter </a></li>
													  <li><a href="#"> Zend Framework </a></li>
													  <li><a href="#"> Symfony </a></li>
													  <li><a href="#"> Node </a></li>
													  <li><a href="#"> MySQL </a></li>
													  <li><a href="#"> PostgreSQL </a></li>													  
													  </ul>
													</div>
													<div class="col-lg-2 sepration">
													  <ul>
													  <li class="mega-menu-title"><p>Front-End</p></li>
													  <li><a href="#"> HTML5 </a></li>
													  <li><a href="#"> Angular </a></li>
													  <li><a href="#"> React </a></li>
													  <li><a href="#"> Vue.js </a></li>
													  <li><a href="#"> jQuery </a></li>
													  <li><a href="#"> Svelte </a></li>
													  <li><a href="#"> Next.js </a></li>
													  <li><a href="#"> TypeScript </a></li>
													  <li><a href="#"> Bootstrap </a></li>
													  </ul>
													</div>
													<div class="col-lg-2 sepration">
													  <ul>
													  <li class="mega-menu-title"><p>Mobile</p></li>
													  <li><a href="#"> Android </a></li>
													  <li><a href="#"> Ios </a></li>
													  <li><a href="#"> Flutter </a></li>
													  <li><a href="#"> Xamarin </a></li>
													  <li><a href="#"> React Native </a></li>
													  <li><a href="#"> Swift </a></li>
													  <li><a href="#"> Ionic </a></li>
													  <li><a href="#"> Kotlin </a></li>
													  </ul>
													</div>
												    <div class="col-lg-2 sepration">
													  <ul>
													  <li class="mega-menu-title"><p>Microsoft</p></li>
													  <li><a href="#"> .Net Framework </a></li>
													  <li><a href="#"> .Net MVC </a></li>
													  <li><a href="#"> .Net Core </a></li>
													  <li><a href="#"> Azure </a></li>
													  <li><a href="#"> DevOps </a></li>
													  <li><a href="#"> SQL Server </a></li>
													  <li><a href="#"> Microsoft Dynamic 365 </a></li>
													  </ul>
													</div>
													  <div class="col-lg-2 sepration">
													  <ul>
														<li class="mega-menu-title"><p>Java</p></li>
														<li><a href="#"> Spring </a></li>
														<li><a href="#"> Spring Boot </a></li>
														<li><a href="#"> Struts </a></li>
														<li><a href="#"> Hibernati </a></li>
														<li><a href="#"> Grails </a></li>
													  </ul>
													</div>													
													<div class="col-lg-2">
													  <ul>
													  <li class="mega-menu-title"><p>Ecommerce</p></li>
													  <li><a href="#"> Magento  </a></li>
													  <li><a href="#"> Woocommerce </a></li>
													  <li><a href="#"> Shopify </a></li>
													  <li><a href="#"> PrestaShop </a></li>													  
													  </ul>
													</div>
												 </div>
											</li>
                                          </ul>	 
                                       </li>
									   <li><a href="portfolio.php">Portfolio</a></li> 
										<!--<li><a href="blog.html">Blog</a></li>-->									   
                                       <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                 </nav>
                              </div>
                           </div>
                        </div>
						 <div class="col-xxl-3 col-xl-3">
                        <div class="tp-header-main-right d-flex align-items-center justify-content-xl-end">
                           <div class="tp-header-search search-open-btn d-none d-xxl-block">
                              <a href="javascript:void(0);"> <i class="fa-regular fa-magnifying-glass"></i></a>
                           </div>
                              <div class="tp-header-btn d-none d-xl-block pl-40">
                                 <a class="tp-btn" href="contact.php">Get Started Today</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-4 col-xl-3 col-lg-2 col-md-6">
                           <div class="tp-header-2-mobile-menu d-flex justify-content-end d-block d-xxl-none">
                              <div class="tp-header-2-hamburger-btn offcanvas-open-btn" data-background="assets/img/icon/header-hamburger-shape.png">
                                 <button class="hamburger-btn">
                                    <span>
                                       <svg width="29" height="24" viewBox="0 0 29 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0 1.13163C0 0.506972 0.499692 0 1.11538 0H20.4487C21.0644 0 21.5641 0.506972 21.5641 1.13163C21.5641 1.7563 21.0644 2.26327 20.4487 2.26327H1.11538C0.499692 2.26327 0 1.7563 0 1.13163ZM27.8846 10.5619H1.11538C0.499692 10.5619 0 11.0689 0 11.6935C0 12.3182 0.499692 12.8252 1.11538 12.8252H27.8846C28.5003 12.8252 29 12.3182 29 11.6935C29 11.0689 28.5003 10.5619 27.8846 10.5619ZM14.5 21.1238H1.11538C0.499692 21.1238 0 21.6308 0 22.2555C0 22.8801 0.499692 23.3871 1.11538 23.3871H14.5C15.1157 23.3871 15.6154 22.8801 15.6154 22.2555C15.6154 21.6308 15.1157 21.1238 14.5 21.1238Z" fill="currentColor"></path>
                                       </svg>
                                    </span>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
      <!-- header area end -->