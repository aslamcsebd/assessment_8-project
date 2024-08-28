<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <meta http-equiv="refresh" content="10" /> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="container-fluid">
    <div class="row justify-content-center bg-info">
        <div class="col-md-8 col-8 text-center p-0 mt-3 mb-2">
            <div class="card px-0 p-4 pb-0 mt-3 mb-3 login">
                <h3 id="heading" class="hide">Sign up your user account</h3>
                <p>Fill all form field to go to next step</p>
                
                <form id="msform" action="insert.php" method="post" enctype="multipart/form-data">
                    <ul id="progressbar" class="text-center hide">
                        <li class="active" id="account"><strong>Account</strong></li>
                        <li id="personal"><strong>Personal</strong></li>
                        <li id="photos"><strong> Image </strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <div class="progress hide mb-4">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="50"></div>
                    </div>

                    <fieldset>
                        <div class="form-card">								
                            <div class="row">
                                <div class="col-7 col-md-8">
                                    <h2 class="fs-title">Account information:</h2>
                                </div>
                                <div class="col-5 col-md-4">
                                    <h2 class="steps">Step 1 - 4</h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <label class="fieldlabels">Email: *</label> 
                                    <input type="text" id="email" name="email" placeholder="Email id"/>
                                    <div class="error" id="emailErr"></div>
                                </div>
                                <div class="col-12 py-2">
                                    <label class="fieldlabels">Username: *</label> 
                                    <input type="text" id="username" name="username" placeholder="User name"/>
                                    <div class="error" id="userErr"></div>
                                </div>
                                <div class="col-12">
                                    <label class="fieldlabels">Password: *</label> 
                                    <input type="text" id="password" name="password" placeholder="Password" />
                                </div>	
                                <div class="col-12 pt-2">
                                    <label class="fieldlabels">Confirm password: *</label> 
                                    <input type="text" id="con_pass" name="con_pass" placeholder="Confirm password" />
                                    <div class="error" id="passErr"></div>
                                </div>									
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>

                    <fieldset>
                        <div class="form-card">								
                            <div class="row">
                                <div class="col-7 col-md-8">
                                    <h2 class="fs-title">Personal information:</h2>
                                </div>
                                <div class="col-5 col-md-4">
                                    <h2 class="steps">Step 2 - 4</h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <label class="fieldlabels">First name: *</label> 
                                    <input type="text" name="f_name" placeholder="First name" />
                                </div>
                                <div class="col-12 py-2">
                                    <label class="fieldlabels">Last name: *</label> 
                                    <input type="text" name="l_name" placeholder="Last name" />
                                </div>
                                <div class="col-12">
                                    <label class="fieldlabels">Contact no: *</label> 
                                    <input type="number" name="contact" placeholder="Contact no" />
                                </div>	
                                <div class="col-12 pt-2">
                                    <label class="fieldlabels">Alternate contact no: *</label> 
                                    <input type="number" name="alt_contact" placeholder="Alternate contact no" />
                                </div>									
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" />
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>

                    <fieldset>
                        <div class="form-card">								
                            <div class="row">
                                <div class="col-7 col-md-8">
                                    <h2 class="fs-title">Image upload:</h2>
                                </div>
                                <div class="col-5 col-md-4">
                                    <h2 class="steps">Step 3 - 4</h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <label class="fieldlabels">Upload your photo: *</label> 
                                    <input type="file" name="photo"/>
                                </div>

                                <div class="col-12">
                                    <label class="fieldlabels">Upload signature photo: *</label> 
                                    <input type="file" name="photo_s"/>
                                </div>
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Submit" /> 
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        
                    </fieldset>

                    <fieldset id="fieldset">
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Complete</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                </div>
                            </div>
                        </div>                    
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="script.js"></script>
</body>
</html>