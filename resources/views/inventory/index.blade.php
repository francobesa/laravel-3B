<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Grid</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f8f9fa;
      }

      .container {
        background-color: #fff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        font-family: "Poppins", sans-serif;
        max-width: 90%; /* Bigger size */
        margin: auto;
      }

      .grid-item {
        border: 2px solid #000;
        padding: 15px;
        text-align: center;
        word-wrap: break-word;
        font-size: clamp(
          1rem,
          2vw,
          1.5rem
        ); /* Dynamically scales between 1rem and 1.5rem */
      }
    </style>
  </head>
  <body>
    <div class="container">
      <!-- Header Row -->
      <div class="row d-flex justify-content-center">
        <div
          class="col-md-9 col-lg-12 col-xl-12 text-center grid-item fw-bold fs-3"
        >
          Inventory
        </div>
      </div>

      <!-- Large Screen Table Format -->
      <div class="d-none d-md-block">
        <div class="row justify-content-center">
          <div class="col-md-3 col-lg-4 col-xl-4 grid-item">Title</div>
          <div class="col-md-3 col-lg-4 col-xl-4 grid-item">Author</div>
          <div class="col-md-3 col-lg-4 col-xl-4 grid-item">Genre</div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-3 col-lg-4 col-xl-4 grid-item">Six of Crows</div>
          <div class="col-md-3 col-lg-4 col-xl-4 grid-item">Leigh Bardugo</div>
          <div class="col-md-3 col-lg-4 col-xl-4 grid-item">Fantasy</div>
        </div>
      </div>

      <!-- Small Screen Table Format (Separate Tables) -->
      <div class="d-block d-md-none">
        <div class="row">
          <div class="col-12 text-center grid-item fw-bold">Title</div>
          <div class="col-12 text-center grid-item">Six of Crows</div>
        </div>
        <div class="row">
          <div class="col-12 text-center grid-item fw-bold">Author</div>
          <div class="col-12 text-center grid-item">Leigh Bardugo</div>
        </div>
        <div class="row">
          <div class="col-12 text-center grid-item fw-bold">Genre</div>
          <div class="col-12 text-center grid-item">Fantasy</div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
