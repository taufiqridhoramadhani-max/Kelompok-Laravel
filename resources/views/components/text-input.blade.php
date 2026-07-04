@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'block w-full rounded-2xl border border-slate-300 bg-white/95 px-4 py-3 text-slate-900 placeholder:text-slate-400 shadow-sm transition focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/15 dark:border-white/10 dark:bg-slate-950/70 dark:text-slate-100']) }}>
