@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'block w-full rounded-2xl border border-white/15 bg-white/8 px-4 py-3 text-white placeholder:text-slate-400 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/15 dark:border-white/10 dark:bg-slate-950/50 dark:text-slate-100 shadow-sm transition']) }}>
