<template>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        <h1 class="text-center">{{ title }}</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-hover table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Ikan</th>
                                    <th>Lokasi Ikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="ikan in ikanikan" :key="ikan.id">
                                    <td>{{ ikan.id }}</td>
                                    <td>{{ ikan.nama }}</td>
                                    <td>{{ ikan.lokasi }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                title: 'Berikut nama-nama ikan:',
                ikanikan: [{
                        id: 1,
                        nama: 'ikan mas',
                        lokasi: 'aquarium'
                    },
                    {
                        id: 2,
                        nama: 'ikan mujair',
                        lokasi: 'empang'
                    },
                    {
                        id: 3,
                        nama: 'ikan arwana',
                        lokasi: 'aquarium'
                    }
                ]
            }
        }
    }

</script>
