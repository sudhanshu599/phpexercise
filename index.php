<!DOCTYPE html>
    <head>
        <title>Data class in php</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
       <link rel = "stylesheet" href = "main.css">
    </head>
    <body>
        <div class="jumbotron text-center"><h1 style="color: white;">Restaurant Menu</h1></div>
       
    
          <div class="container">
            <select name="item restaurant-dropdown restaurant" class="custom-select custom-select-lg mb-3" id="restaurant">
              <option value="">Select Menu</option>
          </select>
          <br>

          <table id="table" class="table table-hover table-striped">
            <tr>
              <th>Name</th>
              <td id="menuname"></td>
            </tr>
            <tr>
              <th>ID</th>
              <td id="id"></td>
            </tr>
            <tr>
              <th>Short Name</th>
              <td id="sname"></td>
            </tr>
            <tr>
              <th>Description</th>
              <td id="descp"></td>
            </tr>
            <tr>
              <th>Price Small</th>
              <td id="psmall"></td>
            </tr>
            <tr>
              <th>Price Large</th>
              <td id="plarge"></td>
            </tr>
            <tr>
              <th>Small Portion Name</th>
              <td id="spname"></td>
            </tr>
            <tr>
              <th>Large Portion Name</th>
              <td id="lpname"></td>
            </tr>
          </table>
        
      
          </div>
        
       
        
        

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src = 'main.js'>
 
        
    </script>
        
    </body>
</html>