<div class="col-sm-8">
    <div class="pen-title">
        <h1>Volleyball Score</h1><span>Pen <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a
                href='http://andytran.me'><b>du</b> PEC</a></span>
    </div>
    <!-- Form Module-->
    <div class="module form-module">
        <!--
                    <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                        <div class="tooltip">Click Me</div>
                    </div>
        -->

        <div class="form">
            <h2>Login to your account</h2>
            <form>
                <input type="text" placeholder="Username"/>
                <input type="password" placeholder="Password"/>
                <button>Login</button>
            </form>
        </div>
        <div class="form">
            <h2>Match Details</h2>

            <form action="<?php echo $action; ?>" method="post">
                Win: <input type="text" placeholder="Winning Department" name="win"
                       value="<?php echo isset($volleyballmatch[0]['win']) ? $volleyballmatch[0]['win'] : ''; ?>" required/>
                Lose: <input type="text" placeholder="Losing Department" name="lose"
                       value="<?php echo isset($volleyballmatch[0]['lose']) ? $volleyballmatch[0]['lose'] : ''; ?>" required/>
                MOM: <input type="text" placeholder="Man of the match" name="man"
                       value="<?php echo isset($volleyballmatch[0]['man']) ? $volleyballmatch[0]['man'] : ''; ?>" required/>
                <input type="hidden" name="id" value="<?php echo isset($volleyballmatch[0]['id']) ? $volleyballmatch[0]['id'] : ''; ?>"/>

                <p><input class = "btn btn-success" type="submit" name="submit" value="<?php echo $button; ?>"/></p>
            </form>
        </div>
        <!--        <div class="cta"><a href="http://andytran.me">Forgot your password?</a></div>-->
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>


    <script src="<?php echo base_url(); ?>assets/form/js/index.js"></script>
</div>
</div>
</body>
</html>