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

		 header, main, footer {
      padding-left: 240px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
    }
	</style>
</head>
<body>
	<div class="container">



		



        <div class="row">
        	


	        <ul id="slide-out" class="side-nav fixed">
		      <li><a href="#!">First Sidebar Link - TEST</a></li>
		      <li><a href="#!">Second Sidebar Link - TEST</a></li>
		      <li class="no-padding">
		        <ul class="collapsible collapsible-accordion">
		          <li>
		            <a class="collapsible-header">Dropdown<i class="mdi-navigation-arrow-drop-down"></i></a>
		            <div class="collapsible-body">
		              <ul>
		                <li><a href="#!">First</a></li>
		                <li><a href="#!">Second</a></li>
		                <li><a href="#!">Third</a></li>
		                <li><a href="#!">Fourth</a></li>
                                <li><a href="#!">First</a></li>
		                <li><a href="#!">Second</a></li>
		                <li><a href="#!">Third</a></li>
		                <li><a href="#!">Fourth</a></li>
		              </ul>
		            </div>
		          </li>
		        </ul>
		      </li>
		    </ul>
		    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
		          





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

			<a class="waves-effect waves-light btn">button</a>
			<a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>button</a>
			<a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a>
			       
	    </div>


	    <div class="row">
		
			 <!-- Modal Trigger -->
			  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal FOOTER</a>

			  <!-- Modal Structure -->
			  <div id="modal1" class="modal bottom-sheet">
			    <div class="modal-content">
			      <h4>Modal Header</h4>
			      <p>A bunch of text</p>
			    </div>
			    <div class="modal-footer">
			      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			    </div>
			  </div>





			  <a class="modal-trigger waves-effect waves-light btn" href="#modal2">Modal</a>

			  <!-- Modal Structure -->
			  <div id="modal2" class="modal modal-fixed-footer">
			    <div class="modal-content">
			      <h4>Modal Header</h4>
			      <p>A bunch of text</p>
			    </div>
			    <div class="modal-footer">
			      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
			    </div>
			  </div>


		</div>


    </div>

	


	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="http://localhost/pruebas/application/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="http://localhost/pruebas/application/js/materialize.min.js"></script>
    <script type="text/javascript">

    	 
    	 $(document).ready(function()
    	 {
    		// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    		//$('.modal-trigger').leanModal();
    		$('.modal-trigger').leanModal({
    			//Opciones
    			dismissible: true, // Modal can be dismissed by clicking outside of the modal
			      opacity: .5, // Opacity of modal background
			      in_duration: 1000, // Transition in duration
			      out_duration: 500, // Transition out duration
			      ready: function() { alert('Ready'); }, // Callback for Modal open
			      complete: function() { alert('Closed'); } // Callback for Modal close
    		});//<-- trigger para abrir todos los modales dependiendo su ID


    		$('.button-collapse').sideNav({
		      menuWidth: 300, // Default is 240
		      edge: 'right', // Choose the horizontal origin
		      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
		    }
  		);



  		});

    </script>
</body>
</html>