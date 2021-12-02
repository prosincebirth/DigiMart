<?php include('head.php'); ?>
<?php if($_SESSION['user_status']!=1){header("Location: index.php"); exit();} ?>
<?php include('header.php'); ?>

<div class="modal fade" id="delete_steam_link_new" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header"> 
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>Unbind Game Account</h4></center>
		</div>
		<div class="modal-body">							
				<div class="fld_input"><input type="hidden" name="steam_id_delete" id="steam_id_delete" class="form-control"></div>								
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="delete_steam_link_new">Confirm</button>					
			</div>									
		</div>
		</div>
	</div></div>
    
<div class="modal fade" id="unbind_steam_account" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header"> 
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>Unbind Game Account</h4></center>
		</div>
		<div class="modal-body">							
				<div class="fld_input"><input type="hidden" name="steam_id_64" id="steam_id_64" class="form-control"></div>								
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="unbind_steam_account">Confirm</button>					
			</div>									
		</div>
		</div>
	</div></div>
    <div class="modal fade" id="delete_steam_trade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header"> 
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>Unbind Steam Trade Link</h4></center>
		</div>
		<div class="modal-body">							
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="delete_steam_trade">Confirm</button>					
			</div>									
		</div>
		</div>
	</div></div>


<!-- <link rel="preload stylesheet" href="assets/css/item-card.css" as="style" crossorigin>
<link rel="preload stylesheet" href="assets/css/item-grid.css" as="style" crossorigin> -->
<link rel="preload stylesheet" href="assets/css/user-account.css" as="style" crossorigin>

