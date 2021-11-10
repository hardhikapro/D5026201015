<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Hello, world!</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="card-header text-center" style="font-size: 30px;">
        JavaScript Form Validation
      </div>
      <div class="card-body">
        <p style="color: red;">'All fields are mandatory'</p>
        <form id="forms" class="row g-3">
          <div class="col-md-12">
            <label for="inputname" class="form-label">Full Name:</label>
            <input type="text" class="form-control" id="inputname" name="inputname" placeholder="Hardhika Propitadewa">
          </div>
          <div class="col-md-12">
            <label for="inputusername" class="form-label">Username(6-8 characters):</label>
            <input type="text" class="form-control" id="inputusername" name="inputusername" placeholder="maruko123">
          </div>
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Email:</label>
            <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="propitadewa@gmail.com">
          </div>
          <div class="col-md-12">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select" name="state">
              <option value="">Please Choose</option>
              <option value="true">Indonesia</option>
              <option value="true">America</option>
              <option value="true">Malaysia</option>
              <option value="true">France</option>
            </select>
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="JL. Sriwijaya" name="inputAddress">
          </div>
          <div class="col-md-12">
            <label for="inputZip" class="form-label">Zip Code:</label>
            <input type="text" class="form-control" id="inputZip" name="kodepos" placeholder="123456">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary my-4 form-control" id="checkform">Check Form</button>
          </div>
        </form>
      </div>
    </div>
  </div>



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="jquery.js"></script>
</body>

</html>
