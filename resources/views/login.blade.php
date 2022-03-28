
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            
            <form action="/user" method="POST">
            <br><br>
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail1">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="user" class="form-control" placeholder="Username">
                    <br><br>
                
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <br><br>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>

