<template>
    <div>
        <button class="hamburger" v-on:click="showMenu()"><i class="fas fa-bars"></i></button>
        <nav id="ml-menu" class="menu" v-bind:class="{ 'menu--open': menuOpen }">
            <button class="action action--close" v-on:click="hideMenu()" aria-label="Close Menu"><i class="fas fa-times"></i></button>
            <div class="menu__wrap">
                <ul class="menu-list" v-bind:class="{ inactive: bookSelected }">
                    <li v-for="(book, key, index) in chapters" class="menu__item" :slug="book.slug" :key="key">
                        <a v-if="book.count > 1" class="menu__link" v-on:click="setSubmenu(key, $event)" href="">{{book.name}} <i class="fas fa-chevron-right"></i></a>
                        <a v-else class="menu__link" :href="'/' + book.slug + '/1'">{{book.name}} <i class="fas fa-chevron-right"></i></a>
                    </li>
                </ul>
                <!-- Chapter Submenus -->
                <ul v-for="(chapter, key) in chapters" class="menu__level" :key="key" v-bind:class="{ active: submenu == key  }">
                    <div v-bind:class="{ 'number-chapters': hasNumber(chapter.chapters[0].display_name) }">
                        <li class="back__item"><a class="back__link" href="#" v-on:click="goBack()"> <i class="fas fa-chevron-left back"></i>&nbsp;Libri</a>
                        <li v-for="name, key in chapter.chapters" class="menu__item">
                            <a v-if="!hasNumber(name.display_name)" class="menu__link" :href="'/' + chapter.slug + '/' + name.slug">{{ name.display_name }}</a>
                            <a v-else class="menu__link" :href="'/' + chapter.slug + '/' + (key + 1)">{{ (key + 1) }}</a>
                        </li>
                    </div>
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                chapters: '',
                submenu: '-1',
                bookSelected: false,
                menuOpen: false,
            }
        },
        mounted() {
            axios.get('/api/nav-chapters')
                .then(response => {
                    this.chapters = response.data;
                });
        },
        methods: {
            setSubmenu: function (index, event) {
                event.preventDefault();
                this.submenu = index; 
                this.bookSelected = true;
            },
            goBack: function () {
                this.submenu = '-1';
                this.bookSelected = false;
            },
            hideMenu: function() {
                this.menuOpen = false;
                this.goBack();
            },
            showMenu: function() {
                this.menuOpen = true;
            },
            hasNumber: function(string) {
                return /\d/.test(string);
            }
        }
    }
</script>
