<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>            
  <table class="table table-hover table-striped table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>


<div class="container-lg p-5 my-5 border text-white bg-primary">
  <h1>My First Bootstrap Page</h1>
  <p>This part is inside a .container-fluid class.</p>
  <p>The .container-fluid class provides a full width container, spanning the entire width of the viewport.</p>
</div>

<div class="container-fluid p-5 my-5 border">
  <h1>My First Bootstrap Page</h1>
  <p>This part is inside a .container-fluid class.</p>
  <p>The .container-fluid class provides <abbr title="Testing">hehehe</abbr> a full width container, spanning the entire width of the viewport.</p>
  <p class="h1">h1 Bootstrap heading</p>
<p class="display-6 mark">h2 Bootstrap heading</p>
<p class="h3 mark">h3 Bootstrap heading</p>
<p class="h4">h4 Bootstrap heading</p>
<p class="h5">h5 Bootstrap heading</p>
<p class="h6">h6 Bootstrap heading</p>
</div>




  <div class="container-sm p-5 my-5 border text-white bg-yellow">
    <h1>My First Bootstrap Page</h1>
    <p>This part is inside a .container-fluid class.</p>
    <p>The .container-fluid class provides a full width container, spanning the entire width of the viewport.</p>
  </div>
  <div class="container-sm p-5 my-5 border text-dark bg-white">
      <!-- Control the column width, and how they should appear on different devices -->
      <div class="row py-4 bg-dark text-dark-50">
          <div class="col-sm-6 border text-dark-50 bg-white">first</div>
          <div class="col-sm-6 border text-white">2</div>
      </div>
      <div class="row py-4 border">
          <div class="col-sm-3 border bg-dark text-light">3</div>
          <div class="col-sm-3 border px-3 bg-dark text-light">4</div>
          <div class="col-sm-6 border px-3">5</div>
      </div>
      <div class="row py-4 border">
          <div class="col-md-3 border bg-dark text-light">3</div>
          <div class="col-md-3 border px-3 bg-dark text-light">4</div>
          <div class="col-md-6 border px-3">5</div>
      </div>
      <!-- Or let Bootstrap automatically handle the layout -->
      <div class="row">
          <div class="col border">6</div>
          <div class="col border">7</div>
          <div class="col border">8</div>
      </div>
  </div>
  <div class="container">
    <button data-bs-toggle="collapse" data-bs-target="#demo" class="btn btn-primary">Collapsible</button>

    <div id="demo" class="collapse show">
      Lorem ipsum dolor text....orem ipsum dolor text....orem ipsum dolor text....orem ipsum dolor text....orem ipsum dolor text....orem ipsum dolor text....orem ipsum dolor text....orem ipsum dolor text....orem ipsum dolor text....orem ipsum dolor text....
    </div>
  </div>
  <div class="container mt-3">
  <h2>Accordion Example</h2>
  <p><strong>Note:</strong> The <strong>data-bs-parent</strong> attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.</p>
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
          Collapsible Group Item #1
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
        Collapsible Group Item #2
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
    <div class="card col-md-5 data-align-center">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
          Collapsible Group Item #3
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>