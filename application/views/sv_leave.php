<?php 
// foreach($leave as $l){
// echo $l['date_of_filing']; 
// }

?>


<div class="right_col" role="main">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-user"></i> SUPERVISOR </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Leave</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Overtime</a>
                        </li>
                      </ul>

   <!--contents for LEAVE-->
   <div id="myTabContent" class="tab-content">
   <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
    <div class="">
                    <div class="x_title">
                      <small>LEAVE DETAILS</small>
                    <div class="clearfix"></div>
                     </div>
                    <table id="" class="">
                      <tbody>
                          
                          <tr id="trHead">
                            <th >Employee ID:</th>                           
                            <td><?php if(isset($leave[0]['employeeID'])) { echo $leave[0]['employeeID']; }?></td> 
                          </tr> 

                          <tr id="trHead">
                            <th >Employee Name:</th>                           
                            <td><?php if(isset($leave[0]['employeeID'])) { echo $leave[0]['lname'].', '.$leave[0]['fname']; }?></td> 
                          </tr> 
                          
                          <tr id="trHead">
                            <th >Date Filed:</th>                           
                            <td><?php if(isset($leave[0]['date_of_filing'])) { echo $leave[0]['date_of_filing']; }?></td> 
                          </tr> 

                          <tr id="trHead">
                            <th >Where will leave be spent:></th>
                            <td><?php if(isset($leave[0]['type_info'])) { echo $leave[0]['type_info']; }?></td> 
                          </tr>

                          <tr id="trHead">
                            <th >Type of Leave:</th>
                            <td><?php if(isset($leave[0]['type'])) { echo $leave[0]['type']; }?></td>
                          </tr>  

                          <tr id="trHead">
                            <th >Remarks:</th>
                            <!--<td>Local</td>--> 
                          </tr> 
                          
                         

                          <tr id="trHead"><th >INCLUSIVE DATES </th></tr> 
                          <tr id="trHead">
                            <th >FROM: </th>
                            <td><?php if(isset($leave[0]['inc_from'])) { echo $leave[0]['inc_from']; }?></td>
                          </tr> 
                          <tr id="trHead">
                            <th >TO: </th>
                            <td><?php if(isset($leave[0]['inc_to'])) { echo $leave[0]['inc_to']; }?></td>                            
                          </tr>   

                          <tr id="trHead"><th >COMMUTATION </th></tr> 
                            
                            <tr id="trHead">
                            <th >No. of working days applied for:</th>
                            <td><?php if(isset($leave[0]['no_of_days'])) { echo $leave[0]['no_of_days']; }?></td>                                                        
                          </tr>
                            
              
                          <tr id="trHead"><th >RECOMMENDATIONS </th></tr> 
                          <tr id="trHead">
                           <th><button class="btn btn-success btn-xs leaveapprove" id="leaveapprove"><i class="fa fa-eye"></i> APPROVE </button>
                           </th><th><button class="btn btn-success btn-xs leavedisapprove" id="leavedisapprove"><i class="fa fa-eye"></i> DISAPPROVE </button></th>
                            <!-- <th><a class="btn btn-success btn-xs" id="leaveapprove"><i class="fa fa-eye"></i> APPROVE </a></th> -->
                           <!-- <th><a class="btn btn-success btn-xs" id="leavedisapprove"><i class="fa fa-eye"></i> DISAPPROVE </a></th> -->
                           <!-- <th ><a href="" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> APPROVE </a></th>
                           <th ><a href="" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> DISAPPROVE </a></th> -->
                          </tr>   
                      </tbody>
                     </table>
