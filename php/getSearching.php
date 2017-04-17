<?php

include('db_function.php');

    if(session_id()=='' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}

    $str = strtolower($_REQUEST['q']);

	$result = getAllContacts($_SESSION['username']);
	        			      			      
	    if($result){ 
            if(count($result)>=1){
            	$flag=false;

	        	foreach ($result as $row) {
                        $name = strtolower($row['Name']);
  						 $pos=0;

	        			if(empty($str) || ($pos=strstr($name, $str))!=false){
	        				$flag=true;			    	
			         		printf('
			        		 <tr>
			        			<td>
			        			    %s
			        			</td>
			        			<td>
			        			     %s
			        			</td>
			        			<td>
			        			    %s
			        			</td>
			        			<td>
			        			    <div class="btn-group" >
			        			      	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			        			      		<span class="glyphicon glyphicon-cog"></span>
			        			      		<span class="sr-only">Toggle Dropdown</span>
			        			      	</button>
			        			      	<ul class="dropdown-menu">
			        			      		<li>
				        			      		<button class="btn btn-default btn-block" data-toggle="modal" data-target="#%s"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
				        			      		</button>
			        			      		</li>
			        			      		<li role="separator" class="divider"></li>
			        			      		<li><a class="delete_anchor" href=""><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Delete</a></li>
												<li role="separator" class="divider"></li>
			        			      		<li><a href="details.php?id=%s">
			        			      			<span aria-hidden="true">
													<i class="fa fa-info" aria-hidden="true"></i>
													  Details
			        			      			</span></a>
			        			      		</li>
			        			      	</ul>
			        			    </div>
			        			</td>
			        		</tr>

			        			      	  <!-- Modal -->
										  <div class="modal fade" id="%s" role="dialog">
										    <div class="modal-dialog">
										    
										      <!-- Modal content-->
										      <div class="modal-content">
										        <div class="modal-header">
										         
										          <button type="button" class="close" data-dismiss="modal">&times;</button>
										          <h4 class="modal-title">Edit Contact</h4>
										        </div>
										        <div class="modal-body">
										           <form method="post" action="">
                                                     <input type="hidden" name="blog_id" value="">

										           	<input class="form-control" name="name" value="%s">
										           	
										           	<input class="form-control" name="email" value="%s">
										           	<input class="form-control" name="phone" value="%s">

										           	<button type="submit" class="btn btn-primary">Done</button>  
										           	 
										           </form>
										           
										        </div>
										        <div class="modal-footer"> 
										          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										        </div>
										      </div>
										      
										    </div>
										  </div>



	   					             <div class="clearfix"></div>', $row['Name'], $row['Email'], $row['P_Number'], $row['CID'], $row['CID'], $row['CID'], $row['Name'], $row['Email'], $row['P_Number']);

			             }

			             
			         }

			         if(!$flag){
			             	print("No match found !!");
			             }
			        }

			    else{
			        print("No Contacts !!!");
			    }
	        }
	        else{
	        	print('Query Problem !!!');
	        }
	        			      			 



?>