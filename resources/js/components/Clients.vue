<template>
    <section
        class="py-8 bg-gray-100 flex items-center justify-center"
        id="clients"
    >
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-extrabold text-gray-800 mb-4">
                Our Clients
            </h2>

            <div class="relative overflow-hidden w-full max-w-4xl mx-auto">
                <div
                    ref="scrollContainer"
                    class="flex items-center space-x-8 animate-scroll"
                >
                    <img
                        v-for="(logo, index) in logos"
                        :key="index"
                        :src="logo.src"
                        :alt="logo.alt"
                        class="h-16 md:h-20 w-32 object-contain mx-4"
                    />
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "ClientsSection",
    data() {
        return {
            logos: [
                { src: "./images/client1.png", alt: "Client 1" },
                { src: "./images/client2.png", alt: "Client 2" },
                { src: "./images/client3.png", alt: "Client 3" },
                { src: "./images/client4.png", alt: "Client 4" },
                { src: "./images/client5.png", alt: "Client 5" },
                { src: "./images/client6.png", alt: "Client 6" },
                { src: "./images/client7.png", alt: "Client 7" },
                { src: "./images/client8.png", alt: "Client 8" },
            ],
        };
    },
};
</script>

<style scoped>
@keyframes scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-100%);
    }
}

.animate-scroll {
    display: flex;
    white-space: nowrap;
    animation: scroll 20s linear infinite;
}
</style>
