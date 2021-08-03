<!DOCTYPE html>
<html lang="en">
<head>
  
  <link rel="stylesheet" type="text/css" href="reviews.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
<div class="website">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="img2.jpg" class="image">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Fresher
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="reg_fre.php">Register</a>
                <a class="dropdown-item" href="log_fre.php">Login</a>
                
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Student
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="reg_stu.php">Register</a>
                <a class="dropdown-item" href="log_stu.php">Login</a>
                
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#sectionAbout">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sectionReviews">Reviews</a>
            </li>
            
          </ul>
          
        </div>

      </nav>
      <div class="bg-container d-flex flex-column justify-content-center">
        <div class="text-center">

            <h1 class="title mt-2">COLLEGE MENTORING SYSTEM FOR FRESHERS</h1>
        </div>
    </div>

    <div id="sectionAbout">
        <div class="container-fluid">
          <div class="about-us p-4 m-5">
            <h1 class="aboutus-heading ml-3">ABOUT US</h1>
            
            <hr class="hrline" />
            <p class="paragraph p-4">
              Freshers do not have any idea about engineering colleges. So it is difficult for them to choose a college. They need some information like previous year EAMCET rank, availability of hostel, fee structure, near or far away from the city, food, security, faculty, autonomous or non-autonomous, subjects each branch offer, placements, average salary package, highest salary package, companies visited the college. To get those details they should go to the college and enquire them which is a time delaying process. So  we came up with an idea of college feedback system. 
              College feedback system is a web application which provides an easy way to know information about a college. In this application, all the information of the college will be added by admin. Students can find all the details of college. Freshers can ask queries and the students who are studying in the college can reply to them and share the feedback of the college which will be helpful for the new joiners. So it will be very useful for the freshers who are looking for college information

            </p>
          </div>
        </div>

        <div id="sectionReviews">
          <div class="container-fluid px-1 py-5 mx-auto">
            <div class="reviews ml-5 mr-5">
            <div class="row justify-content-center">
              <div class="col-xl-7 col-lg-8 col-md-10 col-12 text-center mb-5">
              <div class="card">
                
                <div class="row text-left">
                    
                    <div>
                      <p class="content ml-2">It really saves time going to the college and helps a lot</p>
                    </div>
                </div>
              </div>
              <div class="card">
                <div class="row text-left">
                    
                    <div>
                      <p class="content ml-2">It provides a lot of information which freshers look for</p>
                    </div>
                </div>
                
              </div>        
          
              <div class="card">
                    <label class="submitreview-heading">Your Comment</label>
                    <textarea class="form-control"></textarea>
                    <div class="text-center mt-3">
                    <button class="btn btn-primary btn-sm" type="button"> Submit Comment </button>
                    </div>
              </div>
            </div>
          </div>
        </div>
</div>
</body>
</html>
