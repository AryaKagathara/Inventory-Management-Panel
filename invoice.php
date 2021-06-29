<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Invoice</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/style.css" />
    <script src="assets/app.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="card border-0">
        <div class="card-header">
          <div class="container">
          <div class="row align-middle">
            <div class="p-3 col-lg-2 col-md-4 col-6">
              <img src="assets/images/logo-black.png" alt="" width="150px">
            </div>
            <div class="col-lg-10 col-md-8 col-6 text-end mt-4">
            <span><strong>Invoice Date:</strong>6/4/2021</span>
              <br>
              <span><strong>Invoice No:</strong>#125</span>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row mb-4">
            <div class="col-lg-4 col-sm-12">
              <h6 class="mt-3">From:</h6>
              <div>
                <strong>Arya Kagathara</strong>
              </div>
              <div>Asmakam App, Shaktinagar main road 2, University Road,</div>
              <div>Rajkot, Gujarat, India</div>
              <div>Email: arya@here.com</div>
              <div>Phone: +91 9687379447</div>
            </div>

            <div class="col-lg-4 col-sm-12">
              <h6 class="mt-3">To:</h6>
              <div>
                <strong>Arya Kagathara 2</strong>
              </div>
              <div>Asmakam App 2, Shaktinagar main road 2, University Road,</div>
              <div>Rajkot, Gujarat, India</div>
              <div>Email: arya2@here.com</div>
              <div>Phone: +91 0123456789</div>
            </div>

            <div class="col-lg-4 col-sm-12">
              <h6 class="mt-3">Information:</h6>
              <div> Order ID:
                <strong>GQ1259</strong>
              </div>
              <div> Order Date:
                <strong>6/4/2021</strong>
              </div>
              <div> GSTIN:
                <strong>G12HT642HM</strong>
              </div>
              <div> Payment Status:
                <strong>Pending</strong>
              </div>
            </div>
          </div>

          <div class="table-responsive-sm">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th class="center">#</th>
                  <th>Item</th>
                  <th>Description</th>

                  <th class="right">Unit Cost</th>
                  <th class="center">Qty</th>
                  <th class="right">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="center">1</td>
                  <td class="left strong">Product 1</td>
                  <td class="left">Product 1 Description</td>

                  <td class="right">₹999,00</td>
                  <td class="center">1</td>
                  <td class="right">₹999,00</td>
                </tr>
                <tr>
                  <td class="center">2</td>
                  <td class="left strong">Product 2</td>
                  <td class="left">Product 2 Description</td>

                  <td class="right">₹150,00</td>
                  <td class="center">20</td>
                  <td class="right">₹3.000,00</td>
                </tr>
                <tr>
                  <td class="center">3</td>
                  <td class="left strong">Product 3</td>
                  <td class="left">Product 3 Description</td>

                  <td class="right">₹499,00</td>
                  <td class="center">1</td>
                  <td class="right">₹499,00</td>
                </tr>
                <tr>
                  <td class="center">4</td>
                  <td class="left strong">Product 4</td>
                  <td class="left">Product 4 Description</td>

                  <td class="right">₹3.999,00</td>
                  <td class="center">1</td>
                  <td class="right">₹3.999,00</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-lg-8 col-sm-5"></div>

            <div class="col-lg-4 col-sm-5 text-right">
              <table class="table table-clear">
                <tbody>
                  <tr>
                    <td class="left">
                      <strong>Subtotal</strong>
                    </td>
                    <td class="right">₹8.497,00</td>
                  </tr>
                  <tr>
                    <td class="left">
                      <strong>Discount (20%)</strong>
                    </td>
                    <td class="right">₹1,699,40</td>
                  </tr>
                  <tr>
                    <td class="left">
                      <strong>VAT (10%)</strong>
                    </td>
                    <td class="right">₹679,76</td>
                  </tr>
                  <tr>
                    <td class="left">
                      <strong>Total</strong>
                    </td>
                    <td class="right">
                      <strong>₹7.477,36</strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
