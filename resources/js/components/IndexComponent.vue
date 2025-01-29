<script>
import axios from 'axios';

export default {
    data() {
        return {
            perfumes: [],
        };
    },
    async mounted() {
        const response = await axios.get('/api/perfumes');
        this.perfumes = response.data;
    },
};
</script>

<template>
    <div class="p-5 bg_main">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <div class="col" v-for="perfume in perfumes" :key="perfume.id">
                <div class="card">
                    <img :src="perfume.image" alt="Perfume image" class="card-img-top" />
                    <div class="card-body">
                        <h5 class="card-title">{{ perfume.name }}</h5>
                        <p class="card-text">{{ perfume.brand }}</p>
                        <p class="card-text fst-italic">{{ perfume.description }}</p>
                        <p class="card-text btn price_btn">{{ perfume.price }} €</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped lang="scss">
/* Nessun bisogno di altre modifiche per Flexbox, Bootstrap si occuperà della responsività */

.bg_main {
    background: linear-gradient(to bottom, #f0e6f6, #d8a7d7);
    color: #333; /* Colore del testo scuro per contrasto */
    font-family: 'Arial', sans-serif;
}


.price_btn {
    background: linear-gradient(to bottom, #f0e6f6, #d8a7d7);
    color: #333; /* Colore del testo scuro per contrasto */
    font-family: 'Arial', sans-serif;
}


/* Puoi personalizzare ulteriormente i margini e i padding se desideri */
.card {
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
}

.card-img-top {
    height: 300px;
    aspect-ratio: 1;
}

/* Puoi personalizzare ulteriormente il layout in base alla tua esigenza */
</style>
