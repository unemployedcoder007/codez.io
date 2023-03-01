
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
<title>CodeZ - Your Free Code Destination</title>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="stylebca.css" /> 
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
         crossorigin="anonymous"
        />
     
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
         <!-- BootStrap 5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
    <nav class="navbar sticky-top shadow" >
      <div class="container">
       <a class="navbar-brand" href="index.html">
       <img src="images/logonew.png" alt="logo" width="120" height="30">
      </div>
    </nav>
</head>
<body >
<ul class="nav nav-pills mb-3 justify-content-center " id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active"  id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Common</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Important</button>
    </li>
   
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
    </li>
  </ul>
  
<div class= "container-md shadow border  rounded ">

    <br>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
        <h4 id="scrollspyHeading1">Q1. Write a Java Program to display Floyd's Triangle</h4><br>
  <p class="user-select-all"><code>// Java program to display Floyd's triangle <br>

// Importing Java libraries <br>
import java.util.*;<br>
<br>
// Main class<br>
class GFG {<br>
    <br>
	// Main driver method<br>
	public static void main(String[] args)<br>
	{<br>
		// No of rows to be printed<br>
		int n = 5;<br>

		// Creating and initializing variable for<br>
		// rows, columns and display value<br>
		int i, j, k = 1;<br>
        <br>
		// Nested iterating for 2D matrix<br>
		// Outer loop for rows<br>
		for (i = 1; i <= n; i++) {<br>
            <br>
			// Inner loop for columns<br>
			for (j = 1; j <= i; j++) {<br>
                <br>
				// Printing value to be displayed<br>
				System.out.print(k + " ");<br>
                <br>
				// Incremeting value displayed<br>
				k++;<br>
			}<br>
            <br>
			// Print elements of next row<br>
			System.out.println();<br>
		}<br>
	}<br>
}<br>
<br>
<br>
</code></p>
      </div>
<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
  <h4 id="scrollspyHeading1">Q1. Write a Java Program to find out the Greatest of Three Numbers taken as user input</h4><br>

<p class="user-select-all"><code>import java.util.Scanner;<br>  
public class LargestNumberExample1<br> 
{  <br>
public static void main(String[] args)  <br> 
{  <br>
int a, b, c, largest, temp;  <br>
//object of the Scanner class<br>  
Scanner sc = new Scanner(System.in);  <br>
//reading input from the user  <br>
System.out.println("Enter the first number:"); <br> 
a = sc.nextInt();  <br>
System.out.println("Enter the second number:");  <br>
b = sc.nextInt();  <br>
System.out.println("Enter the third number:");  <br>
c = sc.nextInt();  <br>
//comparing a and b and storing the largest number in a temp variable <br> 
temp=a>b?a:b;  <br>
//comparing the temp variable with c and storing the result in the variable  <br>
largest=c>temp?c:temp;  <br>
//prints the largest number  <br>
System.out.println("The largest number is: "+largest); <br> 
}  <br>
}  <br> <br>
</code></p>
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
</div>
</div>
</div>
</div>
</body>
<div class="container rounded shadow" style="background-color: #EBF5FB ;">

    <div class="footer">
    <img src="images/logofooter.png" class="rounded float-start" alt="..." width="120" height="30">
    <br>
    <br>
    <p  class="fs-6 float-end"> No Copyright Reserved</p> 
    <a href="#" class="fs-6" >About the Developer</a>
    <a href=""><i class="fa-brands fa-facebook"> </i> </a>
    <a href=""> <i class="fa-brands fa-instagram"></i> </a>
    <a href=""> <i class="fa-brands fa-github"></i></i> </a>
    <a href=""> <i class="fa-brands fa-telegram"></i> </a>
    <a href=""> <i class="fa-brands fa-snapchat"></i> </a>
      </div>
   
  </div>
</div>
</html>