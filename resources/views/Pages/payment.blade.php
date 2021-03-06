﻿@extends('app')

@section('content_section')
  <section id="product">
    <div class="container">
    <!--  breadcrumb -->  
      <ul class="breadcrumb">
        <li>
          <a href="#">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Check-out</li>
      </ul>
      <div class="row">        
        <!-- Account Login-->


          <div class="checkoutsteptitle"> confirmer La Commande<a class="modify">modifier</a>
          </div>
          <div class="checkoutstep">
            <div class="cart-info">
              <table class="table table-striped table-bordered">
                <tr>
                  <th class="name">Nom du produit</th>
                  <th class="price">quantité</th>
                  <th class="price">Prix Unitaire</th>
                  <th class="total">supprimer</th>
                </tr>


                <?php $total = 0; $subtotal = 0; ?>
                @foreach($shoppingCarts as $items)
                  <?php $subtotal = $items->product_price * $items->product_qty; ?>
                  <?php $total += $subtotal; ?>
                  <tr>

                    <td  class="name"><a href="#">{{ $items->product_name }}</a></td>

                    <td class="qty">{{ $items->product_qty }}</td>

                    <td class="price">{{ $items->product_price }}</td>

                    <td class="total"> <a href="{{url('removecart',$items->id)}}"><img class="tooltip-test" data-original-title="Remove"  src="img/remove.png" alt=""></a></td>

                  </tr>
                @endforeach

              </table>
            </div>
            <div class="row">
              <div class="pull-right">
                <div class="span4 pull-right">
                  <table class="table table-striped table-bordered ">
                    <tbody>
                      <tr>

                        <td><span class="extra bold totalamout">Total :</span></td>
                        <td><span class="bold totalamout">{{ $total }}</span></td>
                      </tr>
                    </tbody>
                  </table>
                  <ul  class="productpagecart">

                    <script
                            data-env="sandbox"
                            data-callback="{{url('removecart/clearuser')}}"
                            data-currency="EUR"
                            data-amount="{{ $total }}"
                            data-name="Product Name"
                            data-button="buynow" src="{{url('js/paypal-button.min.js')}}?merchant=ruwanranganathz@gmail.com" async="async"
                            ></script>

                  </ul>



                </div>
              </div>
            </div>
          </div>
          {!! Form::close() !!}
        </div>


      </div>
    </div>
  </section>



<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/application.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script defer src="js/jquery.fancybox.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/jquery.tweet.js"></script>
<script  src="js/cloud-zoom.1.0.2.js"></script>
<script  type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript"  src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script type="text/javascript"  src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript"  src="js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript"  src="js/jquery.ba-throttle-debounce.min.js"></script>
<script type="text/javascript"  src="js/paypal-button.min.js"></script>
<script defer src="js/custom.js"></script>
@endsection


