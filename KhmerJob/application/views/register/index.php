<!DOCTYPE html>
<!-- see tutorial: http://www.jquery4u.com/?p=17043 -->
<html>
    <head>
       
    </head>
    <body>
        <h1>Easy jQuery PHP Captcha</h1>

        <form action="#" method="post" id="captcha-form" name="captcha-form" autocomplete="off" class="form-horizontal">

            <fieldset>
                <div class="control-group">
                    <div class="controls">
                    <label class="inline" for="firstname">*First Name</label>
                    <input class="normal text input" name="firstname" type="text" placeholder="First Name">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                    <label class="inline" for="lastname">*Last Name</label>
                    <input class="normal text input" name="lastname" type="text" placeholder="Last Name">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                    <label class="inline" for="email">*Email</label>
                    <input class="normal email input" name="email" type="email" placeholder="Email">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <label class="" for="captcha">*Please enter the verication code shown below.</label>
                        <div id="captcha-wrap">
                            <img src="img/refresh.jpg" alt="refresh captcha" id="refresh-captcha" /><img src="php/newCaptcha.php" alt="" id="captcha" />
                        </div>
                        <input class="narrow text input" id="captcha" name="captcha" type="text" placeholder="Verification Code">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <input class="btn primary" type="submit" value="Test Captcha">
                    </div>
                </div>
            </fieldset>

        </form>

        <p>Powered by: jQuery, jQuery.validate, Require.js, Backbone.js, Bootstrap, PHP.<br/>Credits: <a href="http://jquery4u.com">jQuery4u</a>, <a href="http://samdeering.com">Sam Deering</a>, <a href="http://www.99points.info">99points</a>.</p>

    </body>
</html>