
  @extends('Home.layout.main')
  @section('main-container')
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>یک مکان واحد برای هر نوع فرمایش شما</h1>
          <h2>ما با داشتن خیاط های مجرب قادر به دوخت هر نوع لباس شما هستیم </h2>
          
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

   

    <!-- ======= Products Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>محصولات</h2>
          <p>محصولات تولید شده در شرکت مارا دیدن نماید</p>
        </div>
        <div class="row">
       
          @foreach ($products as $product)
       
          
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card p-4">
                <img style="height:100%; witdth:100%;" src="{{ url('img/cloths/afghani_cloths.jpg') }}" alt="">
                <hr>
                <div class="card-body">
                
                  <h5>نام محصول : <a href="">{{ $product->name }}</a></h4>
                  <h4>قیمت : <a href="">{{ $product->price }}</a></h4>
                  <h4>رنگ : <a href="">{{ $product->color }}</a></h4>
                  <h4>اندازه : <a href="">{{ $product->size }}</a></h4>
                </div>
                <div class="card-footer">
                  <a class="btn btn-primary" href="#">سفارش</a>

                </div>
              </div>
              
              
            </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->


     <!-- ======= About Us Section ======= -->
     <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>درباره ما</h2>
        </div>

        <div class="row content">
          
          <div class="col-lg-12 pt-4 pt-lg-0">
            <p>
              ما با داشتین تیم مجرب ماشین آلات مدرن و تجربه کاری ۵ ساله اماده خدمت برای شما هستیم 

            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

  
 
   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>تماس با ما</h2>
        </div>

        <div class="row">

          <div class="col-md-2 col-lg-2"></div>
          <div class="col-lg-8 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="" method="post" class="php-email-form">
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">نام :</label>
                  <input type="text" name="name" class="form-control" id="name">
                </div>
                
              </div>
              
              <div class="form-group">
                <label for="name">پیام تان</label>
                <textarea class="form-control" name="message" rows="10"></textarea>
              </div>
              <div class="my-3">
                <div class="error-message">
                  @if ($errors->any())
                    <div class="alert alert-danger">
                        شما یکی یا هیچ یکی از موارد تان را درج نکردید !<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                </div>
                
              </div>
              <div class="text-center"><button type="submit">ارسال پیام</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @endsection