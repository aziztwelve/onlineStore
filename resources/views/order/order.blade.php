@extends('master')
@section('content')
@if(Session::has('cart'))
<div class="container frame" >
  
    <table  style="width: 600px; border: 20px;" class="table-border" >
      <thead class="thead-font">
        <tr>
          <th style="width: 400px; text-align: center;">Название</th>
          <th style="text-align: center;" >Кол-во</th>
          <th style="text-align: center;">Стоимость</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr class="spaceUnder" style="margin-bottom: 10px;">
          <td style="text-align: left;">{{ $product['item']['title'] }}</td>
          <td style="text-align: center;">{{ $product['qty'] }}</td>
          <td style="text-align: center;">{{ $product['price'] }} <i class="fa fa-rub" aria-hidden="true"></i></td>
        </tr>
        @endforeach
        <tr class="result">
          <td></td>
          <td >Итого:</td>
          <td class="price-result">{{ $totalPrice }}<i class="fa fa-rub" aria-hidden="true"></i> <input name="cost" value="1895.00" type="hidden"></td>
        </tr>
      </tbody>
    </table>
</div>
    <br><br>



{{--=============container доставка & самовывоз ==========================================--}}
<div class="container framebutton">
  
  <table class="buttons table-border"  style="width: 600px; border: 20px;">
    <tbody>
      <tr>
        <td style="text-align: left;">
          <a onclick="deliveryFunction()" href="#" id="delivery_block_show" class="dashed">Доставка</a> (+299 <i class="fa fa-rub" aria-hidden="true"></i>)
        </td>
        <td style="float: right;">
          <a onclick="selfFunction()" href="#" id="self_block_show" class="dashed">Самовывоз</a>
        </td  >
      </tr>
    </tbody>
  </table>
</div>





{{-- ==============================Доставка=============================================== --}}
<div class="container frame"  id="delivery_block" style="display: none;">
  <div class=" unvisible" {{-- id="delivery_block" style="display: block;" --}}>
    <form action="{{ route('order') }}" method="post" name="cake_order_delivery">
      {{-- <div id="cake_options_hidden1">
        <input value="Торт Канадский с кленовым сиропом" name="items[1333][title]" type="hidden">
        <input value="120 часа(ов)" name="items[1333][storage_life]" type="hidden">
        <input value="750.00 г" name="items[1333][weight]" type="hidden">
        <input value="309.00 Ккал" name="items[1333][power]" type="hidden">
        <input value="485" name="items[1333][price]" type="hidden">
        <input value="1" name="items[1333][quantity]" type="hidden">
        <input value="Торт бисквитный «СМЕТАННИК»" name="items[2946][title]" type="hidden">
        <input value="5 дня(ей)" name="items[2946][storage_life]" type="hidden">
        <input value="1.15 кг" name="items[2946][weight]" type="hidden">
        <input value="310.00 Ккал" name="items[2946][power]" type="hidden">
        <input value="715" name="items[2946][price]" type="hidden">
        <input value="1" name="items[2946][quantity]" type="hidden">
        <input value="Торт «Безе с клюквой и шоколадом»" name="items[2947][title]" type="hidden">
        <input value="5 дня(ей)" name="items[2947][storage_life]" type="hidden">
        <input value="1.00 кг" name="items[2947][weight]" type="hidden">
        <input value="340.00 Ккал" name="items[2947][power]" type="hidden">
        <input value="695" name="items[2947][price]" type="hidden">
        <input value="1" name="items[2947][quantity]" type="hidden">
        <input value="1895.00" name="cost" type="hidden">
        <input value="1" name="merch_id" type="hidden">
        <input name="type" value="delivery" type="hidden">
      </div> --}}
      <h2 style="text-align: center;">Доставка</h2>
      <table class="table-border">
        <tbody>
          <tr>
            <td>Контактный номер телефона&nbsp;<span class="required_notice">*</span>
          </td>
          <td>
            <input name="telephone" required="required" type="text">
          </td>
        </tr>
        <tr>
          <td>Как вас зовут?</td>
          <td><input name="name" type="text"></td>
        </tr>
        <tr>
          <td>Адрес доставки<br>
            <span class="notice">
              <small>Доставка курьером.<br>Стоимость доставки 299 <i class="fa fa-rub" aria-hidden="true"></i></small>
            </span>
          </td>
          <td>
            <table class="address">
              <tbody>
                <tr>
                  <td colspan="4">Улица<br><input name="address[street]" type="text"></td>
                </tr>
                <tr>
                  <td>Дом<br><input name="address[build]" class="short" type="text"></td>
                  <td>Корпус<br><input name="address[housing]" class="short" type="text"></td>
                  <td>Строение<br><input name="address[frame]" class="short" type="text"></td>
                  <td>Кв./офис<br><input name="address[office]" class="short" type="text"></td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td style="padding: 9px 0;text-align: left; width: 300px; ">Желаемая дата и время <br>выполнения заказа</td>
          <td>
            <input name="date" style="width: 194px" tabindex="0" value="11.01.2018" class="date"> в
            <input name="datetime" class="time" size="6" value="20:00" style="width: 45px;" type="text">
          </td>
        </tr>

        <tr>
          <td style="padding: 9px 0;text-align: left;  vertical-align: top;">Комментарий к заказу</td>
          <td>
            <div class="comment_notice"></div>
            <textarea name="comment" rows="8"></textarea>
          </td>
        </tr>

        <tr>
          <td colspan="2" align="center">
            <p>Всего к оплате: 2194<i class="fa fa-rub" aria-hidden="true"></i></p>
            {{-- <input name="secret" value="real" type="hidden"> --}}
            {{ csrf_field() }}
            <p><br><input value="Заказать" id="total1" type="submit"></p>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
