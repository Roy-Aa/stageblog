    <?php wp_footer(); ?>

        <section class="text-white p-4 border-t border-gray-700 w-full bg-lightblack flex items-center justify-between">
            <h3 class="font-bold">Copyright <span class="font-bold text-tailwindblue">©</span> 2025 <span class="font-bold text-tailwindblue">-</span> <span class="transition-opacity duration-500 cursor-pointer" id="wave" onclick="wavefade(this)">Roy Aardenburg</span></h3>
        </section>

    <script>
        function smileyfade(element) {
            element.style.opacity = '0';
            setTimeout(function() {
                document.getElementById('smiley').innerText = ":)";
                element.style.opacity = '1'; 
            }, 500);
            
            setTimeout(function() {
                element.style.opacity = '0';
            }, 1500);
            setTimeout(function() {
                
                document.getElementById('smiley').innerText = "Stageblog Site";
                element.style.opacity = '1';
            }, 2000);
        }

        function markfade(element) {
            element.style.opacity = '0';
            setTimeout(function() {
                document.getElementById('mark').innerText = "?";
                element.style.opacity = '1';
                element.style.color = 'red';
            }, 500);

            setTimeout(function() {
                element.style.opacity = '0';
            }, 1500);


            setTimeout(function() {
                document.getElementById('mark').innerText = "404";
                element.style.opacity = '1';
                element.style.color = '#00BCFF';
            }, 2000);
        }

        function wavefade(element) {
            element.style.opacity = '0';
            setTimeout(function() {
                document.getElementById('wave').innerText = "👋";
                element.style.opacity = '1'; 
            }, 500);

            setTimeout(function() {
                element.style.opacity = '0';
            }, 1000);


            setTimeout(function() {
                
                document.getElementById('wave').innerText = "Roy Aardenburg";
                element.style.opacity = '1';
            }, 1500);
        }

        document.addEventListener("DOMContentLoaded", function () {
        const menuToggle = document.getElementById("menu-toggle");
        const mobileMenu = document.getElementById("mobile-menu");

        menuToggle.addEventListener("click", function () {
            mobileMenu.classList.toggle("hidden");
            });
        });
    </script>
    </body>
</html>