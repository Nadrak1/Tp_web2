{include file="Template/header.tpl"}

<form class="row g-3" action="editCategory" method="post">
    <div class="col-md-3">  
        <label for="validationCustom04" class="form-label">Genero</label>
        <select class="form-select" name="genre" id="genre" required>
        <option selected disabled value="">Elegi...</option>
        <option value="Shooter">Shooter</option>
        <option value="Sport">Sport</option>
        <option value="Horror">Horror</option>
        <option value="Multiplayer online battle arena">Multiplayer online battle arena</option>
        </select>
    </div>
    <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Plataforma de Jugabilidad</label>
        <select class="form-select" name="gameplay" id="gameplay" required>
        <option selected disabled value="">Elegi...</option>
        <option value="Multi Plataform">Multi Plataform</option>
        <option value="PC">PC</option>
        <option value="XBOX">XBOX</option>
        <option value="PS4">PS4</option>
        </select>
    </div>
    <div class="col-12">
        <input type="hidden" name="id" value="{$id}">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form>

{include file="Template/footer.tpl"}