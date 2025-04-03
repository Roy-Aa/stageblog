<?php get_template_part('components/header'); ?>

<article class="relative flex justify-center items-center">
    <section class="w-[1200px] h-auto px-5">
        <!-- x -->

        <div class="flex flex-col items-center justify-center gap-7 w-full h-[100vh] select-none">
            <h1 id="smiley" class="observe delay-75 text-5xl sm:text-6xl transition-opacity duration-500 cursor-pointer" onclick="smileyfade(this)">Stageblog Site</h1>
            <div class="observe delay-100 animate-fadein flex gap-4 items-center">
                <svg onclick="this.style.transform = 'rotate(360deg)';" class="duration-1000" xmlns="http://www.w3.org/2000/svg" fill="#00BCFF" width="27" height="27" viewBox="0 0 24 24">
                    <path d="M2.597 7.81l4.911 13.454c-3.434-1.668-5.802-5.19-5.802-9.264 0-1.493.32-2.91.891-4.19zm16.352 3.67c0-1.272-.457-2.153-.849-2.839-.521-.849-1.011-1.566-1.011-2.415 0-.978.747-1.88 1.862-1.819-1.831-1.677-4.271-2.701-6.951-2.701-3.596 0-6.76 1.845-8.601 4.64.625.02 1.489.032 3.406-.118.555-.034.62.782.066.847 0 0-.558.065-1.178.098l3.749 11.15 2.253-6.756-1.604-4.394c-.555-.033-1.08-.098-1.08-.098-.555-.033-.49-.881.065-.848 2.212.17 3.271.171 5.455 0 .555-.033.621.783.066.848 0 0-.559.065-1.178.098l3.72 11.065 1.027-3.431c.444-1.423.783-2.446.783-3.327zm-6.768 1.42l-3.089 8.975c.922.271 1.898.419 2.908.419 1.199 0 2.349-.207 3.418-.583-.086-.139-3.181-8.657-3.237-8.811zm8.852-5.839c.224 1.651-.099 3.208-.713 4.746l-3.145 9.091c3.061-1.784 5.119-5.1 5.119-8.898 0-1.79-.457-3.473-1.261-4.939zm2.967 4.939c0 6.617-5.384 12-12 12s-12-5.383-12-12 5.383-12 12-12 12 5.383 12 12zm-.55 0c0-6.313-5.137-11.45-11.45-11.45s-11.45 5.137-11.45 11.45 5.137 11.45 11.45 11.45 11.45-5.137 11.45-11.45z" />
                </svg>
                <h2 class="font-italic">WordPress</h2>
                <svg fill="#eee" clip-rule="evenodd" width="24" height="24" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="m12 10.93 5.719-5.72c.146-.146.339-.219.531-.219.404 0 .75.324.75.749 0 .193-.073.385-.219.532l-5.72 5.719 5.719 5.719c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.385-.073-.531-.219l-5.719-5.719-5.719 5.719c-.146.146-.339.219-.531.219-.401 0-.75-.323-.75-.75 0-.192.073-.384.22-.531l5.719-5.719-5.72-5.719c-.146-.147-.219-.339-.219-.532 0-.425.346-.749.75-.749.192 0 .385.073.531.219z" />
                </svg>
                <svg viewBox="0 0 162 24" fill="none" class="h-6 text-white">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.668 2c-4.445 0-7.223 2.222-8.334 6.667 1.667-2.222 3.611-3.055 5.833-2.5 1.268.317 2.175 1.236 3.178 2.255C18.979 10.081 20.87 12 25 12c4.445 0 7.223-2.222 8.334-6.666-1.666 2.222-3.61 3.055-5.833 2.5-1.269-.318-2.175-1.237-3.178-2.255C22.69 3.919 20.8 2 16.668 2zM8.334 12C3.889 12 1.11 14.222 0 18.667c1.667-2.222 3.612-3.056 5.833-2.5 1.269.316 2.175 1.236 3.178 2.255C10.645 20.081 12.536 22 16.668 22c4.444 0 7.222-2.222 8.333-6.666-1.667 2.222-3.611 3.055-5.833 2.5-1.268-.317-2.175-1.238-3.177-2.255C14.356 13.92 12.463 12 8.334 12z" class="fill-sky-400"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M50 10.427h-2.908v5.63c0 1.501.985 1.477 2.909 1.383v2.276c-3.895.47-5.443-.61-5.443-3.66v-5.63H42.4V7.988h2.158v-3.15l2.534-.751v3.901H50v2.44zm11.088-2.44h2.533v11.729h-2.533v-1.689c-.892 1.243-2.276 1.994-4.105 1.994-3.19 0-5.841-2.698-5.841-6.17 0-3.494 2.65-6.169 5.84-6.169 1.83 0 3.215.75 4.106 1.97V7.988zm-3.706 9.618c2.111 0 3.706-1.572 3.706-3.754s-1.595-3.753-3.706-3.753c-2.111 0-3.706 1.572-3.706 3.753 0 2.182 1.595 3.754 3.706 3.754zM67.844 6.228c-.891 0-1.618-.75-1.618-1.619.002-.43.173-.842.476-1.145a1.612 1.612 0 012.283 0c.304.303.475.715.477 1.145 0 .868-.727 1.619-1.618 1.619zm-1.267 13.488V7.987h2.534v11.729h-2.534zm5.466 0V2.59h2.533v17.124h-2.533zM91.021 7.987h2.674l-3.683 11.729h-2.487l-2.44-7.905-2.463 7.905h-2.486L76.453 7.987h2.674l2.276 8.092 2.463-8.092h2.416l2.44 8.092 2.299-8.092zm5.817-1.759c-.892 0-1.619-.75-1.619-1.619.003-.43.174-.842.477-1.145a1.612 1.612 0 012.284 0c.303.303.475.715.477 1.145 0 .868-.727 1.619-1.619 1.619zm-1.266 13.488V7.987h2.533v11.729H95.57zm11.634-12.034c2.628 0 4.504 1.783 4.504 4.833v7.2h-2.533v-6.943c0-1.783-1.032-2.72-2.627-2.72-1.666 0-2.979.985-2.979 3.377v6.287h-2.534V7.987h2.534V9.49c.774-1.22 2.04-1.807 3.635-1.807zm16.515-4.386h2.533v16.42h-2.533v-1.69c-.891 1.244-2.275 1.994-4.105 1.994-3.19 0-5.841-2.697-5.841-6.17 0-3.494 2.651-6.168 5.841-6.168 1.83 0 3.214.75 4.105 1.97V3.296zm-3.707 14.309c2.112 0 3.707-1.572 3.707-3.754s-1.595-3.753-3.707-3.753c-2.111 0-3.706 1.572-3.706 3.753 0 2.182 1.595 3.754 3.706 3.754zm14.732 2.416c-3.542 0-6.193-2.698-6.193-6.17 0-3.494 2.651-6.169 6.193-6.169 2.299 0 4.293 1.196 5.231 3.026l-2.182 1.267c-.516-1.102-1.665-1.806-3.072-1.806-2.065 0-3.636 1.572-3.636 3.682 0 2.111 1.571 3.683 3.636 3.683 1.407 0 2.556-.727 3.119-1.806l2.182 1.243c-.985 1.853-2.979 3.05-5.278 3.05zm9.453-8.797c0 2.135 6.311.844 6.311 5.185 0 2.346-2.041 3.612-4.574 3.612-2.346 0-4.035-1.056-4.786-2.745l2.182-1.266c.375 1.055 1.313 1.689 2.604 1.689 1.126 0 1.993-.376 1.993-1.315 0-2.087-6.31-.914-6.31-5.113 0-2.205 1.9-3.589 4.293-3.589 1.924 0 3.519.892 4.34 2.44l-2.135 1.196c-.422-.915-1.243-1.337-2.205-1.337-.915 0-1.713.399-1.713 1.243zm10.815 0c0 2.135 6.31.844 6.31 5.185 0 2.346-2.041 3.612-4.575 3.612-2.345 0-4.034-1.056-4.785-2.745l2.182-1.266c.375 1.055 1.313 1.689 2.603 1.689 1.126 0 1.995-.376 1.995-1.315 0-2.087-6.31-.914-6.31-5.113 0-2.205 1.899-3.589 4.292-3.589 1.924 0 3.519.892 4.34 2.44l-2.135 1.196c-.422-.915-1.243-1.337-2.205-1.337-.915 0-1.712.399-1.712 1.243z" fill="currentColor"></path>
                </svg>
            </div>
        </div>

        <!-- Info -->
        <div id="info" class="w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col gap-5">
            <div class="flex items-center gap-4">
                <svg fill="#00BCFF" width="32" height="32" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 1.5c-4.69 0-8.497 3.807-8.497 8.497s3.807 8.498 8.497 8.498 8.498-3.808 8.498-8.498-3.808-8.497-8.498-8.497zm0 6.5c-.414 0-.75.336-.75.75v5.5c0 .414.336.75.75.75s.75-.336.75-.75v-5.5c0-.414-.336-.75-.75-.75zm-.002-3c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1z" fill-rule="nonzero" />
                </svg>
                <h2 class="text-3xl">Informatie</h2>
            </div>

            <div class="w-full flex flex-col gap-4">
                <div class="observe text-white w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col items-center gap-5">
                    <p>
                        Voor de opleiding Software Developer MBO4 moet je <span class="text-tailwindblue">twee</span> keer stage lopen bij een erkend leerbedrijf om je <span class="text-tailwindblue">diploma</span> te kunnen behalen<span class="text-tailwindblue">.</span> Tijdens deze stages doe je praktijkervaring op in een professionele werkomgeving en pas je de kennis toe die je tijdens je opleiding hebt opgedaan<span class="text-tailwindblue">.</span>
                        Je moet in totaal minimaal 800 <span class="text-tailwindblue">uur</span> stage lopen, wat neerkomt op ongeveer 20 <span class="text-tailwindblue">weken</span> per stageperiode<span class="text-tailwindblue">.</span> Gedurende deze tijd leer je niet alleen technische vaardigheden, zoals programmeren, databases en softwareontwikkeling, maar ook soft <span class="text-tailwindblue">skills</span> zoals samenwerken, communicatie en probleemoplossend denken.
                    </p>
                </div>
                <div class="observe text-white w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col items-center gap-5">
                    <p>
                        Daarnaast krijg je de kans om te werken met professionele <span class="text-tailwindblue">tools</span> en methodes die binnen bedrijven worden gebruikt, zoals Agile/Scrum, versiebeheer (Git) en code reviews<span class="text-tailwindblue">.</span> Dit helpt je om goed voorbereid te zijn op een baan in de IT-sector na je <span class="text-tailwindblue">opleiding</span><span class="text-tailwindblue">.</span>
                        Stage lopen is een <span class="text-tailwindblue">belangrijk</span> onderdeel van de opleiding, omdat het je helpt om te ontdekken welke richting binnen softwareontwikkeling het beste bij jou past, en het biedt je een waardevol <span class="text-tailwindblue">netwerk</span> voor je toekomst<span class="text-tailwindblue">.</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col gap-5 my-10">
            <div class="flex items-center gap-4">
                <svg fill="#00BCFF" width="32" height="32" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24">
                    <path d="M11.052 17.823c-.94.53-2.439 1.295-5.143 2.088-.294.086-.593-.057-.717-.286-.214-.365-.027-.836.382-.957 2.956-.871 4.379-1.695 5.228-2.188 1.22-.707 1.511-.687 2.376-.001.256.203.612.485 1.127.818.298.193.378.591.179.883l-.013.02c-.195.285-.583.363-.874.175-.245-.159-.458-.308-.642-.442-.883-.646-.97-.637-1.903-.11zm-7.239-5.951c2.7-.766 4.714-2.265 5.515-4.156.444-1.05 1.322-1.495 2.183-1.495 1.428 0 2.81 1.225 2.085 2.936-.44 1.042-1.052 1.975-1.795 2.802-.23.256-.223.645.016.893.25.258.655.299 1.028-.124.822-.933 1.476-1.967 1.945-3.073.47-1.112.389-2.232-.229-3.155-.646-.964-1.815-1.564-3.051-1.564-.699 0-1.371.192-1.944.556-.627.397-1.122.994-1.432 1.726-.647 1.529-2.344 2.757-4.654 3.413-.288.082-.485.346-.48.643.007.416.41.712.813.598zm7.035 2.685c.307-.229.34-.672.078-.943l-.017-.018c-.223-.23-.583-.258-.839-.066-1.614 1.203-3.562 2.067-5.63 2.589-.179.045-.33.163-.418.323-.087.161-.104.351-.044.524.107.31.435.485.755.405 1.984-.499 3.819-1.281 5.372-2.295.255-.167.503-.34.743-.519zm1.35-5.968c.139-.327-.016-.704-.346-.841-.33-.137-.709.017-.848.344-1.058 2.499-3.731 4.427-7.253 5.276-.335.081-.551.404-.495.742.061.362.417.599.78.512 3.469-.835 6.784-2.778 8.162-6.033zm.219-6.138c-2.242-.24-4.376.688-5.633 2.139-.26.3-.193.757.133.975.266.176.623.128.829-.114.952-1.115 2.662-1.922 4.533-1.723 1.533.164 2.935.973 3.715 2.307.154.264.474.386.767.292.389-.125.564-.576.359-.927-.983-1.682-2.737-2.739-4.703-2.949zm-8.26 2.541c.275.188.626.115.809-.159l.388-.573c1.256-1.799 3.293-2.854 5.639-2.978.347-.018.62-.303.62-.648 0-.363-.307-.652-.672-.633-2.274.12-4.446 1.003-6.016 2.733-.427.478-.69.823-.945 1.409-.168.382-.103.658.177.849zm-.166 4.113c1.276-.417 1.957-1.01 2.439-1.653.221-.293.147-.71-.157-.912-.289-.192-.677-.127-.887.147-.372.484-.867.894-1.791 1.197-.224.073-.399.262-.436.54-.06.46.385.827.832.681zm16.118 5.644c-1.246-.382-2.04-.86-2.408-1.445-.457-.726-.285-1.692-.086-2.812.13-.735.275-1.555.251-2.421-.006-.204-.108-.394-.276-.512-.168-.118-.383-.15-.579-.087-.269.087-.447.339-.438.62.023.735-.105 1.462-.232 2.178-.224 1.264-.456 2.571.264 3.714.543.864 1.571 1.518 3.177 2.007.339.104.698-.097.785-.44.084-.345-.115-.697-.458-.802zm-.718 2.344c-2.316-.749-3.832-1.78-4.601-3.124-.177-.309-.572-.417-.883-.241-.311.175-.419.567-.243.876.928 1.62 2.667 2.839 5.285 3.695.332.108.692-.054.827-.374.141-.334-.035-.719-.385-.832zm-1.119 2.103c-.721-.263-1.346-.522-1.89-.772-.283-.13-.619-.038-.793.218-.25.366-.091.792.246.946.581.267 1.248.543 2.014.822.296.108.612-.024.748-.249.228-.349.07-.82-.325-.965zm-9.23 1.7c-.148-.29-.494-.42-.798-.302-.291.113-.608.23-.957.351-.214.074-.375.252-.425.472-.108.476.343.916.79.763.39-.134.743-.264 1.065-.389.327-.127.519-.515.325-.895zm11.533-8.426c-.195-.08-.334-.173-.416-.279-.228-.296-.115-.933.027-1.74.233-1.319.553-3.125-.255-5.361-.934-2.582-3.531-4.322-6.359-4.894-.407-.082-.786.228-.786.637 0 .301.213.56.511.619 2.601.516 4.69 2.07 5.415 4.072.693 1.915.419 3.461.199 4.704-.189 1.073-.354 2 .221 2.744.232.302.565.535 1.021.71.381.146.797-.105.843-.505.035-.302-.137-.591-.421-.707zm-6.531 10.329c-2.496-1.096-1.827-1.097-4.201.004-.228.105-.37.337-.358.586.018.388.369.611.694.611.092 0 .182-.018.261-.055 1.7-.793 1.109-.84 3.026.005.076.034.161.05.25.05.32 0 .677-.212.698-.603.014-.256-.133-.494-.37-.598zm2.567-1.607c-1.579-.635-2.711-1.245-3.431-1.632-1.133-.61-1.265-.718-2.642-.01l-.126.065c-.311.159-.434.537-.275.846.184.36.576.445.869.295.573-.293.876-.434 1.557-.067.752.404 1.938 1.042 3.592 1.706.468.188.945-.226.856-.714-.038-.22-.19-.404-.4-.489z" />
                </svg>
                <h2 class="text-3xl">Wie ben ik?</h2>
            </div>

            <div class="observe text-white w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col gap-5">
                <p>Mijn naam is <span class="text-tailwindblue">Roy Aardenburg</span> en ik volg de opleiding <span class="text-tailwindblue">Software Developer MBO4</span> aan het Media College <span class="text-tailwindblue">Amsterdam</span>. Ik heb voor deze opleiding gekozen omdat ik altijd al een grote interesse heb gehad in <span class="text-tailwindblue">technologie</span> en computers, en hoe al die systemen en programma’s eigenlijk werken. Tijdens mijn opleiding heb ik al veel ervaring opgedaan zowel met <span class="text-tailwindblue">Front-end</span> als <span class="text-tailwindblue">Back-end</span>, waardoor ik een sterke basis heb als Software Developer. Ik ben altijd op zoek naar nieuwe uitdagingen en manieren om mijn vaardigheden verder te ontwikkelen.</p>
            </div>
            <div class="observe text-white w-full h-auto rounded-md border border-gray-700 p-6 grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div class="observe delay-100 text-white w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col gap-5">
                    <h2>Pluspunten</h2>
                    <p class="observe delay-150 flex gap-2 text-white w-full h-auto rounded-md border border-gray-700 p-3"><span class="text-green-500">+</span>Leergierig</p>
                    <p class="observe delay-160 flex gap-2 text-white w-full h-auto rounded-md border border-gray-700 p-3"><span class="text-green-500">+</span>Samenwerken</p>
                    <p class="observe delay-170 flex gap-2 text-white w-full h-auto rounded-md border border-gray-700 p-3"><span class="text-green-500">+</span>Creativiteit</p>
                    <p class="observe delay-180 flex gap-2 text-white w-full h-auto rounded-md border border-gray-700 p-3"><span class="text-green-500">+</span>Zelfstandigheid</p>
                </div>
                <div class="observe delay-100 text-white w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col gap-5">
                    <h2>Minpunten</h2>
                    <p class="observe delay-150 flex gap-2 text-white w-full h-auto rounded-md border border-gray-700 p-3"><span class="text-red-500">-</span>Perfectionisme</p>
                    <p class="observe delay-160 flex gap-2 text-white w-full h-auto rounded-md border border-gray-700 p-3"><span class="text-red-500">-</span>Zelfredzaamheid</p>
                    <p class="observe delay-170 flex gap-2 text-white w-full h-auto rounded-md border border-gray-700 p-3"><span class="text-red-500">-</span>Beginnend Developer</p>
                </div>
            </div>
        </div>

        <div id="stageplek" class="my-10 w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col gap-5">
            <div class="flex items-center gap-4">
                <svg fill="#00BCFF" width="32" height="32" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 1.5c-4.69 0-8.497 3.807-8.497 8.497s3.807 8.498 8.497 8.498 8.498-3.808 8.498-8.498-3.808-8.497-8.498-8.497zm0 6.5c-.414 0-.75.336-.75.75v5.5c0 .414.336.75.75.75s.75-.336.75-.75v-5.5c0-.414-.336-.75-.75-.75zm-.002-3c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1z" fill-rule="nonzero" />
                </svg>
                <h2 class="text-3xl">Stageplek 1</h2>
            </div>


            <!-- Stage 1 -->

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="observe rounded-md border border-gray-700 p-6 flex items-center justify-center">
                    <a target="_blank" href="https://www.fbidigital.nl/"><img class="object-cover w-auto transition hover:rotate-x-10 hover:-rotate-y-30" src="<?php echo get_template_directory_uri(); ?>/assets/img/fbi_logo.webp" alt="Logo"></a>
                </div>
                <div class="observe delay-100 rounded-md border border-gray-700 p-6 flex flex-col gap-2">
                    <div class="flex gap-2 items-center">
                        <h2>FBI Digital Agency </h2>
                        <svg onclick="this.style.transform = 'rotate(360deg)';" class="duration-1000" fill="#F2501A" width="24" height="24" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="m11.322 2.923c.126-.259.39-.423.678-.423.289 0 .552.164.678.423.974 1.998 2.65 5.44 2.65 5.44s3.811.524 6.022.829c.403.055.65.396.65.747 0 .19-.072.383-.231.536-1.61 1.538-4.382 4.191-4.382 4.191s.677 3.767 1.069 5.952c.083.462-.275.882-.742.882-.122 0-.244-.029-.355-.089-1.968-1.048-5.359-2.851-5.359-2.851s-3.391 1.803-5.359 2.851c-.111.06-.234.089-.356.089-.465 0-.825-.421-.741-.882.393-2.185 1.07-5.952 1.07-5.952s-2.773-2.653-4.382-4.191c-.16-.153-.232-.346-.232-.535 0-.352.249-.694.651-.748 2.211-.305 6.021-.829 6.021-.829s1.677-3.442 2.65-5.44z" fill-rule="nonzero" />
                        </svg>
                    </div>
                    <p>Mijn eerste stage periode loop ik bij FBI Digital Agency in Haarlem. Hier leer ik hoe het is om in een team te werken, problemen te verhelpen en leer ik omgaan met verschillende tools zoals Wordpress en Tailwind CSS.</p>
                </div>
            </div>

            <!-- Progress bar -->

            <div class="observe w-full h-auto flex flex-col p-6 border border-gray-700 rounded-md">
                <div class="w-full flex justify-between">
                    <h2>Februari <span class="text-tailwindblue">-</span> 2025</h2>
                    <h2>Juli <span class="text-tailwindblue">-</span> 2025</h2>
                </div>
                <div class="h-[5px] w-full bg-white rounded-full relative">
                    <div class="absolute h-[5px] w-2/6 bg-tailwindblue rounded-full"></div>
                </div>
            </div>

            <!-- Ervaring -->

            <div class="w-full h-auto flex flex-col p-6 border border-gray-700 rounded-md gap-4">
                <div class="flex items-center gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#00BCFF" width="32" height="32" viewBox="0 0 24 24">
                        <path d="M23.269 19.743l-11.945-11.945c-.557-.557-.842-1.33-.783-2.115.115-1.485-.395-3.009-1.529-4.146-1.03-1.028-2.376-1.537-3.723-1.537-.507 0-1.015.072-1.505.216l3.17 3.17c.344 1.589-1.959 3.918-3.567 3.567l-3.169-3.17c-.145.492-.218 1-.218 1.509 0 1.347.51 2.691 1.538 3.721 1.135 1.136 2.66 1.645 4.146 1.53.783-.06 1.557.226 2.113.783l11.946 11.944c.468.468 1.102.73 1.763.73 1.368 0 2.494-1.108 2.494-2.494 0-.638-.244-1.276-.731-1.763zm-1.769 2.757c-.553 0-1-.448-1-1s.447-1 1-1c.553 0 1 .448 1 1s-.447 1-1 1zm-7.935-15.289l5.327-5.318c.584-.585 1.348-.878 2.113-.878.764 0 1.529.292 2.113.878.589.587.882 1.357.882 2.125 0 .764-.291 1.528-.873 2.11l-5.326 5.318-4.236-4.235zm-3.53 9.18l-5.227 5.185c-.227.23-.423.488-.574.774l-.301.58-2.1 1.07-.833-.834 1.025-2.146.58-.302c.286-.15.561-.329.79-.558l5.227-5.185 1.413 1.416z" />
                    </svg>
                    <h2>Ervaring met nieuwe Tools/Plugins</h2>
                </div>
                <div class="observe w-full h-auto grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 p-6 border border-gray-700 rounded-md items-center">
                    <a class="observe delay-100 rounded-md border border-gray-700 p-6 flex items-center justify-center" target="_blank" href="https://wordpress.com/"><img class="h-20 hover:scale-105 duration-100 object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/img/Wordpress.png" alt="Logo"></a>
                    <a class="observe delay-125 rounded-md border border-gray-700 p-6 flex items-center justify-center" target="_blank" href="https://tailwindcss.com/"><img class="h-20 w-25 hover:scale-105 duration-100 object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/img/Tailwind.svg" alt="Logo"></a>
                    <a class="observe delay-150 rounded-md border border-gray-700 p-6 flex items-center justify-center" target="_blank" href="https://laravel.com/"><img class="h-20 hover:scale-105 duration-100 object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/img/Laravel.png" alt="Logo"></a>
                    <a class="observe delay-175 rounded-md border border-gray-700 p-6 flex items-center justify-center" target="_blank" href="https://www.gravityforms.com/"><img class="h-20 hover:scale-105 duration-100 object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/img/Gravityforms.png" alt="Logo"></a>
                    <a class="observe delay-200 rounded-md border border-gray-700 p-6 flex items-center justify-center" target="_blank" href="https://www.advancedcustomfields.com/"><img class="h-20 hover:scale-105 duration-100 object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/img/acficon.svg" alt="Logo"></a>
                    <a class="observe delay-225 rounded-md border border-gray-700 p-6 flex items-center justify-center" target="_blank" href="https://wpmailsmtp.com/"><img class="h-20 hover:scale-105 duration-100 object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/img/wpmailsmtp.png" alt="Logo"></a>
                    <a class="observe delay-250 rounded-md border border-gray-700 p-6 flex items-center justify-center" target="_blank" href="https://duplicator.com/"><img class="h-20 hover:scale-105 duration-100 object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/img/Duplicator.webp" alt="Logo"></a>
                    <a class="observe delay-275 rounded-md border border-gray-700 p-6 flex items-center justify-center" target="_blank" href="https://facetwp.com/"><img class="h-20 w-25 object-contain hover:scale-105 duration-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/facetwp-logo-circle.png" alt="Logo"></a>
                    <a class="observe delay-300 rounded-md border border-gray-700 p-6 flex items-center justify-center" target="_blank" href="https://www.figma.com/"><img class="h-20 hover:scale-105 duration-100 object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/img/Figma.png" alt="Logo"></a>
                    <a class="observe delay-325 rounded-md border border-gray-700 p-6 flex items-center justify-center" target="_blank" href="https://mailtrap.io/"><img class="h-20 hover:scale-105 duration-100 object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/img/Mailtrap.png" alt="Logo"></a>
                    <a class="observe delay-350 rounded-md border border-gray-700 p-6 flex items-center justify-center" target="_blank" href="https://www.megamenu.com/"><img class="h-20 hover:scale-105 duration-100 object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/img/MMM.png" alt="Logo"></a>
                    <a class="observe delay-375 rounded-md border border-gray-700 p-6 flex items-center justify-center" target="_blank" href="https://woocommerce.com/"><img class="h-20 hover:scale-105 duration-100 object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/img/woocommerce-logo_brandlogos.net_9i40c.png" alt="Logo"></a>
                </div>
            </div>
        </div>

        <!-- Stage 2 -->

        <div id="stageplek" class="w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col gap-5">
            <div class="flex items-center gap-4">
                <svg fill="#00BCFF" width="32" height="32" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 1.5c-4.69 0-8.497 3.807-8.497 8.497s3.807 8.498 8.497 8.498 8.498-3.808 8.498-8.498-3.808-8.497-8.498-8.497zm0 6.5c-.414 0-.75.336-.75.75v5.5c0 .414.336.75.75.75s.75-.336.75-.75v-5.5c0-.414-.336-.75-.75-.75zm-.002-3c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1z" fill-rule="nonzero" />
                </svg>
                <h2 class="text-3xl">Stageplek 2</h2>
            </div>
            <div class="observe grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="rounded-md border border-gray-700 p-6 flex justify-center text-center">
                    <p class="text-8xl">?</p>
                </div>
                <div class="observe delay-100 rounded-md border border-gray-700 p-6 flex justify-center items-center">
                    <p class="text-4xl">???</p>
                </div>
            </div>

            <!-- Progress bar -->

            <div class="observe w-full h-auto flex flex-col p-6 border border-gray-700 rounded-md">
                <div class="w-full flex justify-between">
                    <h2>Sep <span class="text-tailwindblue">-</span> 2025</h2>
                    <h2>Feb <span class="text-tailwindblue">-</span> 2026</h2>
                </div>
                <div class="h-[5px] w-full bg-white rounded-full"></div>
            </div>

            <!-- Ervaring -->

            <div class="observe w-full h-auto flex flex-col p-6 border border-gray-700 rounded-md gap-4">
                <div class="flex items-center gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#00BCFF" width="32" height="32" viewBox="0 0 24 24">
                        <path d="M23.269 19.743l-11.945-11.945c-.557-.557-.842-1.33-.783-2.115.115-1.485-.395-3.009-1.529-4.146-1.03-1.028-2.376-1.537-3.723-1.537-.507 0-1.015.072-1.505.216l3.17 3.17c.344 1.589-1.959 3.918-3.567 3.567l-3.169-3.17c-.145.492-.218 1-.218 1.509 0 1.347.51 2.691 1.538 3.721 1.135 1.136 2.66 1.645 4.146 1.53.783-.06 1.557.226 2.113.783l11.946 11.944c.468.468 1.102.73 1.763.73 1.368 0 2.494-1.108 2.494-2.494 0-.638-.244-1.276-.731-1.763zm-1.769 2.757c-.553 0-1-.448-1-1s.447-1 1-1c.553 0 1 .448 1 1s-.447 1-1 1zm-7.935-15.289l5.327-5.318c.584-.585 1.348-.878 2.113-.878.764 0 1.529.292 2.113.878.589.587.882 1.357.882 2.125 0 .764-.291 1.528-.873 2.11l-5.326 5.318-4.236-4.235zm-3.53 9.18l-5.227 5.185c-.227.23-.423.488-.574.774l-.301.58-2.1 1.07-.833-.834 1.025-2.146.58-.302c.286-.15.561-.329.79-.558l5.227-5.185 1.413 1.416z" />
                    </svg>
                    <h2>Ervaring met nieuwe Tools/Plugins</h2>
                </div>
                <div class="w-full h-auto flex justify-center gap-4 p-6 border border-gray-700 rounded-md ">
                    <h2>???</h2>
                </div>
            </div>
        </div>

        <!-- Blog -->

        <div id="stageblog" class="my-20 w-full h-auto p-4 flex flex-col justify-center items-center rounded-md border border-gray-700">
            <div class="flex items-center gap-2">
                <svg fill="#00BCFF" width="32" height="32" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M11.362 2c4.156 0 2.638 6 2.638 6s6-1.65 6 2.457v11.543h-16v-20h7.362zm.827-2h-10.189v24h20v-14.386c0-2.391-6.648-9.614-9.811-9.614zm4.811 13h-10v-1h10v1zm0 2h-10v1h10v-1zm0 3h-10v1h10v-1z" />
                </svg>
                <h2 class="text-3xl">Blog Posts</h2>
            </div>
            <div class="grid grid-rows-2 p-6 gap-4 w-full">

                <div class="flex flex-col gap-4 rounded-md border border-gray-700 w-full p-4 relative">
                    <div class="top-2 left-2 h-[10px] w-[10px] bg-tailwindblue absolute rounded-full">
                        <div class="h-[10px] w-[10px] bg-tailwindblue animate-ping rounded-full"></div>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg fill="#00BCFF" width="32" height="32" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="m9.134 19.319 11.587-11.588c.171-.171.279-.423.279-.684 0-.229-.083-.466-.28-.662l-3.115-3.104c-.185-.185-.429-.277-.672-.277s-.486.092-.672.277l-11.606 11.566c-.569 1.763-1.555 4.823-1.626 5.081-.02.075-.029.15-.029.224 0 .461.349.848.765.848.511 0 .991-.189 5.369-1.681zm-3.27-3.342 2.137 2.137-3.168 1.046zm.955-1.166 10.114-10.079 2.335 2.327-10.099 10.101z" fill-rule="nonzero" />
                        </svg>
                        <h2>Stage 1 Posts - FBI Digital Agency</h2>
                        <svg fill="#F2501A" class="hidden sm:block" width="24" height="24" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="m11.322 2.923c.126-.259.39-.423.678-.423.289 0 .552.164.678.423.974 1.998 2.65 5.44 2.65 5.44s3.811.524 6.022.829c.403.055.65.396.65.747 0 .19-.072.383-.231.536-1.61 1.538-4.382 4.191-4.382 4.191s.677 3.767 1.069 5.952c.083.462-.275.882-.742.882-.122 0-.244-.029-.355-.089-1.968-1.048-5.359-2.851-5.359-2.851s-3.391 1.803-5.359 2.851c-.111.06-.234.089-.356.089-.465 0-.825-.421-.741-.882.393-2.185 1.07-5.952 1.07-5.952s-2.773-2.653-4.382-4.191c-.16-.153-.232-.346-.232-.535 0-.352.249-.694.651-.748 2.211-.305 6.021-.829 6.021-.829s1.677-3.442 2.65-5.44z" fill-rule="nonzero" />
                        </svg>
                    </div>
                    <?php
                    $stage1_query = new WP_Query(array(
                        'category_name' => 'stage-1',
                        'posts_per_page' => 10,
                        'order'          => 'ASC',
                        'orderby'        => 'date'
                    ));
                    if ($stage1_query->have_posts()): ?>
                        <?php while ($stage1_query->have_posts()): $stage1_query->the_post(); ?>

                            <article class="observe rounded-md border border-gray-700 p-6 text-center">
                                <h3 class="text-xl font-semibold">
                                    <a class="flex gap-2 justify-center items-center group" style="animation-fill-mode: both;" href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                            </article>

                        <?php endwhile; ?>
                    <?php endif;
                    wp_reset_postdata(); ?>
                </div>

                <div class="flex flex-col gap-5 rounded-md border border-gray-700 w-full p-4 relative">
                    <div class="top-2 left-2 h-[10px] w-[10px] bg-tailwindblue absolute rounded-full">
                        <div class="h-[10px] w-[10px] bg-tailwindblue animate-ping rounded-full"></div>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg fill="#00BCFF" width="32" height="32" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="m9.134 19.319 11.587-11.588c.171-.171.279-.423.279-.684 0-.229-.083-.466-.28-.662l-3.115-3.104c-.185-.185-.429-.277-.672-.277s-.486.092-.672.277l-11.606 11.566c-.569 1.763-1.555 4.823-1.626 5.081-.02.075-.029.15-.029.224 0 .461.349.848.765.848.511 0 .991-.189 5.369-1.681zm-3.27-3.342 2.137 2.137-3.168 1.046zm.955-1.166 10.114-10.079 2.335 2.327-10.099 10.101z" fill-rule="nonzero" />
                        </svg>
                        <h2>Stage 2 Posts - ???</h2>
                    </div>

                    <?php
                    $stage2_query = new WP_Query(array(
                        'category_name' => 'stage-2',
                        'posts_per_page' => 10,
                        'order'          => 'ASC',
                        'orderby'        => 'date'
                    ));
                    if ($stage2_query->have_posts()): ?>
                        <?php while ($stage2_query->have_posts()): $stage2_query->the_post(); ?>

                            <article class="observe rounded-md border border-gray-700 p-6 text-center">
                                <h3 class="text-xl font-semibold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            </article>

                        <?php endwhile; ?>
                    <?php endif;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>

        <div id="oudeblog" class="my-10 w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col gap-5">
            <div class="flex items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#00BCFF" width="32" height="32" viewBox="0 0 24 24">
                    <path d="M22 3.2c0-.663-.537-1.2-1.2-1.2h-17.6c-.663 0-1.2.537-1.2 1.2v11.8h20v-11.8zm-2 9.8h-16v-9h16v9zm2 3h-20c-.197.372-2 4.582-2 4.998 0 .522.418 1.002 1.002 1.002h21.996c.584 0 1.002-.48 1.002-1.002 0-.416-1.803-4.626-2-4.998zm-12.229 5l.467-1h3.523l.467 1h-4.457z" />
                </svg>
                <h2 class="text-3xl">Oude Blog Site</h2>
            </div>
            <div class="observe rounded-md border border-gray-700 p-6 flex justify-center text-center overflow-hidden relative">
                <img class="hover:opacity-0 duration-500 object-contain z-20" src="<?php echo get_template_directory_uri(); ?>/assets/img/OldBlog.png" alt="Old Blog">
                <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10 text-3xl font-bold text-white cursor-pointer">Een hele verbetering!</span>
            </div>
        </div>
    </section>
</article>

<?php get_template_part('components/footer'); ?>