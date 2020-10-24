<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="icon" type="image/jpg" href="White.png">
  <title>IMUN</title>
  <link rel="stylesheet" href="style.css">
  <script>
  $(document).ready(function(){
	  $(window).scroll(function() {
                       if ($(document).scrollTop() > 150) {
                       $("nav").addClass("blue-background");
                      } else {
                      $("nav").removeClass("blue-background");
                      }
                     });
  $(".navbar a, footer a[href='#myPage'], div a[href='#conference'], .nav a").on('click', function(event) {
  if (this.hash !== "") {
    event.preventDefault();
    var hash = this.hash;
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
      window.location.hash = hash;
      });
    } 
  });
  });
  </script>
</head>
<body id="myPage">
  <div class="header">
  <nav class="navbar navbar-static-top transparent">
   <div class="container-fluid">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle" id="left-menu" data-toggle="collapse" data-target="#menu_item">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       </button>
       <div class="special">
         <a href="index.php">
           <div class="brand-img">
             <div class="brand-img-prsnl">
             <img src="White.png" alt="brand-icon" width="60px" height="65px">
           </div>
<div class="brand-title">
<pre>
International
Model United Nations
</pre>
</div>
           </div>
         </a>
       </div>
    </div>
    <div class="collapse navbar-collapse nav-item-special" id="menu_item">
      <ul class="nav navbar-nav navbar-right">
		    <li><a href="#about" id="foot6">About Us</a></li>
        <li><a href="#conference" id="foot6">Confrences</a></li>
        <li><a href="#team" id="foot6">Our Team</a></li>
        <li><a href="#partner" id="foot6">Testimonials</a></li>
		<li>
		<div class="dropdown">
        <a href="#" id="foot4" class="dropbtn"><p id="free">Connect with Us</p></a>
        <div class="dropdown-content-2">
		<ul>
        <li><a id="help"href="#">On Campus</a></li>
		<hr id="line" width="100%">
        <li><a id="help2" href="#">Join Us</a></li>
		<hr id="line" width="100%">
        <li><a id="help" href="#">Sponsor Us</a></li>
		</ul>
        </div>
        </div>
		</li>
        <li><a href="#say-something" id="foot6">Blogs</a></li>
        <li><a href="#contact" id="foot6">Contact Us</a></li>
		  </ul>
      </div>
     </div>
   </nav>
  <div class="container row content">
    <div class="col-md-9 top-text">
      <h1>International<br>Model United Nations <b>2019</b></h1>
    </div>
  </div>
  <div class="container row content">
    <div class="col-md-7 second-top-text">
      <p>International Model United Nations (IMUN) brings youth together from
      around the world to learn and share the ideas from a diverse set of experiences
    and backgrounds where the Executive board, International Press and
    International Delegates consolidate to learn about diplomacy, international
  relations, and the United Nations.</p>
    </div>
  </div>
  <div class="container row content">
    <div class="col-md-9 top-btn">
      <span><button id="btn-1">Register</button><button id="btn-2">Know More</button></span>
    </div>
  </div>
  <div class="container row content">
    <div class="col-md-6 icon-special">
      <p id="social-text">Catch us at:<br>
      <span><a  class="icon" href="https://www.facebook.com/internationalmun2018/"><i class="fab fa-facebook-square"></i></a><a class="icon" href="https://www.instagram.com/"><i id="insta-icon" class="fab fa-instagram"></i></a></span></p>
    </div>
  </div>
  <div class="container content">
    <div class="arrow-icon">
    <a href="#conference"><i class="fas fa-angle-down"></i></a>
  </div>
  </div>
</div>
<div class="container-fluid below-head-1">
<div class="row title-row" id="conference">
<div class="col-md-6">
<h3><b>Conferences</b></h3>
</div>
<div class="col-md-6 right">
<div class="brand-img">
<div class="brand-title">
<pre id="sponsor-text">
                  IMUN 2018 Sponsor:
