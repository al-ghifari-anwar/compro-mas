<?php
include('theme/header.php');
include('theme/menu.php');
?>

<main class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center mb-4">Get in Touch</h2>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="5" placeholder="Write your message here" required></textarea>
        </div>
        <button type="button" class="btn btn-dark btn-lg btn" width="100">Send massage</button>
      </form>
    </div>
  </div>
</main>


<?php
include('theme/footer.php');
include('theme/scripts.php');
?>