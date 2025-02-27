<!DOCTYPE html>
<html class="scroll-smooth" lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body class="bg-lightblack">
<header class="text-white p-4 border-b border-gray-700 w-full bg-lightblack fixed z-20">
    <div class="flex items-center justify-between">

        <!-- Home page url -->
        <a href="/" class="flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 128 128" xml:space="preserve">
                <path style="fill:#00BCFF" d="M101.486 0H26.558c-4.378 0-7.944 3.566-7.944 7.944l-.044 100.364c0 4.378 3.566 7.944 7.944 7.944h4.899V128l8.476-4.413L48.365 128v-11.748h53.121c4.387 0 7.944-3.566 7.944-7.944V7.944c0-4.378-3.557-7.944-7.944-7.944zM35.949 19.86h56.102v5.296H35.949V19.86zm-4.537 89.59h-2.769a3.282 3.282 0 0 1-3.272-3.272v-5.264h6.04v8.536zm4.537-71.054V33.1h56.102v5.296H35.949zm66.679 67.782a3.272 3.272 0 0 1-3.272 3.272H48.365v-8.535h54.263v5.263z"/>
            </svg>
            <h1 class="text-xl font-semibold">Stageblog</h1>
        </a>

        <div class="hidden items-center gap-8 sm:flex">
            <a href="#info">Info</a>
            <a href="#stageplek">Stage plek</a>
            <a href="#stageblog">Stage blog</a>
            <a href="https://github.com/Roy-Aa" target="_blank">
                <svg class="hover:scale-120 transition" xmlns="http://www.w3.org/2000/svg" fill="#00BCFF" width="32" height="32" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
            </a>
            <a href="https://royaardenburg.nl/" class="hover:scale-1.2" target="_blank">
                <svg class="hover:scale-120 transition" xmlns="http://www.w3.org/2000/svg" fill="#00BCFF" width="32" height="32" viewBox="0 0 24 24"><path d="M9 6h-2v-2c0-1.104.896-2 2-2h6c1.104 0 2 .896 2 2v2h-2v-1.5c0-.276-.224-.5-.5-.5h-5c-.276 0-.5.224-.5.5v1.5zm7 6v2h8v8h-24v-8h8v-2h-8v-5h24v5h-8zm-2-1h-4v4h4v-4z"/></svg>
            </a>
        </div>

        <div class="flex items-center sm:hidden">
            <button>
                <svg fill="#00BCFF" width="32" height="32" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 1.5c-4.69 0-8.497 3.807-8.497 8.497s3.807 8.498 8.497 8.498 8.498-3.808 8.498-8.498-3.808-8.497-8.498-8.497zm4.998 11.745c0-.414-.336-.75-.75-.75h-8.5c-.414 0-.75.336-.75.75s.336.75.75.75h8.5c.414 0 .75-.336.75-.75zm0-3.248c0-.414-.336-.75-.75-.75h-8.5c-.414 0-.75.336-.75.75s.336.75.75.75h8.5c.414 0 .75-.336.75-.75zm0-3.252c0-.414-.336-.75-.75-.75h-8.5c-.414 0-.75.336-.75.75s.336.75.75.75h8.5c.414 0 .75-.336.75-.75z" fill-rule="nonzero"/></svg>
            </button>
        </div>
    </div>
</header>
