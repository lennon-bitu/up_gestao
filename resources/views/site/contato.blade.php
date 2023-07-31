@extends('site.layout.base')

@section('conteudo')
<!--Section: Contact v.2-->
<section class="mb-4 col-12 mtop-100  bg-escuro text-light pt-5 pb-5  vh">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row d-flex flex-column align-items-center align-self-center">

        <!--Grid column-->
        <div class="col-md-6 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="{{ route('site.contato') }}" method="post">
                @csrf

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Seu Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Seu Email</label>
                            <input type="text" id="email" name="email" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Assunto</label>
                            <select id="assunto" name="assunto" class="form-control">
                                <option value='0'>Escolha um assunto</option>
                                <option value='1'>Dúvida</option>
                                <option value='2'>Elogio</option>
                                <option value='3'>Crítica</option>
                            </select>
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Sua Mensagem</label>
                            <textarea type="text" id="mensagem" name="mensagem" rows="2" class="form-control md-textarea"></textarea>
                            
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div class="text-center text-md-left">
                    <button type='submit' class='btn btn-primary'>Enviar</button>
                </div>
            </form>

            
            <div class="status"></div>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
@endsection