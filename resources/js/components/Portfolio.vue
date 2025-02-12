<template>
    <section
        class="py-16 bg-gradient-to-r from-gray-200 via-gray-100 to-gray-200"
        id="portfolio"
    >
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-6">
                My Portfolio
            </h2>
            <p class="text-gray-600 mb-8">
                Check out some of my recent projects.
            </p>

            <div class="relative">
                <button
                    @click="scrollLeft"
                    class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-black text-white p-3 rounded-full shadow-lg transition-transform hover:bg-white hover:text-black hover:scale-110 flex items-center justify-center w-12 h-12 z-20"
                >
                    &#x276E;
                </button>
                <div
                    ref="scrollContainer"
                    class="overflow-x-auto whitespace-nowrap scrollbar-hide flex space-x-6 px-10 relative bg-transparent"
                >
                    <div
                        v-for="project in projects"
                        :key="project.id"
                        class="w-80 bg-white p-8 rounded-lg shadow-lg flex-shrink-0 mx-auto text-center flex flex-col items-center justify-center transform transition-transform hover:-translate-y-2"
                    >
                        <img
                            :src="project.image"
                            :alt="project.title"
                            class="rounded-md w-full h-48 object-cover mb-4"
                        />
                        <h3 class="text-2xl font-semibold text-gray-800">
                            {{ project.title }}
                        </h3>
                        <p
                            class="text-gray-600 mt-2 break-words text-center w-full overflow-hidden text-ellipsis"
                        >
                            {{ project.description }}
                        </p>
                        <div class="mt-4 flex flex-wrap justify-center gap-2">
                            <span
                                v-for="tag in project.tags"
                                :key="tag"
                                class="text-sm bg-indigo-100 text-indigo-600 px-2 py-1 rounded-full"
                                >{{ tag }}</span
                            >
                        </div>
                        <div class="mt-4 flex flex-wrap justify-center gap-2">
                            <span
                                v-for="tech in project.techStack"
                                :key="tech"
                                class="text-sm bg-gray-200 text-gray-800 px-2 py-1 rounded"
                                >{{ tech }}</span
                            >
                        </div>
                        <a
                            :href="project.link"
                            target="_blank"
                            class="mt-4 inline-block bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition"
                        >
                            View Project
                        </a>
                    </div>
                </div>
                <button
                    @click="scrollRight"
                    class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-black text-white p-3 rounded-full shadow-lg transition-transform hover:bg-white hover:text-black hover:scale-110 flex items-center justify-center w-12 h-12 z-20"
                >
                    &#x276F;
                </button>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "PortfolioSection",
    data() {
        return {
            projects: [
                {
                    id: 1,
                    title: "E-Commerce Platform",
                    description:
                        "A full-stack e-commerce solution with payment integration.",
                    image: "./images/ecommerce.jpg",
                    link: "#",
                    techStack: ["Vue.js", "Laravel", "Stripe API"],
                    tags: ["Web", "E-Commerce"],
                },
                {
                    id: 2,
                    title: "Mobile App UI",
                    description:
                        "A sleek mobile app design with an intuitive user experience.",
                    image: "./images/mobile-app.jpg",
                    link: "#",
                    techStack: ["Flutter", "Firebase"],
                    tags: ["Mobile", "UI/UX"],
                },
                {
                    id: 3,
                    title: "Portfolio Website",
                    description:
                        "A personal portfolio showcasing projects and skills.",
                    image: "./images/portfolio.jpg",
                    link: "#",
                    techStack: ["Next.js", "Tailwind CSS"],
                    tags: ["Web", "Portfolio"],
                },
                {
                    id: 4,
                    title: "AI Chatbot",
                    description:
                        "A smart AI-powered chatbot for automated customer support.",
                    image: "./images/chatbot.jpg",
                    link: "#",
                    techStack: ["Python", "TensorFlow", "Node.js"],
                    tags: ["AI", "Chatbot", "Automation"],
                },
                {
                    id: 5,
                    title: "Task Management App",
                    description:
                        "A web application for managing tasks and projects efficiently.",
                    image: "./images/task-app.jpg",
                    link: "#",
                    techStack: ["React", "Redux", "Firebase"],
                    tags: ["Web", "Productivity"],
                },
            ],
        };
    },
    methods: {
        scrollLeft() {
            this.$refs.scrollContainer.scrollBy({
                left: -300,
                behavior: "smooth",
            });
        },
        scrollRight() {
            this.$refs.scrollContainer.scrollBy({
                left: 300,
                behavior: "smooth",
            });
        },
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
