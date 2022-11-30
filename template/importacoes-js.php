<!-- Bootstrap core JavaScript-->
<script src="<?= arquivo("/vendor/jquery/jquery.min.js") ?>"></script>
<script src="<?= arquivo("/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= arquivo("/vendor/jquery-easing/jquery.easing.min.js") ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= arquivo("/js/sb-admin-2.min.js") ?>"></script>

<!-- Page level plugins -->
<script src="<?= arquivo("/vendor/chart.js/Chart.min.js") ?>"></script>

<!-- Page level custom scripts -->
<script src="<?= arquivo("/js/demo/chart-area-demo.js") ?>"></script>
<script src="<?= arquivo("/js/demo/chart-pie-demo.js") ?>"></script>    

<script>
    // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
            var forms = document.getElementsByClassName('needs-validation');
            // Faz um loop neles e evita o envio
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>