Australian Embassy, Bangkok
</pre>
</div>
<div class="sponsor-img-prsnl">
<img src="australian-embassy.png" alt="sponsor-icon" width="125px" height="95px">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 hero-image">
<div class="hanoi-text">
<h2><b>IMUN Hanoi 2019</b></h2>
</div>
<div class="hanoi-btn">
<span><button id="btn-3">Register Now</button><button id="btn-4">Know More</button></span>
</div>
<img src="hanoi.jpg" alt="hanoi-img" width="445px" height="420px">
</div>
<div class="col-md-6 imun-work">
<div class="imun-btn">
<span><button id="btn-5">View photos</button><button id="btn-6">Know More</button></span>
</div>
<img src="imun-2018.png" alt="imun-2018-work-img">
</div>
</div>
<div class="row below-con" id="partner">
<div class="col-md-6">
<h3><b>Partner Organisations</b></h3>
</div>
</div>
<div class="row part">
<div class="col-md-8 adjust">
<div class="col-md-2 center">
<img id="partner" src="romemun.jpg" alt="rome-mun" width="136px" height="140px">
<p id="partner-title">Rome MUN</p>
</div>
<div class="col-md-2 center">
<img id="partner" src="teimun.jpg" alt="tei-mun" width="136px" height="140px">
<p id="partner-title">TEIMUN</p>
</div>
<div class="col-md-2 center">
<img id="partner" src="amunc.jpg" alt="amunc" width="136px" height="140px">
<p id="partner-title">AMUNC</p>
</div>
<div class="col-md-2 center">
<img id="partner" src="benilde.jpg" alt="benildemun" width="136px" height="140px">
<p id="partner-title">Benilde MUN</p>
</div>
</div>
</div>
<div class="row part">
<div class="col-md-8 adjust">
<div class="col-md-2 center">
<img id="partner" src="iomthailand.jpg" alt="thailand" width="136px" height="140px">
<p id="partner-title">Thailand IMO</p>
</div>
<div class="col-md-2 center">
<img id="partner" src="student-update.jpg" alt="student-update" width="136px" height="140px">
<p id="partner-title">IR Student Updates</p>
</div>
<div class="col-md-2 center">
<img id="partner" src="zumun.png" alt="zumun" width="136px" height="140px">
<p id="partner-title">Zurich MUN</p>
</div>
</div>
</div>
<div class="row below-part" id="team">
<div class="col-md-7">
<h3 class="part-below"><b>IMUN 2019 Team Members</b></h3>
<p id="text-part">
Throughout the year, IMUN Team Members have been dedicated to providing an unprecedented
experience to the participants of IMUN 2019, and their top priority is to ensure that the conference is
rewarding and enjoyable for all.
</p>
</div>
</div>
<div class="row card-row scrolly">
  <div class="column">
    <div class="card">
      <img src="mohneesh.jpg" alt="executive-chairman" width="135px" height="135px">
      <p id="card-text">MOHNEESH BHARDWAJ</p>
      <p id="position-text-mohneesh">Executive Chairmen, India</p>
	  <button id="btn-8">Know More</button>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="fawad.jpg" alt="secretary-general" width="135px" height="135px">
      <p id="card-text">FAWAD ALI LANGAH</p>
      <p id="position-text">Secretary General</p>
	  <p id="position-text">IMUN 2019, Pakistan</p>
	  <button id="btn-7">Know More</button>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="henniel.jpg" alt="usg-of-graphics-art-designing" width="135px" height="135px">
      <p id="card-text-lyzha">HENNIEL LYZHA PUNONGBAYAN</p>
      <p id="position-text">USG of Graphics Art Designing</p>
	  <p id="position-text">IMUN 2019, Philippines</p>
	  <button id="btn-7">Know More</button>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="Shobhan.jpg" alt="executive-director" width="135px" height="135px">
      <p id="card-text">SHOBHAN MISHRA</p>
      <p id="position-text-mohneesh">Executive Director, India</p>
	  <button id="btn-8">Know More</button>
    </div>
  </div>
  
  <div class="column bips">
    <div class="card">
      <img src="bipasha.jpg" alt="content-writer" width="135px" height="135px">
      <p id="card-text">BIPASHA SONAWAL</p>
      <p id="position-text">Content Writer</p>
	  <p id="position-text">IMUN 2019, India</p>
	  <button id="btn-7">Know More</button>
    </div>
  </div>
  <button id="side-arrow"><i class="fas fa-angle-right"></i></button>
</div>
<div class="row below-team">
<div class="col-md-6">
<h3><b>What People have to say about us!</b></h3>
</div>
</div>
<div id="myCarousel" class="row carousel slide" data-ride="carousel">
    <div class="col-md-6 carousel-inner" role="listbox">
      <div class="item active">
        <div class="comment-box">
		<span><img id="img" src="side.png">
