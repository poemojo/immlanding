
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
    style="background-image: url('http://immcare.com/wp-content/uploads/2016/08/IMMCare-Runners.jpg'); background-size:contain; background-repeat:no-repeat; padding:3rem;">
      <?php if (isset($_POST['contactIsSubmit']) && $_POST['contactIsSubmit'] == 1): ?>
      <h3>Thank you, <?= $_POST['contactName']; ?>, for contacting us.</h3>
      <?php endif; ?>
      <div class="border" style="width:37.5%; margin:1rem auto;">
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

   </div>

   <footer class="bg-light fixed-bottom">
      <div style="min-height:54px;"class="container d-flex justify-content-between align-items-center flex-wrap">
         <p style="line-height:1rem; font-size:0.75rem;">&copy;2016 Immediate Care Medical Walk-In | Site design Direct Development Design + Communications</p>
         <p class="ml-lg-0 mr-lg-0 ml-auto mr-auto">
            <button class="btn-social rounded-circle mr-1 ml-1"><span class="fab fa-facebook-f"></span></button>
            <button class="btn-social rounded-circle mr-1 ml-1"><span class="fab fa-twitter"></span></button>
            <button class="btn-social rounded-circle mr-1 ml-1"><span class="fab fa-instagram"></span></button>
         </p>
      </div>
   </footer>
</body>
</html>