//focus to next input by pressing enter
function focusSupport(i,e){
	if(e.keyCode == 13){
		if(i == 0){

		}else{
			e.preventDefault();
			document.getElementById(i+1).focus();
		}
	}
}