<div class="my-5 py-5 mx-0 row justify-content-md-center">
  <div class="col-md-12 text-center py-5 px-4" id="tarif">
    <h1 class="my-5">L'accès à la solution est <span id="or">gratuit</span>.</h1>
    <p class="my-5">Seul l'envoi de SMS vous est facturé.<br><strong>Prix unitaire du SMS : 6,9 cts</strong></p>
    <div class="sliderSMS">
      <p id="pop" class="col-md-2 py-4">
        <output id="nbsms"></output> SMS
        <br>
        <strong><output id="cout"></output> €</strong>
      </p>
      <div id="slider"></div>
    </div>
  </div>
</div>
<div class="row p-0 m-0">
  <div class="col">
    <img src="<?php bloginfo("template_directory"); ?>/images/filigramme-1.png" class="img-fluid float-right hidden-sm-down bg f3">
  </div>
</div>

<script type="text/javascript">
$(function(){
	var slider = $('#slider');
  var out = $('#pop');
  var nbsms = $('#nbsms'),
      cout = $('#cout');
	slider.slider({
  	value: 100,
  	min: 0,
    max: 1500,
  	orientation: "horizontal",
    slide: function(event, ui) {
      var sliderMin = slider.slider("option",'min'),
          sliderMax = slider.slider("option",'max'),
          sliderVal = ui.value,
          sliderWidth = slider.width(),
          sliderLeft = slider.offset().left,
          thumb = slider.children(),
          thumbWidth = thumb.width(),
          offset = 0;

      var range = sliderMax - sliderMin;

      var position = (sliderVal - sliderMin)/range,
      		positionOffset;

      /*console.log("\n======================= test =======================");
      console.log("sliderWidth : "+sliderWidth);
      console.log("sliderMin : "+sliderMin);
      console.log("sliderMax : "+sliderMax);
      console.log("sliderVal : "+sliderVal);*/

      if((position*sliderWidth + sliderLeft) <= sliderLeft + out.innerWidth()/2 - thumbWidth/2) {
        positionOffset = 0;
      }
      else if((position*sliderWidth + sliderLeft) + out.innerWidth()/2 >= sliderLeft + sliderWidth){
        positionOffset = sliderWidth - out.innerWidth();
      }
      else{
        positionOffset = sliderWidth * position + offset - out.innerWidth()/2 + thumbWidth/2;
        offset = offset - position;
      }

      console.log("\n======================= test =======================");
      console.log("out.width() : "+out.width());
      console.log("thumbWidth : "+thumbWidth);
      console.log("sliderWidth : "+sliderWidth);
      console.log("sliderLeft : "+sliderLeft);
      console.log("position : "+position);
      console.log("positionOffset : "+positionOffset);
      console.log("offset : "+offset);

      nbsms.val(ui.value);
      cout.val((ui.value*0.069).toFixed(2));
      out.css('left', positionOffset + "px");
      out.css('marginLeft', offset + "%");
    }
  });
  nbsms.val(slider.slider('value'));
  cout.val((slider.slider('value')*0.069).toFixed(2));
});
</script>
