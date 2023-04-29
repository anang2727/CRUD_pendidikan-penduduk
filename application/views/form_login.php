<?php
echo form_open('auth/login');
?>
<div style="margin-top: 30px;">
<table class="table table-bordered">
    <tr class="w-50 p-3">
        <td>Username</td>
        <div class="col-sm-4">
        <td> <input class="form-control" type="text" name="username" placeholder="username" required></td>
        </div> </tr>
    <tr>
        <td>Password</td>
        <td><input class="form-control" type="password" name="password" placeholder="password" required></td>
    </tr>
    <tr>
        <td colspan="2"><button type="submit" class="btn btn-primary" name="submit">Login</button></td>
</tr>
</table>
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="example">
    <label class="form-check-label" for="example">Check me out</label>
</div>
</div>
<a href="#">Forgot Password?</a> &emsp;
<a href="#">Create Account!</a>
</div>
</form> 