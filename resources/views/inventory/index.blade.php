<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Bootstrap Grid System with Borders, d-block, d-flex, and Breakpoints
    </title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      /* Add border to grid columns */
      .grid-item {
        border: 1px solid black;
        padding: 5px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">

        <div class="col-12 grid-item d-block">
          Inventory
        </div>
    </div>
    <div class="row" >

        <div class="col-4 grid-item d-block">
          Title
        </div>

        <div
          class="col-4 grid-item d-block">
          Author
        </div>

        <div class="col-4 grid-item d-block">
          Genre
        </div>
    </div>
    <div class="row" id="content">
        <div class="col-4 grid-item d-flex">
          Six of Crows
        </div>

        <div
          class="col-4 grid-item d-flex">
          Leigh Bardugo
        </div>

        <div class="col-4 grid-item d-flex">
          Fantasy
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
