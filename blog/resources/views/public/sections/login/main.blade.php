<form class="container login pb-5" method="post" action="/login-admin">
    @csrf
    <div class="offset-md-4 pb-5 col-sm-12 col-md-4 col-xl-4 col-lg-4">
        <div class="row">
            <span class="fa fa-user" aria-hidden="true"></span>
            <input name="name" class="col-12" placeholder="Please enter login">
        </div>
    </div>
    <div class="offset-md-4 pb-5 col-sm-12 col-md-4 col-xl-4 col-lg-4">
        <div class="row">
            <span class="fa fa-lock" aria-hidden="true"></span>
            <input name='password' class="col-12" type="password" placeholder="Please enter password">
        </div>
    </div>
    <div class="offset-md-4 pb-5 col-sm-12 col-md-4 col-xl-4 col-lg-4">
        <div class="row">
            <button class="col-12" id="admin_login">
                Login
            </button>
        </div>
    </div>
</form>

