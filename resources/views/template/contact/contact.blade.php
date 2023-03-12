@extends('base.contactapp')

@section('title', 'ONG | SOURIRE D\'AFRIQUE')

@section('contact')

     <!--CENTER-->

     <div class="center row">
    <hr>

    <!-- Contact Start -->
    <div class="container-xxl">
        <div>
            <div class="row parentcontact">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-primary text-light py-1 px-3 mb-3">Contactez-nous</div>
                    <h1 class="display-6 mb-3">Si vous avez des questions, veuillez nous contacter</h1>
                    <small class="text-danger alerte"></small>
  

                    <form class="formcontact mt-3" action="{{route('contact.store')}}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control case" name="prenomNom" id="name" placeholder="Nom">
                                    <label for="name">Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control case" name="email" id="email" placeholder="Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" name="telephone" class="form-control case" id="subject" placeholder="telephone">
                                    <label for="subject">Contact</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control case" placeholder="Leave a message here" name="message" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12 pb-2">
                                <button class="btn btn-primary py-2 px-3 me-3">
                                    Envoyer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126913.7796869999!2d-5.2012995634130395!3d6.256404132366859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfbf574a7513b481%3A0x63243c7983e9b8ff!2sTaabo!5e0!3m2!1sfr!2sci!4v1677332986281!5m2!1sfr!2sci"
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Contact End -->



  </div>

     <!--FIN CENTER-->
@endsection