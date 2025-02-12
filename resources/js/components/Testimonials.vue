<template>
    <section
        class="py-16 bg-gray-50 flex items-center justify-center min-h-screen"
        id="testimonials"
    >
        <div class="container mx-auto text-center px-4 max-w-lg">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-6">
                What People Say
            </h2>
            <p class="text-gray-600 mb-8">
                Here are some testimonials from my clients.
            </p>

            <div class="relative overflow-hidden w-full">
                <div
                    ref="scrollContainer"
                    class="flex transition-transform duration-500"
                    :style="{ transform: `translateX(-${activeIndex * 100}%)` }"
                >
                    <div
                        v-for="testimonial in testimonials"
                        :key="testimonial.id"
                        class="bg-white p-8 rounded-lg shadow-lg flex flex-col items-center text-center w-full flex-shrink-0 mx-auto transform transition-transform"
                    >
                        <img
                            :src="testimonial.image"
                            :alt="testimonial.name"
                            class="w-20 h-20 rounded-full mb-4 object-cover"
                        />
                        <p class="text-gray-600 italic">
                            "{{ testimonial.feedback }}"
                        </p>
                        <p class="text-gray-800 font-bold mt-4">
                            {{ testimonial.name }}
                        </p>
                        <p class="text-gray-600">{{ testimonial.position }}</p>
                    </div>
                </div>
                <div class="flex justify-center mt-4 space-x-2">
                    <span
                        v-for="(dot, index) in paginationDots"
                        :key="index"
                        @click="scrollTo(index)"
                        class="w-3 h-3 rounded-full cursor-pointer transition-all duration-300"
                        :class="{
                            'bg-gray-800': activeIndex === index,
                            'bg-gray-400': activeIndex !== index,
                        }"
                    >
                    </span>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "TestimonialsSection",
    data() {
        return {
            testimonials: [
                {
                    id: 1,
                    name: "Jane Doe",
                    position: "Product Manager",
                    feedback:
                        "Marrion Stacey is an amazing developer! Highly recommended.",
                    image: "./images/testimonial1.jpg",
                },
                {
                    id: 2,
                    name: "John Smith",
                    position: "CTO, TechCorp",
                    feedback: "Great attention to detail and outstanding work.",
                    image: "./images/testimonial2.jpg",
                },
                {
                    id: 3,
                    name: "Emily Johnson",
                    position: "CEO, StartupX",
                    feedback:
                        "Delivered the project on time with excellent quality.",
                    image: "./images/testimonial3.jpg",
                },
                {
                    id: 4,
                    name: "Michael Brown",
                    position: "Software Engineer, DevSolutions",
                    feedback:
                        "Stacey is highly skilled and a great team player.",
                    image: "./images/testimonial4.jpg",
                },
                {
                    id: 5,
                    name: "Sarah Williams",
                    position: "UX Designer, Creative Hub",
                    feedback: "His UI/UX expertise brought our vision to life.",
                    image: "./images/testimonial5.jpg",
                },
            ],
            activeIndex: 0,
            intervalId: null,
        };
    },
    computed: {
        paginationDots() {
            return Array.from({ length: this.testimonials.length });
        },
    },
    methods: {
        scrollTo(index) {
            this.activeIndex = index;
        },
        autoScroll() {
            this.intervalId = setInterval(() => {
                this.activeIndex =
                    (this.activeIndex + 1) % this.testimonials.length;
            }, 4000);
        },
    },
    mounted() {
        this.autoScroll();
    },
    beforeDestroy() {
        clearInterval(this.intervalId);
    },
};
</script>

<style scoped>
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}
.scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
</style>
