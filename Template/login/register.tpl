{include file="template/header.tpl"}

<div class="container">
    <h1>{$titulo}</h1>
    <form method="post" action="registerVerify">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" id="email" placeholder="Ingrese su E-mail" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" id="password" placeholder="Ingrese su contraseña" required>
        </div>
            <button type="submit" class="btn btn-primary">Register</button>
    </form>
    <a href="login">¿Ya estas registrado?</a>
    {if $error!=""}
        <h3 class="alert alert-danger">{$error}</h3>
    {/if}
    
</div> 

{include file="template/footer.tpl"}