<pre id="comment-box">
<i id="qoute" class="fas fa-quote-left"></i>
      This is my first Model United Nations conference
      where I have gained a lot of new experience and
      have met people who are smart, kind and
      hardworking. Most importantly, It made me want to
      improve myself more!
</pre>
		<div class="fun"><span id="name"><img id="final" src="sand.jpg" alt="commentor" width="100px" height="100px">
		<p id="name-final">
		Sand Siwapron</p>
		<p id="place-final">Thailand
		</p>
		</span></div>
</span>
		</div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" id="left-slide" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" id="right-slide" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="row below-comment" id="contact">
<div class="col-md-6">
<h3><b>Get in Touch</b></h3>
</div>
</div>
<div class="row end" id="say-something">
<div class="col-md-6">
<div class="row first">
<span>
<img src="phone.png"><p id="title-phone">Phone</p>
<p id="title-no">
(+91)999 741 5973
</p>
</span>
</div>
<div class="row second">
<span>
<img src="email.png"><p id="title-phone">Email</p>
<p id="title-no">
info@internationalmun.org
</p>
</span>
</div>
<div class="row third">
<span>
<img src="marker.png"><p id="title-phone">Address</p>
<p id="title-no">
E-73 Sector SO, Gautam Budh Nagar, Noida, India-201304
</p>
</span>
</div>
</div>
</div>
</div>
<footer class="container-fluid bg-4">
<div class="row">
<div class="col-md-5" id="about">
  <h3><b>About IMUN</b></h3>
  <pre id="about-text">International Model United Nations (IMUN) brings students
together from around the world to learn and share ideas from a
diverse set of experiences and backgrounds where the Executive
board, International Press and International Delegates
consolidate to learn about diplomacy, international relations, and
the United Nations. </pre>
  </div>
  <div class="col-md-5">
  <div class="back_image">
<div id="form">
      <form action="#" method="post" name="secret_diary_signup">
	  <p id="form-title"><b>SAY SOMETHING</b></p>
	  <label>
        <input type="name" name="name" id="name" class="form-control" placeholder=" ">
		<p id="form2"> Name </p>
      </label><br>
        <label>
          <input type="email" name="email" id="email" class="form-control" placeholder=" ">
		  <p id="form2"> Email </p>
      </label><br>
	  <label>
	  <textarea id="textarea" class="form-control" id="comments" name="comments" placeholder=" " rows="5"></textarea>
	  <p id="form3"> Your message </p>
	  </label><br>
      <div>
        <input type="submit" class="form-control" id="submit-btn" name="submit" value="SEND"><br>
      </div>
      </form>
	  </div>
	</div>
  </div>
  <div class="col-md-2">
  <div class="back_image">
  <div id="move-top">
    <a href="#myPage"><i class="fas fa-angle-up"></i></a>
  </div>
  </div>
  </div>
  </div>
  <div class="row content">
    <div class="col-md-5 icon-special-bottom">
      <span><a  class="icon" href="https://www.facebook.com/internationalmun2018/"><i class="fab fa-facebook-f"></i></a><a  class="icon" href="https://www.instagram.com/"><i id="insta-icon" class="fab fa-instagram"></i></a></span>
    </div>
  </div>
  <div class="row">
  <div class="col-md-12">
  <div class="footer-nav" id="menu_item">
      <ul class="nav navbar-nav">
		<li><a href="#about" id="foot">About Us</a></li>
        <li><a href="#conference" id="foot">Confrences</a></li>
        <li><a href="#team" id="foot">Our Team</a></li>
        <li><a href="#partner" id="foot">Testimonials</a></li>
        <li>
		<div class="dropdown">
        <a href="#" id="foot4" class="dropbtn">Connect with Us</a>
        <div class="dropdown-content">
		<ul>
        <li><a id="help"href="#">On Campus</a></li>
		<hr id="line" width="100%">
        <li><a id="help2" href="#">Join Us</a></li>
		<hr id="line" width="100%">
        <li><a id="help" href="#">Sponsor Us</a></li>
		</ul>
        </div>
        </div>
		</li>
        <li><a href="#say-something" id="foot">Blogs</a></li>
		</ul>
    </div>
  </div>
  </div>
  <div class="row">
  <div class="col-md-12 copyright center">
  <h6><b>MADE BY Axon2 FROM Axonfactory</b></h6>
  </div>
  </div>
</footer>
</body>
</html>
