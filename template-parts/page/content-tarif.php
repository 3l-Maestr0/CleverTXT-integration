<div class="my-5 py-5 mx-0 row justify-content-md-center">
  <div class="col-md-10" id="tarif">
    <div class="container-fluid text-center">
      <div class="my-5 py-5 row justify-content-md-center">
        <div class="col">
          <h1>L'accès à la solution est <span id="or">gratuit</span>.</h1>
        </div>
      </div>
      <div class="py-4 row justify-content-md-center">
        <div class="col">
          <p>Seul l'envoi de SMS vous est facturé.<br><strong>Prix unitaire du SMS : 6,9 cts</strong></p>
        </div>
      </div>
      <div class="pt-4 pb-5 row justify-content-md-center">
        <div class="col-md-12">
          <form oninput="nbsms.value=parseInt(prix.value), cout.value = parseFloat(parseInt(prix.value)*6.9/100).toFixed(2)">
            <p id="pop" class="col-md-2 py-4">
              <output name="nbsms">0</output> SMS
              <br>
              <strong><output name="cout">0.00</output> €</strong>
            </p>
            <input id="prix" type="range" name="prix" value="0" min="0" max="1500" step="1"  data-thumbwidth="-2">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row p-0 m-0">
  <div class="col">
    <img src="<?php bloginfo("template_directory"); ?>/images/filigramme-1.png" class="img-fluid float-right bg f3">
  </div>
</div>

<script type="text/javascript">
$('input[type="range"]').on('input', function() {

  var control = $(this),
    controlMin = control.attr('min'),
    controlMax = control.attr('max'),
    controlVal = control.val(),
    controlThumbWidth = control.data('thumbwidth'),
    width = this.offsetWidth;

  var range = controlMax - controlMin;
  var offset = 0;

  var position = ((controlVal - controlMin) / range);
  var positionOffset;
  var output = document.getElementById('pop');

  console.log("================================== test : ==================================");
  console.log(output.offsetLeft +'+'+ output.offsetWidth +'>='+ this.offsetLeft +'+'+ width); //a+b >= c + d
  console.log((output.offsetLeft + output.offsetWidth) +'>='+ (this.offsetLeft + width)); //res(a+b) >= res(c+d)
  console.log((output.offsetLeft + output.offsetWidth) >= (this.offsetLeft + width)); //boolean
  console.log("position : " + position);
  console.log("position * width : " + (position*width));

  if((position*width + this.offsetLeft) <= this.offsetLeft + output.offsetWidth/2) {
    positionOffset = 0;
  }
  else if((position*width + this.offsetLeft) + output.offsetWidth/2 >= this.offsetLeft + width){
    positionOffset = width - output.offsetWidth;
  }
  else{
    positionOffset = width * position + offset - output.offsetWidth/2;
    offset -= position;
  }

  /*output
    .css('left', 'calc(' + position + '% - ' + positionOffset + 'px)')*/
  output.style.left =  positionOffset + "px";
  output.style.marginLeft = offset + "%";

});
</script>
