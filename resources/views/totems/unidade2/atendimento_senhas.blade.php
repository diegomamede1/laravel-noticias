<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="_token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="xV9MTyE8PR7XY9noABJKFyb4x8cjTHcdjrJQgyPp">
    <title>Autoatendimento</title>
    <link rel="stylesheet" href="https://api.feegow.com.br/css/normalize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://rawgit.com/RobinHerbots/Inputmask/5.x/css/inputmask.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>
<style>
    @font-face {
        font-family: 'Gothambold';
        src: url('//api.feegow.com.br/modules/totemqueue/medmais/fonts/Gotham-Bold.eot');
        src: local('//api.feegow.com.br/modules/totemqueue/medmais/fonts/GothamBold'),
            url('//api.feegow.com.br/modules/totemqueue/medmais/fonts/GothamBold.eot?#iefix') format('embedded-opentype'),
            url('//api.feegow.com.br/modules/totemqueue/medmais/fonts/GothamBold.woff2') format('woff2'),
            url('//api.feegow.com.br/modules/totemqueue/medmais/fonts/GothamBold.woff') format('woff'),
            url('//api.feegow.com.br/modules/totemqueue/medmais/fonts/GothamBold.ttf') format('truetype'),
            url('//api.feegow.com.br/modules/totemqueue/medmais/fonts/GothamBold.svg#Gotham-Bold') format('svg');
        font-weight: bold;
        font-style: normal;
    }

    .hidden {
        display: none;
    }
</style>

