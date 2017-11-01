
<div class="modal fade"  id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/login" method="post" >
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" >Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label><b>Email</b></label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label><b>Password</b></label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div align="center" >
                        <a href=" "><u>Forgot Password</u></a>
                    </div>
                    <div align="center">
                        <input type="checkbox" checked="checked">Keep me signned in
                    </div>

                </div>
                <div class="modal-footer">
                    <div align="right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width: 150px;">Close</button>

                        <button type="submit" data-backdrop="static" data-toggle="modal" class="btn btn-success" style="width: 150px;">Login</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

