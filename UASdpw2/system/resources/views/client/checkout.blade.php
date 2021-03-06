<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{url('public')}}/images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>GymFen</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="{{url('public')}}/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{url('public')}}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{url('public')}}/css/responsive.css" rel="stylesheet" />

</head>

<body>

  <!-- header section strats -->
 @include('client.section.header')
  <!-- end header section -->

   
  <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
          <div class="border p-4 rounded" role="alert">
            Returning customer? <a href="{{ url('login') }}">Click here</a> to login
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-5 mb-md-0">
          <h2 class="h3 mb-3 text-black">Billing Details</h2>
          <div class="p-3 p-lg-5 border">
            <div class="form-group">
              <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
              <select id="c_country" class="form-control">
                <option value="1"> Select a Country</option>    
                <option value="2">Dki Jakarta</option>    
                <option value="3">Medan</option>    
                <option value="4">Malang</option>    
                <option value="5">Yogyakarta</option>    
                <option value="6">Pontianak</option>    
                <option value="7">Ketapang</option>    
                <option value="8">Samarinda</option>    
                <option value="9">Bandung</option>    
                <option value="10">Bogor</option>    
                <option value="11">Aceh</option>    
                <option value="12">Banjar Masin</option>    
                <option value="13">Batam</option>  
                <option value="14">Palembang</option>    
                <option value="15">Makassar</option>      
              </select>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_fname" name="c_fname">
              </div>
              <div class="col-md-6">
                <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_lname" name="c_lname">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <label for="c_companyname" class="text-black">Company Name </label>
                <input type="text" class="form-control" id="c_companyname" name="c_companyname">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
              </div>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
            </div>

            <div class="form-group">
              <div class="col-md-6">
                <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_state_country" name="c_state_country">
              </div>
              <div class="col-md-6">
                <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
              </div>
            </div>

            <div class="form-group mb-5">
              <div class="col-md-6">
                <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_email_address" name="c_email_address">
              </div>
              <div class="col-md-6">
                <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
              </div>
            </div>

            <div class="form-group">
              <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> Create an account?</label>
              <div class="collapse" id="create_an_account">
                <div class="py-2">
                  <p class="mb-3">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                  <div class="form-group">
                    <label for="c_account_password" class="text-black">Account Password</label>
                    <input type="email" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
                  </div>
                </div>
              </div>
            </div>


            <div class="form-group">
              <label for="c_ship_different_address" class="text-black" data-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"> Ship To A Different Address?</label>
              <div class="collapse" id="ship_different_address">
                <div class="py-2">

                  <div class="form-group">
                    <label for="c_diff_country" class="text-black">Country <span class="text-danger">*</span></label>
                    <select id="c_diff_country" class="form-control">
                    <option value="1"> Select a Country</option>    
                <option value="2">Dki Jakarta</option>    
                <option value="3">Medan</option>    
                <option value="4">Malang</option>    
                <option value="5">Yogyakarta</option>    
                <option value="6">Pontianak</option>    
                <option value="7">Ketapang</option>    
                <option value="8">Samarinda</option>    
                <option value="9">Bandung</option>    
                <option value="10">Bogor</option>       
                <option value="11">Aceh</option>    
                <option value="12">Banjar Masin</option>    
                <option value="13">Batam</option>  
                <option value="14">Palembang</option>    
                <option value="15">Makassar</option>      
              </select>value="9">Dominican Republic</option>    
                    </select>
                  </div>

                </div>

              </div>
            </div>

            <div class="form-group">
              <label for="c_order_notes" class="text-black">Order Notes</label>
              <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
            </div>

          </div>
        </div>
        <div class="col-md-6">

          <div class="row mb-5">
            <div class="col-md-12">
              <h2 class="h3 mb-3 text-black">Coupon Code</h2>
              <div class="p-3 p-lg-5 border">
                
                <label for="c_code" class="text-black mb-3">Masukkan kode kupon Anda jika ada</label>
                <div class="input-group w-75">
                  <input type="text" class="form-control" id="c_code" placeholder="Kode Kupon" aria-label="Coupon Code" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-success btn-sm px-4" type="button" id="button-addon2">Ok</button>
                  </div>
                </div>

              </div>
            </div>
          </div>
          
          <div class="row mb-5">
            <div class="col-md-12">
              <h2 class="h3 mb-3 text-black">Your Order</h2>
              <div class="p-3 p-lg-5 border">
                <table class="table site-block-order-table mb-5">
                  <thead>
                    <th>Product</th>
                    <th>Total</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Static Bicycle<strong class="mx-2">x</strong> 1</td>
                      <td>RP.2.992.000</td>
                    </tr>
                    <tr>
                      <td>Lat pulldown machine<strong class="mx-2">x</strong>   1</td>
                      <td>RP.3.980.000</td>
                    </tr>
                    <tr>
                      <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                      <td class="text-black">RP.6.872.000</td>
                    </tr>
                    <tr>
                      <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                      <td class="text-black font-weight-bold"><strong>RP.6.872.000</strong></td>
                    </tr>
                  </tbody>
                </table>

                <div class="border p-3 mb-3">
                  <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Transfer Bank Langsung</a></h3>

                  <div class="collapse" id="collapsebank">
                    <div class="py-2">
                      <p class="mb-0">Lakukan pembayaran langsung ke rekening bank kami. Silakan gunakan ID Pesanan Anda sebagai referensi pembayaran. Pesanan Anda tidak akan dikirim sampai dana dicairkan di rekening kami.</p>
                    </div>
                  </div>
                </div>

                <div class="border p-3 mb-3">
                  <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Pembayaran cek</a></h3>

                  <div class="collapse" id="collapsecheque">
                    <div class="py-2">
                      <p class="mb-0">Lakukan pembayaran langsung ke rekening bank kami. Silakan gunakan ID Pesanan Anda sebagai referensi pembayaran. Pesanan Anda tidak akan dikirim sampai dana dicairkan di rekening kami.</p>
                    </div>
                  </div>
                </div>

                <div class="border p-3 mb-5">
                  <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                  <div class="collapse" id="collapsepaypal">
                    <div class="py-2">
                      <p class="mb-0">Lakukan pembayaran langsung ke rekening bank kami. Silakan gunakan ID Pesanan Anda sebagai referensi pembayaran. Pesanan Anda tidak akan dikirim sampai dana dicairkan di rekening kami.</p>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <button class="btn btn-success btn-lg btn-block" onclick="window.location='thankyou'">Place Order</button>
                  <br>
                  <a href="{{ url('/') }}"><button class="btn btn-success btn-lg btn-block"></span> </span> <strong class="text-black"> Send </strong></button></a> 
                </div>
                
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- </form> -->
    </div>
  </div>

<!-- info section -->
@include('client.section.info')
<!-- end info section -->

<!-- footer section -->
@include('client.section.footer')
<!-- footer section -->

<!-- jQery -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
<!-- End Google Map -->

</body>

</html>