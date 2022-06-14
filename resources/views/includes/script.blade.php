<script src="https://kit.fontawesome.com/71f4d65ce7.js" crossorigin="anonymous"></script>
<script src="{{ url('frontend/libraries/retina/retina.min.js') }}"></script>
<script src="{{ url('frontend/libraries/jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
<script>
  let x = document.getElementById("check");
  let pass = document.getElementById("password");
  x.onclick = function(){
    if(pass.type === "password"){
      pass.type ='text';
      x.innerHTML = '<i class="fas fa-eye-slash"></i>';
    }else{
      pass.type ='password'
      x.innerHTML = '<i class="fas fa-eye"></i>';
    }
  }

</script>