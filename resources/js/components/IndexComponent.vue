<template>
    <div>
        <h1>Lista di Profumi</h1>
        <table>
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Prezzo</th>
                    <th>Descrizione</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="perfume in perfumes" :key="perfume.id">
                    <td><img :src="perfume.image" alt=""></td>
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
        const response = await axios.get('/api/perfumes');
        this.perfumes = response.data;
    },
};
</script>
