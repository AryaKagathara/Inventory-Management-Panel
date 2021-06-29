<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/style.css" />
    <script src="assets/app.js"></script>
  </head>
  <body>
  <?php include('navbar/navbar.php') ?>

    <div class="container-fluid p-5 bg-black text-white">
      <div class="container mb-5">
        <div class="row alignm-items-center">
          <div class="col-lg-1 mx-2">
              <img src="assets/images/logo-white.png" alt="logo" width="125px" />
          </div>
          <div class="col-lg-10">
            <h2 class="text-left col-12 mt-3 mx-5 ">Dashboard</h2>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <h3 class="col-10 fs-5">Overview</h3>
          <hr />
        </div>
        <div class="row text-center flex-wrap justify-content-center">
          <a
            class="col-lg-2 col-md-5 p-3 m-1 mx-5 shadow border border-success rounded text-decoration-none text-dark zoom"
            href="#"
          >
            <h4 class="text-wrap fs-5 fw-bold text-success">Delivery</h4>
            <h1 class="fw-bold display-5 text-success">5</h1>
          </a>
          <a
            class="col-lg-2 col-md-5 p-3 m-1 mx-5 shadow border border-warning rounded text-decoration-none text-dark zoom"
            href="#"
          >
            <h4 class="text-wrap fs-5 fw-bold text-warning">Orders</h4>
            <h1 class="fw-bold display-5 text-warning">12</h1>
          </a>
          <a
            class="col-lg-2 col-md-5 p-3 m-1 mx-5 shadow border border-danger rounded text-decoration-none text-dark zoom"
            href="#"
          >
            <h4 class="text-wrap fs-5 fw-bold text-danger">Stocks</h4>
            <h1 class="fw-bold display-5 text-danger">3</h1>
          </a>
          <a
            class="col-lg-2 col-md-5 p-3 m-1 mx-5 shadow border border-primary rounded text-decoration-none text-dark zoom"
            href="sales.html"
          >
            <h4 class="text-wrap fs-5 fw-bold text-primary">Sales</h4>
            <h1 class="fw-bold display-5 text-primary">5</h1>
          </a>
        </div>
      </div>
    </div>

    <div class="container py-5">
      <div class="my-3 mt-0">
        <div class="row">
          <h3 class="col-lg-11 col-10 fs-5">
            Activities
            <img
              src="assets/images/icons/sort.svg"
              alt=""
              width="20px"
              class="zoom mx-2"
            />
          </h3>
          <button
            class="btn col-lg-1 col-2 mx-auto p-2 btn-outline-primary rounded"
            data-bs-toggle="modal" data-bs-target="#exampleModal" 
          >
            Add
          </button>
        </div>
      </div>
      <div class="list-group">
        <div
          href="#"
          class="list-group-item list-group-item-action text-black p-3 my-1"
        >
        <small class="fw-lighter text-muted">Arya Kagathara</small>
          <div class="d-flex justify-content-between">
            <h5 class="mb-1">
              <span class="badge bg-warning rounded-pill">Order</span>
               Notice 1
            </h5>
            <small class="text-black"
              >12 April, 2021
              <img
                src="assets/images/icons/edit.svg"
                alt=""
                width="20px"
                class="zoom mx-2" /><img
                src="assets/images/icons/delete.svg"
                alt=""
                width="20px"
                class="zoom mx-2"
            /></small>
          </div>
          <p class="mb-1">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt,
            doloremque. Consequatur doloremque explicabo dolore nulla adipisci
            ipsa, unde dicta earum non eaque, error id iure quas optio impedit,
            laboriosam magnam!
          </p>
        </div>
        <div
          href="#"
          class="list-group-item list-group-item-action bg-white p-3 my-1"
        >
        <small class="fw-lighter text-muted">Arya Kagathara</small>
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">
              <span class="badge bg-primary rounded-pill">Sales</span> Notice 2
            </h5>
            <small class="text-black"
              >10 April, 2021
              <img
                src="assets/images/icons/edit.svg"
                alt=""
                width="20px"
                class="zoom mx-2" /><img
                src="assets/images/icons/delete.svg"
                alt=""
                width="20px"
                class="zoom mx-2"
            /></small>
          </div>
          <p class="mb-1">Some placeholder content in a paragraph.</p>
        </div>
        <div
          href="#"
          class="list-group-item list-group-item-action bg-white p-3 my-1"
        >
        <small class="fw-lighter text-muted">Arya Kagathara</small>
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">
              <span class="badge bg-success rounded-pill">Delivery</span> Notice 3
            </h5>
            <small class="text-black"
              >5 April, 2021
              <img
                src="assets/images/icons/edit.svg"
                alt=""
                width="20px"
                class="zoom mx-2" /><img
                src="assets/images/icons/delete.svg"
                alt=""
                width="20px"
                class="zoom mx-2"
            /></small>
          </div>
          <p class="mb-1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Consequatur doloremque explicabo dolore nulla adipisci ipsa, unde
            dicta earum non eaque.
          </p>
        </div>
        <div
          href="#"
          class="list-group-item list-group-item-action bg-white p-3 my-1"
        >
        <small class="fw-lighter text-muted">Arya Kagathara</small>
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">
              <span class="badge bg-black rounded-pill">General</span> Notice 4
            </h5>
            <small class="text-black"
              >5 April, 2021
              <img
                src="assets/images/icons/edit.svg"
                alt=""
                width="20px"
                class="zoom mx-2" /><img
                src="assets/images/icons/delete.svg"
                alt=""
                width="20px"
                class="zoom mx-2"
            /></small>
          </div>
          <p class="mb-1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Consequatur doloremque explicabo dolore nulla adipisci ipsa, unde
            dicta earum non eaque.
          </p>
        </div>
        <div
          href="#"
          class="list-group-item list-group-item-action text-black p-3 my-1"
        >
        <small class="fw-lighter text-muted">Arya Kagathara</small>
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">
              <span class="badge bg-danger rounded-pill">Stocks</span> Notice 5
            </h5>
            <small class="text-black"
              >1 April, 2021
              <img
                src="assets/images/icons/edit.svg"
                alt=""
                width="20px"
                class="zoom mx-2" /><img
                src="assets/images/icons/delete.svg"
                alt=""
                width="20px"
                class="zoom mx-2"
            /></small>
          </div>
          <p class="mb-1">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt,
            doloremque. Consequatur doloremque explicabo dolore nulla adipisci
            ipsa, unde dicta earum non eaque, error id iure quas optio impedit,
            laboriosam magnam!
          </p>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Notice</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label"
                  >Title:</label
                >
                <input type="text" class="form-control" id="recipient-name" />
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label"
                  >Message:</label
                >
                <textarea class="form-control" id="message-text"></textarea>
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label"
                  >Label:</label
                >
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Select</option>
                  <option value="1">Delivery</option>
                  <option value="2">Order</option>
                  <option value="3">Stocks</option>
                  <option value="4">Sales</option>
                  <option value="4">General</option>
                </select>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
