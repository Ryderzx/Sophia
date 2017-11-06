function goLogin(){
	var connect, form, response, url, result, user, pass, remember;
	user = __('user_login').value;
	pass = __('pass_login').value;
	sesion = __('remenber_login').checked ? true : false;
	url = 'ajax.php?mode=login';
	form ='user='+ user +'&pass='+ pass +'&sesion='+ sesion;
	connect = XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTTP');
	connect.onreadystatechange = function(){
		console.log(connect.readyState);
		console.log(connect.status);
		console.log(connect.responseText);
		if (connect.readyState == 4 && connect.status == 200) {
			if (connect.responseText == 1) {
				result = '<div class="alert alert-dismissible alert-success">';
				result += '<h4>Conectado...</h4>';
				result += '</div>';
				//result += '<span>Error Usuario/Clave incorrecta</span> </div>';
				__('_AJAX_LOGIN_').innerHTML = result;
				location.reload();
			}else {
				__('_AJAX_LOGIN_').innerHTML = connect.responseText;
			}
		} else if (connect.readyState != 4) {
			result = '<div class="alert alert-dismissible alert-warning">';
			result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
			result += '<h4>Procesando....</h4>';
			result += '</div>';
			__('_AJAX_LOGIN_').innerHTML = result;
		}
	} 
	connect.open('POST','ajax.php?mode=login',true);
	connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	connect.send(form);
}

function runLogin(e){
	if (e.keycode==13) {
		goLogin();
	}
}

function closeSession(){
	var connect, form, response, url, result, user, pass, remember;
	url = 'ajax.php?mode=close';
	console.log("cerrar session");
	connect = XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTTP');
	connect.onreadystatechange = function(){
		if (connect.readyState == 4 && connect.status == 200) {
			if (connect.responseText == 1) {
				location.reload();
			}else {
			}
		} 
	} 
	connect.open('POST','ajax.php?mode=close',true);
	connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	connect.send(form);
}

