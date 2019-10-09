object.onclick = function(){
	function isset (get) {
	  try {
	    return typeof get() !== 'undefined'
	  } catch (e) {
	    return false
	  }
	}
	var r = confirm("Você tem certeza que deseja excluír sua conta?");
	if (r == true) {
	  header('Location: login.php?action=excluido');
	} else {
	  header('Location: sobremim.php');
	} 
};