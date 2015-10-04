<form method="POST">
    <?php if(isset($id) && $id!=''){ ?>
    <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
    <?php } ?>
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo isset($nombre)?$nombre:'' ?>">
    </div>
    <div>
        <!--esta opcion es para editar-->
        <?php if (isset($estado)) { /* pregunto s tengo una variable estado inicializada */ ?>
            <label>Activo <input <?php echo ($estado == 1) ? 'checked' : '' ?> type="radio" name="estado" value="1" id="estadoActivo"></label>
            <label>Desactivo <input <?php echo ($estado == 0) ? 'checked' : '' ?> type="radio" value="0" name="estado" id="estadoInActivo"></label>
        <?php } else { ?>
            <!--esta opcion es para crear uno nuevo-->
            <label>Activo <input checked type="radio" name="estado" value="1" id="estadoActivo"></label>
            <label>Desactivo <input  type="radio" value="0" name="estado" id="estadoInActivo"></label>
                <?php
            }
            ?>
    </div>
    <div>
        <input type="submit" value="registrar"></div>
</form>