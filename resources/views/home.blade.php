<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marrion Stacey - Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans">
    @include('partials.navbar') <!-- Navbar Section -->

    <div id="app">
        <header-section></header-section>

        <main class="container mx-auto px-6">
            <about-section></about-section>
            <services-section></services-section>
            <portfolio-section></portfolio-section>
            <testimonials-section></testimonials-section>
            <clients-section></clients-section>
            <contact-section></contact-section>
        </main>

        <footer-section></footer-section>
    </div>

    <script type="module">
        import {
            createApp
        } from 'vue';
        import App from '@/components/App.vue';

        const app = createApp(App);
        app.mount('#app');
    </script>

</body>

</html>
