
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="Student1/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Student1/homeStyle.css" rel="stylesheet">

    <style>
      #body1{
        background-color: #ffffff;
      }

    </style>
  </head>

  <body>
    <div class="body1">
    <div class="container">

      <div class="masthead">
        <h3 class="text-muted">Educational Website</h3>

        <nav class="navbar navbar-light bg-faded rounded mb-3">
                    
            <ul class="nav navbar-nav text-md-center justify-content-md-between">
              <li class="nav-item active">
                <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="CoursesList.php">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="TimetablesList.php">Search Timetables</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Student1/livechat/index.php">Student Live-Chat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Student1/livechat/searchHome.php">Search Responses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="adminControl.php">Admin</a>
              </li>
              </
            </ul>
          
        </nav>
    </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Interested in Enrolling?</h1>
        <p class="lead">View our list of courses suitable for people of all ages and all interests. We have many Full-Time and Part-Time courses you may be interested in</p>
        <p><a class="btn btn-lg btn-success" href="CoursesList.php" role="button">View Courses!</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Student Live Chat</h2>
          <p>Make use of our college live-chat system for communication with your lecturer during class time. This function allows you to ask questions to the lecturer, who may post a response or may respond orally during class time.</p>
          <p><a class="btn btn-primary" href="Student1/livechat/index.php" role="button">Login Here &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Search Responses</h2>
          <p>Using this service allows you to search the database for replies to previously used chatrooms. This service is only available to students already registered. Login to use the service.</p>
          <p><a class="btn btn-primary" href="Student1/livechat/searchHome.php" role="button">Start Searching &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Timetables</h2>
          <p>Use this service if you wish to view your current timetable for the college term. Choose from the dropdown menu to select the class you are enrolled in and the timetable will be viewable on screen.</p>
          <p><a class="btn btn-primary" href="TimetablesList.php" role="button">View Timetables &raquo;</a></p>
        </div>
      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; Connor Doherty (LYIT)</p>
      </footer>

    </div> <!-- /container -->
  </div>
  </body>
</html>
