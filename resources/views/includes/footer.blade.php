<style>
    footer {
        background-color: #002133;
    }
    .nav button.btn-footer {
        box-shadow: none;
        border: none;
        border-radius: 0;
        background-color: #34495E;
        color: azure;
        font-size: 0.8rem;
        transition: 0.4s;
    }
    .nav button.btn-footer:hover {
        background-color: #23527C;
    }
    .navbar-text {
        color: azure;
        font-size: 0.6rem;
    }
    .popover-header {
        background-color: #23527C;
        color: #FFF;
    }
</style>

<footer class="footer fixed-bottom">
    <div class="nav d-flex justify-content-between align-items-center">
        <button type="button" class="btn btn-info btn-footer"
                title="Informações"
                data-html="true"
                data-container="body"
                data-toggle="popover"
                data-placement="top"
                data-content="<p class='font-info'>
                <b>Desenvolvedor:</b> Lisandro Guerra<br/>
                <b>Versão:</b> 0.8.1</p>">
            <i class="fa fa-info-circle"></i>
            Info
        </button>

        <span class="navbar-text">
            Diretoria de Atendimento
        </span>


        <button type="button" class="btn btn-info btn-footer"
                title="Ajuda"
                data-html="true"
                data-container="body"
                data-toggle="popover"
                data-placement="top"
                data-content="Texto sobre ajuda">
            <i class="fas fa-question-circle"></i>
            Ajuda
        </button>
    </div>
</footer>
