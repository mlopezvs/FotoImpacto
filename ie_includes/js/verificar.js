function verificarimagen(){

	var img = document.forms['formulario_publicacion']['foto'].value;

	if (img==null || img=="") {
		alert('debe elegir una fotografía');
		return false;
	}
	else{
		document.formulario_publicacion.submit(); 
	}

}