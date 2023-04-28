<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>footcap</title>
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css" />

  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./assets/css/main.css" />
</head>

<body>
  <!-- <section class="update fixed-top" id="loading">
    <div class="ss spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </section> -->



  <div class="offcanvas offcanvas-end w-50 w-sm-25" tabindex="-1" id="offcanvasRight"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabel">footcap</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="navbar-nav me-auto mb-2 mb-lg-0 ps-5" id="navbarSupportedContent">
        <a class="nav-link active pb-3" aria-current="page" href="#">Home</a>
        <a class="nav-link pb-3" href="#">Feature</a>
        <a class="nav-link pb-3" href="#">Product</a>
        <a class="nav-link" href="#">New </a>
      </div>
    </div>
  </div>

  <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example "
    tabindex="0">

    <main class="min-vh-100">

      <nav class="navbar navbar-expand-lg py-3 fixed-top" id="navbar-example2">
        <div class="container">
          <a class="navbar-brand" href="#">
            <div class="logo"><a href="#"><span>F</span>ootcap</a></div>
          </a>

          <div class="collapse navbar-collapse nav ps-5 ms-3" id="navbarSupportedContent">
            <a class="nav-link active" aria-current="page" href="#scrollspyHeading1">Home</a>
            <a class="nav-link" href="#scrollspyHeading2">Feature</a>
            <a class="nav-link" href="#scrollspyHeading3">Product</a>
            <a class="nav-link" href="#scrollspyHeading4">New </a>
          </div>

          <div class="icon fs-4 pe-5 me-4 ms-auto">
            <span class="darkmood"> <i class="fa-regular fa-moon pe-3 ms-auto"></i></span>
            <span data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight"><i
                class="fa-regular fa-lock"> <span class="num"></span> </i></span>
                <span class="darkmood p-3"><a href="login.php"><i class="fa-regular fa-arrow-right-to-bracket"></i></a> </span>

                
          </div>

          <button class="navbar-toggler order-last" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <i class="fa-solid fa-bars text-dark"></i>
          </button>
        </div>
      </nav>


      
      <div class="hero">
        <div class="con">
            <p class="text">New Summer</p>
            <h1>Shose Collection</h1>
            <p class="pp">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Deserunt sint sunt ab natus. In sunt veniam, eum consectetur .</p>
            <button href="">Show Now <i class="fa-regular fa-arrow-right"></i></button>
        </div>
    </div>
    </main>


    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Purchased products</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body offCanvABody">
       
      
      </div>
    </div>

   

    <section class="feature py-4" id="scrollspyHeading2">
      <div class="container py-5 px-lg-5">
        <h2>FEATURED</h2>

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row pt-5 row-cols-1 row-cols-md-2 row-cols-lg-3 gy-4">
                <div class="col">
                  <div class="card">
                    <span class="catg">sale</span>
                    <div class="imgboxs">
                      <img src="./assets/img1/product-2.jpg" class="card-img-top w-100" alt="..." />
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title">ROSE GOLD</h5>
                      <h6 class="card-subtitle my-3">$890</h6>
                      <button type="button" class="btn btn-dark text-uppercase rounded-0 py-2 px-4">
                        add to cart
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <span class="catg">sale</span>
                    <div class="imgboxs">
                      <img src="./assets/img1/product-4.png" class="card-img-top pb-2" alt="..." />
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title">ROSE GOLD</h5>
                      <h6 class="card-subtitle my-3">$890</h6>
                      <button type="button" class="btn btn-dark text-uppercase rounded-0 py-2 px-4">
                        add to cart
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <span class="catg">sale</span>
                    <div class="imgboxs">
                      <img src="./assets/img1/product-5.jpg" class="card-img-top" alt="..." />
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title">ROSE GOLD</h5>
                      <h6 class="card-subtitle my-3">$890</h6>
                      <button type="button" class="btn btn-dark text-uppercase rounded-0 py-2 px-4">
                        add to cart
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row pt-5 row-cols-1 row-cols-md-2 row-cols-lg-3 gy-4">
                <div class="col">
                  <div class="card">
                    <span class="catg">sale</span>
                    <div class="imgboxs">
                      <img src="./assets/img1/product-6.jpg" class="card-img-top" alt="..." />
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title">ROSE GOLD</h5>
                      <h6 class="card-subtitle my-3">$890</h6>
                      <button type="button" class="btn btn-dark text-uppercase rounded-0 py-2 px-4">
                        add to cart
                      </button>
                    </div>
                  </div>
                </div>
          
                <div class="col">
                  <div class="card">
                    <span class="catg">sale</span>
                    <div class="imgboxs">
                      <img src="./assets/img1/product-7.jpg" class="card-img-top pb-2" alt="..." />
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title">ROSE GOLD</h5>
                      <h6 class="card-subtitle my-3">$890</h6>
                      <button type="button" class="btn btn-dark text-uppercase rounded-0 py-2 px-4">
                        add to cart
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <span class="catg">sale</span>
                    <div class="imgboxs">
                      <img src="./assets/img1/product-8.jpg" class="card-img-top" alt="..." />
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title">ROSE GOLD</h5>
                      <h6 class="card-subtitle my-3">$890</h6>
                      <button type="button" class="btn btn-dark text-uppercase rounded-0 py-2 px-4">
                        add to cart
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <button class="btnone carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <i class="fa-solid fa-arrow-left-long"></i>
          </button>
          <button class="btntwo carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <i class="fa-solid fa-arrow-right-long"></i>
          </button>
        </div>
      </div>
    </section>

    <section class="story">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-2">
          <div class="left col">
            <div class="imgbox">
              <img src="./assets/img1/product-2.jpg" alt="" />
            </div>
          </div>
          <div class="right col">
            <h3>OUR STORY</h3>
            <h4 class="display-6 fw-bold mb-4">
              Inspirational Watch of this year
            </h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio
              aliquid tempora, non quae deserunt vel minus ipsum enim fugiat
              praesentium?
            </p>
            <a href="" class="dis">DISCOVER </a>
          </div>
        </div>
      </div>
    </section>

    <section class="product py-3" id="scrollspyHeading3">
      <div class="container py-5 px-lg-5">
        <h2>PRODUCTS</h2>

        <div class="row pt-5 row-cols-1 row-cols-md-2 row-cols-lg-3 gx-5  px-5">
        <?php 
