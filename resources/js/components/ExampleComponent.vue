<template>
    <div>
        <h1>Lista di Profumi</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Prezzo</th>
                    <th>Descrizione</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="perfume in perfumes" :key="perfume.id">
                    <td>{{ perfume.name }}</td>
                    <td>{{ perfume.brand }}</td>
                    <td>{{ perfume.price }} €</td>
                    <td>{{ perfume.description }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            perfumes: [],
        };
    },
    async mounted() {
        const response = await axios.get('/api/perfumes'); // Chiamata API
        this.perfumes = response.data; // Assegna i dati alla variabile
    },
};
</script>
