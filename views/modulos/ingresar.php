<form method="POST">

    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="text" class="form-control" id="email" name="emailIngreso" />
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="pwdIngreso" />
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
$ingreso = new AdminC;
$ingreso->ingresoC();
?>