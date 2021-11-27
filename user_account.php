<?php include('head.php'); ?>
<?php if($_SESSION['user_status']!=1){header("Location: index.php"); exit();} ?>
<?php include('header.php'); ?>

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
                                <img src="http://via.placeholder.com/70x70" input type="file" name="item_image"alt="">
                            </div>
                            <div class="name">
                                <h2><?php echo $_SESSION['user_username']; ?></h2>
                            </div>
                        </div>

                        <div class="menu">
                            <ul>
                                <li onclick="location.href='user_wallet.php'"><span ><i class="fas fa-wallet"></i>My wallet</span></li>
                                <li href="javascript:void(0);" class="active"><span  ><i class="fas fa-cog"></i>Account</span></li>
                                <li onclick="location.href='user_messages.php'"><span ><i class="fas fa-envelope"></i>Messages</span></li>
                                <!-- <li href="javascript:void(0);"><span ><i class="fas fa-comment-dots"></i>Support</span></li> -->
                            </ul>
                        </div>
                    </div>
                </div>

                
                <div class="column col2"> 
                    <div class="main">
                        <div class="user-setting">
                            <h3>Basic Settings</h3>
                            <table class="list-tab" >
                                <tbody>
                                    <tr>
                                        <td class="t-left">Avatar</td>
                                        <td class="t-left"> <img src="http://via.placeholder.com/46x46" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td class="t-left" width="120">Username</td>
                                        <td class="t-left"><span class="name-tab" style="display: inline; color:var(--primary-color);font-weight:bold;"><?php echo $_SESSION['user_username'];?></span></td>
                                        <td class="t-right"><a href="javascript:void(0);" class="btn-change">Change</a></td>    
                                    </tr>
                                </tbody>
                            </table>

                            <h3>Security settings</h3>
                            <table class=list-tab width="100%">
                                <tbody>
                                    <tr>
                                        <td class="t-left" width="120">Phone number</td>
                                        <td class="t-left"></td>
                                        <td class="t-left"></td>
                                        <td class="t-Right"><a href="javascript:void(0);" class="i-btn --i-btn-small">Change Phone</a></td>
                                    </tr>
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
                                            echo '<td class="t-left"><span style="color:red"><i class="fas fa-times-circle"></i> Denied</span></td>'; 
                                            echo '<td class="t=left"></td>';
                                            echo '<td class="t-right"><a data-toggle="modal" data-target="#kyc_services_modal" class="i-btn --i-btn-small"> Start Verification</a></td>';
                                            } 
                                        }
                                        ?>
                                        
                                    </tr>
                                    <tr>
                                        <td class="t-left" width="120">Password settings</td>
                                        <td class="t-left"></td>
                                        <td class="t-left"></td>
                                        <td class="t-right"><a href="javascript:void(0;)" class="i-btn --i-btn-small">Change password</a></td>
                                    </tr>
                                    <tr class="steam-bind"> 
                                        <td class="t-left" width="120">Steam ID</td>
                                        <td class="t-left"><span><a href="javascript:void(0);">123456789123456</a></span></td>
                                        <td class="t-eft"></td>
                                        <td class="t-right"><a href="javascript:void(0);" class="i-btn --i-btn-small">Save</a></td>
                                    </tr>
                                    <tr style="margin:10px"> 
                                        <td class="t-left" width="120">Steam Trade Link</td>
                                        
                                        <td class="t-left"><input type="text" style="margin-right:0px;width:150%"></input></td>
                                        <td class="t-left" ><a href="https://steamcommunity.com/profiles/76561198147247956/tradeoffers/privacy#trade_offer_access_url" target="_blank">Click to get link</a></td>
                                            <td class="t-right"><a href="https://steamcommunity.com/profiles/76561198147247956/tradeoffers/privacy#trade_offer_access_url" target="_blank" class="i-btn --i-btn-small">Save</a></td>

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