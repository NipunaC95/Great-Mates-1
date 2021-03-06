    <!doctype html>
    <html lang="en">

    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://code.highcharts.com/highcharts.src.js"></script>

      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

      <style>
    .card-body{
      background-color: #106466;
    }

    body{
      background-image: url("./../../assets/img/background4.jpg");
    }

    a:hover{
        text-decoration: none;
    }
    
    .card-body{
      color: 	#0b2829;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
      .btnAdd{
    background-color: 	#106466;
  }
  .btnClear{
    background-color: 	#106466;
  }
      </style>


    </head>

    <body>
      <link rel="stylesheet" href="<?php echo base_url('assets/css/newFarm.css'); ?>">
      <div class="section offset-4 offset-sm-3 offset-md-3">
        <p>&nbsp;</p>
        <h1>Breeding Records</h1>
        <h4 class="card-subtitle mb-2 text-muted">Artificial breeding records</h4>
        <hr>
        <?php
        if (!empty($message)) {
          if ($message == "succsess") {
            echo " <div class='container'><div class='row'> <div class='col-sm-4' style='margin:auto;margin-top:10px!important'><div class='alert alert-success' role='alert'> Record insesrted succesfully ! </div></div></div> </div>  ";
          } else if ($message == "error") {
            echo " <div class='container'><div class='row'> <div class='col-sm-4' style='margin:auto;margin-top:10px!important'><div class='alert alert-danger' role='alert'> Record insesrtion is not successfull ! </div></div> </div></div>  ";
          }
        }

        ?>
        <div class="section" style="margin-top:10px!important;">
          <div class="container mt-5" style="width:800px">
          <form action="<?= base_url('index.php/breedingController/write'); ?>" method="post">
            <div class="form-group">
              <label for="Farm_reg_no">Farm Registration Number</label>
              <input type="text" width="5" name="farm_reg_no" class="form-control" id="farm_reg_no" placeholder="required">
              <!-- <span class="text-danger"><?php echo form_error('faarm_reg_no'); ?></span> -->
            </div>
            <div class="checkBoxContainer">
              <label class="stockType">Live Stock type :</label>
              <div class="form-group">
                <input type="checkbox" name="cattle" class="form-control checkBoxes"><label class="textSpacing">Cattle</label> <br>
                <input type="checkbox" name="goat" class="form-control checkBoxes"><label class="textSpacing">Goat</label> <br>
              </div>
            </div>
            <div class="form-group">
              <label for="Year">Year</label>
              <input class="date-own form-control" name="year" type="text" placeholder="required">
              <!-- <span class="text-danger"><?php echo form_error('year'); ?></span> -->
              <script type="text/javascript">
                $('.date-own').datepicker({
                  minViewMode: 2,
                  format: 'yyyy'
                });
              </script>
            </div>


            <div class="form-group">
              <label for="sel1">Select month:</label>
              <select class="form-control" id="sel1" name="month">
                <option value="" selected disabled hidden>required</option>
                <option>January </option>
                <option>February </option>
                <option>March </option>
                <option>April </option>
                <option>May </option>
                <option>June </option>
                <option>July </option>
                <option>August </option>
                <option>September </option>
                <option>October </option>
                <option>November </option>
                <option>December </option>
              </select>

              <!-- <span class="text-danger"><?php echo form_error('month'); ?></span> -->
            </div>


            <div class="form-group">
              <label for="sel1">Select date:</label>
              <select class="form-control" id="sel1" name="date">
                <option value="" selected disabled hidden>required</option>
                <?php
                for ($x = 1; $x <= 31; $x++) {
                  echo "<option> $x </option> ";
                }
                ?>
              </select>

              <!-- <span class="text-danger"><?php echo form_error('month'); ?></span> -->
            </div>
            <div class="form-group">
              <label for="Semen_code">Semen Code</label>
              <input type="number" name="code" class="form-control" id="semen_code" placeholder="required">
              <!-- <span class="text-danger"><?php echo form_error('semen_code'); ?></span> -->
            </div>

            <div class="section offset-1 mt-5">
              <button type="submit" name="insert" class="btn btn-primary btnAdd" name="save">Add</button>
              <div class="section offset-2">
                <div class="clearButton"> <button type="reset" name="insert" class="btn btn-primary btnClear" name="clear">Clear</button> </div>
              </div>
              
            </div>
            
            <?php
            echo $this->session->flashdata("error");
            ?>
        </div>
        <input type="hidden" name="typeOf" value="cattle">

        </form>

        </div>
      </div>
      <div class="mt-5"></div>


      </div>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    </body>

    </html>