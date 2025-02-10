<?php
include('theme/header.php');
include('theme/menu.php');
?>

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

<div class="container pt-5 pb-5">
  <div class="row align-items-start">
    <!-- Kolom Teks -->
    <div class="col-md-6">
      <h2 class="display-3" id="aboutus">About Us</h2>
      <!-- <p>Lorem ipsum dolor sit amet consectetur.</p> -->
      <p>
        At Miraswift, we are more than just a software house—we are innovators, problem-solvers, and digital transformation experts. Specializing in cutting-edge IoT and automation solutions, we empower businesses with smart technologies that drive efficiency, optimize performance, and unlock new levels of productivity.
      </p>
      <a href="#contact">
        <button type="button" class="btn btn-dark btn-lg mt-5">Contact Us</button>
      </a>
    </div>
    <!-- Kolom Gambar -->
    <div class="col-md-6 text-center">
      <img src="image/aboutus.jpg" class="img-fluid crop-img" alt="About Us">
    </div>
  </div>
</div>
</div>

<?php
include('theme/footer.php');
include('theme/scripts.php');
?>