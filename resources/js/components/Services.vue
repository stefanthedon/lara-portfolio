<template>
    <section class="py-16 bg-gray-100" id="services">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-6">
                What I Do
            </h2>
            <div
                class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-8 px-6 md:px-20"
            >
                <div
                    v-for="service in services"
                    :key="service.title"
                    class="bg-white p-10 rounded-xl shadow-lg transform transition-transform duration-300 hover:-translate-y-2 flex flex-col items-center h-72"
                >
                    <font-awesome-icon
                        :icon="service.icon"
                        class="text-5xl text-indigo-600 mb-4"
                    />
                    <h3 class="text-2xl font-semibold text-gray-800">
                        {{ service.title }}
                    </h3>
                    <p class="text-gray-600 mt-2 text-center">
                        {{ service.description }}
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import {
    faCode,
    faMobileAlt,
    faPalette,
} from "@fortawesome/free-solid-svg-icons";

export default {
    name: "ServicesSection",
    components: {
        FontAwesomeIcon,
    },
    data() {
        return {
            services: [
                {
                    title: "Web Development",
                    description: "Building dynamic and responsive websites.",
                    icon: faCode,
                },
                {
                    title: "Mobile Development",
                    description: "Creating user-friendly mobile applications.",
                    icon: faMobileAlt,
                },
                {
                    title: "UI/UX Design",
                    description:
                        "Designing engaging and intuitive user interfaces.",
                    icon: faPalette,
                },
            ],
        };
    },
};
</script>

<style scoped></style>
