<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> AMİSOS HOTEL </title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;500&family=Poppins:ital,wght@0,600;1,200;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>

     *{
      font-family: 'Merienda', cursive;
     }
     .h-font{
      font-family: 'Merienda', cursive;
     }
  </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-white px-lx-3 py-lg-2 shadow-sm sticky-top ">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php"> AMİSOS HOTEL </a> 
    <button class="navbar-toggler shadown-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">ODALAR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">FACİLİTİES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">BİZE ULAŞIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">HAKKINDA</a>
        </li>

        
      </ul>
      <div class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#LoginModel"> 
          GİRİŞ 
           </button>
        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModel">
           KAYIT OL
          </button>
    
      </div>
    </div>
  </div>
</nav>
<div class="modal fade" id="LoginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
 
<div class="modal fade" id="registerModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form> 
         <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center">
           <i class="bi bi-person-lines-fill fs-3 me-2 "></i>
           <i class="bi bi-people-fill "></i> Kullanici Kaydi
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="mb-3">
        <label class="form-label">E-posta </label>
        <input type="email" class="form-control shadow-none" >
       </div>
       <div class="mb-4">
        <label class="form-label">ŞİFRE</label>
        <input type="password" class="form-control shadow-none" >
      </div>
         <div class="d-flex align-items-center justify-content-between mb-2 ">  
         <button  type=" submit" class="btn btn-dark shadow-none"> GİRİŞ</button>
         </div>
         <a href=" javascript: void(0) " class =" text-secondary text-decoration-none" > Parolanizi mi unuttunuz?</a>
         </div>
      </div>
    </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>