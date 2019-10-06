// Hide Preloader
window.addEventListener('load', () => document.querySelector('.preloader').classList.add('hidePreloader'))


//Contact Form Validation
function cvalidate(myform){
	
	document.getElementById('invalid_name').style.visibility = 'hidden';
	document.getElementById('invalid_pno').style.visibility = 'hidden';
	document.getElementById('invalid_email').style.visibility = 'hidden';
	document.getElementById('invalid_subj').style.visibility = 'hidden';
	document.getElementById('invalid_msg').style.visibility = 'hidden';


	var regex_name =  /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
    var regex_phoneno = /[7-9]{1}\d{9}/;
    var regex_emailid = /^([a-z A-z 0-9 \. _])+@([a-z A-Z 0-9])+\.([a-z A-z]){2,10}(\.([A-Z a-z]){2,10})?$/;
    var regex_subj =  /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
    var regex_msg =  /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;

    var flag  = 1;

    if(regex_name.test(myform.name.value) == false)
	    {
	    	flag  = 0;
			document.getElementById('invalid_name').style.visibility = 'visible'; 
			myform.name.focus();
	    }
    if(regex_phoneno.test(myform.phoneno.value) == false)
	    {
	    	flag  = 0;
			document.getElementById('invalid_pno').style.visibility = 'visible'; 
			myform.phoneno.focus();
	    }
    if(regex_emailid.test(myform.emailid.value) == false)
	    {
	    	flag  = 0;
			document.getElementById('invalid_email').style.visibility = 'visible'; 
			myform.emailid.focus();
	    }
	if(regex_subj.test(myform.subject.value) == false)
	    {
	    	flag  = 0;
			document.getElementById('invalid_subj').style.visibility = 'visible'; 
			myform.subject.focus();
	    }
	if(regex_msg.test(myform.message.value) == false)
	    {
	    	flag  = 0;
			document.getElementById('invalid_msg').style.visibility = 'visible'; 
			myform.message.focus();
	    }
    if(flag == 0){
    	return false;
    }
    else{
    	return true;
    }
}




