<div class="container">
    <div class="jumbotron">

        <form action="/user/singin" method="POST">

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Login</label>
                <div class="col-10">
                    <input class="form-control" type="text" name="login" value="" id="example-text-input">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-password-input" class="col-2 col-form-label">Password</label>
                <div class="col-10">
                    <input class="form-control" type="password" name="password" value="" id="example-password-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-password-input" class="col-2 col-form-label">Password</label>
                <div class="col-10">
                    <input class="form-control alert-success" name="do_singin" type="submit" value="Enter" id="example-password-input">
                </div>
            </div>
        </form>
    </div>
</div>