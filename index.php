<?php include'header.php'?>
          <div class="container mt-5">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/dharan.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/dharan.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/dharan.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          </div>


<!--About Sunsari-->




<section class=" bg-light about-us mt-5">
    <div class="container">
        <h2 class="section-title" style="color:#2b6777">Sunsari</h2>
   
<div class="row">
        <div class="col-xl-4 col-md-6 col-12 p-5">    
        
        <div class="about-us-image w-25 ">
            <img src="img/map.png" class="w=100" height="200">

</div>
</div>
<div class="col-xl-8 col-md-6 col-12 p-5">

<div class="about-us-info" id="box">
     <p class="text-dark" style="font-size:1.5rem">Sunsari District (Nepali: सुनसरी जिल्लाListen (help·info)) is one of 14 districts in Province No. 1 of Nepal. The district is located in the eastern part of the Outer Terai and covers an area of 1,257 km2 (485 sq mi).</p>
   
    </div>
<br>
</div>
</div>
<div class="container mt-2">
              <div class="row ">
                <div class="col s12 m4 ">
               <div class="card-panel">
              
                <i class="fa fa-picture-o" aria-hidden="true" style="font-size:58px;color: black;"></i></a>
                    <h4>Gallery</h4>
                    <p>See the photos of Sunsari</p>
              
                  </div>
                </a>
                </div>
                <div class="col s12 m4">
                  <div class="card-panel">
                   
                    <a href="" style="text-decoration:none" >
                    <i class="fa fa-video-camera" aria-hidden="true"style="font-size:58px;color: black;"></i></a>
                    <h4>Videos</h4>
                    <p>Watch videos</p>
                  </div>
                </div>
                <div class="col s12 m4">
                  <div class="card-panel">
                   
                    <a href="" style="text-decoration:none" >
                    <i class="fa fa-rss" aria-hidden="true" style="font-size:58px;color: black;"></i></a>
                    <h4>Blogs</h4>
                    <p>See the posts about the district</p>
                  </div>
                </div>
              </div>
            </div>
</section>
<!--Ending-->


<!--District-card-->
<section class="district-list bg-gray mt-5">
    <div class="container">
        <h2 class="section-title" style="padding:30px;color:#2b6777">Our District</h2>
        
       <div clas="d-flex"style="display:flex; flex-wrap:wrap">
     
                       
        <div class="district-card">
  
        <figure>
        <img class="district-image" src="img/taltalaiya.jfif" >

</figure>
        <div class="district-detail">
      
<h4>Places</h4>

<p>Learn about popular cities and top attractions in Sunsari.</p> 
<button class="btn btn-info" style="background-color:#2b6777">  
<a href="places.php" class="text-white" style="text-decoration:none">Read More...</a>
</button>
</div>

</div> 
  
<div class="district-card">
  
        <figure>
        <img class="district-image" src="img/map.png" >

</figure>
        <div class="district-detail">
      
<h4>Geography</h4>

<p>Learn some geographical information about the district</p> 
<button class="btn btn-info" style="background-color:#2b6777">  
<a href="geography.php" class="text-white" style="text-decoration:none">Read More...</a>
</button>
</div>

</div> 
  
<div class="district-card">
  
        <figure>
        <img class="district-image" src="img/culture.jpeg" >

</figure>
        <div class="district-detail">
      
<h4>Culture</h4>

<p>Learn about culture and lifestyle of population residing in Sunsari.</p> 
<button class="btn btn-info" style="background-color:#2b6777">  
<a href="culture.php" class="text-white" style="text-decoration:none">Read More...</a>
</button>
</div>

</div> 
  
<div class="district-card">
  
        <figure>
        <img class="district-image" src="img/itahari.jpg" >

</figure>
        <div class="district-detail">
      
<h4>News</h4>

<p>Here are some latest news .</p> 
<button class="btn btn-info" style="background-color:#2b6777">  
<a href="news.php" class="text-white" style="text-decoration:none">Read More...</a>
</button>
</div>

</div> 
  
                       




</div>

</div>
</section>

<style> 



/*Our District*/
.bg-gray{
    background-color: #f3f3f3;
    padding:25px 0;
}
.district-list .district-card{
    width:28%;
    box-shadow: 0 0 6px 7px #dfdfdf;
    
}
.district-card{
    box-shadow:0 0 6px 7px #dfdfdf;
    margin:0 15px;
    border-radius:10px;
    height:100%;
    overflow:hidden;
}
.district-list .district-card .district-image{
    width:100%;
    
}
.district-list .district-card .district-detail{
    padding:10px;
}
.district-list .district-card figure{
    border-bottom:1 px solid #7f7f7f;
    max-height:130px;
    overflow:hidden;
}


/*Media Responsive*/
@media only screen and (max-width:1199px){
    .district-list .district-card{
        width:38%
    }
}
@media only screen and (max-width:768px){
    .district-list .district-card{
        width:49%
    
    }
}
@media only screen and (max-width:576px){
    .district-list .district-card{
        width:100%
    }
}
.w-100-mobile{
    width:100%;
}
</style>




<!--End of Cards-->


          <section class="container" style="background-color:#c8d8e4">
            <div class="container mt-5 py-5">
              <div class="row ">
                <div class="col s12 m4 ">
               <div class="card-panel">
              
                <i class="fa fa-picture-o" aria-hidden="true" style="font-size:58px;color: black;"></i></a>
                    <h4>Gallery</h4>
                    <p>See the photos of Sunsari</p>
              
                  </div>
                </a>
                </div>
                <div class="col s12 m4">
                  <div class="card-panel">
                   
                    <a href="" style="text-decoration:none" >
                    <i class="fa fa-video-camera" aria-hidden="true"style="font-size:58px;color: black;"></i></a>
                    <h4>Videos</h4>
                    <p>Watch videos</p>
                  </div>
                </div>
                <div class="col s12 m4">
                  <div class="card-panel">
                   
                    <a href="" style="text-decoration:none" >
                    <i class="fa fa-rss" aria-hidden="true" style="font-size:58px;color: black;"></i></a>
                    <h4>Blogs</h4>
                    <p>See the posts about the district</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
         
          
        
          <style>
          .card-panel{
    display: flex;
    flex-direction:column;
    width:300px;
   
   color: #000;
   border:4px solid #fff ;
 
    align-items:center;
 
    padding:5px;
    border-radius: 15px;
    background:linear-gradient(to top, #528b98, #f3f3f3 55%);
    background-size: 100% 200%;
    transition:all .8s;
    }
    .card-panel:hover{
    background-position: left bottom;
    color:#f3f3f3;
    border: none;
    box-shadow:0 0 20px #c8d8e4;
    }
    </style>
<!--<script src="js/jquery.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
 crossorigin="anonymous"></script> 
 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
bundle halnu parxa kam garauna ko lagi 


          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>-->
<?php include'footer.php'?>