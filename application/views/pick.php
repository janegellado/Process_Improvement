<!-- pick -->

 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="row"></div>
            </div>

            <div class="clearfix"></div>
           
      
      <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>My Profile</h2>
      
                    <div class="clearfix"></div>
                  
                  <div class="x_content">
          <div>&nbsp;</div>
          
<div>
  <div class="" style="width: 32%; margin-left: 3%;">
<img src="<?php echo base_url('assets/css/build/images/sampleuser.png'); ?>" alt="..." class="img-circle profile_img" style=" border: 3px solid gray;">
 <div class="form-group" style="position:; margin-top: 5%; margin-left: 18%;">
  <?php echo form_open('process_improvement/profilepic'); ?> 
          <form>
                <input type="file" name="image" style="margin-left: 6%;" enctype="multipart/form-data">
                <div>&nbsp;</div>

                 <button class="btn btn-primary" type="button" style="margin-left: 12%;" name="upload"><a href="<?php echo base_url('process_improvement/')?>" type="submit" style="color: white;">UPLOAD IMAGE</a></button>
          </form>                  
        
           </div>

 </div>

 <table  class="table table-striped table-bordered" style="width: 60%; align: center; margin-left: 37%; margin-top: -30%;">
          <?php foreach ($info as $f){
                $id=$f['id'];
                $fname=$f['fname'];
                $lname=$f['lname'];
                $mname=$f['mname'];
                $pg=$f['pg'];
                $bday=$f['bday'];
                $dh=$f['dh'];
                $pos=$f['pos'];
                $email=$f['email'];
                $pd=$f['pd'];
                $cs=$f['cs'];
                $cp=$f['cp'];
          }?>

          <thead > 
           <tr id="trHead">
            <th style="width: 35%;" scope="row">NAME</th>
            <td name="name" id="name"><?php echo("$lname, $fname $mname")?> </td> 
          </tr>
        
          <tr id="trHead">
            <th scope="row">EMPLOYEE ID NO </th>
            <td name="employeeID" id="employeeID"><?php echo($id)?> </td> 
          </tr>
          
          <tr id="trHead">
            <th >BIRTHDAY</th>
            <td name="birth" id="birth"><?php echo($bday)?></td> 
        
          </tr>
          
          <tr id="trHead">
            <th >DATE HIRED</th>
            <td name="dh" id="dh"><?php echo($dh)?> </td> 
          </tr>
          
          <tr id="trHead">
            <th >POSITION</th>
            <td name="pos" id="pos"><?php echo($pos)?> </td>
          </tr>
          
          <tr id="trHead">
            <th >DATE OF LAST PROMOTION</th>
            <td name="prom" id="prom"><?php echo($pd)?></td>
          </tr>
          
          <tr id="trHead">
            <th >CIVIL STATUS</th>
            <td name="cs" id="cs"><?php echo($cs)?> </td>
          </tr>
          
          <tr id="trHead">
            <th >PG LEVEL</th>
            <td name="pl" id="pl"> <?php echo($pg)?></td>
          </tr>
        
          <tr id="trHead">
            <th >CELLPHONE NUMBER</th>
            <td name="cp" id="cp"><?php echo($cp)?> </td>
          </tr>
          
          <tr id="trHead">
            <th >EMAIL ADDRESS</th>
            <td name="ea" id="ea"><?php echo($email)?> </td>
          </tr>
          
        </thead>
      <tbody>
        
      </tbody>
    </table>
      
       </div>

       </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <!-- /page content -->

        

</body>
</html>
