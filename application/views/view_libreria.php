<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Libreria</title>
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="http://localhost/pruebas/application/css/materialize.min.css"  media="screen,projection"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<style type="text/css">
		html {
		    font-family: GillSans, Calibri, Trebuchet, sans-serif;
		}
	</style>
</head>
<body>
	<div class="container">
        <div class="row">
        	<nav class='#a5d6a7 green lighten-3'>
			  <div class="nav-wrapper">
			    <a href="#" class="brand-logo"> Pruebas con Materialize</a>
			    <ul id="nav-mobile" class="right hide-on-med-and-down">
			      <li><a href="#">sass</a></li>
			      <li><a href="#">sass <span class="new badge">4</span></a></li>
			      <li><a href="#">sass</a></li>
			    </ul>
			  </div>
			</nav>

			<div class="chip">
			    <img src="http://localhost/pruebas/application/img/libreria_logo.png" alt="Contact Person">
			    Juan Ramon Guzman
			 </div>

			<div class="chip">Tag<i class="material-icons">close</i></div>
			<div class="chip">Test1<i class="material-icons">close</i></div>
			<div class="chip">Test2<i class="material-icons">close</i></div>
			<div class="chip">test3<i class="material-icons">close</i></div>

        	

			<div class="col s12 m8 offset-m2 l6 offset-l3">
		        <div class="card-panel grey lighten-5 z-depth-1">
		          	<div class="row valign-wrapper">
			            <div class="col s2">
			              <img src="http://localhost/pruebas/application/img/libreria_logo.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
			            </div>
		            	<div class="col s10">
		              		<span class="black-text">
		                	This is a square image. Add the "circle" class to it to make it appear circular.
		              		</span>
		            	</div>
		            </div>
		        </div>
		    </div>

	    </div>
	    

	    <div class="row">
	    	<blockquote>
		    	La siguiente información es solo para poblar una tabla HTML
		    </blockquote>
			<table class='highlight centered responsive-table'>
		        <thead class='#4db6ac teal lighten-2'>
		          <tr>
		              <th data-field="id">Name</th>
		              <th data-field="name">Item Name</th>
		              <th data-field="price">Item Price</th>
		              <th data-field="price">Location</th>
		              <th data-field="price">Deptartmen</th>
		              <th data-field="price">Quantity</th>
		          </tr>
		        </thead>

		        <tbody class='#b2dfdb teal lighten-4'>
		          <tr>
		            <td>Alvin</td>
		            <td>Sirloin beef</td>
		            <td>$0.87</td>
		            <td>1 stage</td>
		            <td>Beef</td>
		            <td>1500</td>
		          </tr>
		          <tr>
		            <td>Alan</td>
		            <td>Bananas</td>
		            <td>$3.76</td>
		            <td>2 stage</td>
		            <td>Vegetables</td>
		            <td>1000</td>
		          </tr>
		          <tr>
		            <td>Jonathan</td>
		            <td>Apple juice</td>
		            <td>$7.00</td>
		            <td>3 stage</td>
		            <td>Juicy</td>
		            <td>500</td>
		          </tr>
		        </tbody>
		    </table>

	    </div>

	    <div class='row'>
	    	<ul id="dropdown2" class="dropdown-content">
			    <li><a href="#!">one<span class="badge">1</span></a></li>
			    <li><a href="#!">two<span class="new badge">1</span></a></li>
			    <li><a href="#!">three</a></li>
			</ul>
			<a class="btn dropdown-button" href="#!" data-activates="dropdown2">Dropdown<i class="mdi-navigation-arrow-drop-down right"></i></a>
			            

	    </div>

	    <div class='row'>

			<a class="waves-effect waves-light btn">button</a>
			<a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>button</a>
			<a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a>
			       
	    </div>

    </div>

	


	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="http://localhost/pruebas/application/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="http://localhost/pruebas/application/js/materialize.min.js"></script>
</body>
</html>