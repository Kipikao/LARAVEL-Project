<x-app-layout>

  <div>
    <img src="{{ asset('/img/pozeSite/serviceindex.jpg') }}" alt="poza" class="pozaNav">
  </div>
  <div class="textprodus">
        <p>La Service Auto Marco gasesti solutia.
            Nu este nevoie sa mergi in mai multe service-uri
            sa-ti rezolvi problemele. Gasesti tot ce ai nevoie,
            rezolvi orice problema ai cu masina ta, la Service Auto Marco.
        </p>
    </div>
    <div class="textprodus">
        <p>
        Profesionalismul, promptitudinea, transparenta sunt doar cateva 
        din atributele dupa care ne ghidam in activitatea noastra de zi cu zi.
        </p>
    </div>
  
  <div class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="flex justify-center">
      <a href="{{ route('/') }}">
        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
      </a>
    </div>

    <div class="mt-16">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
          <div>
            <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
              </svg>
            </div>

            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Produse</h2>

            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
            Încă de la început am construit, treptat, ceea ce poate fi numit un nou 
            concept de service auto. Ducem povestea mai departe astăzi, prin ceva mai 
            mult decât un service auto, printr-un complex auto, menit să contribuie la 
            misiunea noastră de la început: aceea ca dumneavoastră să găsiți tot ce aveți 
            nevoie pentru mașina pe care o conduceți într-un singur loc.
            </p>
          </div>

          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
          </svg>
        </a>
        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
          <div class="mapprodus">

            <img src="/img/pozeSite/sistem-electric.png" alt="">

          </div>
        </a>
      </div>
    </div>
    <div class="textprodus">
        <h1>Compania noastră oferă deasemenea și serviciul de tractării</h1>
    </div>
    <div class="mt-16">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
        <a href="#" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 ">
          <div class="mapprodus">

            <img src="/img/pozeSite/tractari.png" alt="">

          </div>
        </a>
        <a href="#" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250  ">
          <div>
            <h1 style="color: #26a849" class="mt-6 text-xl font-semibold">
              MASINA STRICATA?
            </h1>
            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">NU LASA PROBLEMELE SA ITI STRICE ZIUA</h2>

            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
            Compania noastră de tractări auto oferă servicii de tractare pentru mașina 
            ta indiferent de oră , anotimp sau de împrejurarea în care te afli . 
            Este suficient să ne suni și noi vom ajunge la adresa menționată de tine 
            în cel mai scurt timp posibil . Ținta noastră este să ne îmbunătățim și 
            să ne diversificăm calitatea serviciilor noastre de tractări pe toată plaja 
            de auto și moto și să asigurăm transportul în siguranță a autoturismului , 
            utilajului , etc., contractat .</p>
            <p>Ne poți contacta nonstop la Tel. 0744123123</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  


</x-app-layout>