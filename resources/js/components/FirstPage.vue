<template>
    <div id="first-page">
        <div class="row">
            {{ data }}
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            data: null
        };
    },
    mounted() {
        this.$echo.channel("FirstPageChannel").listen("FirstPage", data => {
            console.log(data.message);
        });
    }
};
</script>

<style></style>
