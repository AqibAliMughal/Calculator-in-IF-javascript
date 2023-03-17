<!DOCTYPE html>
<html>
<head>
<title> Calculator in Switch/If using JavaScript</title>
<script type="text/JavaScript" lang="JavaScript">
/*
=================
CALCULATOR IN IF
=================
*/
document.write(" '<h2> CALCULATOR  in IF </h2> ' ");
var numberOne = 11;
var numberTwo = 33;
var operator = '/';

document.write( "Number One: " +  numberOne);
document.write( "<br/>");
document.write( "Number Two: " +  numberTwo);
document.write( "<br/>");
document.write( "Operation performed: " + " ' " + operator + " ' ") ;
document.write( "<br/>"); 
document.write( "___________________") ;
document.write( "<br/>"); 

if( operator == '+'){
	document.write( "Addition is: " +  (numberOne + numberTwo));
}

if( operator == '-'){
	if( numberOne >=  numberTwo)
	{
	document.write( "Substraction is: " +  (numberOne - numberTwo));
	}
	else if( numberOne <=  numberTwo)
	{
	document.write( "Substraction is: " +  (numberTwo - numberOne) );
	}
}

if( operator == '*'){
	document.write( "Multiplication is: " +  (numberTwo * numberOne) );
}

if( operator == '/'){
	document.write( "Division is: " +  (numberTwo / numberOne) );
}
</script>
</head>
<body>
</body>
</html>