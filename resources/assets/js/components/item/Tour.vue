<template lang="html">
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 feature-box">
        <div class="feature-box-padding">
            <div class="feature-box-images">
                <img v-bind:src="tour.image">
            </div>
            <h3 class="feature-box-title">
                {{ tour.name }}
            </h3>
            <div class="feature-box-content">
                <ul>
                    <li v-for="inc in split(tour.include)">{{inc}}</li>
                </ul>
            </div>
            <div class="feature-box-price">
                <span class="price">
                    From ${{ minPrice(tour.price) }}
                </span>
                <a v-on:click="$emit('bookNowBtnClicked')" href="#" class="btn btn-price" data-toggle="modal" data-target="#product_view">
                    BOOK NOW
                </a>
                <div class="clr"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['tour'],
    methods : {

    }
}
</script>

<style lang="css">
</style>
