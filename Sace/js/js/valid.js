function validarFormulario(){
    
    var txtNombre = document.getElementById('nombre').value;
    var txtCorreo = document.getElementById('correo').value;
    var txtApellidos = document.getElementById('apellidos').value;
    var txtnumcontrol = document.getElementById('num_control').value;
    var txtpas = document.getElementById('password').value;
    var txtpas1 = document.getElementById('password1').value; 


    //campo obligatorio
    if(txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre)){
      alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
      return false;
    }
    //campo obligatorio
    if(txtApellidos == null || txtApellidos.length == 0 || /^\s+$/.test(txtApellidos)){
      alert('ERROR: El campo apellidos no debe ir vacío o lleno de solamente espacios en blanco');
      return false;
    }
    if(txtnumcontrol == null || txtnumcontrol.length == 0 ){
      alert('ERROR: El campo numero de control no debe ir vacio');
      return false;
    }
    //Test correo
    if(!(/\S+@\S+\.\S+/.test(txtCorreo))){
      alert('ERROR: Debe escribir un correo válido');
      return false;
    }
    if (txtpas != txtpas1) {
      alert('Las contraseñas no coinciden');
      return false;
    }

return true;
    }