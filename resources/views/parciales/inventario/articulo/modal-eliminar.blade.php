<form action="{{route('inventario.articulo.consultar.eliminar', $consul->idArticulo)}}" method="POST">
    @csrf
    @method('PUT')
<div class="modal" id="modal_eliminar-{{$consul->idArticulo}}">

    <div class="__body">

        <p class="__titulo">¿Estas seguro de eliminar?</p>
        <div class="__icon">
            <i class="fa-regular fa-trash-can"></i>
            <label for="">NOTA: Al eliminar el articulo, algunos registros de venta pueden ser modificados automaticamente.</label>
        </div>
    </div>
    <div class="__footer">
        <div class="__botones">
            <a href="#boton" class="__btn __cancelar">Cancelar</a>
            <button href="" class="__btn __confirmar">Confirmar</button>
        </div>
    </div>

</div>
</form>