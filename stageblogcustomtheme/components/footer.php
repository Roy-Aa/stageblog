    <?php wp_footer(); ?>

        <section class="text-white p-4 border-t border-gray-700 w-full bg-lightblack">
            <h3 class="font-bold">Copyright <span class="font-bold text-tailwindblue">©</span> 2025 Roy Aardenburg</h3>
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
        }, 500);

        setTimeout(function() {
            element.style.opacity = '0';
        }, 1500);


        setTimeout(function() {
            
            document.getElementById('mark').innerText = "404";
            element.style.opacity = '1';
        }, 2000);
        }
    </script>
    </body>
</html>