<body>
    <center>
        <img src="{{ asset('images/medmais.png') }}" width="400px">
    </center>
    <br>
    <br>

    <div class="container-fluid conteudo-totem">
        <div style="margin-top: 50px" class="row">
            <div style="text-align: center" class="col-md-12">
                <p style="color: black; font-size: 34px; font-weight: bold;"> INFORME SUA DATA DE NASCIMENTO
                </p>
            </div>
        </div>
        <div class="centered-div">
            <div class="modal-body">
                <div class="row">
                    <div class="alert alert-danger nascimentoError" role="alert"></div>
                    <div class="col-md-12">

                        <input type="text" name="nascimento" id="nascimento" class="form-control mx-auto"
                            style="max-width: 19%; height: 120px; font-size: 60px; border: 0 !important; box-shadow: none !important" />
                        <table class="table hidden">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <center>
                    <div class="col-md-4 mt-">
                        <button class="col-3 btn btn-primary mt-2 addNumber" data-value="1">1</button>
                        <button class="col-3 btn btn-primary mt-2 addNumber" data-value="2">2</button>
                        <button class="col-3 btn btn-primary mt-2 addNumber" data-value="3">3</button>
                        <button class="col-3 btn btn-primary mt-2 addNumber" data-value="4">4</button>
                        <button class="col-3 btn btn-primary mt-2 addNumber" data-value="5">5</button>
                        <button class="col-3 btn btn-primary mt-2 addNumber" data-value="6">6</button>
                        <button class="col-3 btn btn-primary mt-2 addNumber" data-value="7">7</button>
                        <button class="col-3 btn btn-primary mt-2 addNumber" data-value="8">8</button>
                        <button class="col-3 btn btn-primary mt-2 addNumber" data-value="9">9</button>
                        <button class="col-3 btn btn-primary mt-2" onclick="backspace();"> &laquo; Apagar</button>
                        <button class="col-3 btn btn-primary mt-2 addNumber" data-value="0">0</button>
                        <button class="col-3 btn btn-success mt-2 search">Buscar</button>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.0.slim.js"
        integrity="sha256-sCexhaKpAfuqulKjtSY7V9H7QT0TCN90H+Y5NlmqOUE=" crossorigin="anonymous"></script>
    <script src='https://api.feegow.com.br/js/jquery-3.3.1.min.js'></script>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <script src="//api.feegow.com.br/modules/totemqueue/js/ajaxsetup.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://rawgit.com/RobinHerbots/Inputmask/5.x/dist/jquery.inputmask.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            function getPosition(id) {
                $("#agendamentoID").val(id);
                $("#typeForm").val($("#type").val());
                $("#imprimir").submit();
            }
            $(".addNumber").on("click", function() {
                $("#nascimento").removeClass("has-error");
                $(".nascimentoError").hide();
                $("#nascimento").focus();
                var key = $(this).attr("data-value");
                document.dispatchEvent(new KeyboardEvent("keypress", {
                    key
                }));
            });
            var maskConfig = {
                // mask: "99/99/9999",
                leapday: "29-02-",
                separator: "/",
                alias: "dd/mm/yyyy",
                placeholder: ""
            };
            $("#nascimento").inputmask("99/99/9999", maskConfig);
            $(".nascimentoError").hide();
            $(".table").hide();
            $(".loading").hide();
            $(".search").on("click", function() {
                $(".loading").show();
                $(".table").hide();
                $(".table tbody").empty();
                $("#nascimento").removeClass("has-error");
                if ($("#nascimento").val().length < 10) {
                    $("#nascimento").addClass("has-error");
                } else {
                    var nascimento = $("#nascimento").val();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });

                    var posting = $.post("{{ route('ajax.consulta.nascimento') }}", {
                        nascimento
                    });
                    posting.done(function(data) {
                        if (data.stauts == 201) {
                            $(".nascimentoError").html('Data de nascimento inválida!').show();
                        } else if (data == "not_found") {
                            // $(".nascimentoError").html('Não foi encontrado nenhum retorno com a data de nascimento informada, caso deseje gere uma senha e vá ao atendimento!').show();
                            const swalWithBootstrapButtons = Swal.mixin({
                                customClass: {
                                    confirmButton: 'btn btn-success',
                                    cancelButton: 'btn btn-warning'
                                },
                                buttonsStyling: false
                            })
                            swalWithBootstrapButtons.fire({
                                title: 'Oops!',
                                html: `Não foi encontrado nenhum retorno com a data de nascimento (${nascimento}) informada!`,
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Tentar novamente',
                                cancelButtonText: 'Retirar senha',
                                reverseButtons: true
                            }).then((result) => {
                                if (result.dismiss === Swal.DismissReason.cancel) {
                                    $("#modalAutoAtendimento").modal("hide");
                                    $(".retorno_senha").click();
                                }
                            });
                        } else {
                            $(".nascimentoError").html('').hide();
                            $(".table").show();
                            $(".table tbody").empty().append(data).show();
                        }
                        $(".loading").hide();
                    });
                }
            });
            $(document).on("click", ".nomes", function() {
                var nome = $(this).html();
                var agendamentoID = $(this).attr("data-value");
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })
                swalWithBootstrapButtons.fire({
                    title: 'Confirme sua escolha',
                    html: `Você escolheu <b>${nome}</b>, está correto?`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sim, está correto!',
                    cancelButtonText: 'Acho que me enganei!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $("#agendamentoID").val(agendamentoID);
                        $("#typeForm").val("retorno");
                        $("#imprimir").submit();
                    }
                });
            });
            $(".btn-danger").on("click", function() {
                $("#modalSelectType").modal("hide");
                $("#modalAutoAtendimento").modal("hide");
                $("#modalRetorno").modal("hide");
            });
        });
        document.addEventListener('keypress', (event) => {
            document.getElementById('nascimento').value += event.key;
        });
        var textbox = document.getElementById('nascimento');

        function backspace() {
            $("#nascimento").removeClass("has-error");
            $(".nascimentoError").hide();
            var ss = textbox.selectionStart;
            var se = textbox.selectionEnd;
            var ln = textbox.value.length;
            var textbefore = textbox.value.substring(0, ss); //text in front of selected text
            var textselected = textbox.value.substring(ss, se); //selected text
            var textafter = textbox.value.substring(se, ln); //text following selected text
            if (ss == se) { // nada selecionado
                if (textbefore.length == 3 || textbefore.length == 6) {
                    a = 2;
                } else {
                    a = 1;
                }
                textbox.value = textbox.value.substring(0, ss - a) + textbox.value.substring(se, ln);
                textbox.focus();
                textbox.selectionStart = ss - 1;
                textbox.selectionEnd = ss - 1;
            } else { // se está selecionado
                textbox.value = textbefore + textafter;
                textbox.focus();
                textbox.selectionStart = ss;
                textbox.selectionEnd = ss;
            }
        }
    </script>

</body>

</html>