</div>
                <div>
                    <div class="x_title">
                        <small>NEW APPLICATION</small>
                    <div class="clearfix"></div>
                     </div>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
  
                          <tr id="trHead">
                            <th >Date Filed</th>          
                            <th >Employee ID</th>
                            <th >Employee Name</th>
                            <th >Type of Leave</th>
                            <th >No. of Days</th>
                            <th colspan="2">Inclusive Dates</th>
                            <th >Action</th>
                          </tr>
                      </thead>
                       <tbody>
          
                         <!--<tr>
                          <td>11/15/2018</td>
                          <td>15-037-044</td>
                          <td>Franchesca Marie Cortez</td>
                          <td>Vacation Leave</td>
                          <td>7</td>
                          <td>08/10/2018</td>
                          <td>08/17/2018</td>
                          <td><a href="" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> View </a></td>
                        </tr>-->
                      </tbody>
                     </table>
            </div>
                     <div class="x_title">
                        <small> LEAVE APPLICATION HISTORY</small>
                    <div class="clearfix"></div>
                     </div>

                      <div class="col-md-8" style="padding: 10px; text-align: center;">
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Filed</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" placeholder="Default Input" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>                     
  </form>
  </div>

                  <div style="margin-top: 50px;">
                    <a href="" class="btn btn-success btn-xs"><i class="fa fa-search"></i> Search</a>
                    <a href="" class="btn btn-success btn-xs"><i class="fa fa-print"></i> Print</a>
                  </div>

                        <table id="datatable" class="table table-striped table-bordered">
                      <thead>
  
                          <tr id="trHead">
                            <th >DATE FILED</th>          
                            <th >EMP ID</th>
                            <th >EMPLOYEE NAME</th>
                            <th >TYPE OF LEAVE</th>
                            <th >NO. OF DAYS</th>
                            <th colspan="2">INCLUSIVE DATES</th>
                            <th >STATUS</th>
                          </tr>
                      </thead>
                       <tbody>
          
                        <!-- <tr>
                          <td>11/15/2018</td>
                          <td>15-037-044</td>
                          <td>Franchesca Marie Cortez</td>
                          <td>Vacation Leave</td>
                          <td>7</td>
                          <td>08/10/2018</td>
                          <td>08/17/2018</td>
                          <td><a href=""> APPROVED </a></td>
                        </tr>-->
                      </tbody>
                     </table>

                  </div>
              <!--end of first tab-->



        <!--contents for OVERTIME-->
        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                    <div class="x_title">
                    <small> NEW APPLICATION</small>
                    <div class="clearfix"></div>
                    </div>

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
  
                           <tr id="trHead">
                            <th >Date Filed</th>          
                            <th >Employee ID</th>
                            <th >Employee Name</th>          
                            <th >Action</th>
                          </tr>
                        </thead>
                        <tbody>                         
                         <td><?php if(isset($ot[0]['date_of_filing'])) { echo $ot[0]['date_of_filing']; }?></td>
                          <td><?php if(isset($ot[0]['employeeID'])) { echo $ot[0]['employeeID']; }?></td>
                          <td><?php if(isset($ot[0]['employeeID'])) { echo $ot[0]['lname'].', '.$ot[0]['fname']; }?></td>
                         <td><a href="" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> VIEW </a></td>
                       </tbody>
        
                     </table>

                     <table id="datatable" class="table table-striped table-bordered">
                      <thead>
  
                          <tr id="trHead">
                            <th rowspan="3">Date of Filing</th>          
                            <th rowspan="3">Authorized OT Time</th>
                            <th colspan="2">Actual OT Time</th>
                            <th colspan="4">OT Rate</th>
                            <th rowspan="3">Tasks to be Accomplished /<br>Actual Accomplishments<br>(Please attach additional sheet of necessary)</th>
                          </tr>

                          <tr id="trHead">
                            <th rowspan="2">Start</th>          
                            <th rowspan="2">Finish</th>
                            <th colspan="2">1.25</th>
                            <th colspan="2">1.50</th>
                          </tr>

                           <tr id="trHead">
                            <th >Hour</th>          
                            <th >Minute</th>
                            <th >Hour</th>          
                            <th >Minute</th>
                          </tr>


                      </thead>


                       <tbody>
                        <tr>
                          <td><?php if(isset($ot[0]['date_of_filing'])) { echo $ot[0]['date_of_filing']; }?></td>
                          <td><?php if(isset($ot[0]['auto_OT'])) { echo $ot[0]['auto_OT']; }?></td>
                          <td><?php if(isset($ot[0]['auto_OT'])) { echo $ot[0]['auto_OT']; }?></td>
                          <td><?php if(isset($ot[0]['auto_OT'])) { echo $ot[0]['auto_OT']; }?></td>
                          <td><?php if(isset($ot[0]['task'])) { echo $ot[0]['task']; }?></td>
                          
                          <!-- <td>Vacation Leave</td>
                          <td>7</td>
                          <td>08/10/2018</td>
                          <td>08/17/2018</td>
                          <td><a href="" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> View </a></td> -->
                        </tr>
                        <tr>
                          <td><?php if(isset($ot[0]['aot_from'])) { echo $ot[0]['aot_from']; }?></td>
                          <td><?php if(isset($ot[0]['aot_to'])) { echo $ot[0]['aot_to']; }?></td>
                          <td></td>
                          <td></td>
                          
                        </tr>
                        <tr>
                          <td><?php if(isset($ot[0]['hours_weekends'])) { echo $ot[0]['hours_weekends']; }?></td>
                          <td><?php if(isset($ot[0]['minutes_weekends'])) { echo $ot[0]['minutes_weekends']; }?></td>
                          <td><?php if(isset($ot[0]['hours_weekends'])) { echo $ot[0]['hours_weekends']; }?></td>
                          <td><?php if(isset($ot[0]['minutes_weekends'])) { echo $ot[0]['minutes_weekends']; }?></td>
                          
                        </tr>
                         <!--<tr>
                          <td>11/15/2018</td>
                          <td>15-037-044</td>
                          <td>Franchesca Marie Cortez</td>
                          <td>Vacation Leave</td>
                          <td>7</td>
                          <td>00</td>
                          <td>00</td>
                          <td>00</td>
                          <td>Sample Tasks</td>
                        </tr>-->
                      </tbody>
                      <tfoot>
                        <tr id="trHead">
                          <th colspan="4" style="text-align: right;">TOTAL</th>
                       <!--    <th > </th>
                          <th > </th>
                          <th > </th>
                          <th > </th> -->
                          <th colspan="1"></th><!--space only-->
                        </tr>
                      </tfoot>
                     </table>

              <div style="float: left;">
              <a href="" class="btn btn-success btn-xs"><i class="fa fa-check"></i> APPROVED </a>
               <a href="" class="btn btn-success btn-xs"><i class="fa fa-times"></i> DISAPPROVED </a>

            </div>
              <div class="col-sm-6">
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">REMARKS: </label>
                        <div class="col-md-9 col-sm-12 col-xs-9">
                          <input type="text" class="form-control" placeholder="Default Input" >
                        </div>
                      </div>

              </form>
              </div>

                  <div class="x_title" style="margin-top: 80px;">
                    <small> OT APPLICATION HISTORY</small>
                    <div class="clearfix"></div>
                    </div>
  
 <form id="demo-form2" data-parsley-validate class="form-horizontal form-inline form-label-left col-xs-12">

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">DATE FILED: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" placeholder="Default Input" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">EMPLOYEE NUMBER: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input" >
                        </div>
                      </div>

              </form>


                    <div style="float: right; margin-top: -36px; margin-right: 25%;"> 
                    <a href="" class="btn btn-success btn-xs"><i class="fa fa-search"></i> Search</a>
                    <a href="" class="btn btn-success btn-xs"><i class="fa fa-print"></i> Print</a>
                  </div>

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
  
                           <tr id="trHead">
                            <th >Date Filed</th>          
                            <th >Employee ID</th>
                            <th >Employee Name</th>          
                            <th >STATUS</th>
                            <th >ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td><a href="" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> VIEW </a></td>
                       </tbody>
        
                     </table>

                    

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
  
                          <tr id="trHead">
                            <th rowspan="3">Date of Filing</th>          
                            <th rowspan="3">Authorized OT Time</th>
                            <th colspan="2">Actual OT Time</th>
                            <th colspan="4">OT Rate</th>
                            <th rowspan="3">Tasks to be Accomplished /<br>Actual Accomplishments<br>(Please attach additional sheet of necessary)</th>
                          </tr>

                          <tr id="trHead">
                            <th rowspan="2">Start</th>          
                            <th rowspan="2">Finish</th>
                            <th colspan="2">1.25</th>
                            <th colspan="2">1.50</th>
                          </tr>

                           <tr id="trHead">
                            <th >Hour</th>          
                            <th >Minute</th>
                            <th >Hour</th>          
                            <th >Minute</th>
                          </tr>


                      </thead>


                       <tbody>
          
                        <!-- <tr>
                          <td>11/15/2018</td>
                          <td>15-037-044</td>
                          <td>Franchesca Marie Cortez</td>
                          <td>Vacation Leave</td>
                          <td>7</td>
                          <td>00</td>
                          <td>00</td>
                          <td>00</td>
                          <td>Sample Tasks</td>
                        </tr>-->
                      </tbody>
                      <tfoot>
                        <tr id="trHead">
                          <th colspan="4" style="text-align: right;">TOTAL</th>
                          <th > </th>
                          <th > </th>
                          <th > </th>
                          <th > </th>
                          <th colspan="1"><!--space only--></th>
                        </tr>
                      </tfoot>
                     </table>
        </div><!--end of tab-->
                        


                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
<script type="text/javascript">
  $(document).ready(function(){

    $(document).on('click', '.leavedisapprove', function(){
      var id = <?php echo $leave[0]["id"]; ?>;
        $.ajax({
          url: "<?php echo site_url('process_improvement/disapproveleave') ?>",
          type: "POST",
          data: {id:id},
          success: function(data){
            console.log(data);
            alert("Leave Disapproved!");
          }
        });    
    });    
    $(document).on('click', '.leaveapprove', function(){      
        var id = <?php echo $leave[0]["id"]; ?>;
        $.ajax({
          url: "<?php echo site_url('process_improvement/approveleave') ?>",
          type: "POST",
          data: {id:id},
          success: function(data){
            alert("Leave Approved!");
          }
        });
      
    });   
  });

</script>