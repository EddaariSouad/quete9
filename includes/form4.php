<form class=container action="index.php" method="POST" enctype="multipart/form-data">
    <div class='row justify-content-center'>
    <input type="hidden" class="form-control" id="inputCity" name="id" value="<?php echo $_GET['pokeid']; ?>">
    <div class="form-group col-md-7">
      <label for="inputCity">Numéro</label>
      <input type="text" class="form-control" id="inputCity" name="numero1">
    </div>
    <div class="form-group col-md-7">
      <label for="inputCity">Nom</label>
      <input type="text" class="form-control" id="inputCity" name="first_name1">
    </div>
    <div class="form-group col-md-7">
      <label for="inputCity">Type 1</label>
      <input type="text" class="form-control" id="inputCity" name="type11">
    </div>
    <div class="form-group col-md-7">
      <label for="inputCity">Type 2</label>
      <input type="text" class="form-control" id="inputCity" name="type21">
    </div>
    <div class="form-group col-md-7 ">
    <label for="exampleFormControlFile1">Image du Pokémon</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image1">
    </div>
    <div class="text-center col-md-12">
        <button type="submit" class="btn btn-secondary" name="submit4" >modfier</button>
    </div>
    </div>
</form>