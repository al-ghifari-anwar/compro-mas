<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nova</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">nova</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portofolio.php">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <img src="image/banner.jpg" alt="Banner">
        <div class="hero-content">
            <h3>Nova: Crafting Innovation, One Code at a Time</h3>
            <p>Empowering businesses with tailored software solutions that drive success</p>
            <a href="#service">
                <button type="button" class="btn btn-dark btn-lg">See Service</button>
            </a>
        </div>
    </div>


    <div class="container-fluid pt-5 pb-5">
        <div class="container text-center">
            <h2 class="display-3 text-black" id="portofolio">Portofolio</h2>
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae modi, recusandae eaque sint unde neque distinctio tempora nulla nam cupiditate.</p>
            <div class="row pt-4 gx-4 gy-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="image/projek1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="image/projek2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="image/projek3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="image/projek4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="image/projek5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="image/projek5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<footer class="custom-footer">
        <div class="container">
          <div class="row">
            <!-- Section 1 -->
            <div class="col-md-4 mb-4">
              <h5>About Us</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Curabitur ac nisi id lacus blandit scelerisque. Fusce volutpat 
                dignissim felis, nec iaculis libero dapibus sit amet.
              </p>
              <p>
                Quisque vitae ligula id turpis pellentesque faucibus. 
                Nullam sit amet velit vel sapien tincidunt tristique.
              </p>
            </div>
    
            <!-- Section 2 -->
            <div class="col-md-4 mb-4">
              <h5>Quick Links</h5>
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
              </ul>
            </div>
    
            <!-- Section 3 -->
            <div class="col-md-4 mb-4">
              <h5>Contact Us</h5>
              <p>
                Address: 1234 Street Name, City, Country <br>
                Phone: <a href="tel:+123456789">+123 456 789</a> <br>
                Email: <a href="mailto:info@yourcompany.com">info@yourcompany.com</a>
              </p>
              <p>Follow us on:</p>
              <a href="https://facebook.com" target="_blank" class="me-2">Facebook</a>
              <a href="https://twitter.com" target="_blank" class="me-2">Twitter</a>
              <a href="https://instagram.com" target="_blank">Instagram</a>
            </div>
          </div>
    
          <hr class="bg-white">
          <div class="text-center">
            <p class="mb-0">&copy; 2025 Your Company Name. All rights reserved.</p>
          </div>
        </div>
      </footer>

      <a href="https://wa.me/123456789" target="_blank" class="whatsapp-float">
    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" />
</a>
 

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>