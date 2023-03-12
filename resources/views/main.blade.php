
<!DOCTYPE html>
<!-- saved from url=(0049)file:///C:/Users/ojins/Desktop/dailife/index.html -->
<html>

<head>
    <title>Dailife</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://kit.fontawesome.com/ac5f01144e.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ac5f01144e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

    <style>
        .bg1 {
            background-color: #f4e464;
            /* margin-top: 30px; */
        }
        .bg2 {
            background-color: #FFCC00;
            /* margin-top: 30px; */
        }
        .bg3{
          background-color: #FFB800;
        }
        .bg4{
          background-color: #FFCD07;
        }
        
        .bulet {
            border-radius: 20px;
            stroke: black;
        }
        .fullbulet{
          border-radius: 1000px;
          stroke: black;
        }
        .ukr{
          font-size: 60px;
        }
        .ukpot{
          width: 1080px;
          height: 800px;
        }
        .uklogo{
          width: 50px;
          height: 43px;
        }
        body {
        font-family: 'Raleway', serif;
        }

        .rwbold {
        font-family: 'Raleway', serif;
        font-weight: bolder; 
        }
        .bgimg {
          background-image: url("image/Hal2.png");
          background-size:cover;
          /* background-repeat: no-repeat; */
          width:1900px;
          height: 910px;
        }
        .jstf{
          text-align: justify;
        }
        .rnd1{
          border-radius: 0px 0px 0px 70px;
        }
        .rnd2{
          border-radius: 0px 70px 0px 0px;
        }
        hr {
          height: 1px;
          background-color: black;
          opacity: 1;
        }
        
    </style>

</head>

<body>
  <nav class="navbar navbar-expand-lg p-0">
    <div class="container-fluid bg4 border border-dark">
      <a class="navbar-brand ms-5 my-2 rwbold" href="#">
        <img src="/image/logo.png">
        Dailife</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active ms-5 rwbold" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link rwbold" href="#">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link rwbold" href="#">Q&A</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle rwbold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link rwbold" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link rwbold">|</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link rwbold" href="#">Daftar</a>
          </li>
        </ul>
        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>
</body>
</html>