</div>





{{-- ==============================Самовывоз=============================================== --}}

<div class="container frame" id="self_block" style="display: none;">
  <div class=" unvisible " {{-- id="self_block" style="display: block;" --}}>
    <form action="{{ route('order') }}" method="post" name="cake_order_self">
      {{-- <div id="cake_options_hidden2">
        
        <input value="Торт Канадский с кленовым сиропом" name="items[1333][title]" type="hidden">
        <input value="120 часа(ов)" name="items[1333][storage_life]" type="hidden">
        <input value="750.00 г" name="items[1333][weight]" type="hidden">
        <input value="309.00 Ккал" name="items[1333][power]" type="hidden">
        <input value="485" name="items[1333][price]" type="hidden">
        <input value="1" name="items[1333][quantity]" type="hidden">
        <input value="Торт бисквитный «СМЕТАННИК»" name="items[2946][title]" type="hidden">
        <input value="5 дня(ей)" name="items[2946][storage_life]" type="hidden">
        <input value="1.15 кг" name="items[2946][weight]" type="hidden">
        <input value="310.00 Ккал" name="items[2946][power]" type="hidden">
        <input value="715" name="items[2946][price]" type="hidden">
        <input value="1" name="items[2946][quantity]" type="hidden">
        <input value="Торт «Безе с клюквой и шоколадом»" name="items[2947][title]" type="hidden">
        <input value="5 дня(ей)" name="items[2947][storage_life]" type="hidden">
        <input value="1.00 кг" name="items[2947][weight]" type="hidden">
        <input value="340.00 Ккал" name="items[2947][power]" type="hidden">
        <input value="695" name="items[2947][price]" type="hidden">
        <input value="1" name="items[2947][quantity]" type="hidden">
        <input value="1895.00" name="cost" type="hidden">
        <input value="1" name="merch_id" type="hidden">
        <input name="type" value="self" type="hidden">
      </div> --}}
      <h2 style="text-align: center;">Самовывоз</h2>
      <table class="table-border">
        <tbody>
          <tr>
            <td>Контактный номер телефона&nbsp;<span class="required_notice">*</span></td>
            <td><input class="{{ $errors->has('name') ? 'has-error' : '' }}" name="telephone" required="required" type="text"></td>
          </tr>
          <tr>
            <td>Как вас зовут?</td>
            <td><input name="name" type="text"></td>
          </tr>
          <tr>
            <td>Самовывоз из магазина&nbsp;<span class="required_notice">*</span></td>
            <td>
              <a href="/stores_google.php" class="dashed various" id="open_choose_win">Выбрать магазин</a>
              <input name="store" value="" id="store_hidden" type="hidden">
            </td>
          </tr>
          <tr>
            <td style="padding: 9px 0;text-align: left; width: 300px; ">Желаемая дата и время самовывоза</td>
            <td><input name="date" style="width: 194px" tabindex="0" value="11.01.2018" class="date"> в
            <input name="datetime" class="time" size="6" value="20:00" style="width: 45px;" type="text">
          </td>
        </tr>
        <tr>
          <td style="padding: 9px 0;text-align: left;  vertical-align: top;">Комментарий к заказу</td>
          <td>
            <div class="comment_notice"></div>
            <textarea name="comment" rows="8"></textarea>
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <p>Всего к оплате: 1895.00&nbsp;<i class="fa fa-rub" aria-hidden="true"></i></p>
            <input name="secret" value="real" type="hidden">
            {{ csrf_field() }}
            <p><br><input value="Заказать" id="total2" type="submit"></p>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
</div>




@else
<div class="row">
  <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
    <h2>No items in cart...</h2>
  </div>
</div>
@endif
@endsection






<script>
function deliveryFunction() {
    var x = document.getElementById("delivery_block");
    var y = document.getElementById("self_block");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
}else {
        x.style.display = "none";
        y.style.display = "none";
    }
}

function selfFunction() {
    var x = document.getElementById("delivery_block");
    var y = document.getElementById("self_block");
    if (y.style.display === "none") {
        y.style.display = "block";
        x.style.display = "none";
}else {
        x.style.display = "none";
        y.style.display = "none";
    }
}
</script>

 






<style>
#form1 {
display:none;
}
/*=================================form======================================*/

.notice {
color: gray;
font-size: 11px;
}
.required_notice {
display: inline-block;
position: relative;
font-size: 14px;
line-height: 11px;
color: red;
}
.address input.short {
width: 52px;

}

.address td {
font-size: 10px;
padding: 0 5px 5px 0;
}
div.comment_notice {
color: red;
}
.buttons td {
text-align: center;
vertical-align: middle !important;
}
.dashed {
border-bottom: 1px dashed;
text-decoration: none;
}
.dashed:hover {
color: #66ccff
}
.thead-font{
font-family: Geneva, Arial, Helvetica, sans-serif;
font: bold;
font-weight: bold;
text-align: right;
color: #130303;
}

.table-border{
border-spacing: 1em;
border-collapse: separate;
}
.spaceUnder{
padding-bottom: 1em;
}
.container.frame{
width: 650px;
}
.frame{
margin: 15px 0 0 -15px;
padding: 10px 10px 10px 10px;
border: 1px dashed silver;
border-radius: 5px;
background: #fafafa;
}
.container.framebutton{
width: 650px;
}
.framebutton{
margin: 15px 0 0 -15px;
padding: 10px 10px 10px 10px;
border: 1px dashed silver;
border-radius: 5px;
background: #fafafa;
}
.result td {
font-weight: bold;
text-align: right;
color: #130303;
}
.result td:not(:last-child) {
padding-right: 10px;
}
.result .price-result {
text-align: right;
text-align: center;
}
</style>