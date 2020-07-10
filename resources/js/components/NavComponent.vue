<template>
    <nav id="ml-menu" class="menu hidden">
            <button class="action action--close" aria-label="Close Menu"><i class="fas fa-times"></i></button>
            <div class="menu__wrap">
                <ul class="menu-list" v-bind:class="{ inactive: bookSelected }">
                    <li v-for="(book, key, index) in chapters" class="menu__item" :slug="book.slug" :key="key">
                        <a class="menu__link" v-on:click="setSubmenu(key)" href="#">{{book.name}} <i class="fas fa-chevron-right"></i></a>
                    </li>
                </ul>
                <!-- Chapter Submenus -->
                <ul v-for="(book, key) in chapters" class="menu__level" :key="key" v-bind:class="{ active: submenu == key }">
                    <li class="back__item"><a class="menu__link" href="#" v-on:click="goBack()"> <i class="fas fa-chevron-left"></i> Back</a>
                    <li v-for="n in book.count" class="menu__item"><a class="menu__link" :href="'/' + book.slug + '/' + n">{{ n }}</a></li>
                </ul>
            </div>
        </nav>
</template>

<script>
    export default {
        data() {
            return {
                chapters: '',
                submenu: '-1',
                bookSelected: false,
            }
        },
        mounted() {
            console.log('Component mounted.')
            axios.get('/api/nav-chapters')
                .then(response => {
                    this.chapters = response.data;
                });
        },
        methods: {
            setSubmenu: function (index, chcount) {
                console.log( "index: " + index );
                this.submenu = index; 
                this.bookSelected = true;
                console.log("Chapters index count: " + this.chapters[index].count);
                console.log(this.chapters);
            },
            goBack: function () {
                this.submenu = '-1';
                this.bookSelected = false;
            }
        }
    }
</script>
