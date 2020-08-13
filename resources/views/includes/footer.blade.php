<style>
    footer {
        background-color: #002133;
        /*background-color: #00314D;*/
    }
    .nav button.btn-footer {
        box-shadow: none;
        border: none;
        border-radius: 0;
        background-color: #1A2A37;
        color: azure;
        font-size: 0.8rem;
        transition: 0.4s;
    }
    .nav button.btn-footer:hover {
        background-color: #002133;
    }
    .navbar-text {
        color: azure;
        font-size: 0.6rem;
    }
</style>

<footer class="footer fixed-bottom">
    <div class="nav d-flex justify-content-between align-items-center">
        <button type="button" class="btn btn-info btn-footer"
                data-container="body"
                data-toggle="popover"
                data-placement="top"
                data-content="Informações">
            <i class="fa fa-info-circle"></i>
            Info
        </button>

        <span class="navbar-text">
            Diretoria de Atendimento
        </span>


        <button type="button" class="btn btn-info btn-footer"
                data-container="body"
                data-toggle="popover"
                data-placement="top"
                data-content="Texto sobre ajuda">
            <i class="fas fa-question-circle"></i>
            Ajuda
        </button>
    </div>
</footer>
