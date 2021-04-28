<template>
    <div id="first-page">
        <div class="row">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="(item, index) in data.data.data.data"
                        :key="item.id"
                    >
                        <td>{{ index + 1 }}</td>
                        <td>{{ item.name }}</td>
                        <td>{{ item.address }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            data: tablePengguna()
        };
    },
    methods: {
        tablePengguna() {
            Echo.channel("EveryoneChannel").listen(".EveryoneMessage", e => {
                console.log(e);
            });
        }
    }
};
</script>

<style></style>
