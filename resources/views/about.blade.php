<x-layout.app title="About | {{ config('app.name') }}">
    <section id="nl-inline" aria-labelledby="nl-inline-title" class="bg-white px-4 py-16 md:px-8 md:py-24 dark:bg-neutral-950">
   <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-2 lg:items-center lg:gap-16">
      <div class="max-w-2xl">
         <p class="font-mono text-xs tracking-widest text-neutral-600 uppercase dark:text-neutral-400">About</p>
         <h2 id="nl-inline-title" class="mt-3 text-3xl font-semibold tracking-tight text-balance text-neutral-950 sm:text-4xl dark:text-neutral-50">OLEH:</h2>
         <p class="mt-4 text-lg/7 text-pretty text-neutral-600 dark:text-neutral-400">Angelinn Gozal(2086022510004) dan Christabelle Marjorie Halim(2086022510020)</p>
         <a href="#" class="group/link mt-6 inline-flex items-center gap-1 rounded-sm text-sm font-medium whitespace-nowrap text-zinc-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 dark:text-zinc-50 dark:focus-visible:outline-zinc-50">Read the October issue<svg class="size-4 shrink-0 transition-transform duration-200 group-hover/link:translate-x-0.5 motion-reduce:transition-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14" /><path d="m12 5 7 7-7 7" /></svg></a>
      </div>
      <div class="w-full max-w-xl lg:justify-self-end">
         <form id="nl-inline-form">
            <label for="nl-inline-email" class="mb-1.5 block text-sm font-medium text-neutral-950 dark:text-neutral-50">Email address</label>
            <div class="grid gap-x-3 sm:grid-cols-[minmax(0,1fr)_auto]">
               <input id="nl-inline-email" name="email" type="email" autocomplete="email" required placeholder="maya@lumora.com" aria-describedby="nl-inline-help" class="block h-11 w-full rounded-lg bg-neutral-100 px-3.5 text-[15px] text-neutral-950 outline-1 -outline-offset-1 outline-neutral-200 placeholder:text-neutral-600 hover:outline-neutral-300 focus:outline-2 focus:-outline-offset-2 focus:outline-zinc-950 aria-[invalid=true]:outline-red-600 dark:bg-neutral-900 dark:text-neutral-50 dark:outline-neutral-700 dark:placeholder:text-neutral-400 dark:hover:outline-neutral-600 dark:focus:outline-zinc-50 dark:aria-[invalid=true]:outline-red-500" />
               <div class="flow-root min-h-9 sm:col-span-2 sm:row-start-2 sm:min-h-6.5">
                  <p id="nl-inline-email-error" hidden class="mt-1.5 flex items-center gap-1.5 text-[13px] text-red-700 dark:text-red-400"><svg class="size-3.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10" /><line x1="12" x2="12" y1="8" y2="12" /><line x1="12" x2="12.01" y1="16" y2="16" /></svg>Enter an email like maya@lumora.com.</p>
               </div>
               <button type="submit" id="nl-inline-submit" class="group inline-grid h-11 shrink-0 cursor-pointer place-items-center rounded-lg bg-zinc-950 px-5 text-[15px] font-medium whitespace-nowrap text-white shadow-xs transition-colors duration-150 hover:bg-zinc-800 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 active:translate-y-px disabled:cursor-not-allowed motion-reduce:transition-none sm:col-start-2 sm:row-start-1 dark:bg-zinc-50 dark:text-zinc-950 dark:hover:bg-zinc-200 dark:focus-visible:outline-zinc-50">
                  <span class="col-start-1 row-start-1 flex items-center gap-2 group-aria-busy:invisible">Subscribe</span>
                  <span class="invisible col-start-1 row-start-1 flex items-center gap-2 group-aria-busy:visible"><svg class="size-4 animate-spin motion-reduce:animate-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>Subscribing…</span>
               </button>
            </div>
            <p id="nl-inline-help" class="mt-3 text-[13px] text-pretty text-neutral-600 sm:mt-1 dark:text-neutral-400">One email a month, product news only. Unsubscribe from any issue in one click. Read our <a href="#" class="rounded-sm text-neutral-950 underline decoration-neutral-950/30 underline-offset-2 hover:decoration-current focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 dark:text-neutral-50 dark:decoration-neutral-50/30 dark:focus-visible:outline-zinc-50">privacy policy</a>.</p>
         </form>
         <div id="nl-inline-done" hidden class="rounded-2xl bg-neutral-100 p-5 sm:p-6 dark:bg-neutral-900 dark:ring-1 dark:ring-neutral-800">
            <h3 id="nl-inline-done-title" tabindex="-1" class="flex items-center gap-2 text-base font-semibold text-neutral-950 focus:outline-hidden dark:text-neutral-50"><svg class="size-5 shrink-0 text-green-700 dark:text-green-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 13V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h8" /><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" /><path d="m16 19 2 2 4-4" /></svg>Check your inbox to confirm</h3>
            <p class="mt-1.5 text-sm/6 text-pretty text-neutral-600 dark:text-neutral-400">We sent a confirmation link to <span id="nl-inline-address" class="font-medium break-words text-neutral-950 dark:text-neutral-50">maya@lumora.com</span>. Once you click it, the November issue arrives on Tuesday, Nov 3.</p>
            <button type="button" id="nl-inline-change" class="mt-3 cursor-pointer rounded-sm text-sm font-medium text-neutral-600 transition-colors duration-150 hover:text-neutral-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 disabled:cursor-not-allowed disabled:hover:text-neutral-600 dark:text-neutral-400 dark:hover:text-neutral-50 dark:focus-visible:outline-zinc-50 dark:disabled:hover:text-neutral-400">Use a different email</button>
         </div>
      </div>
   </div>
</section>
</x-layout.app>
