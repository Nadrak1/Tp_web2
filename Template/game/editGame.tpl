{include file="Template/header.tpl"}

 <!-- <div class="modal-container">
    <div class="modal"> -->
        <form class="row g-3" action="editGame" method="post" enctype="multipart/form-data">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Juego</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Juego" required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Precio</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="$" required>
            </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Categoria</label>
                <select class="form-select" name="id_category_fk" id="id_category_fk" required>
                    <option selected disabled value="">Elegi...</option>
                    <option value="1">Shooter</option>
                    <option value="2">Sport</option>
                    <option value="3">Horror</option>
                    <option value="4">Multiplayer online battle arena</option>
                </select>
            </div>
            <div>
                <label>Insertar una imagen(OPCIONAL)</label>
                <input type="file" name="img" id="imageToUpload">
            </div>
            <div class="col-12">
                <input type="hidden" name="id" value="{$id}">
                <a href="editGame"><button class="btn btn-primary" type="submit">Submit form</button></a>
            </div>
        </form>  
  <!--  </div>
</div> -->


    

{include file="Template/footer.tpl"}