<div class="modal fade" id="kyc_services_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title"><center>KYC Verification</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <div class="form-inline">
                <input type="hidden" class="form-control"  name="user_session_kyc" placeholder="Game Name" id="user_session_kyc" value="<?php echo $_SESSION['user_session'];?>" class="form-control">
                <label style="margin:5px; width:30%; float:left;">First name</label> 
                <input style="width:60%; float:center; margin:5px;" type="text" class="form-control" name="firstname_kyc" placeholder="e.g. Jason" id="firstname_kyc" class="form-control">
            </div>
            <div class="form-inline">
                <label style="margin:5px; width:30%; float:left;">Middle name</label> 
                <input style="width:60%; float:center; margin:5px;" type="text" class="form-control" name="middlename_kyc" placeholder="e.g. Optina" id="middlename_kyc" class="form-control">
            </div>
            <div class="form-inline">
                <label style="margin:5px; width:30%; float:left;">Last name</label> 
                <input style="width:60%; float:center; margin:5px;" type="text" class="form-control" name="lastname_kyc" placeholder="e.g. Baguio" id="lastname_kyc" class="form-control">
            </div>
            <div class="form-inline">
                <label style="margin:5px; width:30%; float:left;">ID number</label>
                <input style="width:60%; float:center; margin:5px;"type="text" name="idnumber_kyc" placeholder="e.g. 15401441" id="idnumber_kyc" class="form-control">
            </div>
            <div class="form-inline">
                <label style="margin:5px; width:30%; float:left;">Address</label>
                <input style="width:60%; float:center; margin:5px;"type="text" name="address_kyc" placeholder="e.g. Summerland Cebu City" id="address_kyc" class="form-control">
            </div>
            <div class="form-inline">
                <label style="margin:5px; width:30%; float:left;">Identification</label>
                <select style="width:60%; float:center; margin:5px;" name="id_kyc" id="id_kyc" class="form-control">
                <option value="" disabled selected>Type of ID</option>	
                <option value="1">Driver's License</option>
                <option value="2">Student ID</option>
                <option value="3">Passport</option>
                <option value="4">National ID</option></select>   
           </div>
            <div class="form-inline">
                <label style="margin:5px; width:30%; float:left;"> </label>
                <input style="width:60%; float:center; margin:5px;" type="file" name="id_proof_kyc" placeholder="Service Description" id="id_proof_kyc" class="form-control">
           </div>
           
        </div>
        <div class="modal-footer">
            <button type="button" value="kyc_services_modal" class="btn btn-primary">Confirm</button>
        </div>
    </div>
  </div></div>

  <main>
    <section class="market_section">
        <div class="container">
            <div class="layout">
                <div class="column col1">
                    <div class="panel user__panel">

                        <div class="user-image">
                            <div class="image">
                                <img src="" input type="file" name="item_image"alt="">
                            </div>
                            <div class="name">
                                <h2><?php echo $_SESSION['user_username']; ?></h2>
                            </div>
                        </div>

                        <div class="menu">
                            <ul>
                                <li onclick="location.href='user_wallet.php'"><span ><i class="fas fa-wallet"></i>My wallet</span></li>
                                <li onclick="location.href='user_account.php'" class="active"><span  ><i class="fas fa-cog"></i>Account</span></li>
                                <li onclick="location.href='user_messages.php'"><span ><i class="fas fa-envelope"></i>Messages</span></li>
                                <!-- <li href="javascript:void(0);"><span ><i class="fas fa-comment-dots"></i>Support</span></li> -->
                            </ul>
                        </div>
                    </div>
                </div>

                
                <div class="column col2"> 
                    <div class="main">
                        <div class="user-setting">
                            <!-- <h3>Basic Settings</h3>
                            <table class="list-tab" >
                                <tbody>
                                    <tr>
                                        <td class="t-left">Avatar</td>
                                        <td class="t-left"> <img src="" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td class="t-left" width="120">Username</td>
                                        <td class="t-left"><span class="name-tab" style="display: inline; color:var(--primary-color);font-weight:bold;"><?php echo $_SESSION['user_username'];?></span></td>
                                        
                                        <td class="t-right"><a href="#change_username" class="btn-change">Change</a></td>    
                                    </tr>
                                </tbody>
                            </table> -->

                            <h3>Security settings</h3>
                            <table class=list-tab>
                                <tbody>
                                    
                                    <tr>
                                        <td class="t-left" width="120">KYC Verification</td>
                                        <?php $user_kyc_status = user_kyc_status($_SESSION['user_session']);foreach($user_kyc_status as $kyc_request){ 
                                        if($kyc_request['user_kyc']==0){ 
                                            echo '<td class="t-left"><span style="color:red"><i class="fas fa-times-circle"></i> Not verfied</span></td>'; 
                                            echo '<td class="t=left"></td>';
                                            echo '<td class="t-right"><a data-toggle="modal" data-target="#kyc_services_modal" class="i-btn --i-btn-small"> Start Verification</a></td>';
                                        } 
                                        else if($kyc_request['user_kyc']==1){ echo '<td class="t-left"><span style="color:orange"><i class="fas fa-times-circle"></i> Pending </span></td>'; } 
                                        else if($kyc_request['user_kyc']==2){ echo '<td class="t-left"><span style="color:green"><b><i class="fas fa-check-circle"></i> Verified</span></td>'; } 
                                        else if($kyc_request['user_kyc']==3){ 
                                            echo '<td class="t-left"><span style="color:red"><i class="fas fa-times-circle"></i> Denied - Reason : '.$kyc_request['user_kyc_message'].' </span></td>'; 
                                            echo '<td class="t=left"></td>';
                                            echo '<td class="t-right"><a data-toggle="modal" data-target="#kyc_services_modal" class="i-btn --i-btn-small"> Start Verification</a></td>';
                                            } 
                                        }
                                        ?>
                                        
                                    </tr>
                                    <tr>
                                        <td class="t-left" width="120">Password settings</td>
                                        <td class="t-left"><label for="password">**********</label></td>
                                        <td class="t-left"></td>
                                        <td class="t-right"><a href="#change_user_password"  data-toggle="modal" class="i-btn --i-btn-small">Change password</a></td>
                                    </tr>
                                    <tr class="steam-bind"> 
                                        <td class="t-left" width="120">Main Steam Profile Link</td>
                                        <?php $user_kyc_status = user_kyc_status($_SESSION['user_session']);foreach($user_kyc_status as $kyc_request1){
                                                if($kyc_request1['user_steam_id']==''){?>
                                                        <td class="t-left"><input type="text" placeholder="Add main game account" name="main_steam_profile_link" id="main_steam_profile_link" style="margin-right:0px;color:black"><span style="color:black"></span></td>
                                                        <td class="t-left" ><a href="https://steamcommunity.com/my/profiles" target="_blank" style="margin-left:10px;"> Click to get link</a></td>
                                                        <td class="t-right"><button class="btn" type="button" value="main_steam_profile">Bind Game Account</button></td>                                                        
                                                    <?php } else { ?>
                                                        <td class="t-left"><a href="<?php echo $kyc_request1['user_steam_id'];?>" target="_blank"><span style="color:black"><?php echo $kyc_request1['user_steam_id'];?> </input></span></a></td>
                                                        <td class="t-left" ><a href="https://steamcommunity.com/my/profiles" target="_blank" style="margin-left:10px;"> Click to get link</a></td>
                                                        <td class="t-right"> <button class="btn" type="button" class="btn btn-success" data-toggle="modal" data-target="#unbind_steam_account"
                                                        data-steam_id_64="<?php echo $kyc_request1['user_steam_id'];?>" >Unbind Game Account</button></td>
                                                        

                                                    <?php } } ?>
                                    </tr>
                                    <?php $result=display_game_accounts($_SESSION['user_session']); 
                                        for($i=0;$i<4;$i++){ 
                                            if($res = $result->fetch_assoc()){;
                                            ?>
                                        <tr style="margin:10px">  
                                            <td class="t-left" width="120"></td> 
                                            <td class="t-left"><a href="<?php echo $res['game_link'];?>" target="_blank"><span style="color:black"><?php echo $res['game_link'];?> </input></span></a></td> 
                                            <td class="t-left" ></td>
                                            <td class="t-right"><button class="btn" type="button" class="btn btn-success" data-toggle="modal" data-target="#delete_steam_link_new"
                                                data-steam_id_delete="<?php echo $res['game_account_id'];?>" >Unbind Game Account</button></td> 
                                  
                                        </tr>  
                                        <?php } else{?>
                                        <tr style="margin:10px">  
                                            <td class="t-left" width="120"></td> 
                                            <td class="t-left"><input type="text" name="add_steam_profile_link" id="add_steam_profile_link" placeholder="Add another game account" style="margin-right:0px;color:black"></input></td> 
                                            <td class="t-left" ></td>
                                            <td class="t-right"><button class="btn" type="button" value="add_steam_link_new">Bind Game Account</button></td> 
                                        </tr> 
                                    <?php } } ?>
                                        

                                    <tr style="margin:10px"> 
                                        <td class="t-left" width="120">Steam Trade Link</td>
                                        <?php $user_kyc_status = user_kyc_status($_SESSION['user_session']);foreach($user_kyc_status as $kyc_request1){
                                            if($kyc_request1['user_steam_trade_link']==''){?>
                                                <td class="t-left"><input type="text" name="trade_link" id="trade_link" style="margin-right:0px;color:black" placeholder="Add main steam trade link" ></input></td> 
                                                <td class="t-left"><a href="https://steamcommunity.com/my/tradeoffers/privacy#trade_offer_access_url" target="_blank" style="margin-left:10px;" > Click to get link</a></td>
                                                <td class="t-right"> <button class="btn btn-secondary btn-login" type="button" value="add_steam_trade" >Save</button></td>
                                            <?php } else { ?>
                                                <td class="t-left"><a href="<?php echo $kyc_request1['user_steam_trade_link'];?>" target="_blank"><span style="color:black"><?php echo substr($kyc_request1['user_steam_trade_link'],0,50);?></span></a></td>
                                                <td class="t-left" ><a href="https://steamcommunity.com/my/tradeoffers/privacy#trade_offer_access_url" target="_blank" style="margin-left:10px;" > Click to get link</a></td></td>
                                                <td class="t-right"> <button class="btn" type="button" data-toggle="modal" data-target="#delete_steam_trade">Delete</button></td>
                                              
                                            <?php } } ?>
                                    </tr>
                                    <tr>                                      
                                            
                                    </tr>
                                </tbody>
                            </table>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('footer.php'); ?>