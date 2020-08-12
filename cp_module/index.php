<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>CP ASSIST Module</title>

<script>
  function changeChapters(book){
      //alert('hi');
  //; alert('changing to book '+ book);

  document.getElementById('chapterSelect').value=book;

  }


</script>

<?php

   $chapterFile = new SimpleXMLElement(file_get_contents('https://nauticalcharts.noaa.gov/publications/coast-pilot/files/cp10.xml'));
   $numChapters = $chapterFile->NumChapters[0];
   
?>


  </head>
  <body>
  <div id="wrapper" style="margin:auto;">
  <div id="cpform" style = "width:50%; margin:auto; text-align:center;margin-top:20px;">
  <form>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Choose a Volume</label> 
    <div class="col-8">
      <select onchange="changeChapters(document.getElementById('bookselect').value)" id="bookselect" name="select" class="custom-select" >
        <option value="1">Coast Pilot 1</option>
        <option value="2">Coast Pilot 2</option>
        <option value="3">Coast Pilot 3</option>
        <option value="4">Coast Pilot 4</option>
        <option value="5">Coast Pilot 5</option>
        <option value="6">Coast Pilot 6</option>
        <option value="7">Coast Pilot 7</option>
        <option value="8">Coast Pilot 8</option>
        <option value="9">Coast Pilot 9</option>
        <option value="10">Coast Pilot 10</option>
      </select>
    </div>
  </div> 
  
</form>

<form>
  
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Select</label> 
    <div class="col-8">
      <select id="chapterSelect" name="select" class="custom-select">
        <?php 
          for($i = 0; $i< $numChapters; $i++){
            echo '<option value="'.$i.'">'.$chapterFile->Chapter[$i]->Title. " - ".$chapterFile->Chapter[$i]->Desc;
            echo '</option>';
          }
        ?>
        
        
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>


</div>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>