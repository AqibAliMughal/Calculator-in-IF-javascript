<!DOCTYPE html>
<html>
<head>
<title> Calculator in Switch/If using JavaScript</title>
<script type="text/JavaScript" lang="JavaScript">
/*
=====================
CALCULATOR IN SWITCH
=====================
*/
document.write(" <hr/> ");
document.write(" '<h2> CALCULATOR  in SWITCH </h2> ' ");
 var numberOne = 8;
 var numberTwo = 2;
 var operator = '/';

 document.write( "Number One: " +  numberOne);
 document.write( "<br/>");
 document.write( "Number Two: " +  numberTwo);
 document.write( "<br/>");
 document.write( "Operation performed: " + " ' " + operator + " ' ") ;
 document.write( "<br/>"); 
 document.write( "___________________") ;
 document.write( "<br/>"); 

switch(operator){

	case ( operator = '+'):
	 document.write( "Addition is: " + (numberOne +  numberTwo) );
	break;
	case ( operator = '-'):
	 document.write( "Substraction is: " + (numberOne -  numberTwo) );
	break;
	case ( operator = '*'):
	 document.write( "Multiplication is: " + (numberOne *  numberTwo) );
	break;
	case ( operator = '/'):
	 document.write( "Division is: " + (numberOne /  numberTwo) );
	break;
	default:
	 document.write( "Invalid Operator Entered");
}
</script>
</head>
<body>
</body>
</html>