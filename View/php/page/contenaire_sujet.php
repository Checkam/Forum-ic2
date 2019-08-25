
<?if(isset($_SESSION['id_user'])){?>
    <div class="col-12 d-flex flex-row-reverse p-3">
        <button class="btn btn-outline-dark" type="submit" id="btn" name="">Nouveau Sujet</button>
    </div>
<?
}
include($path['sujet_c']);
include($path['form_sujet_v']);
?>