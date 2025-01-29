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
    methods: {
        // Funzione per generare il link per la pagina show del profumo
        getPerfumeShowLink(id) {
            return `/admin/perfumes/${id}`;
        }
    }
};
</script>

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
                    <th>Dettagli</th>
                    <!-- <th>Azioni</th> -->
                </tr>
            </thead>
            <tbody>
                <tr v-for="perfume in perfumes" :key="perfume.id">
                    <td><img :src="perfume.image" alt=""></td>
                    <td>{{ perfume.name }}</td>
                    <td>{{ perfume.brand }}</td>
                    <td>{{ perfume.price }} €</td>
                    <td>{{ perfume.description }}</td>
                    <td class="text-center align-middle">
                        <div class="d-flex justify-content-center align-items-center gap-2">
                            <a :href="getPerfumeShowLink(perfume.id)" class="btn btn-outline-info">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </div>
                    </td>

                    <!-- <td>
                        <a href="" class="btn btn-outline-warning me-2">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        <button class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </td> -->
                </tr>
            </tbody>
        </table>
    </div>
</template>

<style scoped lang="scss">
td {
    padding-right: 10px;
    img {
        width: 50px;
        aspect-ratio: 1;
    }
}
</style>