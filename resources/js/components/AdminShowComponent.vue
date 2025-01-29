<template>
    <div class="product-details">
        <h1>Dettagli del Profumo</h1>
        <div v-if="product">
            <div class="product-info">
                <img :src="product.image" alt="Immagine del profumo" class="product-image">
                <h2>{{ product.name }}</h2>
                <p><strong>Marca:</strong> {{ product.brand }}</p>
                <p><strong>Prezzo:</strong> {{ product.price }} €</p>
                <p><strong>Descrizione:</strong> {{ product.description }}</p>
            </div>
            <a :href="backLink" class="btn btn-outline-secondary">Torna indietro</a>
        </div>
        <div v-else>
            <p>Caricamento in corso...</p>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            product: null, // Per contenere i dettagli del prodotto
        };
    },
    mounted() {
        // Ottieni l'ID dal parametro dell'URL
        const perfumeId = this.$route.params.id;

        // Recupera i dettagli del prodotto dalla tua API
        axios.get(`/api/perfumes/${perfumeId}`)
            .then(response => {
                this.product = response.data;
            })
            .catch(error => {
                console.error("Errore nel recupero del prodotto:", error);
            });
    },
    computed: {
        // Link per tornare indietro alla lista dei prodotti
        backLink() {
            return '/admin/perfumes';
        }
    }
};
</script>

<style scoped>
.product-details {
    padding: 20px;
}

.product-info {
    display: flex;
    align-items: center;
    gap: 20px;
}

.product-image {
    width: 200px;
    height: 200px;
    object-fit: cover;
}

h2 {
    font-size: 2em;
}

p {
    font-size: 1.2em;
    margin: 5px 0;
}

.btn {
    margin-top: 20px;
}
</style>
