@extends('layouts.app')
@section('content')
<div class="container">

        
    <div class="col-sm-10">
        <div class="row">
          <h1 class="titulo text-center ">¿QUIENES SOMOS?</h1>
          <div class="column middle">
            <p style="text-align: justify;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nobis ea in quaerat accusantium commodi beatae. At excepturi quas culpa tempora hic facere non, quisquam dignissimos illo, ut quibusdam odio. </p>
          </div>
        </div>
      </div>
    </div> 
  </div>

  <br><br><br>
  <div class="container" style="margin-top: 30px;">
    <div class="row">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-6">
        <div class="row">
          <h2 class="titulo">Nuestro producto</h2>
          <div class="column middle">
            <h3><span>1</span>Los mejores productos</h3>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque necessitatibus cupiditate suscipit quas non eaque, doloribus dolor illo id libero odit fugit quod 
                eos nesciunt rerum commodi debitis labore atque!
            </p>
            <h3><span>2</span>Los mejores productos</h3>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque necessitatibus cupiditate suscipit quas non eaque, doloribus dolor illo id libero odit fugit quod 
                eos nesciunt rerum commodi debitis labore atque!
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="container" style="margin-top: 30px;">
    <div class="row">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-10">
        <div class="row">
          <h2 class="titulo">VISIÓN</h2>
          <div class="column middle">
            <p>
              Ser reconocidos por brindar a nuestros clientes momentos agradables y sensaciones felices. Posicionarnos en el corazón de las familias colombianas y de todas las demás familias que nos vienen a visitar. Brindar productos y servicios gastronómicos, de eventos y entretenimiento con calidad, a través de un talento humano capacitado para lograr la satisfacción de todos nuestros clientes..
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container" style="margin-top: 30px;">
    <div class="row">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-10">
        <div class="row">
          <h2 class="titulo">MISIÓN</h2>
          <div class="column middle">
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque necessitatibus cupiditate suscipit quas non eaque, doloribus dolor illo id libero odit fugit quod 
                eos nesciunt rerum commodi debitis labore atque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos laboriosam minus ex repudiandae similique iusto aperiam doloremque eum! Illo quisquam minus, pariatur error quae facere nemo ex quos ratione nostrum?
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

{!! $empleados->links() !!}
</div>
@endsection