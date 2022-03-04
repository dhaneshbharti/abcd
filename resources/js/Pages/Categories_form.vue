<template>
    <div>   Kindly fill category name below
        <div class="center">
            <form class="item-center">
                <div>
                    <label>
                        name:
                    </label>
                    <input type="text"/><br>
                    <div class="bg-blue-500">
                    <button @click.prevent="submit" type="submit">submit </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Categories_form.vue"
    }
</script>

<style scoped>

</style>