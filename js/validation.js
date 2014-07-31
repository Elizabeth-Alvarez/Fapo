// JavaScript Document
			// Code for validating the form	
			// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
			// for details
				var frmvalidator  = new Validator("contact_form");
				frmvalidator.addValidation("name","req","Please provide your name"); 
				frmvalidator.addValidation("email","req","Please provide your email"); 
				frmvalidator.addValidation("email","email","Please enter a valid email address");
				frmvalidator.addValidation("message","req","Please provide your message");
			