<x-app-layout>

  <img src="{{ asset('img/pozeSite/telefon-urmarit2.jpg') }}" alt="poza contact" class="pozaNav">

  <!-- Date contact-->

  <div class="container d-fluid text-center align-items-sm-start py-5 ">
    <div class="flex justify-center">
      <a href="{{ route('/') }}">
        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
      </a>
    </div>
    <p class="text2 pt-5">
      Service Auto Marco S.r.l.
    </p>
    <p class="text2">
      Ne puteți contacta prin intermediul datelor de contact sau formularului de mai jos
    </p>
  </div>

  <x-mesaj>
    <!-- Message send with success -->
  </x-mesaj>

  <div class="container d-fluid text-center align-items-sm-start ps-2">
    <div class="row">
      <div class="col m-5">
        <img class="mb-3" src="img/place_black_24dp.svg" alt="google adress" />
        <p>Strada Trei Ierarhi 9 - 11, Ploiești - (Romania)</p>
      </div>
      <div class="col m-5">
        <img class="mb-3" src="img/phone_black_24dp.svg" alt="google phone" />
        <p>+40 771780762</p>
        <p>+40 723326072</p>
      </div>
      <div class="col m-5">
        <img class="mb-3" src="img/mail_black_24dp.svg" alt="google email" />
        <p>office@marcoauto.ro</p>
      </div>
    </div>
  </div>
  <!-- Formular contact-->
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="dark:bg-gray-800 overflow-hidden sm:rounded-lg">
        <div class="p-3 text-gray-900 dark:text-gray-100">
          <section>
            <div class="continut-contact">
              <!-- Harta-->
              <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2824.1368456009454!2d26.013430875997265!3d44.94088597107023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b2498607ffb5d1%3A0x95b9b0f9898638cd!2sStrada%20Trei%20Ierarhi%209-11%2C%20Ploie%C8%99ti!5e0!3m2!1sro!2sro!4v1691916141223!5m2!1sro!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>

              <div class="form-container">
                <h3>Contact</h3>
                <form class="contact-form" method="post" action="{{ route('contacts.store') }}">
                  @csrf
                  @method('post')

                  <input type="text" name="name" placeholder="Numele tau" id="textValue" required />
                  <input type="email" name="email" id="emailValue" placeholder="Introdu adresa email..." required />
                  <textarea name="message" id="textmesajValue" cols="30" rows="10" placeholder="Mesajul tau..." required></textarea>
                  <input type="submit" value="trimite" class="send1" id="mesaj" />
                </form>
              </div>
            </div>

          </section>
        </div>
      </div>
    </div>
  </div>

</x-app-layout>