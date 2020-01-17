@extends('main')
@section('class')
active
@endsection
@section('content')
<!-- BANNER -->
  <section id="banner" class="header">
  <div class="row">
    <div class="banner col-lg-12 col-md-12 col-sm-12">
            <div class="carousel-caption">
              <h2 class="display-4"><span class="g-r">Bo</span>vinet.</h2>
              <p class="lead">Calidad y servicio.</p>
            </div>
    </div>
  </div>
  </section>
  <!-- SERVICIOS -->
  <section id="services" class="section-padding sc-l">
        <div class="cot">
            <div class="row">
                <div class="col-lg-12 col-sm-12 m-auto ">
                    <div class="section-heading">
                        <h2 class="text-center sec-title pb-4">Los servicios de Bovinet</h2>
                        <hr class="line pb-3"></hr>
                        <p class="text-center pb-3">Venda sus animales con una mayor facilidad. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-4 box">
                    <div class="box-block ">
                        <img src="img/box-6.jpg" alt="" class="img-fluid box-img">
                        <div class="box-text pt-3">
                            <p class="h5 my-2 d-inline-block box-t">
                                Grandes oportunades de venta.
                            </p>
                            <p>En bovinet podras publicar todo tipo de raza, bovinos, porcinos, ovinos, caprinos, etc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4 box">
                    <div class="box-block ">
                        <img src="img/box-5.jpg" alt="" class="img-fluid box-img">
                        <div class="box-text pt-3">
                            <p class="h5 my-2 d-inline-block box-t">
                                Soporte web para sus productos<br>por tiempo ilimitado.
                            </p>
                            <p>En bovinet podrás publicas tus productos sin preocupación de que este sea eliminado.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4 box">
                    <div class="box-block ">
                        <img src="img/box-3.jpg" alt="" class="img-fluid box-img">
                        <div class="box-text pt-3">
                            <p class="h5 my-2 d-inline-block box-t">
                               Acompañamiento en su venta.
                            </p>
                            <p>Bovinet le proporcionara sus datos a diferentes vendedores mediante esta pagina web para facilitar su venta.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PRODUCTOS TITULO -->
    <section id="prod-title" class="productos-t sc-tp">
      <div class="row">
          <div class="col-lg-12 col-sm-12 m-auto ">
              <div class="section-heading">
                  <h2 class="text-center sec-title pb-4">Publicaciónes más recientes</h2>
                  <hr class="line pb-3"></hr>
                  <p class="text-center pb-3">Aumente sus ganancias mirando el listado de publicaciones.</p>
              </div>
          </div>
      </div>
    </section>
    <!-- PRODUCTOS  -->
    <section id="products" class="productos-t sc-l">
      <div class="cot my-4">
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
          <!--Controls-->
          <div class="controls-top text-center">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left p-ct"></i></a>
            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right p-ct"></i></a>
          </div>
          <!--/.Controls-->
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
            <li data-target="#multi-item-example" data-slide-to="2"></li>
          </ol>
          <!--/.Indicators-->
          <!--Slides-->
          <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">

              <div class="row">
                <div class="col-md-4">
                  <div class="box-st card mb-2">
                    <img class="card-img-top" src="https://images.pexels.com/photos/162240/bull-calf-heifer-ko-162240.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                      alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Titulo</h4>
                      <p class="card-text">Aqui va una pequeña descripción de tu animal, en donde podras incitar a los compradores de comprar tus productos.</p>
                      <a class="btn btn-primary">Comprar</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 clearfix d-none d-md-block">
                  <div class="box-st card mb-2">
                    <img class="card-img-top" src="https://images.pexels.com/photos/66400/pexels-photo-66400.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                      alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Titulo</h4>
                      <p class="card-text">Aqui va una pequeña descripción de tu animal, en donde podras incitar a los compradores de comprar tus productos.</p>
                      <a class="btn btn-primary">Comprar</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 clearfix d-none d-md-block">
                  <div class="box-st card mb-2">
                    <img class="card-img-top" src="https://images.pexels.com/photos/634612/pexels-photo-634612.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                      alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Titulo</h4>
                      <p class="card-text">Aqui va una pequeña descripción de tu animal, en donde podras incitar a los compradores de comprar tus productos.</p>
                      <a class="btn btn-primary">Comprar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/.First slide-->
            <!--Second slide-->
            <div class="carousel-item">

              <div class="row">
                <div class="col-md-4">
                  <div class="box-st card mb-2">
                    <img class="card-img-top" src="https://images.pexels.com/photos/195226/pexels-photo-195226.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                      alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Titulo</h4>
                      <p class="card-text">Aqui va una pequeña descripción de tu animal, en donde podras incitar a los compradores de comprar tus productos.</p>
                      <a class="btn btn-primary">Comprar</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 clearfix d-none d-md-block">
                  <div class="box-st card mb-2">
                    <img class="card-img-top" src="https://images.pexels.com/photos/69170/pexels-photo-69170.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                      alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Titulo</h4>
                      <p class="card-text">Aqui va una pequeña descripción de tu animal, en donde podras incitar a los compradores de comprar tus productos.</p>
                      <a class="btn btn-primary">Comprar</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 clearfix d-none d-md-block">
                  <div class="box-st card mb-2">
                    <img class="card-img-top" src="https://images.pexels.com/photos/231062/pexels-photo-231062.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                      alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Titulo</h4>
                      <p class="card-text">Aqui va una pequeña descripción de tu animal, en donde podras incitar a los compradores de comprar tus productos.</p>
                      <a class="btn btn-primary">Comprar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/.Second slide-->
            <!--Third slide-->
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-4">
                  <div class="box-st card mb-2">
                    <img class="card-img-top" src="https://images.pexels.com/photos/460991/pexels-photo-460991.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                      alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Titulo</h4>
                      <p class="card-text">Aqui va una pequeña descripción de tu animal, en donde podras incitar a los compradores de comprar tus productos.</p>
                      <a class="btn btn-primary">Comprar</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 clearfix d-none d-md-block">
                  <div class="box-st card mb-2">
                    <img class="card-img-top" src="https://images.pexels.com/photos/390025/pexels-photo-390025.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                      alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Titulo</h4>
                      <p class="card-text">Aqui va una pequeña descripción de tu animal, en donde podras incitar a los compradores de comprar tus productos.</p>
                      <a class="btn btn-primary">Comprar</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 clearfix d-none d-md-block">
                  <div class="box-st card mb-2">
                    <img class="card-img-top" src="https://images.pexels.com/photos/634613/pexels-photo-634613.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                      alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Titulo</h4>
                      <p class="card-text">Aqui va una pequeña descripción de tu animal, en donde podras incitar a los compradores de comprar tus productos.</p>
                      <a class="btn btn-primary">Comprar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/.Third slide-->
          </div>
          <!--/.Slides-->
        </div>
        <!--/.Carousel Wrapper-->
      </div>
    </section>
    <!--FORMULARIO Y DATOS-->
    <section id="form-section" class="form-section sc-t">
      <div class="cot form">
          <div class="row">
              <div class="col-lg-6 col-sm-12 col-md-12">
                      <h2 class="font-strong">Contactanos</h2>
                      <p>Si tienes dudas, quejas, etc. con respecto al funcionmiento de bovinet, No dudes en contactarmos.</p>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-7 col-sm-12">
                  <form action="./php/correo.php" method="POST">
                      <div class="row">
                          <div class="col-md-6 ">
                              <input name="name" type="text" class="form-control in-lab" placeholder="Nombre" required>
                          </div>
                          <div class="col-md-6 ">
                              <input name="email" type="email" class="form-control in-lab" placeholder="Correo" required>
                          </div>
                          <div class="col-md-12 ">
                              <input name="subject" type="text" class="form-control in-lab" placeholder="Asunto" required>
                          </div>
                          <div class="col-md-12">
                              <textarea name="message" class="form-control in-lab" rows="6" placeholder="Mensaje" required></textarea>
                          </div>
                          <div class="col-md-12">
                              <input name="submit" type="submit" class="btn btnfrm in-lab font-strong" value="Enviar">
                          </div>
                      </div>
                  </form>
              </div>
              <div class="col-lg-5 pl-4 mt-4 mt-lg-0">
                  <h4 class="font-strong">Oficina</h4>
                  <p>John lake park 9/12 street park London</p>
                  <h4 class="font-strong">Celular</h4>
                  <p>+57 333 111444</p>
                  <h4 class="font-strong">Correo</h4>
                  <p>bovinet@ejemplo.com</p>
              </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12">
              <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondres%2C%20Reino%20Unido!5e0!3m2!1ses!2sco!4v1568101224298!5m2!1ses!2sco" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
      </div>
  </section>
@endsection
