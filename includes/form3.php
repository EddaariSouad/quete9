<form class=container action="index.php" method="POST" enctype="multipart/form-data">
    <div class='row justify-content-center'>
      <input type="hidden" class="form-control" id="inputCity" name="id" value="<?php echo $_GET['champid']; ?>">
    <div class="form-group col-md-7">
      <label>Ville</label>
      <input type="text" class="form-control" id="inputCity" name="ville1">
    </div>
    <div class="form-group col-md-7">
      <label for="inputCity">Champion</label>
      <input type="text" class="form-control" id="inputCity" name="champion1">
    </div>
    <div class="form-group col-md-7">
      <label>Type</label>
      <input type="text" class="form-control" id="inputCity" name="type1">
    </div>
    <div class="form-group col-md-7">
      <label>Badge</label>
      <input type="text" class="form-control" id="inputCity" name="badge1">
    </div>
    <div class="form-group col-md-7 ">
    <label>Image du Champion</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image1">
    </div>
    <div class="text-center col-md-12">
        <input type="submit" class="btn btn-secondary" name="submit2">Modifier</input>
    </div>
    </div>
</form>