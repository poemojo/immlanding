
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="David Levinson">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8fe04d318d.js"></script>
<link rel="stylesheet" href="/assets/css/style.min.css">

<title>Examples</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
      <div class="container">
         <a class="navbar-brand" href="/">
            <img src="/assets/img/immc-small.png">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#topnav" aria-controls="topnav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="topnav">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Medical Services</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Patient Resources</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Locations</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">News &amp; Events</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
               </li>
               <li class="nav-item mt-2 mr-1">
                  <a href="#" class="badge badge-primary text-uppercase">Now Hiring</a>
               </li>
               <li class="nav-item mt-2">
                  <a href="#" class="badge badge-danger text-uppercase">Online Check-in</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <div style="height:90px">
   </div>

   <div class="container-fluid"
    style="background-image: url('http://immcare.com/wp-content/uploads/2016/08/IMMCare-Runners.jpg'); background-size:contain; background-repeat:no-repeat; padding:2rem;">
      <?php if (isset($_POST['contactIsSubmit']) && $_POST['contactIsSubmit'] == 1): ?>
      <div class="alert alert-success alert-dismissable fade show" role="alert">
         <strong>Thank you</strong>, <?= $_POST['contactName']; ?>, for contacting us.
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <?php endif; ?>
      <div class="border" style="width:37.5%; margin:2rem auto; min-width:320px">
         <form method="post" action="/">
            <header class="row">
               <div class="col-xs-12 bg-dark text-light container-fluid">
                  <h2 class="text-bold text-center text-uppercase">Contact Us</h2>
               </div>
               <div class="bg-light container-fluid">
                  <div class="form-group">
                     <label for="contactName">Your Name <small class="text-danger">(required)</small></label>
                     <input required id="contactName" name="contactName" type="text" class="form-control" placeholder="(Enter name)">
                  </div>
                  <div class="form-group">
                     <label for="contactEmail">Your Email <small class="text-danger">(required)</small></label>
                     <input required id="contactEmail" name="contactEmail" type="email" class="form-control" placeholder="(Enter email)">
                  </div>
                  <div class="form-group">
                     <label for="contactSubject">Subject</label>
                     <input id="contactSubject" name="contactSubject" type="text" class="form-control" placeholder="(Enter subject)">
                  </div>
                  <div class="form-group">
                     <label for="contactMessage">Message</label>
                     <textarea style="height:128px;" class="form-control" id="contactMessage" name="contactMessage" placeholder="(Enter message)">
                     </textarea>
                  </div>
                  <input type="hidden" name="contactIsSubmit" id="contactIsSubmit" value="1">
                  <div class="d-flex justify-content-center mb-1">
                     <button type="submit" class="d-block btn btn-primary ml-auto mr-auto">Submit</button>
                  </div>
               </div>
            </header>
         </form>
      </div>
      <div class="d-flex flex-lg-nowrap flex-wrap justify-content-around align-items-start">
         
         <div id="main">
            <div class="panel panel-default" style="padding:2rem 3rem; background:rgb(242, 247, 255);">
               <h4 class="text-danger">Effective March 24, 2019</h4>

               <p>
                  <em class="d-block">Immediate Care of Morganville has relocated to:</em>
                  <strong class="d-block">Immediate Care of Marlboro</strong>
                  Marlboro Medical Arts Building<br>
                  479 Route 520, Marlboro, NJ 07746<br>
                  732.218.7550
               </p>

            </div>
            <div style="padding:1rem 2rem">
               <h1 style="color:rgb(48, 69, 140); font-weight:bold;">
                  Immediate Care Medical Walk-In
               </h1>
               <h2 style="color:rgb(82, 139, 187);">
                  Your Neighborhood Urgent Care Center<br>
                  #FeelBetterNow
               </h2>
            </div>
            <div class="d-flex flex-wrap flex-lg-nowrap justify-content-between align-items-center flex-row">
               <img class="d-block mr-3" src="http://immcare.com/wp-content/uploads/2016/08/IMMCare-Patient-1-e1470689148318.jpg" alt="" title="IMMCare-Patient"  style="width:100%; height:auto;" srcset="http://immcare.com/wp-content/uploads/2016/08/IMMCare-Patient-1-e1470689148318-200x142.jpg 200w, http://immcare.com/wp-content/uploads/2016/08/IMMCare-Patient-1-e1470689148318-400x285.jpg 400w, http://immcare.com/wp-content/uploads/2016/08/IMMCare-Patient-1-e1470689148318.jpg 600w" sizes="(max-width: 800px) 100vw, 600px">
               <p class="flex-shrink-1" style="font-size:1.125rem">
                  You don&rsquo;t plan for life&rsquo;s unexpected bumps and bruises, colds and fevers, but fortunately here at Immediate Care, we do. Our urgent care centers combine the much-needed convenience of a walk-in medical office with the delivery of compassionate, quality medical care. Located in Brick, East Windsor, Edison, Hazlet, Marlboro, Red Bank, and Toms River. We are open seven days a week, including most holidays, with no appointment necessary.
               </p>
            </div>
            <br>

            <div class="panel panel-default" style="border-top:solid 3px rgb(42, 48, 200); padding:2rem 3rem; background:rgb(242, 247, 255);">
               <h2 class="text-primary text-center">Check into our urgent care centers from anywhere.</h2>
               <p class="text-center">Join a virtual queue right from your smart phone. Click to avoid the waiting room crowds!</p>
               <div class="d-flex justify-content-center">
                  <a href="#" class="d-block btn btn-danger text-uppercase" style="padding:0.375rem 0.625rem">Online Check-in</a>
               </div>
            </div>
            <br>
            <br>
            <div class="embed-container">
               <iframe src="https://player.vimeo.com/video/236630131?autoplay=0&amp;autopause=0" allowfullscreen="" title="vimeo236630131" allow="autoplay; fullscreen" id="player_1" name="fitvid0"></iframe>
            </div>
            <br>
            <br>
            <div class="container">
               <div class="row" style="font-size:1.125rem;">
                  <div class="col-xs-12 col-lg-6 d-flex align-items-start">
                     <div>
                        <div class="badge text-danger badge-default bg-light rounded-circle" style="font-size:1.25em">
                           <span class="fa fa-medkit"></span>
                        </div>
                     </div>
                     <div>
                        <h4 class="text-primary text-uppercase">Our Services</h4>
                        <p>We offer urgent care and many other services on a walk in basis</p>
                        <p><a href="#">View More&raquo;</a></p>
                     </div>
                  </div>
                  <div class="col-xs-12 col-lg-6 d-flex align-items-start">
                     <div>
                        <div class="badge bg-light text-danger badge-default rounded-circle" style="font-size:1.25em">
                           <span class="fas fa-map-marker-alt"></span>
                        </div>
                     </div>
                     <div>
                        <h4 class="text-primary text-uppercase">Our Locations</h4>
                        <p>Immediate Care medical centers are located in Brick, East Windsor, Edison, Hazlet, Marlboro, Red Bank, and Toms River.</p>
                        <p><a href="#">View Locations&raquo;</a></p>
                     </div>
                  </div>
                  <div class="col-xs-12 col-lg-6 d-flex align-items-start">
                     <div>
                        <div class="badge text-danger badge-default bg-light rounded-circle" style="font-size:1.25em">
                           <span class="fa fa-credit-card"></span>
                        </div>
                     </div>
                     <div>
                        <h4 class="text-primary text-uppercase">Insurance &amp; Payment</h4>
                        <p>Our centers accept most major insurance plans and Medicare.</p>
                        <p><a href="#">Learn More&raquo;</a></p>
                     </div>
                  </div>
                  <div class="col-xs-12 col-lg-6 d-flex align-items-start">
                     <div>
                        <div class="badge text-danger badge-default bg-light rounded-circle" style="font-size:1.25em">
                           <span class="fa fa-check-square"></span>
                        </div>
                     </div>
                     <div>
                        <h4 class="text-primary text-uppercase">What to Bring</h4>
                        <p>Arriving prepared will expedite your visit.</p>
                        <p><a href="#">Learn More&raquo;</a></p>
                     </div>
                  </div>
               </div>
            </div>
    
            <div class="w-75 mr-auto ml-auto">
               <div class="panel panel-default border d-flex justify-content-around align-items-center" style="border-top:solid 3px rgb(42, 48, 200) !important; padding:2rem;">
                  <h2 class="text-primary">Notice of Privacy Practices</h2>
                  <a href="#" class="d-block btn btn-danger text-uppercase">Read More</a>
               </div>
               <br>
               <div class="panel panel-default" style="padding:2rem 3rem; background:rgb(242, 247, 255);">
                  <p class="text-danger">News & Events</p>
                  <br>
                  <ul>
                     <li>Airport Plaza Sidewalk Sale Sponsored by Immediate Care Urgent Care</li>
                     <hr>
                     <li>Welcome Iza Boesler MD as NEW Medical Director for our Toms River & Brick locations</li>
                     <hr>
                     <li>Listen to Immediate Care’s NEW Jingle</li>
                     <hr>
                  </ul>
                  <br>
                  <br>
               </div>
            </div>
         </div>
        <aside class="w-25" style="padding:1rem 2rem; min-width:310px;">
            <img src="http://immcare.com/wp-content/uploads/2019/07/va-authorized-urgent-care-provider-web-badge-300x112-300x112.png" alt="VA Authorized Urgent Care Provider" style="max-width: 100%; height: auto;" srcset="http://immcare.com/wp-content/uploads/2019/07/va-authorized-urgent-care-provider-web-badge-300x112-200x75.png 200w, http://immcare.com/wp-content/uploads/2019/07/va-authorized-urgent-care-provider-web-badge-300x112.png 300w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="112">
            <div class="d-flex justify-content-center align-items-center flex-column bg-primary text-light mt-2 " style="height:480px; width:300px;">
               <h1><span class="fab fa-facebook-f"></span></h1>
               <h2 class="text-uppercase text-center">Facebook Plugin Placeholder</h2>
            </div>
         </aside>
      </div>
      <div style="clear:both;">
         &nbsp;
      </div>
   </div>
   <div class="bg-primary text-light">
      <div class="container-fluid">
         <div class="d-flex justify-content-around align-items-start flex-wrap">
            <img src="http://immcare.com/wp-content/uploads/2016/08/IMMCare-stackedfooter.png" alt="Insert Alternative Text Here" title="IMMCare-stackedfooter" style="width:200px;">
            <div class="d-flex flex-column">
               <p><strong>BRICK</strong><small class="d-block">8 Brick Plaza</small></p>
               <p><strong>EAST WINDSOR</strong><small class="d-block">319 Route 130 N</small></p>
               <p><strong>EDISON</strong><small class="d-block">319 Route 130 N</small></p>
               <p><strong>HAZLET</strong><small class="d-block">1376 State Route 36</small></p>
            </div>
            <div class="d-flex flex-column">
               <p><strong>MARLBORO</strong><small class="d-block">479 Route 520 Suite A103</small></p>
               <p><strong>RED BANK</strong><small class="d-block">46 Newman Springs Rd. E</small></p>
               <p><strong>TOMS RIVER</strong><small class="d-block">1 Route 37 W</small></p>
            </div>
            <div class="d-flex flex-column">
               <div>
                  <img src="http://immcare.com/wp-content/uploads/2017/08/Monmouth-Health-Life-Award-White@2x-150x150.png" alt="" style="max-width: 100%; height: auto;" srcset="http://immcare.com/wp-content/uploads/2017/08/Monmouth-Health-Life-Award-White@2x-66x66.png 66w, http://immcare.com/wp-content/uploads/2017/08/Monmouth-Health-Life-Award-White@2x-150x150.png 150w" sizes="(max-width: 150px) 100vw, 150px">
               </div>
               <div>
                  <a href="https://www.va.gov/"><img src="http://immcare.com/wp-content/uploads/2019/07/va-authorized-urgent-care-provider-web-badge-180x67.png" class="image wp-image-2416  attachment-full size-full" alt="VA Authorized Urgent Care Provider" style="max-width: 100%; height: auto;" srcset="http://immcare.com/wp-content/uploads/2019/07/va-authorized-urgent-care-provider-web-badge-180x67-177x67.png 177w, http://immcare.com/wp-content/uploads/2019/07/va-authorized-urgent-care-provider-web-badge-180x67.png 180w" sizes="(max-width: 180px) 100vw, 180px" width="180" height="67"></a>
               </div>
            </div>
            <div class="d-flex flex-column">
               <div>
                  <img src="http://immcare.com/wp-content/uploads/2016/08/CUC-2-e1470753073212.png" alt="CUC logo" title="CUC" class="img-responsive wp-image-455" width="100" height="96">
               </div>
               <div>
                  <img src="http://immcare.com/wp-content/uploads/2016/11/SFCEnterprises.png" alt="SFC Enterprises" class="img-responsive wp-image-699" width="119" height="118">
               </div>
            </div>
         </div>
      </div>
      <br>
      <br>
      <br>
   </div>
   <footer class="bg-light fixed-bottom" style="min-height:54px">
      <div style="min-height:54px;"class="container d-flex justify-content-between align-items-center flex-wrap">
         <p style="line-height:1rem; font-size:0.75rem;">&copy;2016 Immediate Care Medical Walk-In | Site design Direct Development Design + Communications</p>
         <p class="ml-lg-0 mr-lg-0 ml-auto mr-auto">
            <button class="btn-social rounded-circle mr-1 ml-1"><span class="fab fa-facebook-f"></span></button>
            <button class="btn-social rounded-circle mr-1 ml-1"><span class="fab fa-twitter"></span></button>
            <button class="btn-social rounded-circle mr-1 ml-1"><span class="fab fa-instagram"></span></button>
         </p>
      </div>
   </footer>
   <script>
      $(function(){
         $('.alert').alert();
      });
   </script>
</body>
</html>