<form action="{{route('agenda.proovedor.consultar.eliminar')}}">
<div class="modal" id="modal_eliminar-{{$consul1->idProveedor}}">

    <div class="__body">

        <p class="__titulo">¿Estas seguro de eliminar?</p>
        <div class="__icon">
            <i class="fa-regular fa-trash-can"></i>
            <label for="">NOTA: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, rem? Rerum ipsam distinctio minima impedit.</label>
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
