<<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
.login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.login-form{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form h3{
    text-align: center;
    color: #085025;
}
.regi-form{
    padding: 5%;
    background: #085025;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.regi-form h3{
    text-align: center;
    color: #fff;
}
.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #085025;
}
.regi-form .btnSubmit{
    font-weight: 600;
    color: #085025;
    background-color: #fff;
}
.regi-form .ForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.login-form .ForgetPwd{
    color: #085025;
    font-weight: 600;
    text-decoration: none;
}
.text_policy{
    color: #857b7b;
    font-size: 13px;
}
</style>


<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form">
                    <h3>Login</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email or Username" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password " value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 regi-form">
                    <h3>Register</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email " value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password " value="" />
                        </div>

                        <div class="form-group">
                            <p class="text_policy">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Register" />
                            
                        </div>
                        <div class="form-group">
                        <button type="button" class="btnSubmit" onclick="location.href='seller_regi.php';" />Become a Seller</button>
                        </div>

                    
                    </form>
                </div>
            </div>
        </div>
</div>