<script>
import axios from 'axios';

export default {
    data() {
        return {
            perfumes: [],
            currentPage: 1,
            totalPages: 1,
        };
    },
    async mounted() {
        await this.fetchPerfumes();
    },
    methods: {
        async fetchPerfumes(page = 1) {
            try {
                const response = await axios.get(`/api/perfumes?page=${page}`);
                this.perfumes = response.data.data;
                this.totalPages = response.data.last_page;
                this.currentPage = response.data.current_page;
            } catch (error) {
                console.error("Errore nel caricamento dei profumi:", error);
            }
        },
        goToPage(page) {
            if (page !== this.currentPage) {
                this.fetchPerfumes(page);
            }
        },
        getImagePath(image) {
            if (image.startsWith('http') || image.startsWith('//')) {
                return image;
            }

            return '/storage/' + image;
        }

    }
};
</script>

<template>
    <div class="p-5 bg_main">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <div class="col" v-for="perfume in perfumes" :key="perfume.id">
                <div class="card">
                    <img :src="getImagePath(perfume.image)" alt="Perfume image" class="card-img-top" />
                    <div class="card-body">
                        <h5 class="card-title">{{ perfume.name }}</h5>
                        <p class="card-text">By {{ perfume.brand }}</p>
                        <p class="card-text fst-italic">{{ perfume.description }}</p>
                        <p class="card-text btn price_btn">{{ perfume.price }} €</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pagination">
            <button @click="goToPage(currentPage - 1)" :disabled="currentPage === 1">« Prev</button>

            <button
                v-for="page in totalPages"
                :key="page"
                @click="goToPage(page)"
                :class="{ active: currentPage === page }"
            >
                {{ page }}
            </button>

            <button @click="goToPage(currentPage + 1)" :disabled="currentPage === totalPages">Next »</button>
        </div>
    </div>

    <footer class="footer">
        <div class="container text-center">
            <p>&copy; 2025 Perfume Shop. All rights reserved.</p>
            <p>Follow us on:
                <a href="#" class="social-link">Facebook</a> |
                <a href="#" class="social-link">Instagram</a> |
                <a href="#" class="social-link">Twitter</a>
            </p>
        </div>
    </footer>
</template>

<style scoped lang="scss">

.bg_main {
    background: linear-gradient(to bottom, #f0e6f6, #d8a7d7);
    color: #333;
    font-family: 'Arial', sans-serif;
}


.price_btn {
    background: linear-gradient(to bottom, #f0e6f6, #d8a7d7);
    color: #333;
    font-family: 'Arial', sans-serif;
}

.card {
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
}

.card-img-top {
    width: 100%;
    aspect-ratio: 1;
}

.card-body {
    flex-grow: 1; /* Fa sì che la body occupi tutto lo spazio disponibile */
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Distribuisce gli elementi in modo uniforme */
}

.card-title {
    margin-bottom: 10px; /* Aggiunge un po' di spazio tra il titolo e il testo */
}

.card-text {
    margin-bottom: 10px; /* Aggiunge un po' di spazio tra il testo e il prezzo */
}

.footer {
    background: #333;
    color: #fff;
    padding: 50px 0;
    text-align: center;
}

.footer .social-link {
    color: #d8a7d7;
    text-decoration: none;
    margin: 0 5px;
}

.footer .social-link:hover {
    text-decoration: underline;
}

.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.pagination button {
    background: #d8a7d7;
    border: none;
    color: #fff;
    padding: 10px 15px;
    margin: 5px;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s, transform 0.2s;
}

.pagination button:hover {
    background: #b86bbd;
    transform: scale(1.05);
}

.pagination button:disabled {
    background: #ccc;
    cursor: not-allowed;
}

.pagination .active {
    background: #7a3e75;
    font-weight: bold;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}
</style>
