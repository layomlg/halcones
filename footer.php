</div>
<div class="footer">
  <div class="row">
    <div class="col-sm-6">
      <p>
        <a>Aviso de privacidad</a>, 
        <a>Términos y condiciones</a>
      </p>
    </div>
    <div class="col-sm-6">
      <p>
        Sitio operado por MLG
      </p>
    </div>

  </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="./js/jquery-3.2.1.slim.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/popper.min.js"></script>

<script>
  $(".categorias > ul > li>span").click(function(){
    $(this).parent().children("ul").toggle();
    $(this).parent().toggleClass("expand");
  });
  $(".faq > ul > li>span").click(function(){
    if($(this).parent().hasClass("expand")){
      $(this).siblings("p").toggle();
      $(this).parent().toggleClass("expand");
    }
    else{
      $(".faq > ul > li > span").parent().children("p").css("display","none");
      $(this).siblings("p").toggle();
      $(this).parent().toggleClass("expand");
    }

  });
</script>
</body>
</html>