@props(['title', 'subtitle', 'url'])

<a class="flex-1 border border-slate-200 rounded-lg px-6 pt-32 pb-4 inline-flex justify-between group hover:bg-gradient-to-br from-dodger-blue to-wisteria text-slate-800 hover:text-white hover:shadow-outline transition-['box-shadow'] duration-250"
    href="/{{$url}}">
    <p class="translate-y-3 group-hover:translate-y-0 transition-transform duration-150">{{$title}}
        <span
            class="opacity-0 text-white group-hover:opacity-90 font-light block -translate-y-4 group-hover:translate-y-0 transition">Including
            {{$subtitle}}</span>
    </p>
    <x-ri-arrow-right-line class="w-4" />
</a>