<nav id="navbar" class="fixed top-0 left-0 w-full z-50 bg-transparent transition-all duration-300">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <h1 class="text-2xl font-extrabold fancy-font text-white transition-all duration-300" id="logo">
            Marrion
        </h1>

        <!-- Navigation Links -->
        <ul class="flex space-x-6">
            <li><a href="#services"
                    class="nav-link text-white hover:text-gray-300 transition-all duration-300">Services</a></li>
            <li><a href="#portfolio"
                    class="nav-link text-white hover:text-gray-300 transition-all duration-300">Portfolio</a></li>
            <li><a href="#testimonials"
                    class="nav-link text-white hover:text-gray-300 transition-all duration-300">Testimonials</a></li>
            <li><a href="#clients"
                    class="nav-link text-white hover:text-gray-300 transition-all duration-300">Clients</a></li>
        </ul>

        <!-- Social Links -->
        <div class="flex space-x-4">
            <a href="#" class="text-white hover:text-gray-300 transition-all duration-300 social-link">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-white hover:text-gray-300 transition-all duration-300 social-link">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" class="text-white hover:text-gray-300 transition-all duration-300 social-link">
                <i class="fab fa-github"></i>
            </a>
        </div>
    </div>

    <!-- Scroll Button -->
    <button id="scrollButton"
        class="fixed bottom-8 right-8 w-12 h-12 bg-gray-800 text-white rounded-full flex items-center justify-center shadow-lg transition-all duration-300 hover:bg-gray-600">
        <i id="scrollIcon" class="fas fa-caret-down text-xl"></i>
    </button>
</nav>

<script>
    window.addEventListener("scroll", function() {
        let navbar = document.getElementById("navbar");
        let navLinks = document.querySelectorAll(".nav-link");
        let logo = document.getElementById("logo");
        let socialLinks = document.querySelectorAll(".social-link");
        let scrollButton = document.getElementById("scrollButton");
        let scrollIcon = document.getElementById("scrollIcon");

        if (window.scrollY > 50) {
            navbar.classList.add("bg-white", "shadow-md");
            navbar.classList.remove("bg-transparent");

            navLinks.forEach(link => {
                link.classList.remove("text-white");
                link.classList.add("text-gray-900");
            });

            socialLinks.forEach(link => {
                link.classList.remove("text-white");
                link.classList.add("text-gray-900");
            });

            logo.classList.remove("text-white");
            logo.classList.add("text-gray-900");
            scrollIcon.classList.replace("fa-caret-down", "fa-caret-up");
        } else {
            navbar.classList.add("bg-transparent");
            navbar.classList.remove("bg-white", "shadow-md");

            navLinks.forEach(link => {
                link.classList.remove("text-gray-900");
                link.classList.add("text-white");
            });

            socialLinks.forEach(link => {
                link.classList.remove("text-gray-900");
                link.classList.add("text-white");
            });

            logo.classList.remove("text-gray-900");
            logo.classList.add("text-white");
            scrollIcon.classList.replace("fa-caret-up", "fa-caret-down");
        }
    });

    document.getElementById("scrollButton").addEventListener("click", function() {
        if (window.scrollY + window.innerHeight >= document.body.scrollHeight) {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        } else {
            window.scrollTo({
                top: document.body.scrollHeight,
                behavior: "smooth"
            });
        }
    });
</script>

<style>
    .fancy-font {
        font-family: 'Pacifico', cursive;
    }
</style>
