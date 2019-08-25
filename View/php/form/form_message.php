<div class="header_conn_insc" id="add">
    <div class="container d-flex justify-content-center h-100 align-items-center">
        <form  action="<?echo $path['add_message_c']."?sujet=".$_GET["sujet"]?>" method="post" id="form" class="col-lg-8  p-3 block_form">
            <textarea type="text" placeholder="Texte" name="texte" class="form-control my-2" rows="5"></textarea>
            <input type="submit" name='submit' value="Valider" class="btn btn-outline-light">
        </form>
    </div>
</div>