$con= new mysqli("localhost","root","","test1",3306);
$sql="SELECT * FROM `product`";
$res=$con->query($sql);
if($res->num_rows>0)
{
foreach ($res as $row ) {
echo
'<div class="col">
<div class="card">
  <div class="imgboxs">
    <img src="'.$row["img"].'" class="card-img-top " alt="..." />
  </div>
  <div class="card-body text-center">
    <h5 class="card-title">'.$row["title"].'</h5>

    <i class="fa-regular fa-lock"></i>
    <a href="veiw.php?id='.$row["id"].'" class="btn btn-danger"> المزيد  </a>


  </div>
</div>
</div>';
}
}



?>

          <div class="col">
            <div class="card">
              <div class="imgboxs">
                <img src="./assets/img1/product-2.jpg" class="card-img-top" alt="..." />
              </div>
              <div class="card-body text-center ">
                <h5 class="card-title">ROSE GOLD</h5>
                <h6 class="card-subtitle my-3">$890</h6>
                <i class="fa-regular fa-lock"></i>
               
              </div>
            </div>
          </div>
       
          <div class="col">
            <div class="card">
              <div class="imgboxs">
                <img src="./assets/img1/product-5.jpg" class="card-img-top" alt="..." />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">ROSE GOLD</h5>
                <h6 class="card-subtitle my-3">$890</h6>
                <i class="fa-regular fa-lock"></i>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="imgboxs">
                <img src="./assets/img1/product-6.jpg" class="card-img-top" alt="..." />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">ROSE GOLD</h5>
                <h6 class="card-subtitle my-3">$890</h6>
                <i class="fa-regular fa-lock"></i>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="imgboxs">
                <img src="./assets/img1/product-7.jpg" class="card-img-top" alt="..." />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">ROSE GOLD</h5>
                <h6 class="card-subtitle my-3">$890</h6>
                <i class="fa-regular fa-lock"></i>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="imgboxs">
                <img src="./assets/img1/product-8.jpg" class="card-img-top" alt="..." />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">ROSE GOLD</h5>
                <h6 class="card-subtitle my-3">$890</h6>
                <i class="fa-regular fa-lock"></i>

              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section class="comment">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-2 ">


          <div id="comment" class="carousel slide left mb-5 ">
            <div class="carousel-inner ">
              <div class="carousel-item active ">
                <div class=" card p-4 col ">
                  <i class="fa-solid fa-quote-left py-4"></i>
                  <p>They are the best watches that one acquires, also they are always with the latest
                    news and trends, with a very comfortable price and especially with the attention
                    you receive, they are always attentive to your questions.</p>
                  <h6>March 27.2021</h6>
                  <div class="imgbox d-flex  align-items-center">
                    <div class="img"><img src="./assets/img/testimonial1.jpg" alt=""></div>
                    <div class="text">
                      <h5>Lee Doe</h5> <small>Direct of a company</small>
                    </div>
                  </div>

                </div>
              </div>
              <div class="carousel-item ">
                <div class=" card p-4 col ">
                  <i class="fa-solid fa-quote-left py-4"></i>
                  <p>They are the best watches that one acquires, also they are always with the latest
                    news and trends, with a very comfortable price and especially with the attention
                    you receive, they are always attentive to your questions.</p>
                  <h6>March 27.2021</h6>
                  <div class="imgbox d-flex  align-items-center">
                    <div class="img"><img src="./assets/img/testimonial2.jpg" alt=""></div>
                    <div class="text">
                      <h5>Lee Doe</h5> <small>Direct of a company</small>
                    </div>
                  </div>

                </div>
              </div>
              <div class="carousel-item ">
                <div class=" card p-4 col ">
                  <i class="fa-solid fa-quote-left py-4"></i>
                  <p>They are the best watches that one acquires, also they are always with the latest
                    news and trends, with a very comfortable price and especially with the attention
                    you receive, they are always attentive to your questions.</p>
                  <h6>March 27.2021</h6>
                  <div class="imgbox d-flex  align-items-center">
                    <div class="img"><img src="./assets/img/testimonial3.jpg" alt=""></div>
                    <div class="text">
                      <h5>Lee Doe</h5> <small>Direct of a company</small>
                    </div>
                  </div>

                </div>
              </div>

              <div class="carousel-item ">
                <div class=" card p-4 col ">
                  <i class="fa-solid fa-quote-left py-4"></i>
                  <p>They are the best watches that one acquires, also they are always with the latest
                    news and trends, with a very comfortable price and especially with the attention
                    you receive, they are always attentive to your questions.</p>
                  <h6>March 27.2021</h6>
                  <div class="imgbox d-flex  align-items-center">
                    <div class="img"><img src="./assets/img/ptestimonial.png" alt=""></div>
                    <div class="text">
                      <h5>Lee Doe</h5> <small>Direct of a company</small>
                    </div>
                  </div>

                </div>
              </div>

            </div>
            <button class="carousel-control-prev btnone" type="button" data-bs-target="#comment" data-bs-slide="prev">
              <i class="fa-solid fa-arrow-left-long"></i>
            </button>
            <button class="carousel-control-next btntwo" type="button" data-bs-target="#comment" data-bs-slide="next">
              <i class="fa-solid fa-arrow-right-long"></i>
            </button>
          </div>




          <div class="right col ">
            <div class="imgbox ">
              <img src="./assets/img1/product-4.png" alt="" />
            </div>
          </div>


        </div>
      </div>
    </section>

    <section class="new py-4" id="scrollspyHeading4">
      <div class="container py-5 px-lg-5">
        <h2>NEW ARRIVALS</h2>


        <div class="row pt-5 row-cols-1 row-cols-md-2 row-cols-lg-4 g-md-5 g-3">
          <div class="col">
            <div class="card">
              <span class="catg">NEW</span>
              <div class="imgboxs">
                <img src="./assets/img1/insta-6.jpg" class="card-img-top" alt="..." />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">ROSE GOLD</h5>
                <h6 class="card-subtitle my-3">$890</h6>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <span class="catg">NEW</span>
              <div class="imgboxs">
                <img src="./assets/img1/insta-2.jpg" class="card-img-top pb-2" alt="..." />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">ROSE GOLD</h5>
                <h6 class="card-subtitle my-3">$890</h6>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <span class="catg">NEW</span>
              <div class="imgboxs">
                <img src="./assets/img1/insta-3.jpg" class="card-img-top" alt="..." />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">ROSE GOLD</h5>
                <h6 class="card-subtitle my-3">$890</h6>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <span class="catg">NEW</span>
              <div class="imgboxs">
                <img src="./assets/img1/insta-4.jpg" class="card-img-top" alt="..." />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">ROSE GOLD</h5>
                <h6 class="card-subtitle my-3">$890</h6>

              </div>
            </div>
          </div>
        </div>



      </div>
    </section>

  </div>

  <section class="footup">
    <div class="container">
      <div class="row pt-5 row-cols-1 row-cols-md-2  g-md-5 g-3">
        <div class="left col">
          <h3>Subscribe Our Newsletter</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Pariatur ullam laborum voluptatum cum facere animi reiciendis
            omnis nesciunt fugiat tempora.</p>
        </div>
        <div class="right col">
          <div class="subscribe d-flex align-items-center">
            <div class="lab">
              <form method="get">
                <label>
                  <input type="email" placeholder="Enter your email" required>
                </label>
            </div>
            <div class="link">
              <button type="submit">SUBSCRIBE</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container mt-4 mb-4">
      <div class="row pt-5 row-cols-1 row-cols-md-2 row-cols-lg-4 g-md-5 g-3">

        <div class="col">
          <h4>Our information</h4>
          <div>
            <a href="">1234-Preu</a>
            <a href="">La Libertad 43210</a>
            <a href="">123-456-789</a>
          </div>
        </div>

        <div class="col">
          <h4>About Us</h4>
          <div>
            <a href="">Support Center</a>
            <a href="">Customer Support</a>
            <a href="">About Us</a>
            <a href="">Copy Right</a>
          </div>
        </div>

        <div class="col">
          <h4>Product</h4>
          <div>
            <a href="">Road bikes</a>
            <a href="">Mountain bikes</a>
            <a href="">Electric</a>
            <a href="">Accesories</a>
          </div>
        </div>

        <div class="col">
          <h4>Social</h4>
          <div class="icon">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
          </div>
        </div>

      </div>
    </div>
    <div class="text-center pb-4">© BedimeCode. All rights reserved (copy by Jumana )</div>
  </footer>

  <div class="up">
    <i class="fa-solid fa-arrow-up-long"></i>
  </div>





  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/myJs.js"></script>
</body>

</html>