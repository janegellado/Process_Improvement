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
                    <h2>HOME</h2>
      
                    <div class="clearfix"></div>
                  
                  <div class="x_content">
          <div>&nbsp;</div>
          

   <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-8 col-xs-12">
                <div class="tile-stats" style="background-color: #FFCC33; color: black;">
                  <div class="icon" style="color: black;"><i class="fa fa-briefcase"></i></div>
                  <div class="count" >179</div>
                  <h3 style="color: black;">Leaves Left</h3>
                  <p>Number of leaves left.</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background-color: #CC3333; color: white;">
                  <div class="icon" style="color: white;"><i class="fa fa-clock-o"></i></div>
                  <div class="count">179</div>
                  <h3 style="color: white;">Overtime Hours</h3>
                  <p style="color: white;">Total number of OT Hours accummulated.</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-8 col-xs-12">
                <div class="tile-stats" style="background-color: #FF9966; color: black;">
                  <div class="icon" style="color: black;"><i class="fa fa-book"></i></div>
                  <div class="count">179</div>
                  <h3 style="color: black;">Properties Owned</h3>
                  <p>Number of properties owned.</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background-color:  #669933; color:white;">
                  <div class="icon" style="color: white;"><i class="fa fa-comments-o"></i></div>
                  <div class="count">             
                  <?php 
                  if($total!=null){
                  $x = null; 
                  foreach($total as $t){
                    $x++;
                  }
                  }else{
                    $x = 0;
                  }
                  echo $x;
                  ?></div>
                  <h3 style="color: white;">Trainings Attended</h3>
                  <p>Total number of trainings attended.</p>
                </div>
              </div>
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

