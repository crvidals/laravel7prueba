@extends('layout')

@section('content')

<main role="main">
    <!-- Content -->
    <article>

        <header class="section background-dark">
            <div class="line">
                @if(session()->has('msj_flash'))
                    <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">
                        ¡Gracias por contactarnos!
                    </h1>
                    <p class="margin-bottom-0 text-size-16">
                        {{ session()->get('msj_flash') }}
                    </p>
                @else
                    <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">
                        Contactanos
                    </h1>
                    <p class="margin-bottom-0 text-size-16">
                        ¿Tienes alguna duda? ¿Quieres saber mas acerca de nosotros? escribenos a través del formulario de contacto, estaremos atentos a tus inquietudes.
                    </p>
                @endif
            </div>
        </header>

        <div class="section background-white">
            <div class="line">
                <div class="margin">
                    <!-- Contact Form -->
                    <div class="s-12 m-12 l-6">
                        <h2 class="margin-bottom-10">Deja tu mensaje</h2>
                        <form name="contactForm" action="{{ route('messages') }}" class="customform" method="post">
                            @csrf
                            <div class="line">
                                <div class="margin">
                                    <div class="s-12 m-12 l-6">
                                        <input name="email" class="required email" placeholder="Tu e-mail" type="text" required>
                                        <p class="email-error form-error">Ingrese su e-mail.</p>
                                    </div>
                                    <div class="s-12 m-12 l-6">
                                        <input name="name" class="name" placeholder="Tu nombre" type="text" required>
                                        <p class="name-error form-error">Ingrese su nombre.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="s-12">
                                <input name="subject" class="subject" placeholder="Asunto" type="text" required>
                                <p class="subject-error form-error">Ingrese un asunto.</p>
                            </div>
                            <div class="s-12">
                                <textarea name="body" class="required message" placeholder="Tu mensaje" rows="3" required>
                                </textarea>
                                <p class="message-error form-error">Ingrese el mensaje.</p>
                            </div>
                            <div class="s-12">
                                <button class="s-12 submit-form button background-primary text-white" type="submit">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </article>
</main>

@stop
