<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/header.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/contact-us.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/slider1.css">
  <link rel="stylesheet" href="./css/trendingSlider.css">
  <link rel="stylesheet" href="./css/headtest.css" />
  <link rel="stylesheet" href="./css/whyus.css">

  <title>WeSettle - Find Best Rated PGs</title>
  <link rel="icon" href="./assets/images/favicon.png" sizes="16x16" type="image/png">

  <!--Facebook Pixel Code--> 
  <script>
    !function (f, b, e, v, n, t, s) {
      if (f.fbq) return; n = f.fbq = function () {
        n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
      n.queue = []; t = b.createElement(e); t.async = !0;
      t.src = v; s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '325483672775047');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=325483672775047&ev=PageView&noscript=1" /></noscript>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7JPFQ4C9HJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7JPFQ4C9HJ');
</script>

<!-- Global site tag (gtag.js) - Google Analytics - 12 Feb 2022-->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-204905504-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-204905504-1');
</script>


</head>

<body>
  <nav class="navbar">
    <div class="container">
      <section class="wrapper">
        <div class="brand">
          <div class="brand-img">
            <span class="brand-logo">
              <a href="#"><img src="./assets/images/wesettle-logo.png" alt="wesettle-logo" /></a></span>
          </div>
          </a>
          </h1>
          
         
      </section>
    </div>
  </nav>


  <!-- <nav>
    <ul>
      <li>
        <a href="./index.html">
        <div class ="wesettle">
          <span class="logo">
            <img src="./assets/images/wesettle-logo.png" width="60%" height="60%"
                alt=""/></span>
          </div>
        </a>
      </li>
      <li class="hidden-wid"><a href="/values">About U</a></li>
      <li class="hiddenn-wid"><a href="/community">Community</a></li>
      <li class="hidden-wid">
        <a
          href="https://wesettle-backend.herokuapp.com/property/delhi">Find
          a PG</a>
      </li>
      <div class ="contact">
      <li class="bk-blue wid hidden"><a href="/contactus">Contact us</a></li></div>
      <li class="hidden-wid signup none">
        <a href="/login" class="menu-link">
          <span class="parent">
            <span class="child blue"><i class="fas fa-user"></i></span>
            <span class="child">Login /</span>
             <span class="child"> Signup</span>   
          </span>
        </a>
      </li>
      <li class="logout hidden-wid none">
        <a href="#"> Logout </a>
      </li>
       <li class="bars">
        <a href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    </nav>
  -->
  <section>
    <div class="row">
      <img class="col-md-6 img-col" src="./assets/images/pg-banner.png">
      <div class="col-md-6 form-col">
        <!-- form -->
        <section class="form extra">
          <h1 class="blue">REQUEST A CALLBACK</h1>
          <div class="form-cross">
            <!-- <i class="fas fa-times"></i> -->
          </div>
          <form class="wu request" action="./php/form.php" method="post">
            <div>
              <input type="text" name="Fname" placeholder="NAME" required />
            </div>
            <div>
              <!--<input type="text" name="Lname" placeholder="LAST NAME" required />-->
            </div>
            <div class="phoneInput">
              <input style="border-radius: 14px;" class="phone" type="number" name="phone" placeholder="MOBILE NUMBER" required />
              <div class="flag">
                <span class="flag-svg"></span>
                +91|
              </div>
            </div>

            <div>
              <input type="email" name="email" placeholder="EMAIL" required />
            </div>
            <div>
              <input type="text" name="area" placeholder="AREA PREFERRED" required />
            </div>

            <div class="icon">
              <input style="width: 100%;" class="wa wp" type="text" name="whatsapp" value="PREMIUM PROPERTIES ONLY"></input>
              <label class="switch">
                <input type="checkbox" name="whatsappUpdate" value="Yes" />
                <span class="slider round"></span>
              </label>
            </div>
            <br />
            <input type="submit" value="SUBMIT" name="submit" />
          </form>
        </section>



      </div>
    </div>
  </section>
  <section class="con-why-us">

    <div class="heading-why">
      <h2 class="light1">Why </h2>
      <h2 class="blue">Us?</h2>
    </div>
    <!--Why US-->
    <div class="whyus-parent best-rated">
      <div class="whyus-child">
        <img src="./assets/images/Asset 2-cropped.png" alt="" />
        <h4>BEST RATED<br> OPTIONS</h4>
        <!--<p>???WE SERVE YOU WITH THE BEST???.
          Filtered best-rated Pgs cuz you deserve only the finest.</p>-->
      </div>

      <div class="whyus-child brokerage">
        <img src="./assets/images/Asset 4-cropped.png" alt="" />
        <h4>NO <br>BROKERAGE</h4>
        <!--<p>You don???t need to worry about the extra brokerage cost and all the hassle.
          Save for your long-awaited trips. </p>-->
      </div>


      <div class="whyus-child living">
        <img src="./assets/images/Asset 3-cropped.png" alt="" />
        <h4>COMMUNITY <br>LIVING</h4>
        <!--<p>Imagine what it's like to be amongst people from all across the country!
        Don???t just imagine, play the part.
        Plan trips with us. Party your heart out with us. Grow with us. </p>-->
      </div>


      <div class="whyus-child offer">
        <img src="./assets/images/Asset 1-cropped.png" alt="" />
        <h4>EXCLUSIVE <br>OFFERS</h4>
        <!--<p>Well who doesn???t love offers right?
          Be the first one to grab Student Discounts, Brand Offers, Trips, Opportunities, and a lot
          more.</p>-->
      </div>


    </div>


    <!-- Know more <div class="btn-con know-more-home">
      <button onclick="window.location.href='/about-us'">KNOW MORE</button>
    </div> -->

  </section>
  <template class="trendingTemp">
    <div class="card prop-slider-card">
      <div class="ic pos">
        <span><i class="fas fa-map-marker-alt"></i></span>
        <span class="area">North Campus</span>
      </div>
      <img src="./assets/images/image-004.jpg" alt="" />
      <div class="card-foot">
        <div class="pos2">
          <i class="fas fa-user"></i>
          <span class="gender">Boys/Girls</span>
        </div>
        <a class="view">VIEW MORE</a>
      </div>
    </div>
  </template>

  <div class="trp-heading bold" style="margin-top:10%">
    <h1>TRENDING&nbsp</h1>
    <h1 class="blue">PROPERTIES</h1>
  </div>
  <div class="slider1">
    <section class="section-slider">
      <div class="swiper mySwiper container container1">
        <div class="swiper-wrapper content">
          <div class="swiper-slide card1">
            <div class="card-content1">
              <div class="image1">
                <img
                  src="./assets/pg/1. (1).jpg"
                  alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide card1">
            <div class="card-content1">
              <div class="image1">
                <img
                  src="./assets/pg/2021-03-14.jpg"
                  alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide card1">
            <div class="card-content1">
              <div class="image1">
                <img
                  src="./assets/pg/7..jpg"
                  alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide card1">
            <div class="card-content1">
              <div class="image1">
                <img
                  src="./assets/pg/g001.jpeg"
                  alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide card1">
            <div class="card-content1">
              <div class="image1">
                <img
                  src="./assets/pg/g002.jpeg"
                  alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide card1">
            <div class="card-content1">
              <div class="image1">
                <img
                  src="./assets/pg/IMG-20211207-WA0013.jpg"
                  alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide card1">
            <div class="card-content1">
              <div class="image1">
                <img
                  src="./assets/pg/IMG20211114170939.jpg"
                  alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <br>
        <div class="swiper-pagination"></div>
      </div>

    </section>

  </div>

  <div class="trp-heading bold">
    <h1>Life At&nbsp</h1>
    <h1 class="blue">WeSettle</h1>
  </div>
  <div class="slider1">
    <section class="section-slider">
      <div class="swiper mySwiper container container1">
        <div class="swiper-wrapper content">
          <div class="swiper-slide card1">
            <div class="card-content1">
              <div class="image1">
                <img src="./assets/life at wesettle/comm.0.jpeg" alt="">
              </div>
              <center>
                  <h5 class="slider_caption"><b>Musical Evenings</b></h5>
              </center>
            </div>
          </div>
          <div class="swiper-slide card1">
            <div class="card-content1">
              <div class="image1">
                <img src="./assets/life at wesettle/comm.1.jpeg" alt="">
                
              </div>
              <center>
                  <h5 class="slider_caption"><b>Entertainment</b></h5>
                </center>
            </div>

          </div>
          <div class="swiper-slide card1">
            <div class="card-content1">
              <div class="image1">
                <img src="./assets/life at wesettle/comm.2.jpeg" alt="">
                
              </div>
              <center>
                  <h5 class="slider_caption"><b>Community Trips</b></h5>
                </center>
            </div>
          </div>
          <div class="swiper-slide card1">
            <div class="card-content1">
              <div class="image1">
                <img src="./assets/life at wesettle/comm 4.jpg" alt="">
                
              </div>
              <center>
                  <h5 class="slider_caption"><b>Festive Celebration</b></h5>
                </center>
            </div>
          </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <br>
        <div class="swiper-pagination"></div>
      </div>

    </section>
  </div>




  <!-- featured in -->

  <section class="featured">
    <!-- <div class="trp-heading extra bold">
      <h1>FEATURED&nbsp <span class="blue">IN</span></h1>

    </div> -->
    <div class="trp-heading bold">
      <h1 style="font-size:50px">FEATURED <span class="blue">IN</span></h1>
      <!-- <h1 style="font-size:50px" class="blue"></h1> -->
    </div>
    <div class="featured-con-parent">
      <div class="row">
        <div class="col-sm-4">
          <a
          href="https://zeenews.india.com/companies/wesettle-for-the-one-s-looking-for-a-journey-of-experiences-networking-and-adding-value-in-other-s-life-2314959.html">
          <img src="./assets/images/image-009.png" height="120px" alt=""></a>
          <!--<a href="https://discordiummagazine.com/?p=998"><img src="./assets/images/image-010.png" height="120px"
          alt=""></a>-->
        </div>
        <div class="col-sm-4">
          <a href="https://dubeat.com/2021/04/du-21-under-21-setting-high-benchmarks/">
            <img src="./assets/images/image-011.png" height="120px" alt=""></a>
        </div>
      
        <div class="col-sm-4">
          <a href="https://www.hindustantimes.com/brand-post/if-you-are-a-student-looking-out-for-accommodation-wesettle-can-help/story-u5FBFDx625DS8EMtwMGzuI.html">
            <img src="./assets/images/image-012.png" height="120px" alt=""></a>

        </div>
      
      </div>
      
    </div>
  </section>

  <!-- form -->
  <section class="form">
    <h1 class="blue">REQUEST A CALLBACK</h1>
    <div class="form-cross">
      <!-- <i class="fas fa-times"></i> -->
    </div>
    <form class="wu request" action="./php/form.php" method="post">
      <div>
        <input type="text" name="Fname" placeholder="NAME" required />
      </div>
      <div>
        <!--<input type="text" name="Lname" placeholder="LAST NAME" required />-->
      </div>
      <div class="phoneInput">
        <input style="border-radius: 14px;" class="phone" type="number" name="phone" placeholder="MOBILE NUMBER"
          required />
        <div class="flag">
          <span class="flag-svg"></span>
          +91|
        </div>
      </div>

      <div>
        <input type="email" name="email" placeholder="EMAIL" required />
      </div>
      <div>
        <input type="text" name="area" placeholder="AREA PREFERRED" required />
      </div>

      <div class="icon">
        <input style="width: 100%;" class="wa wp" type="text" name="whatsapp" value="PREMIUM PROPERTIES ONLY"></input>
        <label class="switch">
          <input type="checkbox" name="whatsappUpdate" value="Yes" />
          <span class="slider round"></span>
        </label>
      </div>
      <br />
      <input type="submit" value="SUBMIT" />
    </form>
  </section>

  <footer>
    <section class="footer">
      <div class="foot-one">

        <div class="brand-img">
          <span class="brand-logo">
            <a href="#"><img src="./assets/images/wesettle-logo.png" alt="wesettle-logo" /></a></span>
        </div>
        
      </div>
      <div class="foot-two">
        <div class="blue">Reach us out on</div>
    
        <div><a href="tel:+918840921854" style="color:#000000">+91 88409 21854</a></div>

        <div class="icon-par">

          <a href="https://www.instagram.com/wesettle.co.in/?hl=en"><i class="fab fa-instagram-square"></i></a>
          <a href="https://www.linkedin.cn/company/wesettle/"><i class="fab fa-linkedin"></i></a>
          <a href="https://www.facebook.com/teamwesettle/"><i class="fab fa-facebook"></i></a>
          <a href="https://twitter.com/Wesettle_india?s=08"><i class="fab fa-twitter"></i></a>
          <a href="https://youtube.com/channel/UCwvIU4VbeYue-CioNgSPL7g"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </section>
    <section class="line">
      <span><img src="./assets/images/wesettle-logo.png" alt="" /></span>
      <span>TradeMarks and brands are property of their respective owners.</span>
    </section>
  </footer>
  <template class="searchTemp">
    <a class="search-data" href="#">
      <h1>Hi</h1>
      <span class="type">College</span>
    </a>
  </template>

  <script src="./js/seo.js"></script>
  <script src="./js/header.js"></script>
  <script src="./js/newscript.js"></script>
  <script src="./js/alert.js"></script>
  <script src="./js/city.js"></script>
  <script src="./js/trendingSlider.js"></script>
  <!--
  <script src="./js/slider.js"></script>
  -->
  <script src="./js/search.js"></script>
  <script src="./js/user.js"></script>
  <script>
    const details = document.querySelector('.dycity');

    document.querySelector('.explore-btn').addEventListener('click', (e) => {
      //window.location.href = `/property/${details.textContent}?city=${details.id}&placeId=${details.id}`;
      const path = "delhi?city=619516b358bbda271eb790ed&placeId=619516b358bbda271eb790ed";
      window.location.href = `/property/${path}`;
    });
  </script>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 20,
      slidesPerGroup: 1,
      loop: true,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>