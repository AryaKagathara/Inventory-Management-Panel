<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Customers</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/style.css" />
  <script src="assets/app.js"></script>
</head>

<body>
  <?php include('navbar/navbar.php') ?>

  <div class="container-fluid p-5 pb-3 bg-black text-white">
    <div class="container">
      <div class="row alignm-items-center">
        <div class="col-lg-1 mx-2">
          <img src="assets/images/logo-white.png" alt="logo" width="125px" />
        </div>
        <div class="col-lg-10">
          <h2 class="text-left col-12 mt-3 mx-5">Customers</h2>
        </div>
      </div>
      <nav aria-label="breadcrumb ">
        <ol class="breadcrumb mt-3">
          <li class="breadcrumb-item text-decoration-none"><a href="home.php" class="text-decoration-none text-white">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Customers</li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="container table-responsive my-4">

    <div class="container">
      <div class="row mb-3">
        <div class="col-lg-11 col-md-10 col-sm-12 my-2">
          <input type="text" class="form-control" id="colFormLabelSm" min="10" max="100" placeholder="Search">
        </div>
        <button class="btn mx-auto col-lg-1 col-md-2 col-sm-12 my-2 p-2 btn-outline-primary rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Add
        </button>
      </div>
    </div>

    <table class="table text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col"><img src="assets/images/icons/delete-white.svg" alt="" width="18px" class="zoom mx-2"> #</th>
          <th scope="col" style="min-width:150px">Company<img src="assets/images/icons/sort-white.svg" alt="" width="20px" class="zoom mx-2" /></th>
          <th scope="col" style="min-width:150px">Type<img src="assets/images/icons/sort-white.svg" alt="" width="20px" class="zoom mx-2" /></th>
          <th scope="col" style="min-width:150px">Name<img src="assets/images/icons/sort-white.svg" alt="" width="20px" class="zoom mx-2" /></th>
          <th scope="col" style="min-width:150px">Phone</th>
          <th scope="col" style="min-width:150px">Email</th>
          <th scope="col" style="min-width:150px">Payment</th>
          <th scope="col" style="min-width:150px">No. Trade<img src="assets/images/icons/sort-white.svg" alt="" width="20px" class="zoom mx-2" /></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">
          <input class="form-check-input mx-2" type="checkbox" value="" id="flexCheckDefault" > 1</th>
          <td><a href="#" class="text-decoration-none text-black">HC</a></td>
          <td>
            <h5><span class="badge rounded-pill bg-primary fw-lighter">Buyer</span></h5>
          </td>
          <td><a href="#" class="text-decoration-none text-black">Mahesh Kantariya</a></td>
          <td>+91 123456789</td>
          <td>zwood@gmail.com</td>
          <td>
            <h5><span class="badge rounded-pill text-black fw-lighter">No</span></h5>
          </td>
          <td>
            <h5><span class="badge rounded-pill bg-black text-white fw-lighter">5</span></h5>
          </td>
          <td><img src="assets/images/icons/delete.svg" alt="" width="18px" class="zoom mx-2" /></td>
        </tr>
        <tr>
          <th scope="row"><input class="form-check-input mx-2" type="checkbox" value="" id="flexCheckDefault"> 2</th>
          <td><a href="#" class="text-decoration-none text-black">W3nuts</a></td>
          <td>
            <h5>
              <span class="badge rounded-pill bg-primary fw-lighter">Buyer</span>
              <span class="badge rounded-pill bg-danger fw-lighter">Seller</span>
            </h5>
          </td>
          <td><a href="#" class="text-decoration-none text-black">Arya Kagathara</a></td>
          <td>+91 9865742356</td>
          <td>arya@gmail.com</td>
          <td>
            <h5>
              <span class="badge rounded-pill bg-success fw-lighter">Yes</span>
              <span class="badge rounded-pill text-black fw-lighter">No</span>
            </h5>
          </td>
          <td>
            <h5><span class="badge rounded-pill bg-black text-white fw-lighter">10</span></h5>
          </td>
          <td><img src="assets/images/icons/delete.svg" alt="" width="18px" class="zoom mx-2" /></td>
        </tr>
        <tr>
          <th scope="row"><input class="form-check-input mx-2" type="checkbox" value="" id="flexCheckDefault"> 3</th>
          <td><a href="#" class="text-decoration-none text-black">Intel</a></td>
          <td>
            <h5><span class="badge rounded-pill bg-primary fw-lighter">Buyer</span></h5>
          </td>
          <td><a href="#" class="text-decoration-none text-black">Don John</a></td>
          <td>+91 561234789</td>
          <td>mgemmons@comcast.net</td>
          <td>
            <h5><span class="badge rounded-pill bg-success fw-lighter">Yes</span></h5>
          </td>
          <td>
            <h5><span class="badge rounded-pill bg-black text-white fw-lighter">4</span></h5>
          </td>
          <td><img src="assets/images/icons/delete.svg" alt="" width="18px" class="zoom mx-2" /></td>
        </tr>
        <tr>
          <th scope="row"><input class="form-check-input mx-2" type="checkbox" value="" id="flexCheckDefault"> 4</th>
          <td><a href="#" class="text-decoration-none text-black">OWS</a></td>
          <td>
            <h5><span class="badge rounded-pill bg-primary fw-lighter">Buyer</span></h5>
          </td>
          <td><a href="#" class="text-decoration-none text-black">Clara Martin</a></td>
          <td>+91 3794968747</td>
          <td>zilla@hotmail.com</td>
          <td>
            <h5><span class="badge rounded-pill text-black fw-lighter">No</span></h5>
          </td>
          <td>
            <h5><span class="badge rounded-pill bg-black text-white fw-lighter">1</span></h5>
          </td>
          <td><img src="assets/images/icons/delete.svg" alt="" width="18px" class="zoom mx-2" /></td>
        </tr>
        <tr>
          <th scope="row"><input class="form-check-input mx-2" type="checkbox" value="" id="flexCheckDefault"> 5</th>
          <td><a href="#" class="text-decoration-none text-black">Pixel</a></td>
          <td>
            <h5>
              <span class="badge rounded-pill bg-primary fw-lighter">Buyer</span>
              <span class="badge rounded-pill bg-danger fw-lighter">Seller</span>
            </h5>
          </td>
          <td><a href="#" class="text-decoration-none text-black">CS Dojo</a></td>
          <td>+91 9823566574</td>
          <td>bjoern@outlook.com</td>
          <td>
            <h5>
              <span class="badge rounded-pill text-black fw-lighter">No</span>
              <span class="badge rounded-pill bg-success fw-lighter">Yes</span>
            </h5>
          </td>
          <td>
            <h5><span class="badge rounded-pill bg-black text-white fw-lighter">20</span></h5>
          </td>
          <td><img src="assets/images/icons/delete.svg" alt="" width="18px" class="zoom mx-2" /></td>
        </tr>
        <tr>
          <th scope="row"><input class="form-check-input mx-2" type="checkbox" value="" id="flexCheckDefault"> 6</th>
          <td><a href="#" class="text-decoration-none text-black">Apple</a></td>
          <td>
            <h5><span class="badge rounded-pill bg-primary fw-lighter">Buyer</span></h5>
          </td>
          <td><a href="#" class="text-decoration-none text-black">Arya Kagathara</a></td>
          <td>+91 9379468747</td>
          <td>webinc@live.com</td>
          <td>
            <h5><span class="badge rounded-pill bg-success fw-lighter">Yes</span></h5>
          </td>
          <td>
            <h5><span class="badge rounded-pill bg-black text-white fw-lighter">90</span></h5>
          </td>
          <td><img src="assets/images/icons/delete.svg" alt="" width="18px" class="zoom mx-2" /></td>
        </tr>
        <tr>
          <th scope="row"><input class="form-check-input mx-2" type="checkbox" value="" id="flexCheckDefault"> 7</th>
          <td><a href="#" class="text-decoration-none text-black">HC</a></td>
          <td>
            <h5><span class="badge rounded-pill bg-primary fw-lighter">Buyer</span></h5>
          </td>
          <td><a href="#" class="text-decoration-none text-black">Arya</a></td>
          <td>+91 9737689447</td>
          <td>hmbrand@gmail.com</td>
          <td>
            <h5><span class="badge rounded-pill text-black fw-lighter">No</span></h5>
          </td>
          <td>
            <h5><span class="badge rounded-pill bg-black text-white fw-lighter">50</span></h5>
          </td>
          <td><img src="assets/images/icons/delete.svg" alt="" width="18px" class="zoom mx-2" /></td>
        </tr>
        <tr>
          <th scope="row"><input class="form-check-input mx-2" type="checkbox" value="" id="flexCheckDefault"> 8</th>
          <td><a href="#" class="text-decoration-none text-black">W3nuts</a></td>
          <td>
            <h5><span class="badge rounded-pill bg-danger fw-lighter">Seller</span></h5>
          </td>
          <td><a href="#" class="text-decoration-none text-black">Arya</a></td>
          <td>+91 9423568657</td>
          <td>yzheng@yahoo.com</td>
          <td>
            <h5><span class="badge rounded-pill bg-success fw-lighter">Yes</span></h5>
          </td>
          <td>
            <h5><span class="badge rounded-pill bg-black text-white fw-lighter">10</span></h5>
          </td>
          <td><img src="assets/images/icons/delete.svg" alt="" width="18px" class="zoom mx-2" /></td>
        </tr>
        <tr>
          <th scope="row"><input class="form-check-input mx-2" type="checkbox" value="" id="flexCheckDefault"> 9</th>
          <td><a href="#" class="text-decoration-none text-black">Intel</a></td>
          <td>
            <h5><span class="badge rounded-pill bg-primary fw-lighter">Buyer</span></h5>
          </td>
          <td><a href="#" class="text-decoration-none text-black">Arya</a></td>
          <td>+91 7944796873</td>
          <td>iamaryak27@gmail.com</td>
          <td>
            <h5><span class="badge rounded-pill text-black fw-lighter">Yes</span></h5>
          </td>
          <td>
            <h5><span class="badge rounded-pill bg-black text-white fw-lighter">40</span></h5>
          </td>
          <td><img src="assets/images/icons/delete.svg" alt="" width="18px" class="zoom mx-2" /></td>
        </tr>
        <tr>
          <th scope="row"><input class="form-check-input mx-2" type="checkbox" value="" id="flexCheckDefault"> 10</th>
          <td><a href="#" class="text-decoration-none text-black">Windows</a></td>
          <td>
            <h5>
              <span class="badge rounded-pill bg-primary fw-lighter">Buyer</span>
              <span class="badge rounded-pill bg-danger fw-lighter">Seller</span>
            </h5>
          </td>
          <td><a href="#" class="text-decoration-none text-black">Bill Gates</a></td>
          <td>+91 9768737944</td>
          <td>alastair@hotmail.com</td>
          <td>
            <h5>
              <span class="badge rounded-pill bg-success fw-lighter">Yes</span>
              <span class="badge rounded-pill bg-success fw-lighter">Yes</span>
            </h5>
          </td>
          <td>
            <h5><span class="badge rounded-pill bg-black text-white fw-lighter">100</span></h5>
          </td>
          <td><img src="assets/images/icons/delete.svg" alt="" width="18px" class="zoom mx-2" /></td>
        </tr>
      </tbody>
    </table>

    <div class="row">
      <div class="col-lg-2 col-4">
        <input type="number" class="form-control form-control-sm" id="colFormLabelSm" min="10" max="100" placeholder="No. 10,20,50,100...">
      </div>
      <div class="col-lg-8">
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link text-black" href="#">1</a></li>
            <li class="page-item"><a class="page-link text-black" href="#">2</a></li>
            <li class="page-item"><a class="page-link text-black" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link text-black" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="container my-2 containerbox">
              <div class="row">
                <div class="col-md my-2">
                  <label for="exampleFormControlInput1" class="form-label">Company Name*</label>
                  <input type="text" class="form-control" placeholder="Indian Industries" required />
                </div>
              </div>
              <div class="row">
                <div class="col-md my-2">
                  <label for="exampleFormControlInput1" class="form-label">Customer Name*</label>
                  <input type="text" class="form-control" placeholder="John Don" required />
                </div>
                <div class="col-md my-2">
                  <label for="exampleFormControlInput1" class="form-label">Gender*</label>
                  <div class="row mx-1">
                    <div class="form-check col-md-4 col-xs-3">
                      <input class="form-check-input mx-2" type="radio" name="exampleRadios" value="option1" required>
                      <label class="form-check-label" for="exampleRadios1">
                        Male
                      </label>
                    </div>
                    <div class="form-check col-md-4 col-xs-3">
                      <input class="form-check-input mx-2" type="radio" name="exampleRadios" value="option2" required>
                      <label class="form-check-label" for="exampleRadios2">
                        Female
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md my-2">
                  <label for="exampleFormControlInput1" class="form-label">Phone Number*</label>
                  <input type="text" class="form-control" placeholder="+XX XXXXX XXXXX" required />
                </div>
                <div class="col-md my-2">
                  <label for="exampleFormControlInput1" class="form-label">Secondary Phone Number</label>
                  <input type="text" class="form-control" placeholder="+XX XXXXX XXXXX" />
                </div>
              </div>
              <div class="row">
                <div class="col-md my-2">
                  <label for="exampleFormControlInput1" class="form-label">Email*</label>
                  <input type="text" class="form-control" placeholder="@mail.com" required />
                </div>
                <div class="col-md my-2">
                  <label for="exampleFormControlInput1" class="form-label">Secondary Email</label>
                  <input type="text" class="form-control" placeholder="@mail.com" />
                </div>
              </div>
              <div class="row">
                <div class="col-md my-2">
                  <label for="exampleFormControlTextarea1" class="form-label">Address*</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md my-2">
                  <label for="exampleFormControlInput1" class="form-label" required>Pincode*</label>
                  <input type="text" class="form-control" />
                </div>
                <div class="col-md my-2">
                  <label for="exampleFormControlInput1" class="form-label" required>City*</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="row">
              <div class="col-md my-2">
                  <label for="exampleFormControlInput1" class="form-label" required>State*</label>
                  <input type="text" class="form-control" />
                </div>
                <div class="col-md my-2">
                  <label for="exampleFormControlInput1" class="form-label" required>Country*</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col-md my-2">
                  <label for="exampleFormControlInput1" class="form-label" required>GSTIN / Unique Company ID*</label>
                  <input type="text" class="form-control" />
                </div>
                <div class="col-md my-2">
                  <label for="exampleFormControlInput1" class="form-label" required>PAN No. / ID Proof*</label>
                  <input type="text" class="form-control" />
                </div>
              </div>

              <div class="row">
                <div class="col-md">
                  <label for="exampleFormControlInput1" class="form-label">Customer Type*</label>
                  <div class="row mx-1">
                    <div class="form-check col-md-4 col-xs-3">
                      <input class="form-check-input mx-2" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" required>
                      <label class="form-check-label" for="exampleRadios1">
                        Buyer
                      </label>
                    </div>
                    <div class="form-check col-md-4 col-xs-3">
                      <input class="form-check-input mx-2" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2" required>
                      <label class="form-check-label" for="exampleRadios2">
                        Seller
                      </label>
                    </div>
                  </div>
                </div>
                <div class="col-md my-2">
                  <label for="exampleFormControlInput1" class="form-label">Bank AC</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
          <button type="button" class="btn btn-primary">Add</button>
        </div>
      </div>
    </div>
  </div>

</body>

</html>