<div class="container">
    <div class="row">
        <div class="col-12 text-center my-5">
            <h1 class="display-4"><i class="fa fa-paper-plane text-primary"></i>Formulario</h1>
        </div>
    </div>
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <form>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="inputNome">Seu nome</label>
                            <input type="text" class="form-control" id="inputNome" placeholder="Nome">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="inputSobrenome">Seu Sobrenome</label>
                            <input type="text" class="form-control" id="inputSobrenome" placeholder="Sobrenome">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label for="inputEnd">Seu endereço</label>
                            <input type="text" class="form-control" id="inputEnd" placeholder="Endereço completo">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="inputCidade">Sua Cidade</label>
                            <input type="text" class="form-control" id="inputCidade" placeholder="Cidade">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="inputEst">Seu Estado</label>
                            <select class="form-control" id="inputEst">
                                <option selected>Selecione...</option>
                                <option value="AC">AC</option>
                                <option value="">...</option>
                                <option value="">...</option>
                                <option value="">...</option>
                                <option value="">...</option>
                                <option value="">...</option>
                                <option value="">...</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-2">
                            <label for="inputCEP">Seu CEP</label>
                            <input type="text" class="form-control" id="inputCEP" placeholder="CEP">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <div class="form-check">
                                <label class="form-check-label" for="">
                                    <input class="form-check-input" type="checkbox"> Desejo receber novidades por e-mail.
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Nam vel vestibulum orci" data-content="Phasellus lacus enim, convallis sed sem et, tempus dignissim risus.">Ajuda</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-3">
                <hr>
            </div>
            <div class="col-sm-4">
                <h3>Web Designer</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel vestibulum orci. Aenean finibus risus sed arcu sodales, a pulvinar ipsum elementum.</p>
                <p>Curabitur id nibh at ante molestie ornare. Maecenas mauris nibh, consequat sed eros non, tempor gravida ipsum. Duis ac semper lacus. Aenean sed odio ex.</p>
            </div>
            <div class="col-sm-4">
                <h3>Menu</h3>
                <div class="list-group text-center">
                    <a class="list-group-item list-group-item-action list-group-item-primary" href="#">Perfil</a>
                    <a class="list-group-item list-group-item-action list-group-item-primary" href="#">Serviços</a>
                    <a class="list-group-item list-group-item-action list-group-item-primary" href="#">Depoimentos</a>
                    <a class="list-group-item list-group-item-action list-group-item-primary" href="#">Contatos</a>
                </div>
            </div>
            <div class="col-sm-4">
                <h3>Social</h3>
                <div class="btn-group-vertical btn-block btn-group-lg" role="group">
                    <a class="btn btn-outline-primary" href="https://www.facebook.com/joaomagdaleno19"><i class="fa fa-facebook-square"></i>Facebook</a>
                    <a class="btn btn-outline-info" href="https://www.twitter.com/joaomagdaleno14"><i class="fa fa-twitter-square"></i>Twitter</a>
                    <a class="btn btn-outline-danger" href="https://www.instagram.com/joaomagdaleno14"><i class="fa fa-instagram"></i>Instagram</a>
                </div>
            </div>
            <!-- <div class="col-12 mt-5">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">O sucesso não é garantido, mas o fracasso é certo se voce não estiver emocinalmente envolvido em seu trabalho.</p>
                    <footer class="blockquote-footer">Biz Stone <cite title="Source Title">Fundador do Twitter</cite></footer>
                </blockquote>
            </div> -->
        </div>
    </div>
</body>
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=SG.6LfrbK8UAAAAALXauyoYZaGSzSDYMfXKlVzcZatC"></script>
    <script src="./style/js/Javascript.js"></script>
    <script>
    $(function(){
        $('[data-toggle="popover"]').popover()
    })
    </script>
</html>